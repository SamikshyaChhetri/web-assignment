<?php
session_start();
session_unset();
session_destroy();
header('Location: lab_3.5.php');
exit;
