<?php  if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - Mon Sep 1 0:53:34 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 0:53:34 EDT 2014 --> common file included
DEBUG - Mon Sep 1 0:53:34 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 0:53:34 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 0:53:34 EDT 2014 --> {"faultAction":"Action requested Not found"}
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> common file included
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> Action Method Set:=>register_user
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 0:53:41 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 11:55:54 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:55:54 EDT 2014 --> common file included
DEBUG - Mon Sep 1 11:55:54 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 11:55:54 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:55:54 EDT 2014 --> {"faultAction":"Action requested Not found"}
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> common file included
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:57:31 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> common file included
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:57:40 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> common file included
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 11:58:04 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='qq' and `password` ='qq' '

DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:02:52 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:02:58 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('2','nike','nike','shoe','2014','white','http://educesoftware.com/monty/image/540498b25433a.jpg') '

DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:03:47 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:03:49 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:05:35 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('2','nike','nike','shoe','2014','white','http://educesoftware.com/monty/image/5404994f85605.jpg') '

DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:06:57 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:07:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('2','nike','nike','shoe','2014','white','http://educesoftware.com/monty/image/540499b3a20c2.jpg') '

DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:07:17 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='test321' and `password` ='123456' '

DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:07:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:08:30 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:08:45 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:08:46 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:09:54 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:10:05 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:10:06 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:06 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:10:06 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:10:06 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:06 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:10:06 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:10:07 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:10:07 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:07 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:10:07 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:10:18 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:10:35 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:10:36 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:11:10 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('','','','','','','http://educesoftware.com/monty/image/54049a9e3c787.jpg') '

DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:14:41 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('','','','','','','http://educesoftware.com/monty/image/54049b71c44f1.jpg') '

DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:15:51 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:16:07 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:16:08 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:16:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('','','','','','','http://educesoftware.com/monty/image/54049bdd3aee9.jpg') '

DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:18:17 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> Action Method Set:=>register_user
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:19:44 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:35:27 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:35:38 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:35:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:36:59 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('5','Test','Nike','Sneakers','2012','Black','http://educesoftware.com/monty/image/5404a0ab455c7.jpg') '

DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:39:54 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('5','Test','Nike','Sneakers','2012','Black','http://educesoftware.com/monty/image/5404a15a5e4c2.jpg') '

DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:40:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:45:54 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:46:13 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:46:15 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:46:26 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:46:37 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:46:38 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:46:49 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:47:01 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:47:04 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:47:17 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:48:02 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:48:04 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:32 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:48:47 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:48:49 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:49:24 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('5','Test','Nike','Sneakers','2012','Black','http://educesoftware.com/monty/image/5404a3944bc0e.jpg') '

DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:49:52 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('5','Test','Nike','Sneakers','2012','Black','http://educesoftware.com/monty/image/5404a3b0c3b55.jpg') '

DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:50:54 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:52:35 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:52:46 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:52:53 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:53:44 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:53:55 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:53:58 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:54:39 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:54:50 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:55:10 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:55:51 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:56:12 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:56:17 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:57:00 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:57:17 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:57:21 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> Action Set:=>user/images/http:/educesoftware.com/monty
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> Action Method Set:=>image
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> Object of Class user/images/http:/educesoftware.com/monty not Found
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> Action Set:=>user/images/http:/educesoftware.com/monty
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> Action Method Set:=>image
DEBUG - Mon Sep 1 12:57:30 EDT 2014 --> Object of Class user/images/http:/educesoftware.com/monty not Found
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> Action Set:=>user/like.php
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 12:57:37 EDT 2014 --> Object of Class user/like.php not Found
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> Action Set:=>user/like.php
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 12:57:40 EDT 2014 --> Object of Class user/like.php not Found
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> Action Set:=>user/getPhotoDetails.php
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 12:57:42 EDT 2014 --> Object of Class user/getPhotoDetails.php not Found
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> Action Set:=>user/like.php
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 12:57:48 EDT 2014 --> Object of Class user/like.php not Found
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> common file included
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 12:59:04 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:00:09 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:01:57 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:02:48 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:03:01 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:03:04 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> Action Set:=>user/getPhotoDetails.php
DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 13:03:13 EDT 2014 --> Object of Class user/getPhotoDetails.php not Found
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> Action Set:=>user/getPhotoDetails.php
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 13:03:19 EDT 2014 --> Object of Class user/getPhotoDetails.php not Found
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:08:07 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:08:21 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:08:22 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:08:50 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:09:00 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='testdev' and `password` ='123456' '

DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:09:02 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> Action Method Set:=>uploadImage
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:09:48 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `uploadImage`(`item_uploadedBy`, `item_name`, `item_brand`,`item_type`,`item_year`,`item_color`,`item_photo`) 
                   VALUES ('5','Yoooo','Jordan','Sneakers','2013','Black','http://educesoftware.com/monty/image/5404a85c9b7ba.jpg') '

DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> common file included
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 13:10:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:23:27 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:23:52 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='powell7365' and `password` ='test' '

DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:01 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:25:42 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='powell7365' and `password` ='test' '

DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:25:53 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='powell7365' and `password` ='test' '

DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:25:55 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='powell7365' and `password` ='test' '

DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:27:09 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> Action Method Set:=>register_user
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * FROM `users` WHERE `email`='powell7365@gmail.com' or `username`='CPowellCEO'  '

DEBUG - Mon Sep 1 14:28:12 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' INSERT INTO `users`(`username`, `name`, `email`,`password`) 
                   VALUES ('CPowellCEO','Christopher Powell','powell7365@gmail.com','test') '

DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:28:38 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='CPowellCEO' and `password` ='test' '

DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:28:40 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:30:46 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:31:29 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='CpowellCEO' and `password` ='test' '

DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:31:31 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:32:09 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:32:11 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:32:13 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:32:15 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:34 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:35 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:36 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:41 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:42 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:35:44 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:37:13 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:45:45 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='CPowellCEO' and `password` ='test' '

DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:45:58 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:46:26 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:46:28 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:46:29 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:46:30 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:55:45 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> Action Method Set:=>login
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:56:05 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT * from users where `username` ='CPowellCEO' and `password` ='test' '

DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> Action Set:=>user
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> Action Method Set:=>getItemDetails
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> env::connect_db <==> 1
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> user:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> Object of Class user created successfully
DEBUG - Mon Sep 1 14:56:06 EDT 2014 --> /home/educesof/public_html/monty/services/core/env.php<=>65::Query => ' SELECT uploadImage.*,users.username from uploadImage  join  users on users.id=uploadImage.item_uploadedBy '

DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:38 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:39 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:40 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:42 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:43 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:44 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> common file included
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> Action Set:=>user/searchUser.php
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 14:59:57 EDT 2014 --> Object of Class user/searchUser.php not Found
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> common file included
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> Action Set:=>user/searchImages.php
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 15:03:59 EDT 2014 --> Object of Class user/searchImages.php not Found
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> common file included
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> Action Set:=>user/like.php
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 15:04:08 EDT 2014 --> Object of Class user/like.php not Found
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> log:: Object Initiated Successfully 
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> common file included
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> DB Object Initialized!!
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> restService:: Object Initiated Successfully 
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> Action Set:=>user/getPhotoDetails.php
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> Action Method Set:=>users
DEBUG - Mon Sep 1 21:23:38 EDT 2014 --> Object of Class user/getPhotoDetails.php not Found
