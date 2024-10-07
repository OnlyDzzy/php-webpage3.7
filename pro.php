<?php
 $reviews =[
    ['Имя' => 'Иван', 'Отзыв' => 'Отличный товар!', 'рейтинг' => 5],];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName = htmlspecialchars($_POST["userName"]);
    $raiting = htmlspecialchars($_POST["raiting"]);
    $otzyv = htmlspecialchars($_POST["otzyv"]);
    if(empty($userName)){
        echo "Заполните поля.";
    }elseif(!is_numeric($raiting)){
        echo "Укажите цифру от 1 до 5 ";
    }elseif($raiting < 1 || $raiting > 5){
        echo "Укажите цифру от 1 до 5";
    }
    $reviews[] = ['Имя' => $userName, 'Отзыв' => $otzyv, 'рейтинг' => $raiting];
    foreach($reviews as $key){
        foreach($key as $hay => $value){
            echo  $hay."-".$value ."<br>"; 
        }
    };
}