
<?php
    // $servername = "lcalhost";
    // $username = "webadmin";
    // $password = "1234";

    // function connectDB($server, $user, $passwd){
    //     $conn = new mysqli($server, $user, $passwd);
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //     }
    //     echo "connected";
    // }

    // connectDB($servername,$username,$password);
    
    $servername = "localhost";
    $username = "webadmin";
    $password = "1234";
    $mydb = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$mydb);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function createDB($sql){
        if($conn->query)
        
    }

    
?>
