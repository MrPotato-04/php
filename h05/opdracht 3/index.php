<body>
    <form action="index.php" method="POST">
        Inlognaam <input type="text" name="inlognaam" value="" required>
        Email <input type="email" name="email-adres" value="" required>
        Wachtwoord <input type="password" name="wachtwoord" value="" required>
        <input type="submit" name="knop" value="verstuur">
    </form>
    <p><?php if (isset($_POST['email-adres'])) {
            $bool = false;
            $usernames = ['piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl'];
            $passwords = ['doetje123', 'snoepje777', 'arkiearkie201'];
            for ($x = 0; $x <= 2; $x++) {
                if (($_POST['email-adres'] === $usernames[$x]) && ($_POST['wachtwoord'] === $passwords[$x]) && $bool !== true) {
                    $bool = true;
                    break;
                }
            }
            echo ($bool ? "true" : "false");;
        }; ?></p>
</body>