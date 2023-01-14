<?php

// mysql connection

const HOST    = '';
const USER    = '';
const PASS    = '';
const DB_NAME = '';

$connect = mysqli_connect(
  HOST, 
  USER, 
  PASS, 
  DB_NAME
) or die('Подключение к базе данных отсутствует');
