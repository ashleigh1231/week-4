<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- this is the index.php in htdocs -->
</head>
<body>

    <h1>Schedule Tracker</h1>
    <ul>
        <li><a href="public/create.php">Add a new Event</a></li>
        <li><a href="public/read.php">Find an Event</a></li>
        <li><a href="public/update.php">Update an Event</a></li>
        <li><a href="public/delete.php">Delete an Event</a></li>
    </ul>

  

<?php 
include './public/index.php';


?>