<?php
    $host = 'localhost';
    $db = 'leads';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';


    $dsn = "mysql:host=$host;
            dbname=$db;
            charset=$charset";


            try {
                $pdo = new PDO($dsn, $user,$pass);
                $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'Success';
            } catch (PDOException $e) {
                throw new PDOException($e ->getMessage());
                // echo '<h1 class="text-danger text-center">Database connection failed</h1>';
            }

            require_once 'db/leadController.php';
            $leadController = new leadController($pdo);
?>