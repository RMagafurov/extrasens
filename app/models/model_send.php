<?php
class Model_Send extends Model
{

    public function sendNum(){
        // проверка наличия записи о первом экстрасенсе
        if($_SESSION['esens1']) {
            // Сравниваем кол-во загаданных и отгаданных чисел
            if(count($_SESSION['esens1']) == count($_SESSION['my_num'] )){return "Вы уже отправили число. Загадайте новое и нажмите [ Загадано ]";}
                $my_num = $_POST['my_number_input'];
            // Проверка : если не пусто, если двузначное число
            if($my_num and is_numeric($my_num) and $my_num > 9 and $my_num < 100){
                $my_num = $_POST['my_number_input'];
                $_SESSION['my_num'][] = $my_num;

                for ($i = 1; $i != $this->count_extr; $i++) {
                    // проверяем совпадение по догадкам экстрасенсов, если совпало плюсуем рейтинг
                    if(end($_SESSION['esens'.$i]) == $_POST['my_number_input'] ){
                        $_SESSION['esens'.$i.'_r'] ++;
                    } else {
                        //если не совпало и переменная не пустая, минусуем рейтинг, если пустая выставляем ноль, что бы не уйти в минус
                        if(!empty($_SESSION['esens'.$i.'_r'])){$_SESSION['esens'.$i.'_r']--;} else{$_SESSION['esens'.$i.'_r'] = 0;}
                    }
                }
                return "<span class='send_ok'>Число принято. Загадайте новое число и нажмите [ Загадано ]. Если хотите завершить нажмите [ Завершить работу ]</span>";
            }else{
                return "Не введено число, или некорректный ввод! Введите двузначное число.";
            }
        }else{
            return "Перед отправкой необходимо загадать число и нажать кнопку [ Загадано ] ";
        }

        }


    public function get_dogadki(){
        return Model::get_dogadki();

    }

    public function get_reiting(){
        return $this->reiting;
    }

}
?>