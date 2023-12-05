<?php
require_once("Database.php");

class ReplaceSave extends Database
{
    public function __construct()
    {
        self::connect();
    }

    public function saveDatabase($number1, $operation, $number2, $resultCalc)
    {
        Database::query("INSERT INTO calc_result(`number_1`, `operation`, `number_2`, `result`) VALUES ('$number1','$operation','$number2','$resultCalc')");
    }

    public function getFromDatabase()
    {
        $queryGetdata = Database::query("SELECT * FROM calc_result ORDER BY id DESC LIMIT 7"); // Выборка 7 результатов вычислений
        $res = [];
        $row = Database::fetch($queryGetdata);
        foreach ($row as $value) {
            switch ($value["operation"]) {
                case "add":
                    $op = "+";
                    break;
                case "sub":
                    $op = "-";
                    break;
                case "mult":
                    $op = "*";
                    break;
                case "divi":
                    $op = "/";
                    break;
                default:
                    $op = " ";
            }
            $res[] = $value["number_1"] . $op . $value["number_2"] . "=" . $value["result"] . "<br>";
        }
        return $res;
    }
}







