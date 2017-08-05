<?php

include("DataBase.php");
include("InformationFetcher.php");

$dataBase = new DataBase();

$dataBase->databaseName = "nutricao20170805";
$dataBase->user = "root";
$dataBase->password = "lidec";
$dataBase->host = "localhost";
$dataBase->prefix = "wp_";

$informationFetcher = new InformationFetcher($dataBase);

$informationFetcher->printTestResult();