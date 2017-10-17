<?php

// if /?name= empty, default value 'World'
$input = isset($_GET['name']) ? $_GET['name'] : 'World';

printf('Hello %s', $input);
