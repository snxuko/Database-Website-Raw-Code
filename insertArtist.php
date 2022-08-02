<?php

    require_once 'connect.php';

    $artistName = $_REQUEST['artistText'];
    $origin = $_REQUEST['originText'];

    $sql = "INSERT INTO artist (Artist_Name, origin_country) VALUES ('$artistName', '$origin')";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=addArtist.php");

?>