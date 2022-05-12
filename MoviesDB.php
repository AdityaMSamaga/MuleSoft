<?php 
session_start() ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MuleSoftDB";

// Create connection
$conn = new mysqli($servername, $username,$password);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE MuleSoftDB";
if ($conn->query($sql) === TRUE) {
 echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
$conn = new mysqli($servername, $username,$password,$dbname);

// Create database
//name, actor, actress, director, year of release
$sql = "CREATE TABLE MOVIES1(movie_name varchar(20), actor varchar(20), actress varchar(20), year_of_release date, director varchar(20))";
if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}

$sql = "INSERT INTO MOVIES1 VALUES('RRR', 'NTR', 'Alia Bhatt', '2022-04-03', 'Rajamouli')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES1 VALUES('KGF', 'Yash', 'Srinidhi', '2022-04-03','Prashanth Neel')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES1 VALUES('Spider man 1', 'Tom', 'tommy', '2015-04-03','sam raimi')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES1 VALUES('Pushpa', 'Allu Arjun', 'Rashmika', '2021-04-03','Sukumar')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES1 VALUES('Hulk', 'Mark Ruffalo', 'annie johanson', '2018-04-03','rohit shetty')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}
$sql = "INSERT INTO MOVIES1 values('Peaky Blinders', 'Cilian Murphy', 'Angeleina jolie', '2014-04-03','rishab shetty')";
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
}

$sql = "SELECT * FROM MOVIES1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Movie Name: " . $row["movie_name"]. " ------ " ." Actor Name: " . $row["actor"]. " ------ " ." Actress Name: ". $row["actress"]." ------ "." Year of release: ".$row["year_of_release"]." ------ "." Director Name: ". $row["director"]."<br>";
  }
} else {
  echo "0 results";
}


$conn->close();
?>


