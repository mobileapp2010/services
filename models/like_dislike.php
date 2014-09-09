<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Author : 
 * Email  : 
 * Timestamp : April-07 06:11PM
 * Copyright : nosave
 * Last updated : 12-06-2014
 *
 */
class like_dislike
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
	* @method like
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://localhost/services/like_dislike/like	*/
	public function like()
    {
       // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array      = array();				
           
            $user_id	    = $_REQUEST['user_id'];
            $photo_id		= $_REQUEST['photo_id'];
            // $device_token_id	= $_REQUEST['device_token_id'];/*add device_token_id */

            if($user_id !="" && $photo_id!='')
            {
               
                $sql_user="SELECT * from users where `id`='".$user_id."'";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
					
                    $sql_photo="SELECT * from uploadImage where `item_id`='".$photo_id."'";
					$result_photo = $this->_db->my_query($sql_photo);
					if($this->_db->my_num_rows($result_photo) >= 1)
					{
						$sql_check_record="SELECT * from `like` where `photo_id`='".$photo_id."' and `user_id`='".$user_id."'";
						$result_check_record = $this->_db->my_query($sql_check_record);
						if($this->_db->my_num_rows($result_check_record) < 1)
						{	
								
							 $sql="INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('".$user_id."','".$photo_id."')";
							$insert_result=$this->_db->my_query($sql);
							if($insert_result)
							{
								$sql_update="update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='".$photo_id."'";
								$update_result=$this->_db->my_query($sql_update);
								if($update_result)
								{
											    $records_array['status']            =   "True";		
												$records_array['message']           =   "Successfully Like image.";
								}
								else
								{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in Liking image.";
								}
								
							}
							else
							{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in Liking image.";
							}
						}
						else
						{
							    $records_array['status']            =   "False";		
								$records_array['message']           =   "Already like this photo.";
						}
					}
					else
					{
								$records_array['status']            =   "False";		
								$records_array['message']           =   "Photo id not present.";
					}
                } 
                else
                {						   
                    $records_array['status']            =   "False";		
                    $records_array['message']           =   "No user present with this user Id.";
                }           
            }
            else
            {
                $records_array['status']                =   "False";
                if(!isset($user_id)&&!isset($photo_id))
                {
                    $records_array['message']           =   "User id or Photo id cannot be blank.";  
                }
                else if(!isset($photo_id))
                {
                    $records_array['message']           =   "User id could not be blank.";  
                }
                else
                {
                    $records_array['message']           =   "Photo id could not be blank.";
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
	* @method dislike
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://localhost/services/like_dislike/dislike	*/
	public function dislike()
    {
       // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array      = array();				
           
            $user_id	    = $_REQUEST['user_id'];
            $photo_id		= $_REQUEST['photo_id'];
            // $device_token_id	= $_REQUEST['device_token_id'];/*add device_token_id */

            if($user_id !="" && $photo_id!='')
            {
               
                $sql_user="SELECT * from users where `id`='".$user_id."'";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
						
                    $sql_photo="SELECT * from uploadImage where `item_id`='".$photo_id."'";
					$result_photo = $this->_db->my_query($sql_photo);
					if($this->_db->my_num_rows($result_photo) >= 1)
					{
						$sql_check_record="SELECT * from `like` where `photo_id`='".$photo_id."' and `user_id`='".$user_id."'";
						$result_check_record = $this->_db->my_query($sql_check_record);
						if($this->_db->my_num_rows($result_check_record) >= 1)
						{
								
							 $sql="Delete from `like` WHERE `user_id`='".$user_id."' and `photo_id`= '".$photo_id."'";
								$delete_result=$this->_db->my_query($sql);
								
							if($delete_result)
							{
								$sql_update="update uploadImage set `item_likesNumber`=`item_likesNumber`-1 where `item_id`='".$photo_id."'";
								$update_result=$this->_db->my_query($sql_update);
								if($update_result)
								{
											    $records_array['status']            =   "True";		
												$records_array['message']           =   "Successfully unlike image.";
								}
								else
								{
												    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in unliking image.";
								
								}
								
								
								
							}
							else
							{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in unliking image.";
							}
						}
						else
						{
							    $records_array['status']            =   "False";		
								$records_array['message']           =   "User already not like this image.";
						}
					}
					else
					{
								$records_array['status']            =   "False";		
								$records_array['message']           =   "Photo id not present.";
					}
                } 
                else
                {						   
                    $records_array['status']            =   "False";		
                    $records_array['message']           =   "No user present with this user Id.";
                }           
            }
            else
            {
                $records_array['status']                =   "False";
                if(!isset($user_id)&&!isset($photo_id))
                {
                    $records_array['message']           =   "User id or Photo id cannot be blank.";  
                }
                else if(!isset($photo_id))
                {
                    $records_array['message']           =   "User id could not be blank.";  
                }
                else
                {
                    $records_array['message']           =   "Photo id could not be blank.";
                }
            }
            return $records_array;
        }		
      //  else
       // {
       //     return array("ERROR"=>"Send Data via POST");
       // }
	}
	/*@method get_like
    * @param null
	* @see public function 
	* @access private
	* @return response message
	* @link URL - http://hostname/services/user/get_like/
    */ 
     function get_like()
    {
			$records_array                   = array();				
            $photo_id	             = $_REQUEST['photo_id'];
            if($photo_id!='')
            {
                $sql_check_photo_id="select * from `like` where `photo_id`=".$photo_id;
                $result_photo_id=$this->_db->my_query($sql_check_photo_id);
                if($this->_db->my_num_rows($result_photo_id) >= 1)
                {
                    $row=$this->_db->my_fetch_object($result_photo_id);
                    
					$select_data_sql="select `like`.*,`like`.`id` as `like_id`,`users`.`username` from `like` join `users` on `users`.`id`=`like`.`user_id` where `photo_id`='".$photo_id."' ORDER BY username ASC";
                    $result=$this->_db->my_query($select_data_sql);
                    if($result)
                    {	$data_array=array();
						while($row_info=$this->_db->my_fetch_object($result))
						{
							$info=array();
							$info['username']=$row_info->username;
							$info['user_id']=$row_info->user_id;
							$data_array[]=$info;
						}
						$records_array['data']        	=   $data_array;
						$records_array['status']        =   "TRUE";
                        $records_array['message']       =   "Like user fetched successfully.";
                    }
                    else
                    {
                        $records_array['status']        =   "FALSE";
                        $records_array['message']       =   "Problem in fetching like.";
                    }
                }
                else
                {
                    $records_array['status']            =   "FALSE";
                    $records_array['message']           =   "photo id not present.";
                }
                return $records_array;
            }
            else
            {
                $records_array['status']                =   "FALSE";
                $records_array['message']               =   "Photo id could not be null.";
                return $records_array;
            }
    }
	
}
?>
