<div class="titulo">Error Handler</div>

<?php

ini_set('display_errors',1);

echo 4 / 0 . '<br>';

error_reporting(E_ERROR);  

echo 4 / 0 . '<br>';

error_reporting(E_ALL);  

echo 4 / 0 . '<br>';
