<?php 
/**
 * This file provides cron functionality... Add it to your cron.
 * @author Arnold Sameroff <ast@mobileappz.in>
 * @version 1.0
 * @package  Nosave Notification Manager
 * @email  : phpdevilboys@gmail.com
 * @timestamp : April-9 06:11PM
 * @Copyright : Mobileappz
 */

/// -- Set time out to 0 --
set_time_limit(0);	
/// -- Assign error reporting to 1 --
error_reporting(1);
/// -- Define base path to check it is a correct way to access --
define('BASEPATH',dirname(__FILE__));
/// -- Define Lib path --
define('LIBPATH',"core");
/// -- Define Directory seprator --
define('DS',"/");
/// -- Define Directory seprator --
define('EXT',".php");
try
{
	/// -- check FIle exists or now --
	if(file_exists(BASEPATH.DS.LIBPATH.DS."common.php"))
	{
		/// -- Include File exists or now --
		include_once(BASEPATH.DS.LIBPATH.DS."common.php");
		
		/// -- DB Instance Created --
		$env=env::getInst();
		
		/// --- IPHONE APNSPHP ----
		// Using Autoload all classes are loaded on-demand
		require_once 'ApnsPHP/Autoload.php';
		// Instanciate a new ApnsPHP_Push object //ENVIRONMENT_PRODUCTION //ENVIRONMENT_SANDBOX
		/*$push = new ApnsPHP_Push(
			ApnsPHP_Abstract::ENVIRONMENT_PRODUCTION,
			'Production.pem'
		);*/
		// Set the Root Certificate Autority to verify the Apple remote peer
		//$push->setRootCertificationAuthority('entrust_root_certification_authority.pem');
		// Connect to the Apple Push Notification Service
		//$push->connect();
		/// --- IPHONE APNSPHP---
							
		//Send Push
		//$response = sendpush($env,$num1,$reg,$num2,$push);
		//delete content
		delete_feed_content($env);
							
	}else{
		/// -- Log Debug Message --
		log_message("ALL","ERROR in Retriving 'users' Table details with below mentioned Query\n".$sqlusers,2);
	}///  -- END::FII ---
					
}catch(Exception $e){
	die("OOPS something goes wrong");
}
function sendpush($env,$num1,$reg,$num2,$push)
{
	
	log_message("INFO","Total Number Of iPhone Users::".count($reg)."\n",2);
	$checklength= strlen($num1['clue_question']);
	if($checklength>80)
	{
		$urban_clue_question=substr($num1['clue_question'],0,100)."...";
	}
	else
	{
		$urban_clue_question=$num1['clue_question'];
	}
	/// --- SEND PUSH IPHONE APNSPHP ----
	foreach($reg as $key => $regId)
	{
		// Instantiate a new Message with a single recipient
		$message = new ApnsPHP_Message($regId);
		$message->setCustomIdentifier("Message-Badge-".$regId);
		$message->setSound();
		$message->setText($urban_clue_question);
		// Set a custom property
		$message->setCustomProperty('game_id',$num1['clue_game_id']);
		$message->setCustomProperty('user_id',$num2['uid']);
		$message->setCustomProperty('clue_id',$num1['cid']);
		$message->setCustomProperty('msg_date',$num1['clue_scheduler_time']);
		$message->setCustomProperty('seq_id',"");
		// Add the message to the message queue
		$push->add($message);
	}
	// Send all messages in the message queue
	$push->send();
	// Disconnect from the Apple Push Notification Service
	$push->disconnect();
	// Examine the error message container
	$aErrorQueue = $push->getErrors();
	if (!empty($aErrorQueue)) 
	{
		$fpY=fopen(BASEPATH.DS."logs".DS.'Iphone_Notification_Error'.date('Y-m-d').".log","a+");
		fwrite($fpY,var_dump($aErrorQueue));
		fclose($fpY);
		log_message("INFO","Iphone Clue Push Failure Users:: {".var_dump($aErrorQueue)."}",2);
		return $aErrorQueue;
	}
	/// --- SEND PUSH IPHONE APNSPHP ----
	
}

