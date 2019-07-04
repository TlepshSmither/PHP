<?php
$fopen=file('text.txt');
$need=$_GET['id'];
array_splice($fopen, $need, 1);
$f=fopen('text.txt', 'w');
for ($i=0; $i<count($fopen); $i++)
{
    fwrite($f,$fopen[$i]);
}
header('Location: task.php');
fclose($f);