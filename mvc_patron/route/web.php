<?php
use lib\Route;
use app\controller\HomeController;

Route::get("/", [HomeController::class, "index"]); // Página principal
Route::dispatch();
?>