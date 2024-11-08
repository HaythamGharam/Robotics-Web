
<?php 
    // include class join
    @set_time_limit(0); 
    error_reporting(0); 
    require("class.joinus.php");
    $join = new JoinUs();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="join.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                <li><a href="./home.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a class="current" href="./joinus.php">Join Us</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="signupbackground"></div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Sign Up Your User Account</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform"  method="post"  enctype="multipart/form-data">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Information Personnelles</strong></li>
                            <li id="personal"><strong>Formation Academique</strong></li>
                            
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Information Personnelles:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Email: *</label> 
                                <input type="email" name="email" placeholder="Email ">
                                <!-- Email end  -->
                                <label class="fieldlabels">Date of Birth : *</label>
                                <input type="date" name="uname" placeholder="Date of Birth">
                                <!-- dob end -->
                                <label class="fieldlabels">Phone Number: *</label>
                                <input type="tel" name="pwd" pattern="[0-9]{8}" placeholder="Ex : 22222222"> 
                                <!-- Phone Number end  -->
                                <label class="fieldlabels">Address : *</label>
                                <input type="text" name="cpwd" placeholder="Ex: Route Mharza km1 ">
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next">
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Formation Academique:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div> 
                                <label class="fieldlabels">Etablissement : *</label>
                                <input type="text" name="fname" placeholder="First Name" >
                                <label class="fieldlabels">Filiere Actuelle : *</label> 
                                <input type="text" name="lname" placeholder="Ex : Génie Mecanique |Génie Informatique  ...">
                                <label class="fieldlabels">Etablissement d'enseignement Supperieur précédent.: *</label>
                                <input type="text" name="phno" placeholder="Ex: FSEGS | PREPA | ISIMS ...">
                                <label class="fieldlabels">Filière Précédente.: *</label> 
                                <input type="text" name="phno_2" placeholder="Ex : Informatique de gestion ...">
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Next">
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> 
                                <label class="fieldlabels">Upload Your Photo:</label>
                                <input type="file" name="pic" accept="image/*"> 
                                <label class="fieldlabels">Upload Signature Photo:</label> 
                                <input type="file" name="pic" accept="image/*">
                            </div>
                            <input type="button" name="next" class="next action-button" value="Submit"> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="./images/success.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">
                                            <span>votre demande d'adhésion à notre club a été envoyée !</span> </br>nous vous appellerons bientôt  
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer ">
        <div class="container">
            <div class="rowfooter">
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
    <!-- end footer region -->

    <script type="text/javascript">
        $(document).ready(function () {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            setProgressBar(current);
            $(".next").click(function () {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });
            $(".previous").click(function () {
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();
                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                //show the previous fieldset
                previous_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }
            $(".submit").click(function () {
                return false;
            })
        });
    </script>
    <script src="script.js"></script>

</body>

</html>