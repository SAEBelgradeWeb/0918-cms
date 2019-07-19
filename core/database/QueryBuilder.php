<?php
namespace Cms\Core\Database;

class QueryBuilder {

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table) {
        $sql = $this->pdo->prepare("SELECT * FROM {$table}");
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_OBJ);
    }

    public function insert($table, $parameters)
    {
        $query = sprintf(
            "INSERT INTO %s (%s) VALUES(%s)",
            $table, //first %s
            implode(", ", array_keys($parameters)), //second %s
            ":" . implode(", :", array_keys($parameters)) // third %s
        );
        /*
         * $query = INSERT INTO tasks (description, completed) VALUES(:description, :completed)
         */

        $sql = $this->pdo->prepare($query);
        $sql->execute($parameters);
    }
}