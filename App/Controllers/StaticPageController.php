<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        StaticPageController.php
 * Location:
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

namespace App\Controllers;


use Framework\Database;

class StaticPageController
{
    /**
     * @var Database
     */
    protected $db;

    /**
     * StaticPageController Constructor
     *
     * Instantiate the database connection for use in this class
     * storing the connection in the protected <code>$db</code>
     * property.
     *
     * @throws \Exception
     */
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /**
     * Show the home page.
     *
     * @return void
     * @throws \Exception
     */
    public function index()
    {
        $jokes = $this->db->query('SELECT * FROM jokes')->fetchAll();

        $jokeCount = $this->db->query('SELECT count(id) as total FROM jokes')->fetch();

        $categoryCount = $this->db->query('SELECT count(id) as total FROM categories ')->fetch();

        $userCount = $this->db->query('SELECT count(id) as total FROM users')->fetch();

        loadView('home', [
            'jokes' => $jokes,
            'jokeCount' => $jokeCount,
            'categoryCount' => $categoryCount,
            'userCount' => $userCount
        ]);
    }

    /**
     * Show the about static page
     *
     * @return void
     */
    public function about()
    {
        loadView('about');
    }
}