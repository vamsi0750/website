<?php

$firstname = filter_input(INPUT_POST,'firstname');

$email=filter_input(INPUT_POST,'email');

if(!empty($firstname)){
    if(!empty($email)){
        $host ="localhost:3399";
        $user="root";
        $pwd="";
        $dbname="test";
        
        $conn = new mysqli($host,$user,$pwd,$dbname);
        if(mysqli_connect_error()){
            die('connect Error('. mysqli_connect().')'. mysqli_connect_error());
        }
        else{
            $sql ="INSERT INTO vamsi (firstname,email)
            values('$firstname','$email')";
            if($conn->query($sql)){
                echo "new record is inserted sucessfully";
            }
            else{
                echo "Error:".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "password shouid not be empty";
        die();
    }
}
else{
    echo "user name shoiud not  be  empty";
    die();
}

?>
