<?php
	
	if (isset($_GET['tag']) && $_GET['tag'] != '') {
		$tag = $_GET['tag'];

		
		if($tag == 'volunteers'){
            require_once('Volunteer.php');

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

		}
		else if($tag == 'petition'){
            require_once('Petition.php');

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
		}
	
		else {
		  	echo "Invalid Request";
		}		
	}
	else{
		echo('Access Denied');
	}
?>