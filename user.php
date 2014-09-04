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
            if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$records_array          = array();				
				$user_id	            = $_REQUEST['user_id'];
                $see_profile_id	        = $_REQUEST['see_profile_id'];
				if($user_id !="" && $see_profile_id !='')
				{
                    $sql_user="SELECT ava_users.id,display_name,user_dob,user_contactno,user_address,user_facebook_id,img_fullsize,img_resize,total_feed, count(distinct ava_ns_foll_to.following_to) as following_to,count(distinct ava_ns_foll_by.user_id) as following_by,(case when count(is_following.id)>0 then 1 else 0 end) as is_following FROM `ava_users` left join `ava_ns_follower_following` ava_ns_foll_to on `ava_ns_foll_to`.user_id=`ava_users`.`id` left join `ava_ns_follower_following` ava_ns_foll_by on `ava_ns_foll_by`.following_to=`ava_users`.`id` left join `ava_ns_follower_following` is_following on `is_following`.`following_to`='".$see_profile_id."' && `is_following`.`user_id`='".$user_id."' WHERE `ava_users`.`id`='".$see_profile_id."' and `role_id`=8";
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
                            $profile_info['is_following']       =   $row->is_following;
							$records_array['profile_data']      =   $profile_info;
							$records_array['user_id']           =   $row->id;
                            $records_array['status']            =   "True";
                            $records_array['message']           =   "User details.";
                        }
                        else
                        {
                            $records_array['status']            =   "False";
                            $records_array['message']           =   "User details are empty.";
                        }
                    } 
				    else
				    {						   
                        $records_array['status']                =   "False";		
                        $records_array['message']               =   "User id not present.";
                    }           
				}
				else
				{
                    $records_array['status']                    =   "False";		
                    $records_array['message']                   =   "User id or see profile id could not be blank.";
				}
                return $records_array;
			}		
			else
            {
				return array("ERROR"=>"Send Data via POST");
			}
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
	public function update_profile()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array          = array();				
            $profile_id	            = $_REQUEST['user_id'];
            $display_name	        = $_REQUEST['display_name'];
            $username		        = $_REQUEST['user_name'];	
            $emailid	            = $_REQUEST['email_id'];
            $contactno 	            = $_REQUEST['contact_no'];
            $dob		            = $_REQUEST['dob'];						
            $address	            = $_REQUEST['address']; 
            if($profile_id !=""&&$emailid !='')
            {
                $sql_user="SELECT * FROM `ava_users` WHERE `id`='".$profile_id."' and `role_id`=8";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
                    $row = $this->_db->my_fetch_object($result_user);
                    if($row->active!=1)
                    {
                        return $this->user_not_online();
                    }
                    $sql="update `ava_users` set `display_name`='".$display_name."', `username`='".$username."',`user_contactno`='".$contactno."', `user_dob`='".$dob."',`email`='".$emailid."', `user_address`='".$address."',`ns_updated_on`='".date('Y-m-d H:i:s')."'where id ='".$profile_id."'"; 
                    $result = $this->_db->my_query($sql);
                    if($result)
                    {   
                        $sql_user="SELECT * FROM `ava_users` where `id`='".$profile_id."'";
                        $result_user = $this->_db->my_query($sql_user);
                        if($this->_db->my_num_rows($result_user) >= 1)
                        {   
                            $profile_info=array();
                            $row_detail = $this->_db->my_fetch_object($result_user);
                            $profile_info['name']               =   $row_detail->display_name;
                            $profile_info['dob']                =   $row_detail->user_dob;
                            $profile_info['contact_no']         =   $row_detail->user_contactno;
                            $profile_info['address']            =   $row_detail->user_address;
                            $profile_info['facebook_id']        =   $row_detail->user_facebook_id;
                            $profile_info['follow_by']          =   JSON_DECODE($row_detail->follow_by,JSON_FORCE_OBJECT);
                            $profile_info['following_to']       =   JSON_DECODE($row_detail->following_to,JSON_FORCE_OBJECT);
                            $profile_info['total_follow_by']    =   COUNT(JSON_DECODE($row_detail->follow_by,JSON_FORCE_OBJECT));
                            $profile_info['total_following_to'] =   COUNT(JSON_DECODE($row_detail->following_to,JSON_FORCE_OBJECT));
                            $profile_info['image_fullsize']     =   $row_detail->img_fullsize;
                            $profile_info['image_resize']       =   $row_detail->img_resize;
                            $profile_info['total_post']        	=   $row_detail->total_feed;
                            $records_array['profile_data']      =   $profile_info;
                            $records_array['user_id']           =   $row_detail->id;
                            $records_array['status']        = "True";
                            $records_array['message']       = "Profile updated successfully.";
                        }
                        else
                        {
                            $records_array['status']        = "FALSE";
                            $records_array['message']       = "Unable to update profile.";
                        }
                        
                    }
                    else
                    {
                        $records_array['status']        = "False";
                        $records_array['message']       = "Problem in updating profile.";
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
                $records_array['message']               = "User id and email id could not be blank.";
            }
            return $records_array;
        }		
        else
        {
            return array("ERROR"=>"Send Data via POST");
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
	

			$records_array           = array();				
            $item_uploadedBy	     = $_REQUEST['item_uploadedBy'];
            $item_name	             = $_REQUEST['item_name'];
			$item_brand	             = $_REQUEST['item_brand'];
			$item_type	             = $_REQUEST['item_type'];
			$item_year	             = $_REQUEST['item_year'];
			$item_color	             = $_REQUEST['item_color'];
			$item_photo	             = $_REQUEST['item_photo'];
	
		$sql="INSERT INTO `uploadimage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
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
	
	}
}
?>
