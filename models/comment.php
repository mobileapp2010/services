<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Author : 
 * Email  : 
 * Timestamp : April-07 06:11PM
 * Copyright :save
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
   
   	
}
?>
