<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        Authorisation.php
 * Location:
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

namespace Framework;

class Authorisation
{
    /**
     * Check if current logged-in user owns a resource
     *
     * @param int $resourceId
     * @return bool
     */
    public static function isOwner(int $resourceId): bool
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int)$sessionUser['id'];
            return $sessionUserId === $resourceId;
        }

        return false;
    }


    /**
     * Check if current logged-in is the user being requested
     *
     * @param int $resourceId
     * @return bool
     */
    public static function isUser(int $resourceId): bool
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int)$sessionUser['id'];
            return $sessionUserId === $resourceId;
        }

        return false;
    }
}