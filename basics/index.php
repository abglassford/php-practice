<?php
require 'functions.php';

class Task {
  public $description;

  public $completed = false;

  public function __construct($description){
    $this->description = $description;
  }

  public function isComplete () {
    return $this->completed;
  }

  public function complete () {
    $this->completed = true;
  }
}

$tasks = [
  new Task('Go to the store'),
  new Task('Learn PHP'),
  new Task('Learn React/Redux'),
  new Task('Study Java')
];

$tasks[0]->complete();


require 'index.view.php';
