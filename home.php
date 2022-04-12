<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITRoboticsCLUB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <nav class="mynavbar">
        <div class="logo">
            <a href="./home.php"><img class="logo" src="./images/logo.png" height="50px"></a>
        </div>
        <div class="navcontent">

            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times bars"></i>
                </div>
                <li><a class="current" href="./home.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./joinus.php">Join Us</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <div class="background"></div>
    <!-- boxes region start -->
    <div class="content">
        <div class="box-display">
            <div class="box">
                <img src="./images/robot.jpg" class="robot">
                <h3>Learn how to create a robot</h3>
            </div>
            <div class="box">
                <img src="./images/creativity.png" class="creativity">
                <h3>Innovation for the future</h3>
            </div>
            <div class="box">
                <img src="./images/skills.jpeg" class="skills">
                <h3>Improve your personal skills</h3>
            </div>
        </div>
    </div>
    <!-- members region start -->

    <?php
        // staff to get content of Committee member 
    ?>
    <div class="title members-title">
        Our Committee Members
    </div>
    <div class="content">
        <div class="members-list">
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup" class="popup">
                    <div class="memberDescription">
                        <span class="close">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            error. <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn1" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup1" class="popup">
                    <div class="memberDescription">
                        <span class="close1">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            . <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn2" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup2" class="popup">
                    <div class="memberDescription">
                        <span class="close2">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            error. <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn3" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup3" class="popup">
                    <div class="memberDescription">
                        <span class="close3">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            error. <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn4" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup4" class="popup">
                    <div class="memberDescription">
                        <span class="close4">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            error. <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn5" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup5" class="popup">
                    <div class="memberDescription">
                        <span class="close5">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            error. <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
            <div class="member">
                <img src="./images/bush.jpg" class="member-picture">
                <span class="span"><input type="button" id="btn6" value="More Details"></span>
                <div class="member-name">
                    Haytham Gharam <br> position
                </div>
                <div id="popup6" class="popup">
                    <div class="memberDescription">
                        <span class="close6">&times;</span>
                        <img src="./images/bush.jpg" class="description-picture">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,
                            molestias
                            nobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.
                            Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiis
                            rem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,
                            error. <br><br><a href="#"><i class="fab fa-facebook fa-2x"></i></a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- members region end -->

    <?php
        //staff to grab Activities 
    ?>
    <!-- activities region start -->
    <div class="activities-title">
        Our Activities
    </div>
    <div class="content">
        <div class="activities-display">
            <div class="activity">
                <img src="./images/arduino-training.jpg" alt="#" class="act-img">
                <h3 class="act-title">Arduino Training</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, omnis!</p>
                <button class="act-button" id="act-button1">Read More</button>
            </div>
            <div class="activity">
                <img src="./images/arduino-training.jpg" alt="#" class="act-img">
                <h3 class="act-title">Arduino Training</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, omnis!</p>
                <button class="act-button" id="act-button2">Read more</button>
            </div>
            <div class="activity">
                <img src="./images/arduino-training.jpg" alt="#" class="act-img">
                <h3 class="act-title">Arduino Training</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, omnis!</p>
                <button class="act-button" id='act-button3'>Read more</button>
            </div>
        </div>
    </div>
    <!-- activities region end -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="nav-map">
                    <h4>Site Map</h4> <br />
                    <ul>
                        <a href="./home.php" class="site-nav">
                            <i class="fas fa-home"></i>
                            &nbsp;Home
                        </a>
                        <br />
                        <a href="./about.php" class="site-nav ">
                            <i class="fas fa-search"></i>
                            &nbsp;About Us
                        </a>
                        <br />
                        <a href="./contact.php" class="site-nav">
                            <i class="fas fa-address-card"></i>
                            &nbsp;Contact Us
                        </a>
                        <br />
                        <a href="./joinus.php" class="site-nav">
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