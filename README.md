Download the file into your root folder.Copy the file path and create a alias for the file name.Like if your file lies in 
var/www/ then the alias will be as follow-
 alias msg="php /var/www/outbox_ninja.php"
After you have created the alias,you can send msg like-
  msg 9876543210 "Hey There.How you Doin'?"    
        or like this- 
  msg 9876543210 "Cool" 
The number you want to send messsage to( can be in "" or without it) followed by your messsage.
  You will be prompted with  appropiate message for success or failure.    
Note:
  The service sends message only 160 characters long message in India to non-DND number.
       
