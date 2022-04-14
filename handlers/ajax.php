<?php
session_start(); 
include("../configforchat.php");

if( isset($_REQUEST['action']) ){


	switch( $_REQUEST['action'] ){



		case "SendMessage":

			session_start();

			$query = $db->prepare("INSERT INTO chat SET email=?, message=?");

			$query->execute([$_SESSION['email'], $_REQUEST['message']]);

			echo 1;


		break;




		case "getChat":

            $email = $_SESSION['email'];
			$query = $db->prepare("SELECT * from chat WHERE email = '$email'");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){

				$chat .=  '<div class="siglemessage"><strong>'.$r->email.' says:  </strong>'.$r->message.'</div>';

			}

			echo $chat;


		break;



	}


}


?>