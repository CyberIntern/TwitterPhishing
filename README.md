# TwitterPhishing

https://github.com/CyberIntern/TwitterPhishing

Click Clone or download option in Green color and Download this Repository TwitterPhishing-master as ZIP File

Go to the downloaded ZIP file, right click on it and select the option Extract Here, and the files will be extracted to the Folder TwitterPhishing-master (which contain twit folder and README.md file)

Move/copy the twit folder inside the /var/www/html directory. You can't simply copy and paste it inside the html directory without the root permission.
Command -> sudo su and then provide the root password
Command -> mv < source_destination > /var/www/html   

And Give the correct user access levels to the file twitter-credentials.txt
Command -> sudo chmod 733 /var/www/html/twit/twitter-credentials.txt

Open the browser and type localhost/twit

Input the testing username and password in the Twitter Phishing Page

View the compromised credentials in the twitter-credentials.txt file



### You can Find more information on this blogspot about the Phishing concepts and how to do them from the beginning in simple steps
### http://cyberinternblog.blogspot.com/
