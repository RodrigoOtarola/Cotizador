<?php
try {
    $base = new PDO("mysql:host=localhost;dbname=cotizado;port=3307",'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET UTF8");

    print 'Estamos llegando';

}catch (Exception $e){
    die('Error: ') . $e->getMessage();
}