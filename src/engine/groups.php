<?php  
    require_once('config.php');

    $session_id = $_SESSION['id'];

    $sql = $link->prepare("SELECT * FROM `deru_users` WHERE `id` = :session_id");
	$sql->execute(array('session_id' => $session_id));
    $array = $sql->fetch(PDO::FETCH_ASSOC);
    
    $deru_id = $array['id'];
    $deru_name = $array['name'];
    $deru_email = $array['email'];
    $deru_group = $array['user_group'];
    $deru_regdate = $array['regdate'];
?>