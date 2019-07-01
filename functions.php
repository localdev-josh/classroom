<?php
    function escape($string) {

    global $mysqli;

    return mysqli_real_escape_string($mysqli, trim($string));


    }


    

