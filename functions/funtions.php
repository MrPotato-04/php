<?php
function blankLine() {
    echo nl2br("\n");
}
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

?>