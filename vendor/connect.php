<?php

// mysql connection

const HOST    = 'localhost';
const USER    = 'root';
const PASS    = '';
const DB_NAME = 'test';

$connect = mysqli_connect(
  HOST, 
  USER, 
  PASS, 
  DB_NAME
) or die('Подключение к базе данных отсутствует');
