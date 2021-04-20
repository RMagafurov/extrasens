<?php
class Model_Dogadki extends Model
{

    public function get_dogadki(){
        return Model::get_dogadki();
        
    }

    public function get_reiting(){
        return $this->reiting;
    }
    // функция генерации догадок экстрасенсов - запись
   public function set_data(){
        if(count($_SESSION['esens1']) == count($_SESSION['my_num'] )) {
            for ($i = 1; $i != $this->count_extr; $i++) {
                $_SESSION['esens'.$i][] = mt_rand(10, 99);
                // если в рейтинге экстрасенса пусто, выставляем ноль
                if(empty($_SESSION['esens'.$i.'_r'])){$_SESSION['esens'.$i.'_r'] = 0;}
            }
        }else{
            return "Вы не ввели и не отправили загаданное число. Введите число и нажмите [ Отправить ]";
        }

    }



}
?>