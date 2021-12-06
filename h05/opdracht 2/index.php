<body>
    <form action="index.php" method="POST">
        <label for="plaatNr">kies een plaatje</label>
        <select id="plaatNr" name="plaatNr">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <input type="submit" name="knop" value="verstuur">
    </form>
    <img src="<?php echo $_POST['plaatNr']; ?>.jpg" >
</body>