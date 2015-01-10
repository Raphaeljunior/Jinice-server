<?php
/**
 * Created by PhpStorm.
 * User: CODING_MOVAT
 * Date: 7/2/14
 * Time: 3:49 PM
 */
include('Petition.php');

$name = $_GET['names'];
$id = $_GET['id'];
$county = $_GET['county'];
$mail = $_GET['mail'];
$vol = new Petition();
$vol->email = $mail;
$vol->id = $id;
$vol->county = $county;
$vol->$name = $name;
if($vol->volunteer())
{
    echo "Success";
}