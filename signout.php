<head>
<title>Sign Out</title>

<link rel="stylesheet" href="stylesheet.css">

</head>
<style>
/*Make it look pretty*/

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
	text-align: center;
}
table{
        width: 100%;
}
</style>

<body style="background-color: pink ;">
    
    <!--The form should go here-->

    <form method="GET" action="signout.php">
     Student ID:
     <br>
     <input type= "text" name= "studentid" id = "mytext">
     <br>
     <input type="radio" name="destination" value="bathroom"> Bathroom<br>
     <input type="radio" name="destination" value="water"> Water<br>
     <input type="radio" name="destination" value="nurse"> Nurse<br>
     <input type="radio" name="destination" value="attendance"> Attendance<br>
     <input type="radio" name="destination" value="source"> Source <br>
     <input type="radio" name="destination" value="guidance"> Guidance <br>
     <input type="radio" name="destination" value="vpo"> VPO<br>
     <input type="radio" name="destination" value="other">Other<br>
     <input id="submitbutton" type="submit" value="submit">
    
    </form>


    <?php
        $studentid = $_GET['studentid'];
        $location = $_GET['destination'];
       // $timeout = $_GET['timeout'];
        //$timein = $_GET[null];

    $servername = "localhost";
    $username = "sign_out";
    $password = "password";
    $dbname = "sign_out";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection: No need for else.  It will quit if the connection thorws an error.
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql= "INSERT INTO sign_out(studentid,location, timeout, timein)
    VALUES ('$studentid','$location',NOW(), NULL)";

  /*  if ($conn->query($sql)) {
      echo "<p> Recorded Successfully</p>">;
    }


   /* if(){ //INPUT
      
        
    }else if(){ //UPDATE
       
    }

    //OUTPUT
    */
    $conn->close();
    ?>
 

    <!--Now Create the Teacher Page!-->


</body>
</html>