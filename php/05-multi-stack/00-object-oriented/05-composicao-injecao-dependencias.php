<?php

interface Connection 
{
  public function select(string $sql);
}


class MySqlConnection implements Connection
{
  public function select(string $sql)
  {
    // TODO
  }
}


class User 
{
  protected $connection;

  public function __construct(Connection $connection)
  {
    $this->connection = $connection;
  }

  public function findById(int $id)
  {
    $this->connection->select('...');
    // TODO
  }
}


$connection = new MySqlConnection();
$user = new User($connection);
