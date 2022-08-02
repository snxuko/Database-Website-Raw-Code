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
                <h2>Linking tables</h2>
                <h4>For this website, I have decided to sort and visually present my database using Title, Artist, Genre, and rating. 
                    While furthering what to use for the one to many relationship, the most logical is that many artists will have multiple 
                    songs being used on the website. Therefore I have linked ArtistID from the song table to have a relationship ID from the artist table.</h4>
                <img src="images/info1.png" class="infoImages" alt="Example" width="500">

                <h2>Comments and Feedback</h2>

                <h3>“I like the dark mode but also maybe add a light theme just to give the 
                    option if people are viewing it in bright sources and need to read it, it can still be accessible?”</h3>

                <h4>I have decided to use Javascript in order to further simplify the process where normal css would normally be more complicated. 
                    This process is simple and it is by creating classes for the variables that switch between light and dark with the user input. 
                    This however does not save or transfer the data on whether or not the user is on light or dark mode going to new pages. 
                    To revisit and remedy the situation I have decided to base it on two solutions.
                    Creating a copy of each webpage and having the duplicate be the opposite color theme so that when 
                    the user presses the theme icon it's basically the same webpage just different css. 
                    Creating a system in which pressing the theme button is saved onto the website and is transferred between the webpages.</h4>
               <img src="images/Javascript.png" class="infoImages" alt="Example" width="500">

               <h3>“The website doesn’t work as well on my phone”</h3>

                <h4>I have noticed and taken this into consideration, Due to multiple clashes with the css, I have put this back into revision. 
                    Before I put too much emphasis on homepage that can overwhelm the user with color and formatting that was meant for desktop 
                    users, I have decided to simplify my website design that not only would reduce the amount of coding needed and remove unnecessary variables. </h4>
                <img src="images/Before.png" class="infoImages" alt="Example" width="800">

                <h2>Website Principals</h2>
                <h3>Simplicity</h3>
                <h4>I have decided that I need to focus on the simplicity on the website, implementing features that serve the purpose of allowing the user
                    to browse the website comfortably. This is done through Imagery, Colour, and Typograhpy. I have removed unnecessary images and have used
                    one image to further encapture the website personality, First impressions are crucial in order to engage the viewer so therefore by having
                    an image that best represents your website, they will more likely stay and browse. Colour, a small but a effective tool that can influence the
                    readers mood. Colour has been limited to 3 primary colours, Primarily red, with blue as a secondary color and purple as a inbetween. Typography, 
                    using fonts that are easy to read on both mobile and computer.
                </h4>

                <h3>Navigation</h3>
                <h4>Straight to the point navigation with mobile navigation included when screen size is smaller than a certain amount to allow the nav bar to not
                    block the mobile user's view.
                </h4>

                <h3>Mobile friendly</h3>
                <h4> Mobile support has been added, This includes the css supporting different sized screens in order to reach a wider based audience. Most people are
                on the go and being on mobile is crucial for the website. Basic support such as navigation has be modified as well.</h4>

                <h3>Load Time</h3>
                <h4>Most users expect their website to load within a time frame of 2 seconds, failure to do so can often make users uninterested in using the website</h4>
                <h3>White Space</h3>
                <h4>I have utilized white space in order to reduce clutter and draw the users attention on providing them the services I provide. Although future implementations
                    include a media player that can help users </h4>
                <h2>Does this site adhere to legal requirements?</h3>
                <h4>"Simply put, copyright is nothing but aright over copying of an artistic, literary and scientific works. It gives a limitted time monopoly over the use of the protected work.
                     Nevertheless, like many rights this right is not absolute. Among one of them is the private use exception where in one could use a protected work for his own personal use. Almost all countries recognize this exception, meaning individuals can use copyrighted works for their own personal purpose. But dont forget that the private use exception is interpreted narrowly that it should be confined within individual use. Renting or selling the work outisde the family is aviolation of copyright." This website does not condone of selling any services and strictly maintains as a free platform, all images used are appropriately resourced with proper credit to the owners.</h4>
                <h2>Is the site readable?</h2>
                <h4>Before placing any text onto the website such as the information, it is first put into a google doc to quickly identify and correct gramatical errors.</h4>
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