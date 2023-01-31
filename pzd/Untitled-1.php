<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Untitled-2.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" id=""><br>
        <input type="number" name="num2" id="num11"><br><br>
        <input type="submit" name="+" value="+">
        <input type="submit" name="-" value="-">
        <input type="submit" name="*" value="*">
        <input type="submit" name="/" value="/">
        <input type="submit" name="^2" value="^2">
        <input type="submit" name="%" value="%">
    </form>

</body>
<br>
</html>

<?php 
    if(isset($_POST['+'])){
    echo $_POST['num1'] + $_POST['num2'];
}
if(isset($_POST['-'])){
    echo $_POST['num1'] - $_POST['num2'];
}
if(isset($_POST['*'])){
    echo $_POST['num1'] * $_POST['num2'];
}
if(isset($_POST['/'])){
    echo $_POST['num1'] / $_POST['num2'];
    if($_POST['num2']==0){
        echo 'НЕЛЬЯ';
    }
}
if(isset($_POST['^2'])){
    echo $_POST['num1'] **$_POST['num2'];
}
if(isset($_POST['%'])){
    echo $_POST['num1'] *($_POST['num2']/100) ;
}
