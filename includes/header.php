<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Sistema - <?php echo $title?></title>
</head>

<body>
  
    <main >
          <!-- As a link -->
<nav class="navbar navbar-dark bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="leads.php">Ver Leads</a>
        <a class="navbar-brand" href="index.php">Formulario</a>


        <div class="nav">

        <?php
            if(!isset($_SESSION['username'])){

            
        ?>
                <a class="nav-item nav-link" href="login.php">Login</a>

        <?php } else{?>
     

            <a class="navbar-brand" href="#"><span>Bienvenido <?php echo $_SESSION['username'] ?>!</span></a>
            <a class="nav-item nav-link " href="logout.php">Logout</a>
           
        <?php } ?>
        </div>
        <!-- <a class="nav-item nav-link" href="logout.php">Logout</a> -->

    </div>
</nav>
