<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
/**
 * Class for manipulating the profile page
 */
class Profile
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

	public function updateBio($textUpdate, $userProfile){
		$db = new Database();
		$connection = $db->open_connection("1153791");

		$updateProfile = "UPDATE accounts SET about_text = '" . $textUpdate . "' WHERE email LIKE '%" . $userProfile . "%'";
		$successUpdate = $db->queryDb($connection, $updateProfile);
		
		if (!$successUpdate) {
		    trigger_error('Invalid query: ' . $connection->error);
		} else {
			echo '<script>window.location="profile_page.php?user='.$userProfile.'"</script>';
		}
	}

	public function get_profile_activity($userProfile) {
		$db = new Database();
		$connection = $db->open_connection("1153791");

        //add 'LIMIT' and a number if you wish to have a limit of posts
		$getUsersPosts = "SELECT * FROM forum_posts WHERE post_author LIKE '%" . $userProfile . "%'";
		
		$resultProfile = $db->queryDb($connection, $getUsersPosts);

		if (!$resultProfile) {
		    trigger_error('Invalid query: ' . $connection->error);
		}

		return $resultProfile;
	}

	public function create_post($titleToPost, $textToPost,$userWhoPosted) {
		$db = new Database();
		$connection = $db->open_connection("1153791");

		$createPostQuery = "INSERT INTO forum_posts (post_title, post_text, post_author, post_date, edit_date) VALUES ('" . $titleToPost . "', '" . $textToPost . "', '" . $userWhoPosted . "', '" . date('Y-m-d H:i:s') . "', '" . date('Y-m-d H:i:s') . "')";

		$resultPost = $db->queryDb($connection, $createPostQuery);

		if (!$resultPost) {
		    trigger_error('Invalid query: ' . $connection->error);
		} else {
			 echo '<script>window.location="profile_page.php?user='.$userWhoPosted.'"</script>';
		}
	}

	public function uploadPicture($file, $userWhoUploaded) {
		$db = new Database();
		$connection = $db->open_connection("1153791");

		$target_path = "assets/"; 
		$target_path = $target_path.basename($file["name"]); 
		 
		if(move_uploaded_file($file['tmp_name'], $target_path)) { 
			$addRefToDB = "UPDATE accounts SET profile_picture = '" . $file["name"] . "' WHERE email LIKE '%" . $userWhoUploaded . "%'";
			$addRefQuery = $db->queryDb($connection, $addRefToDB);
			if (!$addRefQuery) {
			    trigger_error('Invalid query: ' . $connection->error);
			} else {
				echo '<script>window.location="profile_page.php?user='.$userWhoUploaded.'"</script>';
			}
		} else{ 
			echo "Sorry, file not uploaded, please try again!"; 
		} 
	}
}

