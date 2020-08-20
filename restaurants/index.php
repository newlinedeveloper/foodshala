<?php
session_start();

class RESTAURANT
{
	public $resId;
	public $resName;
	public $owner;
	public $email;
	public $password;
	public $phone;
	public $address;
	public $city;
	public $zipcode;
	public $state;
	public $country;
	public $conn;

	function __construct()
	{
		try{

			require_once("../db/db.php");
			$this->conn = createDBConnection();

		}catch(Exception $e){
                echo "Exception: ".$e;
            }
		// $response = array("message" => "Restaurant Object created successfully");
		// echo json_encode($response);
	}

	function addRes($resName,$owner,$emailId,$phone,$address,$city,$zipcode,$state,$country,$password,$description)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{

				$res_id = "res_";

				$characters = '0123456789'; 
			    $randomString = ''; 
			  
			    for ($i = 0; $i < 5; $i++) { 
			        $index = rand(0, strlen($characters) - 1); 
			        $randomString .= $characters[$index]; 
			    }

			    $res_id .= $randomString;

				$query = "INSERT INTO restaurants_details(res_id,res_name,owner,email_id,phone,address,city,state,country,zipcode,password,description) VALUES('".$res_id."','".$resName."','".$owner."','".$emailId."','".$phone."','".$address."','".$city."','".$state."','".$country."','".$zipcode."','".$password."','".$description."')";
				// echo $query;
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "Restaurant add successfully";
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

	function resLogin($username,$password)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$query = "SELECT * from restaurants_details where email_id='".$username."' and password='".$password."'";
				// echo $query;
				$result = $this->conn->query($query);
				// var_dump($result);
				if (isset($result->num_rows) && $result->num_rows >0)
				{
					$returnMsg = "Login successfully"; 

					$_SESSION["user"] = "restaurant";

					while ($row = $result->fetch_array()){

					   $_SESSION["res_id"] = $row['res_id'];
						$_SESSION["res_name"] = $row['res_name'];
						$_SESSION["owner"] = $row['owner'];
						$_SESSION["email_id"] = $row['email_id'];
						$_SESSION["phone"] = $row['phone'];
						$_SESSION["address"] = $row['address'];
						$_SESSION["city"] = $row['city'];
						$_SESSION["zipcode"] = $row['zipcode'];
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

	function addMenu($resId,$menuName,$description,$category,$rate,$price)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$menuId = "menu_";
				$characters = '0123456789'; 
			    $randomString = ''; 
			  
			    for ($i = 0; $i < 5; $i++) { 
			        $index = rand(0, strlen($characters) - 1); 
			        $randomString .= $characters[$index]; 
			    }

			    $menuId .= $randomString; 

				$query = "INSERT INTO menu_details(res_id,menu_id,menu_name,category,rate,price,description) VALUES('".$resId."','".$menuId."','".$menuName."','".$category."','".$rate."','".$price."','".$description."')";
				// echo $query;
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "Menu add successfully";
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

	function updateMenu($resId,$menuId,$menuName,$category,$rate,$price)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$query = "UPDATE menu_details SET menu_name='".$menuName."',category='".$category."',rate='".$rate."',price='".$price."' WHERE res_id='".$resId."' and menu_id='".$menuId."'";
				// echo $query;
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "Menu Updated successfully";
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

	function deleteMenu($resId,$menuId){

		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$query = "DELETE FROM menu_details WHERE res_id='".$resId."' and menu_id='".$menuId."'";
				// echo $query;
				if ($this->conn->query($query) === True)
				{
					$returnMsg = "Menu Deleted successfully";
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

	function viewMenus($resId)
	{
		$returnMsg = "";
		$resultMsg = array();
		try{
			if($this->conn != "0")
			{
				$query = "SELECT * FROM menu_details WHERE res_id='".$resId."'";
				// echo $query;
				$result = $this->conn->query($query);
				// var_dump($result);
				if (isset($result->num_rows) && $result->num_rows >0)
				{
					$returnMsg = "Menu's Displayed successfully";

					while ($row = $result->fetch_array()){
					    $json[] = $row;
					  }
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
		$response = array("message" => "Menu's Displayed successfully");
		echo json_encode($json);
	}

	function viewMenu($resId,$menuId)
	{
		$returnMsg = "";
		try{
			if($this->conn != "0")
			{
				$query = "SELECT * FROM menu_details WHERE res_id='".$resId."' and menu_id='".$menuId."'";
				$result = $this->conn->query($query);
				// var_dump($result);
				if (isset($result->num_rows) && $result->num_rows >0)
				{
					$returnMsg = "Menu Details Displayed successfully";
					while ($row = $result->fetch_array()){
					    $json[] = $row;
					  }
					
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
		$response = array("message" => "Menu Details Displayed successfully");
		echo json_encode($json);
	}

	function fetchRes()
	{
		$returnMsg = "";
		$response = array();
		try{
			if($this->conn != "0")
			{
				$query = "SELECT * FROM restaurants_details";
				$result = $this->conn->query($query);
				// var_dump($result);
				if (isset($result->num_rows) && $result->num_rows >0)
				{
					$response['message'] = "Restaurants Displayed successfully";
					$response['result'] = $result;

					while ($row = $result->fetch_array()){
					    $json[] = $row;
					  }
					
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
		// $response = array("message" => "Menu Details Displayed successfully");
		echo json_encode($json);
	}
	
}



$Restaurant = new RESTAURANT();

if(isset($_POST['form']) && $_POST['form'] == "res-register-form" )
{
	if(isset($_POST['res_name'])) $res_name = $_POST['res_name'];
	if(isset($_POST['owner'])) $owner = $_POST['owner'];
	if(isset($_POST['email'])) $email = $_POST['email'];
	if(isset($_POST['phone'])) $phone = $_POST['phone'];
	if(isset($_POST['password'])) $password = md5($_POST['password']);
	if(isset($_POST['address'])) $address = $_POST['address'];
	if(isset($_POST['city'])) $city = $_POST['city'];
	if(isset($_POST['zipcode'])) $zipcode = $_POST['zipcode'];
	if(isset($_POST['state'])) $state = $_POST['state'];
	if(isset($_POST['country'])) $country = $_POST['country'];
	if(isset($_POST['description'])) $description = $_POST['description'];

	
	$Restaurant->addRes($res_name,$owner,$email,$phone,$address,$city,$zipcode,$state,$country,$password,$description);

}

if(isset($_POST['form']) && $_POST['form'] == "Menu-add-page" )
{
	if(isset($_POST['res_id'])) $res_id = $_POST['res_id'];
	if(isset($_POST['menu_name'])) $menu_name = $_POST['menu_name'];
	if(isset($_POST['description'])) $description = $_POST['description'];
	if(isset($_POST['category'])) $category = $_POST['category'];
	if(isset($_POST['rate'])) $rate = $_POST['rate'];
	if(isset($_POST['price'])) $price = $_POST['price'];

	
	$Restaurant->addMenu($res_id,$menu_name,$description,$category,$rate,$price);

}


if(isset($_POST['form']) &&  $_POST['form'] == "login-page")
{
	if(isset($_POST['username'])) $username = $_POST['username'];
	if(isset($_POST['password'])) $password = md5($_POST['password']);

	$Restaurant->resLogin($username,$password);
}

if(isset($_POST['form']) && $_POST['form'] == "home-page")
{
	$Restaurant->fetchRes();
}

if(isset($_POST['form']) && $_POST['form'] == "res-dashboard")
{	
	if(isset($_SESSION['res_id'])) $res_id = $_SESSION['res_id'];
		$Restaurant->viewMenus($res_id);
}

if(isset($_POST['form']) && $_POST['form'] == "Restaurant-page")
{
	if(isset($_POST['res_id'])) $res_id = $_POST['res_id'];
		$Restaurant->viewMenus($res_id);
}

if(isset($_POST['form']) &&  $_POST['form'] == "get_menu")
{
	if(isset($_POST['res_id'])) $res_id = $_POST['res_id'];
	if(isset($_POST['menu_id'])) $menu_id = $_POST['menu_id'];

	$Restaurant->viewMenu($res_id,$menu_id);
}

if(isset($_POST['form']) && $_POST['form'] == "logout")
{
	session_unset();
}


?>