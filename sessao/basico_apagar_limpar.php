<?php
session_start();
session_destroy();
header('Location:../exercicio.php?dir=sessao&file=basico');