<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomer_z = $_POST["nomer_z"];
    $prchina = $_POST["prchina"];
    if(!empty("prchina") && !empty("nomer_z")){
        echo "Номер заказа". htmlspecialchars($nomer_z)."\n";
        echo "Причина отмены".htmlspecialchars($prchina);
    }else {
        echo "Заполните поля отмены.";
    }
}

