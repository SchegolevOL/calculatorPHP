<?php error_reporting(-1);



$res=0;
$err='';
print_r($_GET);
$left_ampersand=0;
$right_ampersand=0;
if(isset($_GET['left_ampersand'])) $left_ampersand=$_GET['left_ampersand'];

if(isset($_GET['right_ampersand']))$right_ampersand=$_GET['right_ampersand'];



if (isset($_GET['action'])){
    $right_ampersand = floatval($right_ampersand);
    $left_ampersand = floatval($left_ampersand);
    $res = match ($_GET['action']) {
        'addition' => $left_ampersand+$right_ampersand,
        'subtraction' => $left_ampersand-$right_ampersand,
        'multiplication' => $left_ampersand*$right_ampersand,
        'division' => $left_ampersand/$right_ampersand
    };
    $err='';
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

<div class="input-group mb-3">
    <form action="" method="get">
        <input type="text" name="left_ampersand" placeholder="Enter number left"class="" value="<?=$right_ampersand?>" onclick="value=null">
        <select name="action" id="" class="form-select-sm text-center">
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="right_ampersand" placeholder="Enter number right left" value="<?=$right_ampersand?>" onclick="value=null">
        <button type="submit" class="btn btn-primary">=</button>
        <lable class="focus-ring"><?=$res?></lable>
    </form>

</div>
<lamle class="text-danger"><?=$err?></lamle>



</body>
</html>
