<?php

class Calculator extends Db {

    // Priprema stejtmenta sa kverijom
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    // Funkcija za bindovanje
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch (true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                Default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute pripremljeno stmt
    public function execute(){
        return $this->stmt->execute();
    }
}