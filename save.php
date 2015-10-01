<html>
	<body>
	 
	 
		<?php
			//phpinfo();
			//Connect to MySQL Database
			
			include 'connection.php';
			try {
			    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				//$query = "SELECT * FROM $database.user WHERE username='$username' AND firstname = '$firstname'";

				//creates the new record
				
				$sql="INSERT INTO $database.user (firstname, lastname, email, username, password)
				VALUES
				('$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[userName]','$_POST[myPwd]')";
				
			    if(mysql_fetch_row($sql)) {
			        echo 'a activity against this project already exists...';
			      }
			      else{
			      	$conn->exec($sql);
				}
						    
			    // use exec() because no results are returned
		
				
				echo "New Record Created Successfully";

		    }
			//catch error if exists
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			
			$conn = null;
			?>
	</body>
</html>