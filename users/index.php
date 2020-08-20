<?php
session_start();

// require_once("../db/db.php");

class USER
{
	public $userId;
	public $userName;
	public $emailId;
	public $phone;
	public $password;
	public $conn;
	

	function __construct()
	{
		try{

			require_once("../db/db.php");
			$this->conn = createDBConnection();
			// var_dump($this->conn);

		}catch(Exception $e){
                //TODO redirect user to error page
                echo "Exception: ".$e;
            }
	}

	function userSignUp($username,$emailId,$phone,$password)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$user_id = "user_";

				$characters = '0123456789'; 
			    $randomString = ''; 
			  
			    for ($i = 0; $i < 5; $i++) { 
			        $index = rand(0, strlen($characters) - 1); 
			        $randomString .= $characters[$index]; 
			    }

			    $user_id .= $randomString;

				$query = "INSERT INTO user_details(user_id,username,email_id,phone,password) VALUES('".$user_id."','".$username."','".$emailId."','".$phone."','".$password."')";
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "User Add successfully";
				}
				else
					$returnMsg = "dbError";
			}
			else
				$returnMsg = "dbConnError";

		}catch(Exception $e){
                //TODO redirect user to error page
                $returnMsg = "Exception: ".$e;
  
            }
		

		$response = array("message" => $returnMsg);
		echo json_encode($response);
		
	}

	function userLogin($username,$password)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$query = "SELECT * from user_details where email_id='".$username."' and password='".$password."'";
				// echo $query;
				$result = $this->conn->query($query);

				if ( isset($result->num_rows) && $result->num_rows >0)
				{

					$returnMsg = "Login successfully";
					$_SESSION["user"] = "customer";

					while ($row = $result->fetch_array()){

					   $_SESSION["user_id"] = $row['user_id'];
						$_SESSION["username"] = $row['username'];
						$_SESSION["email_id"] = $row['email_id'];
					 }
					 $response = array("message" => $returnMsg);
					echo json_encode($response);
				}
				else
					$returnMsg = "dbError";
			}
			else
				$returnMsg = "dbConnError";

		}catch(Exception $e){
                //TODO redirect user to error page
                $returnMsg = "Exception: ".$e;
  
            }
		
		
	}

	function menuOrders($userId,$username,$orders)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$query = "INSERT INTO user_details(user_id,username,email_id,phone,password) VALUES('".$user_id."','".$username."','".$emailId."','".$phone."','".$password."')";
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "Ordered successfully";
				}
				else
					$returnMsg = "dbError";
			}
			else
				$returnMsg = "dbConnError";

		}catch(Exception $e){
                //TODO redirect user to error page
                $returnMsg = "Exception: ".$e;
  
            }
		$response = array("message" => $returnMsg);
		echo json_encode($response);
		
	}

	function viewOrders($userId,$username)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$user_id = "user_01";
				$query = "INSERT INTO user_details(user_id,username,email_id,phone,password) VALUES('".$user_id."','".$username."','".$emailId."','".$phone."','".$password."')";
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "User Add successfully";
				}
				else
					$returnMsg = "dbError";
			}
			else
				$returnMsg = "dbConnError";

		}catch(Exception $e){
                //TODO redirect user to error page
                $returnMsg = "Exception: ".$e;
  
            }
		$response = array("message" => "Order details Displayed");
		echo json_encode($response);
		
	}

}


$user = new USER();


if(isset($_POST['form']) &&  $_POST['form'] == "login-page")
{
	if(isset($_POST['username'])) $username = $_POST['username'];
	if(isset($_POST['password'])) $password = md5($_POST['password']);

	$user->userLogin($username,$password);
}

if(isset($_POST['form']) && $_POST['form'] == "signup-page" )
{
	
	if(isset($_POST['username'])) $username = $_POST['username'];
	if(isset($_POST['email'])) $email = $_POST['email'];
	if(isset($_POST['phone'])) $phone = $_POST['phone'];
	if(isset($_POST['password'])) $password = md5($_POST['password']);
	

	
	$user->userSignUp($username,$email,$phone,$password);

}




?>