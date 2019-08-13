<?php
    $a = "document.cookie";
    header("http://localhost:8081/XSS_keyboard/src/index.html?$a");
?>

