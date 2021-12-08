<?php
if (!$_COOKIE['roll']) {
    header('location: login');
} else if($_COOKIE['roll'] != 2) {
    echo 'you dont have the roles to visit this page yet';
}else{
    echo 'welcome admin, only you can acces this page';
}?>
<button type="" onclick="document.cookie = 'roll=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';window.location = 'admin.php'">logout</button>