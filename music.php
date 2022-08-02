<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <title>Music Charts Website</title>
</head>
<body>
    <header>
        <figure>
            <a href="doc.php">
            <img src="images/headerlogo.png" width="50" alt="Music Charts Logo.">
            </a>
        </figure>
        <h1>ANDREI'S COMP SCI PROJECT</h1>
        <img src="images/sun.png" id="dark">
    </header>
    <nav>
        <label for="navCheck"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="navCheck">         
        <div id="menuItems">
            <p><a href="index.php">Home</a></p>
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
            <p><a href="addArtist.php">Add Artists</a></p>
            <p><a href="info.php">How To</a></p>
        </div>
    </nav>
    <div class="main" role="main">
        <!-- Sort Form -->
        <form id="sortForm" action="music.php" method="post">
            <select name="sort" id="sort">
                <option value="Artist_Name">Artist</option>
                <option value="Genre">Genre</option>
                <option value="Rating">Rating</option>
                <option value="Title" selected>Title</option>
            </select>
            <input type="submit" value="Sort" class="button">
        </form>

        <h1 class="musicheader">Music List</h1>

            <!-- php to display songs -->
            <?php
            require_once 'connect.php';

            // Create the database query
            $sql = "SELECT * FROM song INNER JOIN artist ON artist.ID = song.ArtistID";

            // Check if there is a sort order requested
            if(isset($_REQUEST['sort'])){
                $sql = $sql . " ORDER BY " . $_REQUEST['sort'];
            } 
            else {
                $sql = $sql . " ORDER BY Title";
            }

            $result = $conn->query($sql);

            echo '<section id="musicList">';

            if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            // Do stuff
                    echo '<article>';

                       echo '<h2>' . $row["Title"] . '</h2>';
                        echo '<figure class="centre"><img src="' . $row["Image"] . '" height="150" width="150"></figure>';
                        echo '<p><span class="title">Artist: </span><span class="echotext">' . $row["Artist_Name"] . '</span></p>';
                        echo '<p><span class="title">Genre: </span><span class="echotext">' . $row["Genre"] . '</span></p>';
                        echo '<p><span class="title">Rating: </span><span class="echotext">' . $row["Rating"] . '</span></p>';
                        echo '<p><span class="title">Year Formed: </span><span class="echotext">' . $row["yearFormed"] . '</span></p>';
                        echo '<p><span class="title">Origin: </span><span class="echotext">' . $row["origin_country"] . '</span></p>';
                        echo '<p><span class="title">Price: </span><span>$' . number_format((float)$row["price"], 2, '.', '') . '</span></p>';
                        echo '<p><span class="title">Link: </span><span class="echotext">'. $row["link"] . '</span></p>';
                    
                    echo '</article>';
                     }
            }
            echo '</section>';
            ?>

            
    </div>
    <footer>
        <p class="centre">&copy; 2022 Andrei Vergara.</p> 
    </footer>

    <script>
        var dark = document.getElementById("dark");
        dark.onclick = function(){
            document.body.classList.toggle("light-theme");
            if(document.body.classList.contains("light-theme")){
                dark.src = "images/moon.png";
            } else{
                dark.src = "images/sun.png";
            }
        }
    </script>
</body>
</html>