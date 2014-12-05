<?php
/**
 * Created by PhpStorm.
 * User: Alfredo N
 * Date: 21/10/14
 * Time: 05:20 PM
 */
require'helpers.php';
//require'menu.php';
if(empty($_GET['url']))
    $_GET['url']='login';

controller($_GET['url']);