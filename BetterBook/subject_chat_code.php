<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
/**
 * 
 */
class SubjectChat
{
	
	function __construct()
	{
		include 'database.php';
	}

	//function to get profile information
	public function get_profile($user) {
		$db = new Database();
		$connection = $db->open_connection("1153791");

		$findProfile = "SELECT * FROM accounts WHERE email LIKE '%" . $user . "%' LIMIT 1";
		
		$resultProfile = $db->queryDb($connection, $findProfile);
		/*if (!$result) {
		    trigger_error('Invalid query: ' . $connection->error);
		}*/
		if ($resultProfile->num_rows > 0) {
			return $profileData = mysqli_fetch_assoc($resultProfile);
		} else {
			$_SESSION['failMsg'] = "Email or password is incorrect!";
		}		
	}

	//currently generic fetch users - will be adapted into 'online users'
	public function get_users($room_name) {
		$db = new Database();
		$connection = $db->open_connection("1153791");

		$getusers = "SELECT DISTINCT `accounts`.`profile_picture`, `accounts`.`email`, `accounts`.`first_name`, `accounts`.`last_name`, `private_messages`.`receiver` FROM `accounts` INNER JOIN `private_messages` ON  `accounts`.`email` = `private_messages`.`sender` WHERE `private_messages`.`receiver` LIKE '%" . $room_name . "%';";

		$foundUsers = $db->queryDb($connection, $getusers);

		if(!$foundUsers) {
			trigger_error('Ivalid query: ' . $connection->error);
		}
		return $foundUsers;
	}

	public function get_course_posts($course_name) {
		$db = new Database();
		$connection = $db->open_connection("1153791");

		$getPrivMsgs = 'SELECT `accounts`.`profile_picture`,`private_messages`.`sender`, `private_messages`.`receiver`, `private_messages`.`message_contents`, `private_messages`.`sent_time` FROM `private_messages` INNER JOIN `accounts` ON `private_messages`.`sender` = `accounts`.`email` WHERE `private_messages`.`receiver` = "' . $course_name . '" ORDER BY `private_messages`.`sent_time` DESC';
		
		//"SELECT * FROM private_messages WHERE receiver LIKE '%" . $course_name . "%' ORDER BY `private_messages`.`sent_time` DESC";

		$result = $db->queryDb($connection, $getPrivMsgs);

		if (!$result) {
		    trigger_error('Invalid query: ' . $connection->error);
		}

		return $result;		
	}
}