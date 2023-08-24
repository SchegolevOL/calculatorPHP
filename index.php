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

//if (!is_float($_GET['left_ampersand'])) {
//    $err = 'the left ampersand is not valid';
//
//}
//elseif (!is_float($_GET['right_ampersand'])) {
//    $err = 'the right ampersand is not valid';
//}
//else {
if (isset($_GET['action'])!=null){
    $res = match ($_GET['action']) {
        'addition' => floatval($_GET['left_ampersand']) + floatval($_GET['right_ampersand']),
        'subtraction' => floatval($_GET['left_ampersand']) - floatval($_GET['right_ampersand']),
        'multiplication' => floatval($_GET['left_ampersand']) * floatval($_GET['right_ampersand']),
        'division' => floatval($_GET['left_ampersand']) / floatval($_GET['right_ampersand'])
    };
}



//}

//if($_GET['number_left']==''&&$_GET['number_right']!='')$err="the left ampersand is not known";
//if(!$_GET['number_left']==''&&$_GET['number_right']=='')$err="the right ampersand is not known";

?>

<div class="input-group mb-3">
    <form action="" method="get">
        <input type="text" name="left_ampersand" placeholder="Enter number left"class="">
        <select name="action" id="" class="form-select-sm text-center">
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="right_ampersand" placeholder="Enter number right" left"class="form-control">
        <button type="submit" class="btn btn-primary">=</button>
        <lable class="focus-ring"><?=$res?></lable>
    </form>

</div>
<lamle class="text-danger"><?=$err?></lamle>
</body>
</html>
