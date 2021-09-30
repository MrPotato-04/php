<?php
function blankLine() {
    echo nl2br("\n");
};
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
?>

<body>
<?php if(!isset($_POST['knop'])) { ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Inlognaam <input type="text" name="inlognaam" value="" required>
            Email <input type="email" name="email-adres" value="" required>
            Wachtwoord <input type="password" name="wachtwoord" value="" required>
            <input type="submit" name="knop" value="verstuur">
        </form>
        <?php
		} else {
			console_log($_POST);
            blankLine();
            echo "Inlog naam: ".$_POST["inlognaam"]."<br>"; 
            echo "Email: ".$_POST["email-adres"]."<br>"; 
            echo "Wachtwoord: ".$_POST["wachtwoord"]."<br>";
		}
?>
</body>
