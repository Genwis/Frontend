<?php
session_start();
if(!isset($_SESSION['logtok'])){header("Location: login.php");}?>