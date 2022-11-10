<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sylesh";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: <br/>" . $conn->connect_error);
}
echo"<br/>";
echo "AIML TABLE<br/>";
// //sql to create table
 $sql = "CREATE TABLE AIML (
 course_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, course_name VARCHAR(100) NOT NULL,
 Min_pass INT(10) NOT NULL, Mode VARCHAR(50)
 )";
 if ($conn->query($sql) === TRUE) {
 echo "Table Students created successfully<br/>";
 } else {
 echo "Error creating table: <br/>" . $conn->error;
 }  
 $sql = "INSERT INTO AIML (course_ID, course_name, Min_pass, Mode) 
 VALUES ('CSE303', 'Computer Organization & Architecture', 50,'Theory')";
 if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br/>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $sql = "INSERT INTO AIML (course_ID, course_name, Min_pass, Mode)
 VALUES ('CSE304', 'Operating Systems', 50,'Theory')";
 if ($conn->query($sql) === TRUE) {
 echo "New record created successfully<br/>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $sql = "INSERT INTO AIML (course_ID, course_name, Min_pass, Mode)
 VALUES ('CSE305', 'Data Mining', 50,'Theory')";
 if ($conn->query($sql) === TRUE) {
 echo "New record created successfully<br/>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $sql = "INSERT INTO AIML (course_ID, course_name, Min_pass, Mode)
 VALUES ('CSE306', 'Object Oriented Programming', 50,'Both')";
 if ($conn->query($sql) === TRUE) {
 echo "New record created successfully<br/>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $sql = "INSERT INTO AIML (course_ID, course_name, Min_pass, Mode)
 VALUES ('CSE308', 'Database Management Systems', 40,'Practical')";
 if ($conn->query($sql) === TRUE) {
 echo "New record created successfully<br/>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }

$sql = "SELECT * FROM AIML";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["course_ID"]. " Name: " . $row["course_name"]. " " . "Min_pass: " . $row["Min_pass"].  " " . "Mode: " . $row["Mode"]."<br>";
        echo  $row["course_ID"]. "  ". $row["course_name"]. "  " . $row["Min_pass"].  "  " . $row["Mode"]."<br>";
}
} else {
echo "0 results";
}

echo"<br/>";
echo "DSAI TABLE<br/>";
//SQL DSAI
 $sql = "CREATE TABLE DSAI (
     course_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, course_name VARCHAR(100) NOT NULL,
     Min_pass INT(10) NOT NULL, Mode VARCHAR(50)
     )";
     if ($conn->query($sql) === TRUE) {
     echo "Table Students created successfully<br/>";
    } else {
     echo "Error creating table: <br/>" . $conn->error;
     }
     $sql = "INSERT INTO DSAI (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE303', 'Computer Organization & Architecture', 50,'Theory')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
          $sql = "INSERT INTO DSAI (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE304', 'Operating Systems', 50,'Theory')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO DSAI (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE305', 'Data Mining', 50,'Theory')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO DSAI (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE306', 'Object Oriented Programming', 50,'Both')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO DSAI (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE308', 'Database Management Systems', 40,'Practical')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
$sql = "SELECT * FROM DSAI";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["course_ID"]. " Name: " . $row["course_name"]. " " . "Min_pass: " . $row["Min_pass"].  " " . "Mode: " . $row["Mode"]."<br>";
        echo  $row["course_ID"]. "  ". $row["course_name"]. "  " . $row["Min_pass"].  "  " . $row["Mode"]."<br>";
}
} else {
echo "0 results";
}

echo"<br/>";
//SQL BIC
echo "BIC TABLE<br/>";
 $sql = "CREATE TABLE BIC (
     course_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, course_name VARCHAR(100) NOT NULL,
          Min_pass INT(10) NOT NULL, Mode VARCHAR(50)
     )";
          if ($conn->query($sql) === TRUE) {
     echo "Table Students created successfully<br/>";
     } else {
     echo "Error creating table: <br/>" . $conn->error;
     }
     $sql = "INSERT INTO BIC (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE303', 'Computer Organization & Architecture', 50,'Theory')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO BIC (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE304', 'Operating Systems', 50,'Theory')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO BIC (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE305', 'Data Mining', 50,'Theory')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO BIC (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE306', 'Object Oriented Programming', 50,'Both')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $sql = "INSERT INTO BIC (course_ID, course_name, Min_pass, Mode)
     VALUES ('CSE308', 'Database Management Systems', 40,'Practical')";
     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully<br/>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }

$sql = "SELECT * FROM BIC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["course_ID"]. " Name: " . $row["course_name"]. " " . "Min_pass: " . $row["Min_pass"].  " " . "Mode: " . $row["Mode"]."<br>";
        echo  $row["course_ID"]. "  ". $row["course_name"]. "  " . $row["Min_pass"].  "  " . $row["Mode"]."<br>";
}
} else {
echo "0 results";
}

//Update
$sql = "UPDATE AIML SET Min_pass='80' WHERE course_name='Database Management Systems'";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully<br/>";
} else {
echo "Error updating record: " . $conn->error;
}

//Where select 
$sql = "SELECT course_ID, course_name, Min_pass, Mode FROM AIML WHERE course_name='Database Management Systems'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo  $row["course_ID"]. "  ". $row["course_name"]. "  " . $row["Min_pass"].  "  " . $row["Mode"]."<br>";
}
} else {
echo "0 results<br/>";
}

//DELETE
$sql = "DELETE FROM AIML WHERE course_name='Database Management Systems'";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully<br/>";
} else {
echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>