<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>

<!doctype html>

<html>
<head>

  <title> P2_Aditya_Kumar</title>
  <?php require 'pass_gen.php'; ?>
  <link rel="stylesheet" href="p2_style_sheet.css">
  <meta charset = 'utf-8'>

</head>


<body>

    <h1> xkcd password generator </h1>


    <form action='index.php' method='GET'>
        <label>Number of words(min:0, max:8) </label><input type='text' name='passwd'
            maxlength='1'> <br>
            <br>
        <input type='checkbox' name='numberoption'
            value='yes' unchecked> Include a number? <br>
            <br>
        <input type='checkbox' name='symboloption'
        value='yes' unchecked> Include a symbol? <br>
        <br>
        <input type='submit' value='get passwd'>

    </form>
    <br>
    <h3> <?php echo $test_mess ?> </h3>
    <h2> <?php echo $finpasswd?> </h2>

    <img src='xkcd_image.png'><br>


</body>

</html>
