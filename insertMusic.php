<?php

    require_once 'connect.php';

    $title = $_REQUEST['titleText'];
    $image = $_REQUEST['imageText'];
    $rating = $_REQUEST['rating'];
    $artist = $_REQUEST['artistText'];
    $genre = $_REQUEST['genreText'];
    $year = $_REQUEST['yearText'];
    //$origin = $_REQUEST['originText'];
    $price = $_REQUEST['priceText'];
    $link = $_REQUEST['websiteText'];

    $sql = "INSERT INTO song (Title, Image, Rating, ArtistID, Genre, Price, yearFormed, link) VALUES ('$title', '$image', '$rating', '$artist', '$genre', '$price', '$year', '$link')";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=addMusic.php");

?>