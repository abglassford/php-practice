<?php

class Connection {
  public static function make () {
    try{
      return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'K3ll3x2015!');
    }
    catch (PDOexception $e) {
      die($e->getMessage);
    }
  }
}
