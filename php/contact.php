<?php
if(isset($_POST["submit"])){
    mail("contact@icedt.de", "Contact Form - " . $_POST["name"], "NEW MESSAGE PER CONTACT FORM:" . "\n\n" . $_POST["user-name"] . " - Mail: " . $_POST["user-mail"] . "\n\nMessage:\n" . $_POST["user-msg"]);
    echo "THAT WORKED!";
}
?>