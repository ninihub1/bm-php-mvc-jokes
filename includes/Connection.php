<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        Connection.php
 * Location:        session-05
 * Project:         bm-php-mvc-jokes
 * Date Created:    13/08/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

require_once __DIR__.'/../config.php';

class Connection
{
    public static function make($host, $db, $username, $password)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            return new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}

return Connection::make($dbHost, $dbName, $dbUser, $dbPass);

