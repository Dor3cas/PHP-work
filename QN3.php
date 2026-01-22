<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
    <form action="" method="post">
        <label id="num">Enter the number: </label><input type="number" name="number" for="num">
        <input type="submit" name="submit">

    </form>
</body>
</html>
<?php
if(isset($_POST['number'])){
    $num = $_POST['number'];
$result =1;
if ($num>0){
for($i=$num; $i>=1; $i--){
       $result= $result*$i;
}
 echo "$result";
    }else {
        echo ("The number doesn't have a factorial");
    }
}
?>
