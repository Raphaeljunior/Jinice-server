<?php
/**
 * Created by PhpStorm.
 * User: CODING_MOVAT
 * Date: 7/2/14
 * Time: 3:17 PM
 */
include('Connect.php');
include('Constants.php');
class Petition {

    public $name,$county,$id,$email;
    function __construct()
    {


    }
    function volunteer()
    {

        $name = $this->name;
        $county = $this->county;
        $email= $this->email;

        $id = $this->id;
        $link = new Connect(SERVER,PASSWORD,USER);
        $query = "INSERT INTO `jinice`.`petition` (`idNo`, `County`, `email`, `name`) VALUES ('$id', '$county', '$email', '$name')";

        if($link->postQuery(DATABASE,$query))
        {
            return true;
        }
        return false;
    }


} 