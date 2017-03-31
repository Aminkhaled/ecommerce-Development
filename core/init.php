<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 3/30/2017
 * Time: 1:02 PM
 */

$conn = mysqli_connect('localhost','root','','ecommerce');

if(mysqli_connect_error()){
    echo "There is no connection and failed".mysqli_connect_error();
    die();
}