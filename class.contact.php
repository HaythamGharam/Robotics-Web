<?php 

    include("db_config.php");
    #require "mailer/mailer.php";
    class Contact{
        public function contact($name,$email,$subject,$message){
            $subject = "New Member Inscription ".date("Y-m-d");
            $headers ='From: "Robotic"<robotic-club@iit.ens.tn>'."\n";
            $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
            $headers .='Content-Transfer-Encoding: 8bit'; 
            $new = ""; 
            $new .="Name : $name ";
            $new .="email : $email";
            $new .="subject : $subject";
            $new .="Message : $message";
            
            if(mail("club.robotique.iit@gmail.com",$headers,$subject,$new)){
                return 1; 
            } else return -1;
        }
    }

?>