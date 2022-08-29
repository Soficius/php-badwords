<?php
$saluto = 'ciaoo mondo';
$badword = $_GET['badword'];
$new_word = str_replace($badword, "***", $badword);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>

<body>
    <h1><?php echo $saluto ?></h1>
    <p><?php echo strlen($saluto) ?></p>
    <p><?php echo $new_word ?></p>
    <p><?php echo strlen($new_word) ?></p>
</body>

</html>