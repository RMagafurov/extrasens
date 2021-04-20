<?php

if(!empty($data)) {
    $output = array();
    foreach ($data as $a) {
        foreach ($a as $key => $value) {
            $output[$key][] = $value;
        }
    }
    // пересборка массива с догадками
    foreach ($output as $out) {
        $table_tr .= '<tr><td>' . implode('</td><td>', $out) . '</td></tr>';
    }
    for ($i = 1; $i != count($out) + 1; $i++) {
        $table_th .= '<th>Экстрасенс № ' . $i . '<div class="reiting">Рейтинг: ' . $data1[$i-1] . '</div></th>';
    }

}
    // история загаданных чисел
    if($_SESSION['my_num']) {
            foreach ($_SESSION['my_num'] as $value) {
                $historynum .= " " . $value;
            }
        }
?>

<h1>Загадайте двузначное число</h1>
<p><b>Когда будете готовы, нажмите на кнопку -</b>
<button onclick="document.location='dogadki'">Загадано</button></p>
<div>
<form action="send" method="POST">
  <b>Введите загаданое число для сравнения :</b>
    <input name="my_number_input" type="text" value="" placeholder="мое число">
    <input name="my_number_send" type="submit" value="Отправить">
</form>
</div>

<?php if($data2){echo "<br/><div class='info'>".$data2."</div>" ;} ?>
<?php if($historynum){echo "<br/><b>История загаданых пользователем чисел : </b><span class='user_num'>".$historynum."</span>" ;} ?>
<?php if($output){echo "<h2>Догадки экстрасенсов : </h2>";} ?>

<table>
    <?php echo "<tr>".$table_th."</tr>" . $table_tr; ?>
</table>
</br>
<div><button onclick="document.location='newuser'">Завершить работу</button></div>
