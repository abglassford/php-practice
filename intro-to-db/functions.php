<?php
function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '<pre>';
}
function connectToDb () {
  try{
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'K3ll3x2015!');
  }
  catch (PDOexception $e) {
    die($e->getMessage);
  }
}
function fetchAllTasks($pdo) {
  $statement = $pdo->prepare('select * from todos');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
