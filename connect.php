<?php


//$connect = mysqli_connect(host:'localhost', user: 'root', password:'', database: 'bd');
$connect = mysqli_connect('localhost',  'root', 'root',  'cactus'); //работает

if (!$connect) {
    die('Error connect to database');
}