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
        <form class="addMusic" action="insertArtist.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <h2>New Artist</h2>
                <label>Artist Name</label>
                <input name="artistText" id="artistText" type="text">
                <label>Origin Country</label>
                <input name="originText" id="originText" type="text">
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