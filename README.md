Wordpress Install
=
Currently using WordPress version: 4.2.2

This will grab the latest wordpress core files from the official wordpress repository

Notes:
-
If you use the included sql file it will set the following, as well as activate the included plugins and the default theme that is included:

- The Default Username is: <strong>admin</strong>
- The Default Password is: <strong>edW>8m]+</strong>
- The Default Email is: <strong>development@shalakolee.com</strong>
- The Site title is set to nothing

Please remember to change all these if you use the included sql file.

Plugins Included:
-

<strong>Note</strong> - `when using this install, the plugins reside at /wp-content/plugins`

- Contact Form 7
- Advanced Custom Fields Pro
- jQuery Validation for Contact Form 7
- Simple Image Sizes
- WooCommerce

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