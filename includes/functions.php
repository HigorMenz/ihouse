<?php

require 'app.php';

function templateInclude(string $name, bool $home = false){
    include TEMPLATES_URL . "/$name.php";
}