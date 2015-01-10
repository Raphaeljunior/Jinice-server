<?php
/**
 * Created by PhpStorm.
 * User: CODING_MOVAT
 * Date: 7/2/14
 * Time: 1:26 PM
 */
include('Connect.php');
include('Constants.php');
class Volunteer {
    public $name,$skills,$education,$number;
    function __construct()
    {


    }
    function volunteer()
    {

        $name = $this->name;
        $skills = $this->skills;
        $education = $this->education;

        $number = $this->number;
        $link = new Connect(SERVER,PASSWORD,USER);
        $query = "INSERT INTO `volunteer` (`name`, `phone`, `skills`, `education`, `RID`) VALUES ('$name', '$number', '$skills', '$education', NULL)";

        if($link->postQuery(DATABASE,$query))
       {
           return true;
       }
       return false;
    }

} 