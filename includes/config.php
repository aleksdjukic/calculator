<?php
spl_autoload_register(function ($class_name) {
    include_once __DIR__ . '/../class/' . $class_name . '.php';
});

