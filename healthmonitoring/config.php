<?php
session_start();
if(strlen($_SESSION[id]==0))
{
header('location:logout.php');
}
else
{
?>