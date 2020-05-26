<?php

$db = new PDO(
    'mysql:dbname=tp_mini_jeu;host=localhost',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
