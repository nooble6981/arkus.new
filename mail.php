<?php

$recepient = "nooble6981@gmail.com";
$sitename = "Arkus";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$adress = trim($_GET["mark"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nМарка: $mark";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");