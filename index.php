<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>

<!doctype html>

<html>
<head>

  <title> P2_Aditya_Kumar</title>
  <?php require 'pass_gen.php'; ?>
  <meta charset = 'utf-8'>

</head>


<body>

    <h1> Welcome to the xkcd passoword generator </h1>
    <form action='index.php' method='GET'>
        <label>Number of words <input type='text' name='passwd'
            maxlength='20'></label> <br>
        <input type='checkbox' name='numberoption'
            value='yes' unchecked> Include a number? <br>
        <input type='checkbox' name='symboloption'
        value='yes' unchecked> Include a symbol? <br>
        <input type='submit' value='get passwd'>

    </form>

<?php
#var_dump();
    #if ($nwords != ''){
    if ($nwords != ''){
    echo $finpasswd;
    $nwords='';
    $numbornot='';
    $symbornot='';
    $finpasswd='';
    #echo $numbornot;
    #echo $symbornot;
    }
?>
</body>

</html>
