<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>IcedT - Kontakt</title>
        <link rel="stylesheet" href="/stylesheet.css">
        <link rel="stylesheet" href="/01_pages/contact/stylesheet-contactphp.css">
        <link rel="icon" href="/03_assets/pictures/[0] icon.png icon.png">
    
        <script src="/02_scripts/nav.js" defer></script>
    
    </head>
<body>
    <!-- START OF CONTENT -->

    <div class="page">

    <!-- Burge Menu for Navbar -->
    <button class="mobile-nav-toggle"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
        </svg></button>
        
        <!-- Navbar -->
        <nav>
            <a class="logo" href="/index.html">IcedT</a>

            <ul data-visible="false" class="primary-navbar">
                <li><a href="/index.html">// Home <sup>01</sup></a></li>
                <li><a href="/01_pages/counter/counter.html">// Counter <sup>02</sup></a></li>
                <li><a href="/01_pages/music/music.html">// MusiK <sup>03</sup></a></li>
                <li><a href="/01_pages/contact/contact.html">// Kontakt <sup>04</sup></a></li>
            </ul>
        </nav>

        <iframe src="https://giphy.com/embed/3oEjI5VtIhHvK37WYo" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

        <h1>Dankeschön!</h1>

        <form action="/index.html"><button class="headerbutton">Back to <span class="logo">IcedT</span></button></form>

        <?php
            if(isset($_POST["submit"])){
            mail("contact@icedt.de", "Contact Form - " . $_POST["user-name"], "NEW MESSAGE PER CONTACT FORM:" . "\n\n" . date("d.m.Y H:i:s") . "\n" . $_POST["user-name"] . " - " . $_POST["user-mail"] . "\n\nMessage:\n" . $_POST["user-msg"]);
        }
        ?>

    </div>

    <!-- END OF CONTENT -->
    <!-- START OF FOOTER -->

    <div class="footer">
        <p>Copyright &copy 2023 Joey Michalik. Alle Rechte vorbehalten.</p>
    </div>


</body>
</html>
