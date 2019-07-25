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

    public function fetchOne($table, $parameters) {
        $query = sprintf(
            "SELECT * FROM %s WHERE id=:id",
            $table //first %s
        );
        $sql = $this->pdo->prepare($query);
        $sql->execute($parameters);
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

    public function update($table, $parameters)
    {

        $params = "";
        foreach ($parameters as $key => $parameter) {
            $params .= $key . "=:" . $key . ", ";
        }


        $query = sprintf(
            "UPDATE %s SET %s WHERE id=:id",
            $table, //first %s
            trim($params, ", ")
        );

        $sql = $this->pdo->prepare($query);
        $sql->execute($parameters);

        /*
         * $query = UPDATE tasks SET description=:description, completed=:completed WHERE id=:id;
         */
    }

    public function delete($table, $parameters)
    {
        /*
         * $query = DELETE FROM tasks WHERE id=:id;
         */
        $query = sprintf(
            "DELETE FROM %s WHERE id=:id",
            $table //first %s
        );
        $sql = $this->pdo->prepare($query);
        $sql->execute($parameters);
    }
}