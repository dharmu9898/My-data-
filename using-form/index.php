<?php
$db_host = "localhost";
$db_user = "root" ;
$db_password = "";
$db_name = "school" ;

// Create Connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check Connection
if (!$conn){
	die ("Connection Failed");
}

echo"Connection succefully <hr>";

if(isset($_REQUEST['submit'])){
	// checking for empty fields
	 if(($_REQUEST['name'] == "") || ($_REQUEST['roll'] == "") || ($_REQUEST['address'] == "")) {
		echo "<small>Fill All fields..</small><hr>";
}
else {
		$name = $_REQUEST ['name'];
		$roll = $_REQUEST ['roll'];
		$address = $_REQUEST ['address'];
		$sql ="INSERT INTO dharmu (name, roll, address) VALUE('$name', '$roll', '$address')";
		if(mysqli_query($conn, $sql)){
			echo "New Record Insterted Successfully";
		}
		else{
			echo "Unable to Insert Data";
		}
	}
}
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Devops School</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
    	<div class="col-sm-4">
    		<form action="" method="POST">
    			<div class="from-group">
    				<label for="name"> Name </label>
    				<input type="text" class="from-control" name="name" id ="name">
    			</div><br>
    			<div class="from-group">
    				<label for="roll"> Roll </label>
    				<input type="text" class="from-control" name="roll" id ="roll">
    			</div><br>
    			<div class="from-group">
    				<label for="address"> Address </label>
    				<input type="text" class="from-control" name="address" id ="address">
    			</div>
    			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
    		</form>
    		</div>
            <div class="col-sm-6 offset-sm-2">
                <?php
                    $sql ="SELECT * FORM dharmu";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table">';
                        echo"<thead>";
                        echo"<tr>";
                        echo"<th>ID</th>";
                        echo"<th>Name</th>";
                        echo"<th>Roll</th>";
                        echo"<th>Address</th>";
                     echo"<tr>"; 
                      echo"</thead>";
                      echo"</tbody>";
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo"<td>" . $row {"id"} . "</td>";
                    echo"<td>" . $row {"name"} . "</td>";
                    echo"<td>" . $row {"roll"} . "</td>";
                    echo"<td>" . $row {"address"} . "</td>";
                    echo"</tr>";

                    }
                } else {
                 echo "0 Results";
            }
?>
            </div>
    	</div>
    </div>	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>