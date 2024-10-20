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
 * Date Created:    DD/MM/YYYY
 *
 * Author:          YOUR NAME <STUDENT_ID@tafe.wa.edu.au>
 *
 */

namespace App\Controllers;


use Framework\Database;

class StaticPageController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /*
     * Show the home page
     *
     * @return void
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

    /*
     * Show the about static page
     *
     * @return void
     */
    public function about()
    {
        loadView('about');
    }
}