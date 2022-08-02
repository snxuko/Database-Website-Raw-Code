<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <title>Music Charts Website</title>
</head>
<div class="hero">
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
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
            <p><a href="addArtist.php">Add Artists</a></p>
            <p><a href="info.php">How To</a></p>
        </div>
    </nav>
    <article class="homepage" id="homepage">
    <div class="main" role="main">
          <div class="row"> 
            <div class="col-1">
                <h2>MUSIC RATING CHARTS</h2>
                <h3>Rating your favourite artists.</h3>
                <h4>Start by submitting your favourite artist!</h4>
              <!--  <button class="button-34" onclick="window.location.href='https://php.mmc.school.nz/301COS/andreivergara/Database%20Assignment/music.php';">More</button> -->
            </div>
        </div>
    </artcle>
      
        </ul>
        <footer>
        <p class="centre">&copy; 2022 Andrei Vergara.</p>
        </footer>

    </div>
    </article>
</div>
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