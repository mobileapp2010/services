<?php
 header('Access-Control-Allow-Origin: *');
/**
 * Entry point to REST API
 * @api
 * @package services\index\
 * @source 6  
 * @author Arnold Sameroff
 * @email ast@mobileappz.in 
 * @timestamp March/13/2014 10:01AM
 * @copyright nosave
 * @version 1.0
 * This is Entry point of REST based Web service
 */
	error_reporting(1);
	/// -- Get Output in Buffer --
	ob_start();
	/// -- Define base path to check it is a correct way to access --
	define('BASEPATH',dirname(__FILE__));
		/// -- Define Lib path --
	define('LIBPATH',"core");
	/// -- Define Directory seprator --
	define('DS',"/");
	/// -- Define Base file extension type --
	define('EXT',".php");
	/// -- All to catch exception handling --
	try{

		/// -- check FIle exists or now --
		if(file_exists(BASEPATH.DS.LIBPATH.DS."common.php")){
			/// -- Include File exists or now --
			include(BASEPATH.DS.LIBPATH.DS."common.php");
			/// -- Log Debug Message --
			log_message("debug","common file included");
			/// -- Create Service Object --
			$resService=loadObject("restService");
			/// -- Init Service Object --
			$resService->init();
			/// -- Init Service Object --
			$format="JSON";
			$result=$resService->execute($format);
            
            
            
            if($format=="JSON" || $format=="json")
            {
                header("content-type: application/json; charset=utf-8");
            }
			if($format=="xml")
			{
				header("Pragma: public"); // required
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
                header("Cache-Control: private",false); // required for certain browsers 
                header("Content-Transfer-Encoding: binary");
                header("Content-Encoding: gzip");
                header("content-type: text/xml; charset=utf-8");
				
			}
			echo $result;
		}
	}catch(Exception $e){
		die("OOPS something goes wrong");
	}
?>
