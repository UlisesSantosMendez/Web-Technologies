<?php
session_start();
session_destroy();
header("location: usuario-noregistrado.php");

?>