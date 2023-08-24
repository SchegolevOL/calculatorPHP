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


<?php error_reporting(-1);
$res=0;
$err='';
print_r($_GET);
if($_GET['number_left']=='')$err="the left number is not known";
?>

<div class="input-group mb-3">
    <form action="" method="get">
        <input type="text" name="number_left" placeholder="Enter number left"class="">
        <select name="action" id="" class="form-select-sm text-center">
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="number_right" placeholder="Enter number right" left"class="form-control">
        <button type="submit" class="btn btn-primary">=</button>
        <lable class="focus-ring"><?=$res?></lable>
    </form>

</div>
<lamle class="text-danger"><?=$err?></lamle>
</body>
</html>
