<?php

if($_POST['valor_checkbox']){
    if($_POST['valor_checkbox'] == '1_benef'){
        echo '1';
    }elseif($_POST['valor_checkbox'] == '2_volun'){
        echo '2';
    } 
}