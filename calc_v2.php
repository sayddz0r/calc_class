<?php

require_once("Database.php");
require_once("Calculate.php");
require_once("ReplaceSave.php");

$calculate = new Calculate();
$replaceSave = new ReplaceSave();

//Проверка заполнения
$error = '';
if (!empty($_REQUEST['number1'])) {
    $number1 = (float)$_REQUEST['number1'];
} else {
    $error = "Empty fields, fill them in and repeat the operation";
}
if (!empty($_REQUEST['number2'])) {
    $number2 = (float)$_REQUEST['number2'];
} else {
    $error = "Empty fields, fill them in and repeat the operation";
}
if ($error) {
    echo json_encode(["error" => $error]);
    exit;
}
if (!empty($_REQUEST['operation'])) {
    $operation = $_REQUEST['operation'];
}

$resultCalc = $calculate->calc($number1, $number2, $operation);

$replaceSave->saveDatabase($number1, $operation, $number2, $resultCalc);

$res = $replaceSave->getFromDatabase();
echo json_encode($res);
?>