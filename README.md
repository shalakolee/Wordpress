Wordpress Install
=
Currently using WordPress version: 4.2.2

This will grab the latest wordpress core files from the official wordpress repository

Notes:
-

If you use the included sql file it will set the following:

- The Default Username is: <strong>admin</strong>
- The Default Password is: <strong>edW>8m]+</strong>
- The Default Email is: <strong>development@561media.com</strong>
- The Default Site Title is: <strong>561 Media</a>

Please remember to change all these when you do an install

To change the WordPress version:
-
- open git shell
- clone repository recursive so you download wordpress

        git clone --recursive http://git.shalakolee.com/shalako/Wordpress.git
   
- goto the Wordpress/wordpress directory

        git fetch --tags
   
- to see what versions are available

        git tag
    
- checkout the verision that you want

        git checkout x.x.x
    
- goto the /Wordpress directory

- commit the change

        git commit -am "Changed Wordpress to version x.x.x"
   
- push the changes

        git push origin master