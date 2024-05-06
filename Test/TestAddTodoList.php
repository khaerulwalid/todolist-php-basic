<?php

require_once "./model/todolist.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("Wall");
addTodoList("Dot");
addTodoList("Id");

var_dump($todoList);