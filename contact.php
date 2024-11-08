<?php
   @set_time_limit(0);
    error_reporting(0);
    session_start(); 
    require_once("class.contact.php");
    $contact = new Contact(); 
    if(isset($_REQUEST["submit"])){
        extract($_REQUEST);
        $name = $_POST["name"];
        $email= $_POST["email"]; 
        $subject= $_POST["subject"] ; 
        $message =$_POST["message"];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            if($contact->contact($name,$email,$subject,$message)==1){
                $_SESSION["success"] = "votre email a bien été envoyé ";
            }else{
                $_SESSION["error"] = "Erreur lors de l'envoi de votre email!</br> Veuillez réessayer ";
            }
        }else {
            $_SESSION["error"] = "Verifier votre Email! ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <!-- navbar region start -->
    <nav class="mynavbar">
        <div class="logo">
            <a href="./home.php"><img class="logo" src="./images/logo.png" height="50px"></a>
        </div>
        <div class="navcontent">

            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a class="current" href="./contact.php">Contact</a></li>
                <li><a href="./joinus.php">Join Us</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars about-bars"></i>
            </div>
        </div>
    </nav>
    <!-- navbar region end -->

    <div class="contactbackground"></div>

    <div class="contact-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3899.479364272588!2d10.737767842056282!3d34.728930280084505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a82ded557c84c94!2sInstitut%20International%20de%20Technologie!5e0!3m2!1sen!2stn!4v1639678392931!5m2!1sen!2stn"
            width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <form method="POST" class="contact-form">
        <?php
                if(isset($_SESSION["error"])){
                    echo"<center><span style='color:red'>".$_SESSION['error']."</span></center>";
                }
                if(isset($_SESSION["error"])){
                    echo"<center><span style='color:green'>".$_SESSION['success']."</span></center>";
                }
            
            ?>
            <h2>We want to hear from you!</h2>
            <input type="text" id="name" name="name" required placeholder="Your name">
            <input type="email" id="email" name="email" required placeholder="Your email">
            <input type="text" id="subject" name="subject" required placeholder="Subject">
            <textarea type="text" id="message" name="message" required placeholder="Message" rows="4"></textarea>
            <button type="submit" name="submit">Send!</button>
        </form>
    </div>

    <!-- footer region start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="nav-map">
                    <h4>Site Map</h4> <br />
                    <ul>
                        <a href="home.html" class="site-nav">
                            <i class="fas fa-home"></i>
                            &nbsp;Home
                        </a>
                        <br />
                        <a href="about.html" class="site-nav ">
                            <i class="fas fa-search"></i>
                            &nbsp;About Us
                        </a>
                        <br />
                        <a href="contact.html" class="site-nav">
                            <i class="fas fa-address-card"></i>
                            &nbsp;Contact Us
                        </a>
                        <br />
                        <a href="joinus.html" class="site-nav">
                            <i class="fas fa-sign-in-alt"></i>
                            &nbsp;Join Us
                        </a>
                    </ul>
                </div>
                <div class="col contact">
                    <h4>Contact</h4> <br />
                    <ul>
                        <li>
                            <i class="fas fa-map-pin"></i>
                            <span>
                                Institut international de technologie Sfax, Tunisia
                            </span>
                        </li>
                        <br />
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+216 52 019 004</span>
                        </li>
                        <br />
                        <li>
                            <i class="fas fa-at"></i>
                            <span>club.robotique.iit@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <div class="col socials">
                    <h4>Socials</h4> <br />
                    <ul>
                        <a href="https://www.facebook.com/IITRoboticsCLUB">
                            <i class="fab fa-facebook-square"></i>
                            <span>Facebook</span>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="row2">
                <p class="copyright">
                    IIT Robotics Club &copy;, All Right Reserved - by Bushmaster & A-Ghacker
                </p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>