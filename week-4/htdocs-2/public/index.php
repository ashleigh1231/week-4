

<?php include "template/header.php"; ?>

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
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Schedule Tracker</h2>
                <div class="form-group-1">
                    <input type="text" name="Event" id="Event" placeholder="Event" required />
                    <input type="text" name="name" id="name" placeholder="Date" required />
                    <input type="Time" name="Time" id="Time" placeholder="Time" required />
                    <input type="Details" name="Details" id="Details" placeholder="Details" required />
                   
            
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Submit" />
                </div>
                    

        

   
<?php include "template/footer.php"; ?>