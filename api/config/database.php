<?php

// используем для подключения к базе данных MySQL
class Database
{
    // учетные данные БД
    private $host = '';
    private $db_name = '';
    private $username = '';
    private $password = '';
    public $connection;

    // получаем соединение с базой данных
    public function getConnection()
    {
        $this->connection = null;

        try {
            $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->connection->exec('set names utf8');
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
