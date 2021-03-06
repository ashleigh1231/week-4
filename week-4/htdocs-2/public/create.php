<?php 
// this code will only execute after the submit button is clicked
if (isset($_POST['submit'])) {
	
    // include the config file that we created before
    require "../config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Get the contents of the form and store it in an array
        $new_work = array( 
            "Event" => $_POST['Event'], 
            "Date" => $_POST['Date'],
            "Time" => $_POST['Time'],
            "Details" => $_POST['Details'], 
        );
        
        // THIRD: Turn the array into a SQL statement
       $sql = "INSERT INTO works (Event, Date, Time, Details) VALUES (:Event, :Date, :Time, :Details)";        

        
        // FOURTH: Now write the SQL to the database
        $statement = $connection->prepare($sql);
        $statement->execute($new_work);
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
}
?>


<?php include "templates/header.php"; ?>

<h2>Add an Event</h2>

<?php if (isset($_POST['submit']) && $statement) { ?>
<p>Event Successfully Added!</p>
<?php } ?>

<!--form to collect data for each artwork-->

<form method="post">
    <label for="Event">Event</label>
    <input type="text" name="Event" id="Event">

    <label for="worktitle">Date</label>
    <input type="text" name="Date" id="worktitle">

    <label for="workdate">Time</label>
    <input type="text" name="Time" id="workdate">

    <label for="worktype">Details</label>
    <input type="text" name="Details" id="worktype">

    <input type="submit" name="submit" value="Submit">

</form>

<?php include "templates/footer.php"; ?>