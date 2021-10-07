<?php
require '../funtions.php';

console_log($_POST);
            blankLine();
            if(!isset($_POST['knop'])) { 
                echo "Inlog naam: ".$_POST["inlognaam"]."<br>"; 
                echo "Email: ".$_POST["email-adres"]."<br>";
            }