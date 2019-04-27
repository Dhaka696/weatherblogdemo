to get this working:

Install Homestead/Vagrant as described in a previous email.

I added the homestead.yaml to use (also make sure this repo is in C:\Users\{YOUR_PC_NAME}\code\weatherworks for this yaml to work as is)
Replace the Homestead.yaml file to whereever you installed the Homestead directory during the installation (probably C:\Users\{YOUR_PC_NAME})


Also go to your hosts file (C:\Windows\System32\drivers\etc) and add this line:

192.168.10.10		weatherworks.test

cd to the Homestead directory and vagrant up
once you are in, SSH into the box (vagrant ssh) and go to the project home directory( cd code/weatherworks) and type in:

composer install
php artisan migrate
for the node installation, i would actually recommend opening another cmd and going back to your local folder (C:\Users\{YOUR_PC_NAME}\code), rather than doing it within the ssh (npm install)



after this everything should work fine, you can go to weatherworks.test and see the page.  if not let me know and I can help troubleshoot.

From there click Blog to view the basic blog with pagination, and then click in to see the details

Yes, I copied the same blog post 8 times but changed the title lol.





if you have any questions please let me know!