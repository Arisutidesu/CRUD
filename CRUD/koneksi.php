<?php

function koneksi(): PDO
{
   $host      = "localhost";
   $port      = 3306;
   $database  = "to-do-list";
   $username  = "root";
   $password  = "";

   return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
