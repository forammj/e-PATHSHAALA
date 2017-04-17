<?php

session_start();
if (isset($_SESSION['logged-in'])) {

unset($_SESSION['logged-in']);


}
session_destroy();

header('Location: index.html');

?>