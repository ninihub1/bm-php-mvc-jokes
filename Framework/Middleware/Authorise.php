<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        Authorise.php
 * Location:
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

namespace Framework\Middleware;

use Framework\Session;

class Authorise
{
    /**
     * Handle the user's request
     *
     * @param string $role
     * @return bool
     */
    public function handle($role)
    {
        if ($role === 'guest' && $this->isAuthenticated()) {
            return redirect('/');
        }

        if ($role === 'auth' && !$this->isAuthenticated()) {
            return redirect('/auth/login');
        }
    }

    /**
     * Check if user is authenticated
     *
     * @return bool
     */
    public function isAuthenticated()
    {
        return Session::has('user');
    }
}