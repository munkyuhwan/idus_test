<?php

class MyPDO {

    var $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname='.DB_NAME, DB_ID, DB_PW);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


    function select_all($query, $params=null) {
        $stmt =  $this->pdo->prepare($query);
        $stmt -> execute(
            $params
        );
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function select_query($query, $params) {
        $stmt =  $this->pdo->prepare($query);
        $stmt -> execute(
            $params
        );
        $result = $stmt -> fetchAll();
        print_r($result);
        return $result;
    }

    function insert_query($query, $params) {
        $stmt =  $this->pdo->prepare($query);
        $result = array();
        try {
            $this->pdo ->beginTransaction();
            $stmt->execute($params);

            $id = $this->pdo->lastInsertId();
            $result = array(
                "idx",$id
            );
            $this->pdo ->commit();
        } catch(PDOException $e) {
            $this->pdo->rollback();
            echo $e->getMessage();
        }
        return $result;

    }
    function delete_query($query, $params) {
        $stmt =  $this->pdo->prepare($query);
        try {
            $this->pdo ->beginTransaction();
            $stmt->execute($params);

            $result = $this->pdo ->commit();
        } catch(PDOException $e) {
            $this->pdo->rollback();
            echo $e->getMessage();
        }
        return $result;
    }
}


?>