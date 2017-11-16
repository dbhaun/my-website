<?php
            if(isset($_POST["email"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $ebody1 = $_POST["ebody1"];
                $subject = $_POST["subject"];
                $body1 = wordwrap($ebody1,70);
                $from ="From: " . $email . "\r\n". $name; 
                mail("dbhaun@gmail.com",$subject,$body1,$from);
                header("location:thank.php");
            }
         ?>