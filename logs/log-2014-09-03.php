<?php  if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> Action Method Set:=>dislike
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='5' '

DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='5' '

DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' Delete from `like` WHERE `user_id`='5' and `photo_id`= '41' '

DEBUG - Wed Sep 3 11:38:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`-1 where `item_id`='41' '

DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:44:07 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:44:27 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:44:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:45:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:45:56 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 11:46:32 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:46:32 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:46:32 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:46:32 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:46:32 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:46:32 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:46:33 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:46:33 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:46:33 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:46:33 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:48:16 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:48:27 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:48:28 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:48:57 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> common file included
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 11:51:33 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:11:23 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:11:56 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:11:57 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:57 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:11:57 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:11:57 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:11:57 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:11:57 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:12:12 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:15:06 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:15:19 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:15:21 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:16:58 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:17:14 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:17:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:18:17 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:18:28 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:18:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='5' '

DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='5' '

DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('5','41') '

DEBUG - Wed Sep 3 12:18:42 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='41' '

DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:19:12 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:19:21 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:19:23 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='5' '

DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 12:20:09 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='5' '

DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='5' '

DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='42' '

DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='42' and `user_id`='5' '

DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('5','42') '

DEBUG - Wed Sep 3 12:21:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='42' '

DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> Action Method Set:=>dislike
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='5' '

DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='5' '

DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' Delete from `like` WHERE `user_id`='5' and `photo_id`= '41' '

DEBUG - Wed Sep 3 12:22:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`-1 where `item_id`='41' '

DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:43:48 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:43:59 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:44:01 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:45:59 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:46:10 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:46:13 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:47:03 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:47:14 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:47:16 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:47:30 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:48:02 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:48:11 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:49:28 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:49:47 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:49:48 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:08 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:27 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:37 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:49 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:50:55 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:51:02 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:51:20 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:52:53 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:53:09 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:53:11 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:45 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:53:50 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:54:13 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:54:29 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:55:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:55:43 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:55:45 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> Action Set:=>comment
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> Action Method Set:=>add_comment
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> comment:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:55:56 EDT 2014 --> Object of Class comment created successfully
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:56:37 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:56:48 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> common file included
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 12:56:49 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> common file included
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:34:11 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> common file included
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 13:42:33 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> common file included
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 13:45:06 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:50:45 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:51:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='CPowellCEO' and `password` ='test' '

DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:51:09 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='6' '

DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='6' '

DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('6','41') '

DEBUG - Wed Sep 3 20:51:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='41' '

DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='6' '

DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='42' '

DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='42' and `user_id`='6' '

DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('6','42') '

DEBUG - Wed Sep 3 20:51:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='42' '

DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> Action Method Set:=>dislike
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='6' '

DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='42' '

DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='42' and `user_id`='6' '

DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' Delete from `like` WHERE `user_id`='6' and `photo_id`= '42' '

DEBUG - Wed Sep 3 20:51:19 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`-1 where `item_id`='42' '

DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='6' '

DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='42' '

DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='42' and `user_id`='6' '

DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('6','42') '

DEBUG - Wed Sep 3 20:51:20 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='42' '

DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:53:32 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> Action Method Set:=>register_user
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * FROM `users` WHERE `email`='jackiepipa@gmail.com' or `username`='Jackie'  '

DEBUG - Wed Sep 3 20:56:03 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `users`(`username`, `name`, `email`,`password`) 
                   VALUES ('Jackie','Jackie ','jackiepipa@gmail.com','test') '

DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:56:21 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='jackie' and `password` ='test' '

DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:56:22 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='7' '

DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='43' '

DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='43' and `user_id`='7' '

DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('7','43') '

DEBUG - Wed Sep 3 20:56:34 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='43' '

DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='7' '

DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='42' '

DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='42' and `user_id`='7' '

DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('7','42') '

DEBUG - Wed Sep 3 20:56:36 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='42' '

DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='7' '

DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='7' '

DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `like`(`user_id`,`photo_id`) 
									VALUES ('7','41') '

DEBUG - Wed Sep 3 20:56:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' update uploadImage set `item_likesNumber`=`item_likesNumber`+1 where `item_id`='41' '

DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:57:00 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='CPowellCEO' and `password` ='test' '

DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:57:24 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='Cpowellceo' and `password` ='test' '

DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> common file included
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 20:57:43 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> common file included
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 21:07:30 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> common file included
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> Action Method Set:=>login
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 21:07:38 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='jackie' and `password` ='test' '

DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> common file included
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> Action Set:=>user
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> Object of Class user created successfully
DEBUG - Wed Sep 3 21:07:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username, users.email from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Wed Sep 3 21:07:46 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> common file included
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> DB Object Initialized!!
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> Action Set:=>like_dislike
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> Action Method Set:=>like
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> env::connect_db <==> 1
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> like_dislike:: Object Initiated Successfully 
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> Object of Class like_dislike created successfully
DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `id`='7' '

DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from uploadImage where `item_id`='41' '

DEBUG - Wed Sep 3 21:07:47 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from `like` where `photo_id`='41' and `user_id`='7' '

