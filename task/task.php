<html>
<head>
    <title>TaskPHP</title>
</head>

<body>
<form>
    <input name="text">
    <input type="submit" value="Download">
</form>
<?php
function add_lesson ($text) {
    $file = fopen('text.txt','a');
    fputs($file, $text . PHP_EOL);
    fclose($file);
//    header('Location: task.php');
}
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    add_lesson($text);
}

$file = fopen('text.txt', 'r');
$counter = 0;
while (($line = fgets($file)) !== false) {
    echo '<a href="delete.php?id='.$counter++.'"><input type="submit" value="deletes"></a>'
;
}
fclose($file);
?>


</body>
</html>