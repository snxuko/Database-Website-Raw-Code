<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
            <p><a href="index.php">Home</a></p>
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
            <h2>How to add your own music!</h2>
            <h3>Embeded Links</h3>
            <h4>To link your favourite artist's spotify page onto the Website, Right click on the Song's or click the 3 dots, press share and click embeded track.</h4>
            <img src="images/instruction2.gif" class="infoImages" alt="Example" width="40%">
            <h4>From there, simply select on size and replace "Normal (380px)" to "Compact (80px)" and press on copy on the bottom right!</h4>
            <img src="images/instruction1.gif" class="infoImages" alt="Example" width="40%">
            <h4>Finally, paste it into the embeded link input in the add artist page.</h4>
            <img src="images/instruction3.gif" class="infoImages" alt="Example" width="40%">


            
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