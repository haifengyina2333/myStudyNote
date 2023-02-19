<?php
session_start();
if($_SESSION['username'] == 'hello'){
    echo '你是hello';
}else{
    echo '你是谁？';
}