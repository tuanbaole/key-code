<?php
session_start();
include('function.php');
if(session_destroy()) {
    redirect('index.php');
}