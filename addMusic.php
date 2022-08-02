<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/insertMusic.js"></script> 
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
        <label for= "navCheck"><i class="fas fa-bars"></i></label>
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
        <form class="addMusic" action="insertMusic.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <h2>New Song</h2>
                <label for="titleText">Title</label>
                <input name="titleText" id="titleText" type="text">
                <label>Image</label>
                <input name="imageText" id="imageText" type="text">
                <label>Rating</label>
                
                <fieldset class="rating" role="radiogroup" id="songRating">
                    <input value="1" id="star1" type="radio" name="rating" title="1 Star" aria-label="1 Star" >
                    <label for="star1" title="1 Star" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="2" id="star2" type="radio" name="rating"  title="2 Stars" aria-label="2 Stars">
                    <label for="star2" title="2 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="3" id="star3" type="radio" name="rating" title="3 Stars" aria-label="3 Stars" checked>
                    <label for="star3" title="3 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="4" id="star4" type="radio" name="rating" title="4 Stars" aria-label="4 Stars">
                    <label for="star4" title="4 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="5" id="star5" type="radio" name="rating" title="5 Stars" aria-label="5 Stars">
                    <label for="star5" title="5 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                </fieldset>

                <label>Artist</label>
                <select name='artistText' id="artistText">

                    <!-- php to display artists -->
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT * from artist";

                    $result = $conn->query($sql);

                    if ($result->rowCount() > 0){
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo'<option value=' .$count . '>' . $row["Artist_Name"] . '</option>';
                            $count = $count + 1;
                        }
                    }
                    ?>
                </select>
                <label>Genre</label>
                <input name="genreText" id="genreText" type="text">
                <label>Year</label>
                <input name="yearText" id="yearText" type="number" step="any">
                <label>Price</label>
                <input name="priceText" id="priceText" type="number" step="any">
                <label>Embeded Link</label>
                <input name="websiteText" id="websiteText" type="text">
            </fieldset>
            <fieldset>
                <input type="submit" value="Submit Song" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>
        
    </div>
    <footer>
        <p class="centre">&copy; 2022 Andrei.</p>
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