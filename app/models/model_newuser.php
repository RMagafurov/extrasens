<?php
class Model_Newuser extends Model
{

  public function newUser(){
      // Очистить массив $_SESSION полностью
      session_unset();
      // Удалить временное хранилище (файл сессии) на сервере
      session_destroy();
  }

}
?>