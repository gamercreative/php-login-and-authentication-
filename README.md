# php-login-and-authentication- 
this copy paste code will add a login feature on your home page and an authentication feature on the rest of your files and even get your ip and place it automatically.  

#requirments:     
1-php       
2-running php webserver     
3-(optional) python to grab ip      

#files_to_create:   
1- emak.txt for storing the access code (stores the value if the user put the right credentials or not) !will fail without     
2- hashlog.txt for storing the logs !will fail without (logs are stored here no need to edit)     
3-pass.txt holds the password you write in to use and (insert your password)			    
notice: all the files are to be stored in ./login.php --> ../misc/thefile.txt or change the path in php files for convinience     

#things_to_edit:		      
1-change emak.txt in php script to match your prefered path			  
2-change hashlog.txt in php script to match your prefered path		  	
3-change pass.txt in php script to match your prefered path		  
5-ipz.txt in php script to match your prefered path		  
4-username in login_home_page.php line 10	    

#why use?:    
1- use this if you just want a simple login pass and username page with authorization on the php files for personal and limited use notihng required can even run on localhost   
2- if you use your standard home ip then you can use this to just connect to localhost login and it will automatically grab your ip and use it for example: connect localhost - login - http://localhost --> ip_of_your_house/file after log in      

#purpose:   
this script aims to provide a bit of security against unauthorized users who try to enter this has been made for users with self hosted testing webpages or home based ip hosted webpages like mine which doesnt have a domain name.

#optional ip adder:   
this options allows you to get the ip of your router which you would host your website off and use port forwardign for your prefered port to host your website off of.  
remove if you have a domain name or a fixed ip-adress i will add a "//remove ip" on the end of the lines that you will need to remove or change path for conviniece.  
must also include the local_ipz.py file to grap your ip from https://api.ipify.org  
notice: i do not own api.ipify.org i just use its api to get my ip  

#IMPORTANT!   
create emak.txt file in the previous file ,as so  
./login.php create the txt file in ../misc/emak.php 

#report_bug_or_issues:    
kindly report any bugs or issues and i will work on solving them as soon as possible this is my first repo so please leave feedback if possible thank you.      
