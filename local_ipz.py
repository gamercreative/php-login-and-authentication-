import urllib.request
import os
from mailjet_rest import Client

ipz = urllib.request.urlopen('https://api.ipify.org').read().decode('utf8')
print("this is your ip: " , ipz)
fil = open("C:\myip\ipz.txt","w")
fil.write(ipz)
fil.close()
fiz = open(r"C:\xampp\htdocs\twighlight\meowmeow_images\ipz.txt","w")
fiz.write(ipz)
fiz.close()