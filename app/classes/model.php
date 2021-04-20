<?php
class Model
{
    // рейтнг экстрасенсов
    public $reiting;
    // количество экстрасенсов + 1
    public $count_extr = 6;

    public function set_data()
    {
    }

    public function get_dogadki(){
       if($_SESSION['esens1']){
           for ($i = 1; $i != $this->count_extr; $i++){
               foreach ($_SESSION['esens'.$i] as $value){
                   $histori['esens'.$i][] = $value;
               }
               $this->reiting[] = $_SESSION['esens'.$i.'_r'];
           }
           return $histori;
       }
            return false;
    }


    public function get_historyNum()
    {
        echo "История загаданных чисел : ";
        if ($_SESSION['my_num']) {
            foreach ($_SESSION['my_num'] as $value) {
                $historynum .= " " . $value;
            }
        }
    }
}
?>