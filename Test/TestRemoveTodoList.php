<?php

require_once "./model/todolist.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";

addTodoList("Wall");
addTodoList("Gagah");
addTodoList("Dot");
addTodoList("Id");

showTodoList();

removeTodoList(2);

showTodoList();