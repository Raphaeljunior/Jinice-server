<?php
/**
 * Created by PhpStorm.
 * User: CODING_MOVAT
 * Date: 7/2/14
 * Time: 1:42 PM
 */
include('Volunteer.php');

$name = $_GET['name'];
$number = $_GET['number'];
$education = $_GET['education'];
$skill = $_GET['skill'];

$vol = new Volunteer();
$vol->education = $education;
$vol->number = $number;
$vol->name = $name;
$vol->skills = $skill;
if($vol->volunteer())
{
    echo "Success";
}

