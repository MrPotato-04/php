<?php
require './../functions/funtions.php';
?>
<body>
	<form action="result.php" method="POST">
            Inlognaam <input type="text" name="inlognaam" value="" required>
            Email <input type="email" name="email-adres" value="" required>
            Wachtwoord <input type="password" name="wachtwoord" value="" required>
            <input type="submit" name="knop" value="verstuur">
    </form>
</body>
