<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Author : 
 * Email  : 
 * Timestamp : April-07 06:11PM
 * Copyright : nosave
 * Last updated : 12-06-2014
 *
 */
class comment
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
	* @method comment
    * @param null
	* @see public function with POST method
	* @access private
	* @return response message
	* @link URL - http://localhost/services/comment/add_comment	*/
	public function add_comment()
    {
       // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $records_array      = array();				
           
            $user_id	    = $_REQUEST['user_id'];
            $photo_id		= $_REQUEST['photo_id'];
            $comment		= $_REQUEST['comment'];
            // $device_token_id	= $_REQUEST['device_token_id'];/*add device_token_id */

            if($user_id !="" && $photo_id!='' && $comment !='')
            {
               
                $sql_user="SELECT * from users where `id`='".$user_id."'";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
					
                    $sql_photo="SELECT * from uploadImage where `item_id`='".$photo_id."'";
					$result_photo = $this->_db->my_query($sql_photo);
					if($this->_db->my_num_rows($result_photo) >= 1)
					{
						$sql="INSERT INTO `comment`(`user_id`,`photo_id`,`comment`) 
									VALUES ('".$user_id."','".$photo_id."','".$comment."')";
							$insert_result=$this->_db->my_query($sql);
							if($insert_result)
							{
								$sql_update="update uploadImage set `item_commentsNumber`=`item_commentsNumber`+1 where `item_id`='".$photo_id."'";
								$update_result=$this->_db->my_query($sql_update);
								if($update_result)
								{
											    $records_array['status']            =   "True";		
												$records_array['message']           =   "Comment save successfully.";
								}
								else
								{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in saving comment.";
								}
								
							}
							else
							{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in saving comment.";
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
				$records_array['message']           =   "Photo id, user id and comment could not be blank.";
                
            }
            return $records_array;
        }		
      //  else
       // {
       //     return array("ERROR"=>"Send Data via POST");
       // }
	}
	
	public function delete_comment()
	{
		$records_array      = array();				
           
            $user_id	    = $_REQUEST['user_id'];
            $comment_id		= $_REQUEST['comment_id'];
            // $device_token_id	= $_REQUEST['device_token_id'];/*add device_token_id */

            if($user_id !="" && $comment_id !='')
            {
               
                $sql_user="SELECT * from users where `id`='".$user_id."'";
                $result_user = $this->_db->my_query($sql_user);
                if($this->_db->my_num_rows($result_user) >= 1)
                {   
					
                    $sql_comment="SELECT * from comment where `id`='".$comment_id."'";
					$result_comment = $this->_db->my_query($sql_comment);
					if($this->_db->my_num_rows($result_comment) >= 1)
					{
						
						$row=$this->_db->my_fetch_object($result_comment);
						if($row->user_id==$user_id)
						{
							$sql="Delete from `comment` where `id`='".$comment_id."' and `user_id`='".$user_id."'";
							$delete_result=$this->_db->my_query($sql);
							if($insert_result)
							{
								$sql_update="update uploadImage set `item_commentsNumber`=`item_commentsNumber`-1 where `item_id`='".$photo_id."'";
								$update_result=$this->_db->my_query($sql_update);
								if($update_result)
								{
											    $records_array['status']            =   "True";		
												$records_array['message']           =   "Comment deleted successfully.";
								}
								else
								{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in deleting comment.";
								}
								
							}
							else
							{
										    $records_array['status']            =   "False";		
											$records_array['message']           =   "Problem in deleting comment.";
							}
						}
						else
						{
							$records_array['status']            =   "False";		
							$records_array['message']           =   "You cannot delete this comment.";
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
                    $records_array['message']           =   "No comment is present with this id.";
                }           
            }
            else
            {
                $records_array['status']            =   "False";
				$records_array['message']           =   "user id and comment id could not be blank.";
                
            }
            return $records_array;
	}
	 /*@method get_comment
    * @param null
	* @see public function 
	* @access private
	* @return response message
	* @link URL - http://hostname/services/user/get_comment/
    */ 
     function get_comment()
    {
			$records_array                   = array();				
            $photo_id	             = $_REQUEST['photo_id'];
            if($photo_id!='')
            {
                $sql_check_photo_id="select * from `uploadImage` where `item_id`=".$photo_id;
                $result_photo_id=$this->_db->my_query($sql_check_photo_id);
                if($this->_db->my_num_rows($result_photo_id) >= 1)
                {
                    $row=$this->_db->my_fetch_object($result_photo_id);
                    
					$select_data_sql="select comment.*,`comment`.`id` as `comment_id`,`users`.`username` from `comment` join `users` on `users`.`id`=`comment`.`user_id` where `photo_id`='".$photo_id."' ORDER BY timestamp ASC";
                    $result=$this->_db->my_query($select_data_sql);
                    if($result)
                    {	$data_array=array();
						while($row_info=$this->_db->my_fetch_object($result))
						{
							$info=array();
							$info['comment']=$row_info->comment;
							$info['user_name']=$row_info->username;
							$info['user_id']=$row_info->user_id;
							$info['comment_id']=$row_info->comment_id;
							$info['time']=$row_info->timestamp;
							$data_array[]=$info;
						}
						$records_array['data']			=	$data_array;  
                        $records_array['status']        =   "TRUE";
                        $records_array['message']       =   "Comment fetched successfully.";
                    }
                    else
                    {
                        $records_array['status']        =   "FALSE";
                        $records_array['message']       =   "Problem in fetching comment.";
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
