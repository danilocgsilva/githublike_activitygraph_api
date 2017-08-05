<?php

/**
 * Read the database source
 */
class InformationFetcher {

    const query = "SELECT post_date, post_title FROM %sposts";

    /**
     * @var DataBase
     */
    protected $dataBase;

    /**
     * @var string
     */
    protected $definitive_select;


    public function __construct(DataBase $dataBase) {
        $this->dataBase = $dataBase;
        $this->definitive_select = sprintf($this::query, $dataBase->prefix);
    }


    public function printTestResult() {

        $mysqliconnection = new mysqli(
            $this->dataBase->host,
            $this->dataBase->user,
            $this->dataBase->password,
            $this->dataBase->databaseName
        );

        if ($mysqliconnection->connect_error) {
            die("Connection error" . "\n");
        }
        $mysqliconnection->set_charset("utf8");

        $result = $mysqliconnection->query($this->definitive_select);
    
        while ( $row = $result->fetch_assoc() ) {
            echo $row["post_date"] . " | " . $row["post_title"] . "<br />\n";
        }

    }
}