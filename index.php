<?php
$saluto = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius suscipit tortor. Vivamus et lacus nisl. Praesent fermentum vestibulum lobortis. Sed sodales commodo tortor, nec tincidunt quam laoreet vitae. Integer vitae nisl id arcu gravida elementum. Pellentesque maximus lacinia tellus eu volutpat. Vestibulum ornare dapibus erat ut semper.';
$badword = $_GET['badword'];
$new_word = str_replace($badword, "***", $saluto);
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
    <p><?php echo $saluto ?></p>
    <p><?php echo strlen($saluto) ?></p>
    <p><?php echo $new_word ?></p>
    <p><?php echo strlen($new_word) ?></p>
</body>

</html>