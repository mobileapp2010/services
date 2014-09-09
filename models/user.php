<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Author : 
 * Email  : 
 * Timestamp : April-07 06:11PM
 * Copyright : nosave
 * Last updated : 12-06-2014
 *
 */
class user
{
	public $_responce = array();
    /**
	* @method __construct
    * @param null
	* @see private constructor to protect beign inherited
	* @access private
	* @return void
	*/
	public function __construct()
	{
		/// -- Create Database Connection instance --
		$this->_db=env::getInst();
		$this->_appid = generalize::$_appid; 
		$this->_adminemail = generalize::$_adminemail; 
		$this->_generalize = new generalize();
    }
	/**
	* @method login
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://localhost/nosave/services/user/login
	*/
	public function login()
    {
       // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array      = array();				
            //$email_id	        = $_REQUEST['email_id'];
            //$pwd		        = $_REQUEST['password'];
            $username	    = $_REQUEST['username'];
            $password		    = $_REQUEST['password'];
            // $device_token_id	= $_REQUEST['device_token_id'];/*add device_token_id */

            if($username !="" && $password!='')
            {
               
                $sql_user="SELECT * from users where `username` ='".$username."' and `password` ='".$password."'";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
                    
                    $profile_info=array();
                    $row = $this->_db->my_fetch_object($result_user);
                   
                    
                     
                       
                        $records_array['user_id']        =   $row->id;
						$records_array['username']       =   $row->username;
						$records_array['name']           =   $row->name;
						$records_array['email']          =   $row->email;
						$records_array['profile_picture']    = $row->profile_picture;
						$records_array['biography']      =   $row->biography;
                        $records_array['status']         =   "True";
                        $records_array['message']        =   "Login successfully.";
                        
                     
                    
                } 
                else
                {						   
                    $records_array['status']            =   "False";		
                    $records_array['message']           =   "No user present with this Username.";
                }           
            }
            else
            {
                $records_array['status']                =   "False";
                if(!isset($username)&&!isset($password))
                {
                    $records_array['message']           =   "Username, Password  cannot be blank.";  
                }
                else if(!isset($password))
                {
                    $records_array['message']           =   "Password could not be blank.";  
                }
                else
                {
                    $records_array['message']           =   "Problem in Username id.";
                }
            }
            return $records_array;
        }		
      //  else
       // {
       //     return array("ERROR"=>"Send Data via POST");
       // }
	}
   
   /**
	* @method register_user
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://localhost/yogesh/user/register_user
	*/
	public function register_user()
    {
       // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array      = array();				
            $name	            = $_REQUEST['name'];
            $username		    = $_REQUEST['username'];	
            $emailid	        = $_REQUEST['email'];
            $password 	    = $_REQUEST['password'];
           	
            if($name !="" &&  $emailid!='')
            {
                $sql_user="SELECT * FROM `users` WHERE `email`='".$emailid."' or `username`='".$username."' ";
                $result1_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result1_user) >= 1)
                {
                    $records_array['status']= "False";
                    $records_array['message'] = "Email id or Username already registered.";
                } 
                else
                {			
                    $current_timestamp=date('Y-m-d h:i:s');
                    $sql="INSERT INTO `users`(`username`, `name`, `email`,`password`) 
                   VALUES ('".$username."','".$name."','".$emailid."','".$password."')";
					
                    $result = $this->_db->my_query($sql);
                    if($result)
                    {	
						
						require_once('class.phpmailer.php');
						include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

						$mail             = new PHPMailer();

						$body             = file_get_contents('template.html');
						$body             = eregi_replace("[\]",'',$body);

						$mail->IsSMTP(); // telling the class to use SMTP
						$mail->Host       = "mail.gmail.com"; // SMTP server
						$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
																   // 1 = errors and messages
																   // 2 = messages only
						$mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
						$mail->Username   = "shoeradaroffical@gmail.com";  // GMAIL username
						$mail->Password   = "shoeradar2014";            // GMAIL password

						$mail->SetFrom('shoeradaroffical@gmail.com', 'Shoe Radar');

						$mail->AddReplyTo("shoeradaroffical@gmail.com","Shoe Radar");

						$mail->Subject    = "Registered Successfully";

						$mail->AltBody    = "Congratulation!!! You registered successfully";
						$mail->MsgHTML("Congratulation!!! You registered successfully");

						$address = $emailid;
						$mail->AddAddress($address,$name);

						//$mail->AddAttachment("images/phpmailer.gif");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

						if(!$mail->Send()) {
						  echo "Mailer Error: " . $mail->ErrorInfo;
						} else {
						  echo "Message sent!";
						}
						
						
						
						
                        $records_array['status']    = "True";
                        $records_array['message']   = "User register successfully.";
                    }
                    else
                    {
                        $records_array['status']    = "False";
                        $records_array['message']   = "Problem in registering user.";
                    }
                }  
            }
            else
            {
                $records_array['status'] = "False";
                $records_array['message'] = "Name and email id could not be null.";
            }
            return $records_array;
        }		
      //  else
       // {
       //     return array("ERROR"=>"Send Data via POST");
       // }
	}
    
   
    /**
	* @method followed_to
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://hostname/nosave/services/user/followed_to
	*/
	public function followed_to()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array                  = array();				
            $user_id		                = $_REQUEST['user_id'];
            $followed_j_array		        = $_REQUEST['followed_array'];	
            if($user_id !=""&&$followed_j_array !="")
            {
                    $sql_check_online=$sql_user="SELECT * FROM `ava_users` WHERE `active`='1' and `id`='".$user_id."'";
                    $sql_check_online_data = $this->_db->my_query($sql_check_online);
                    if($this->_db->my_num_rows($sql_check_online_data) >= 1)
                    {
                        $following_detail=json_decode($followed_j_array,JSON_FORCE_OBJECT);
                        $following_by=array();
                        if(isset($following_detail)&&$following_detail!=null)
                        {
                            foreach ($following_detail as $key) 
                            {  
                                if($key['user_id']!='')
                                {
                                   $sql_check_follower_following="select * from `ava_ns_follower_following` where `user_id`='".$user_id."' and `following_to`='".$key['user_id']."'";
                                    $result_sql_check_follower_following = $this->_db->my_query($sql_check_follower_following);
                                    if($this->_db->my_num_rows($result_sql_check_follower_following)<1)
                                    {
                                        $sql_insert_follower_following="insert into `ava_ns_follower_following` (`user_id`,`following_to`) value('".$user_id."','".$key['user_id']."')";
                                        $result_sql_insert_follower_following = $this->_db->my_query($sql_insert_follower_following);
                                    }
                                }    
                            }
                            $records_array['status']            = "True";		
                            $records_array['message']           = "Following successfully.";
                        }
                        else
                        {   
                            $records_array['status']            = "False";		
                            $records_array['message']           = "Problem in following user.";
                        }   
                    }
                    else
                    {
                        return $this->user_not_online();
                    }
                   
            }
            else
            {
                $records_array['status']            = "False";		
                $records_array['message']           = "user id or followed array could not be blank.";
            }
           
        }
        else
        {
           $records_array= array("ERROR"=>"Send Data via POST");
        }
        return $records_array;
    }
    /**
	* @method unfollow
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://hostname/nosave/services/user/unfollow
	*/
    public function unfollow()
    {
		if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array                  = array();				
            $user_id		                = $_REQUEST['user_id'];
            $unfollowed_id		        	= $_REQUEST['unfollowed_id'];	
            if($user_id !=""&&$unfollowed_id !="")
            {
                $sql_check_online=$sql_user="SELECT * FROM `ava_users` WHERE `active`='1' and `id`='".$user_id."'";
                $sql_check_online_data = $this->_db->my_query($sql_check_online);
                if($this->_db->my_num_rows($sql_check_online_data) >= 1)
                {
                    $sql_check_follower_following="select * from `ava_ns_follower_following` where `user_id`='".$user_id."'";
                    $result_sql_check_follower_following = $this->_db->my_query($sql_check_follower_following);
                    if($this->_db->my_num_rows($result_sql_check_follower_following)>1)
                    {
                        $sql_is_following_to="select * from `ava_ns_follower_following` where `user_id`='".$user_id."' and `following_to`= '".$unfollowed_id."'";
                        $result_sql_is_following_to = $this->_db->my_query($sql_is_following_to);
                        if($this->_db->my_num_rows($result_sql_is_following_to)>0)
                        {
                            $unfollow= "DELETE FROM ava_ns_follower_following WHERE user_id='".$user_id."' and `following_to`= '".$unfollowed_id."' ";
                            $result=mysql_query($unfollow);
                            if($result)
                            {
                                $records_array['status']            = "True";		
                                $records_array['message']           = "Unfollow Successfully.";
                            }
                            else
                            {
                                $records_array['status']            = "False";		
                                $records_array['message']           = "Problem in unfollowing user.";
                            }
                        }
                        else
                        {	
                            $records_array['status']                = "True";		
                            $records_array['message']               = "Already unfollowing.";
                        }
                    }       
                    else
                    {
                        $records_array['status']                    = "False";		
                        $records_array['message']                   = "User not following to any one.";
                    }
                }
                else
                {
                    $records_array['status']            = "False";		
                    $records_array['message']           = "user id not present, please registered first.";
                }
            }
            else
            {
                $records_array['status']            = "False";		
                $records_array['message']           = "user id or unfollowed_id could not be blank.";
            }
        }
        else
        {
           $records_array= array("ERROR"=>"Send Data via POST");
        }
        return $records_array;
	}
    
   
    
    /**
	* @method get_profile
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://hostname/nosave/services/user/get_profile
	*/
	public function get_profile()
    {
       // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array      = array();				
            $username	    = $_REQUEST['user_id'];
           

            if($username !="")
            {
               
                $sql_user="SELECT * from users where `id` ='".$username."'";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
                    
                    $profile_info=array();
                    $row = $this->_db->my_fetch_object($result_user);
                   
                    
                     
                       
                        $records_array['user_id']        =   $row->id;
						
						$records_array['profile_picture']    = $row->profile_picture;
						$records_array['biography']      =   $row->biography;
                        $records_array['status']         =   "True";
                        $records_array['message']        =   "Get Profile successfully.";
                        
                     
                    
                } 
                else
                {						   
                    $records_array['status']            =   "False";		
                    $records_array['message']           =   "No user present with this Username.";
                }           
            }
            else
            {
                $records_array['status']                =   "False";
                if(!isset($username))
                {
                    $records_array['message']           =   "Username  cannot be blank.";  
                }
               
                else
                {
                    $records_array['message']           =   "Problem in Username id.";
                }
            }
            return $records_array;
        }		
      //  else
       // {
       //     return array("ERROR"=>"Send Data via POST");
       // }
	}
   
    
    /**
	* @method get_my_profile
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://hostname/nosave/services/user/get_my_profile
	*/
	public function get_my_profile()
    {
            if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$records_array      = array();				
				$profile_id	        = $_REQUEST['user_id'];
				if($profile_id !="")
				{
                    $sql_user="SELECT ava_users.id,display_name,user_dob,user_contactno,user_address,user_facebook_id,img_fullsize,img_resize,total_feed, count(distinct ava_ns_foll_to.following_to) as following_to,count(distinct ava_ns_foll_by.user_id) as following_by FROM `ava_users` left join `ava_ns_follower_following` ava_ns_foll_to on `ava_ns_foll_to`.user_id=`ava_users`.`id` left join `ava_ns_follower_following` ava_ns_foll_by on `ava_ns_foll_by`.following_to=`ava_users`.`id` WHERE `ava_users`.`id`='".$profile_id."' and `role_id`=8";
					$result_user = $this->_db->my_query($sql_user);
					if($this->_db->my_num_rows($result_user) >= 1)
					{
                        $row = $this->_db->my_fetch_object($result_user);
                        $profile_info=array();
                        if(($row->id!='')&&isset($row->id))
                        {
                            $profile_info['name']               =   $row->display_name;
							$profile_info['dob']                =   $row->user_dob;
							$profile_info['contact_no']         =   $row->user_contactno;
							$profile_info['address']            =   $row->user_address;
							$profile_info['facebook_id']        =   $row->user_facebook_id;
							$profile_info['follow_by']          =   '';//JSON_DECODE($row->follow_by,JSON_FORCE_OBJECT);
							$profile_info['following_to']       =   '';//JSON_DECODE($row->following_to,JSON_FORCE_OBJECT);
							$profile_info['total_follow_by']    =   $row->following_by;
							$profile_info['total_following_to'] =   $row->following_to;
							$profile_info['image_fullsize']     =   $row->img_fullsize;
							$profile_info['image_resize']       =   $row->img_resize;
							$profile_info['total_post']        	=   $row->total_feed;
							$records_array['profile_data']      =   $profile_info;
							$records_array['user_id']           =   $row->id;
                            $records_array['status']            =   "True";
                            $records_array['message']           =   "User details.";
                        }
                        else
                        {
                            $records_array['status']        = "False";
                            $records_array['message']       = "User details are empty.";
                        }
                    } 
				    else
				    {						   
                        $records_array['status']            = "False";		
                        $records_array['message']           = "User id not present in database.";
                    }           
				}
				else
				{
                    $records_array['status']                = "False";		
                    $records_array['message']               = "User id could not be blank.";
				}
                return $records_array;
			}		
			else
            {
				return array("ERROR"=>"Send Data via POST");
			}
	}
    
    
    
    
    /**
	* @method update_profile
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://hostname/nosave/services/user/update_profile
	*/
	function update_profile()
	{
	 if($_SERVER["REQUEST_METHOD"]=="POST")
        {

			$records_array           = array();				
            $user_id	     = $_REQUEST['user_id'];
            $user_biography	             = $_REQUEST['user_biography'];
			
			$user_photo	             = $_REQUEST['user_photo'];
			
			///
			  define('UPLOAD_DIR', '../image/');
       
		
		$img = $_REQUEST['user_photo'];
		
        $img = str_replace('data:image/png;base64,', '', $img);//for png images
		$img = str_replace('data:image/jpg;base64,', '', $img);//for png images
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
		$unq_Id = uniqid();
        $file = UPLOAD_DIR . $unq_Id . '.jpg';
        $success=file_put_contents($file,$data);
		
		$user_photo = 'http://educesoftware.com/monty/image/'. $unq_Id .'.jpg';
      //  print $success ? $file : 'Unable to save the file.';
	/////////////////
	
				
		$sql="INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('".$item_uploadedBy."','".$item_name."','".$item_brand."','".$item_type."','".$item_year."','".$item_color."','".$item_photo."')";
				   
		$sql="update users set biography = '".$user_biography."', profile_picture = '".$user_photo."' where `id`= '".$user_id."' ";		  
		$result = $this->_db->my_query($sql);
                    if($result)
                    {
                        $records_array['status']    = "True";
                        $records_array['message']   = "Profile Updated successfully.";
                    }
                    else
                    {
                        $records_array['status']    = "False";
                        $records_array['message']   = "Problem in Updating Profile.";
                    }
					 return $records_array;
		}
else{
$records_array['status']    = "False";
                        $records_array['message']   = "Not POST Method";
return $records_array;
}
	
	}

    /**
	* @method feedimage
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://hostname/nosave/services/user/feedimage?device_id=''&user_id=''&image_id=''
	*/
	
	
	function uploadImage()
	{
	 if($_SERVER["REQUEST_METHOD"]=="POST")
        {

			$records_array           = array();				
            $item_uploadedBy	     = $_REQUEST['item_uploadedBy'];
            $item_name	             = $_REQUEST['item_name'];
			$item_brand	             = $_REQUEST['item_brand'];
			$item_type	             = $_REQUEST['item_type'];
			$item_year	             = $_REQUEST['item_year'];
			$item_color	             = $_REQUEST['item_color'];
			$item_photo	             = $_REQUEST['item_photo'];
			
			///
			  define('UPLOAD_DIR', '../image/');
       
		
		$img = $_REQUEST['item_photo'];
		
        $img = str_replace('data:image/png;base64,', '', $img);//for png images
		$img = str_replace('data:image/jpg;base64,', '', $img);//for png images
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
		$unq_Id = uniqid();
        $file = UPLOAD_DIR . $unq_Id . '.jpg';
        $success=file_put_contents($file,$data);
		
		$item_photo = 'http://educesoftware.com/monty/image/'. $unq_Id .'.jpg';
      //  print $success ? $file : 'Unable to save the file.';
	/////////////////
	
				
		$sql="INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('".$item_uploadedBy."','".$item_name."','".$item_brand."','".$item_type."','".$item_year."','".$item_color."','".$item_photo."')";
				   
				  
		$result = $this->_db->my_query($sql);
                    if($result)
                    {
                        $records_array['status']    = "True";
                        $records_array['message']   = "Image Uploaded successfully.";
                    }
                    else
                    {
                        $records_array['status']    = "False";
                        $records_array['message']   = "Problem in Uploading Image.";
                    }
					 return $records_array;
		}
else{
$records_array['status']    = "False";
                        $records_array['message']   = "Not POST Method";
return $records_array;
}
	
	}
	function getItemDetails()
	{
		$records_array      = array();				
		$current_user_id	    = $_REQUEST['current_user_id'];
        if($current_user_id !="")
        {
               
			$sql="SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy";		
			$result = $this->_db->my_query($sql);
			if($this->_db->my_num_rows($result) >= 1)
			{   
				$data_array=array();
				while($row=$this->_db->my_fetch_object($result))
				{	
					$current_records_array=array();
					$user_detail=array();
					$user_detail['username'] = $row->username;
					$user_detail['id'] =	$row->item_uploadedBy;
					$user_detail['email'] =	$row->email;
					$current_records_array['item_uploadedBy']		=   $user_detail;
					$current_records_array['item_id']  			=   $row->item_id;
					$current_records_array['item_name']  			=   $row->item_name;
					$current_records_array['item_brand']  			=   $row->item_brand;
					$current_records_array['item_type']  			=   $row->item_type;
					$current_records_array['item_year']  			=   $row->item_year;
					$current_records_array['item_color']  			=   $row->item_color;
					$current_records_array['item_photo']  			=   $row->item_photo;
					$current_records_array['item_commentsNumber']  	=   $row->item_commentsNumber;
					$current_records_array['item_likesNumber']  	=   $row->item_likesNumber;
					$current_records_array['item_shareNumber']  	=   $row->item_shareNumber;
					$data_array[]=$current_records_array;
				}
				$records_array['status']            =   "True";		
				$records_array['message']           =   "Data fetch successfully.";
				$records_array['items']				=		$data_array;
			} 
			else
			{						   
				$records_array['status']            =   "False";		
				$records_array['message']           =   "No user present with this current_user_id.";
			}           
        }
		else
		{
			$records_array['status']                =   "False";
			if(!isset($current_user_id))
			{
				$records_array['message']           =   "current_user_id  cannot be blank.";  
			}
			else
			{
				$records_array['message']           =   "Problem in current_user_id id.";
			}
		}
        return $records_array;
	}
}
?>