function delete_feed_content($env)
{
	
	//log_message("INFO","Total Number Of iPhone Users::".count($reg)."\n",2);
	$sql="select `id` from `ava_ns_news_feed` where `content`!='' and timediff(now(),created_on)>'1:00:00'";
	$sql_result=$env->my_query($sql);
	if($env->my_num_rows($sql_result) >= 1)
	{
		
		while($row = $env->my_fetch_object($sql_result))
		{	
			//var_dump($row);
			$row_id=$row->id;
			$sql_update="update `ava_ns_news_feed`set `content`='' where `id`='".$row_id."'";
			$sql_update_result=$env->my_query($sql_update);
			if($sql_update_result)
			{
				log_message("INFO","Deleting content of id ".$row_id."\n",2);
			}
			else
			{
				log_message("ALL","ERROR in deleting content of id ".$row_id."\n",2);
			}
		} 
	}
	else
	{
		return FALSE;
	}	
	/// --- SEND PUSH IPHONE APNSPHP ----
}
    function send_new_user_push($env,$push)
    {
        $checklength= strlen($num1['clue_question']);
        $sql_user="SELECT `id`,`display_name` FROM `ava_users` WHERE timediff(now(), ns_created_on) > '00:00:10' and `send_push`=0";
        $result_user = $env->my_query($sql_user);
        $count=0;
        if($env->my_num_rows($result_user) >= 1)
        {   
            while($row = $env->my_fetch_object($result_user))
            {   
                if($row->id!='')
                {
                    $sql_get_friend_list="select `user_device_id`,`registered_user_id` from `ava_ns_fb_contacts` join `ava_users` on `ava_users`.`id`=`ava_ns_fb_contacts`.`registered_user_id`  where `user_id`='".$row->id."' and `registered_with_app`=1";
                    $result_sql_get_friend_list = $env->my_query($sql_get_friend_list);
                    if($env->my_num_rows($result_sql_get_friend_list)>0)
                    {   
                        while($row_data = $env->my_fetch_object($result_sql_get_friend_list))
                        {   
                            
                            if($row_data->user_device_id!='')
                            {   
                                $i=0; 
                                $array=explode('#!#',$row_data->user_device_id);
                                $array_count=count($array);
                                if($array_count>0)
                                {
                                    $i=$array_count-1;
                                }
                                $device_id=$array[$i];
                                $message = new ApnsPHP_Message($device_id);
                                $message->setCustomIdentifier("Message-Badge-".$row_data->user_device_id);
                                $message->setSound();
                                $message->setText("hello this is mohit");
                                // Set a custom property
                                $message->setCustomProperty('user_id',$row_data->registered_user_id);
                                $message->setCustomProperty('seq_id',"");
                                // Add the message to the message queue
                                $push->add($message);
                                
                            }    
                        }
                    }
                }
            }
            $push->send();
            // Disconnect from the Apple Push Notification Service
            $push->disconnect();
            $aErrorQueue = $push->getErrors();
            if (!empty($aErrorQueue)) 
            {
                $fpY=fopen(BASEPATH.DS."logs".DS.'Iphone_Notification_Error'.date('Y-m-d').".log","a+");
                fwrite($fpY,var_dump($aErrorQueue));
                fclose($fpY);
                log_message("INFO","Iphone Clue Push Failure Users:: {".var_dump($aErrorQueue)."}",2);
                return $aErrorQueue;
            }
        }
        return $count;
        /// --- Delete content from the server ----
    }
    function send_like_push($env,$push)
    {
        $sql_user='select ava_users.display_name,ava_users.id as user_id,ava_ns_news_feed.id as feed_id,ava_ns_news_feed.feed_name,ava_users.follow_by,ava_ns_likedislike_detail.like_dislike_id
        from `ava_ns_likedislike_detail` 
        join `ava_ns_likedislike` on `ava_ns_likedislike`.`id`=`ava_ns_likedislike_detail`.`like_dislike_id`
        join `ava_users` on `ava_users`.`id`=`ava_ns_likedislike_detail`.`user_id`
        join `ava_ns_news_feed` on `ava_ns_news_feed`.`id`=`ava_ns_likedislike`.`news_id` where `ava_ns_likedislike_detail`.`send_push`=0';
        $result_user = $env->my_query($sql_user);
        $count=0;
        if($env->my_num_rows($result_user) >= 1)
        {   
            while($row = $env->my_fetch_object($result_user))
            {  
                $following_by = json_decode($row->follow_by, true);
                $display_name = $row->display_name;
                $feed_name = $row->feed_name;
                $like_dislike_id = $row->like_dislike_id;
                $user_id = $row->user_id;
                if(isset($following_by)&&$following_by!=null)
                {
                    foreach ($following_by as $key => $value) 
                    {
                        $current_user_id=$value['user_id'];
                        if(isset($current_user_id))
                        {
                            $sql='select user_device_id from `ava_users` where `id`=$current_user_id';
                            $i=0; 
                            $array=explode('#!#',$row_data->user_device_id);
                            $array_count=count($array);
                            if($array_count>0)
                            {
                                $i=$array_count-1;
                            }
                            $device_id=$array[$i];
                            if($device_id!='')
                            {
                                //~ $message = new ApnsPHP_Message($device_id);
                                //~ $message->setCustomIdentifier("Message-Badge-".$row_data->user_device_id);
                                //~ $message->setSound();
                                //~ $message->setText($display_name." like feed ".$feed_name);
                                //~ // Set a custom property
                                //~ //$message->setCustomProperty('user_id',$row_data->registered_user_id);
                                //~ $message->setCustomProperty('seq_id',"");
                                //~ // Add the message to the message queue
                                //~ $push->add($message);
                            }
                        }
                    }
                }
                
                $sql_update="update `ava_ns_likedislike_detail` set `send_push`= 1 where `ava_ns_likedislike_detail`.`user_id`=$user_id and `ava_ns_likedislike_detail`.`like_dislike_id`=$like_dislike_id";
                $env->my_query($sql_update);
            }
        }
        return $count;
    }
/*
| ------------------------------------------------------------------------------------------------------
| crn_iphone.php file ends 
| ------------------------------------------------------------------------------------------------------
*/
}
?>
