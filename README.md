#Installing the framework
###Step 1. 
Clone the framework from https://github.com/banestyrelsen/phpmvc08.git

###Step 2. 
Set access permissions to 777 in the folder site/data. This is to make the database writable.

###Step 3.  
Upload the folder to a web server using e.g. FileZilla.

###Step 4. 
In the asdf folder, edit the .htaccess file (a hidden file) so that the RewriteBase path matches the site's address on the web server. 

###Step 5.
Click module/install to initialize the framework.

#Customizing the framework

##Changing the site's title and footer
Edit the 'header' and 'footer' values at the bottom of the file asdf/site/config.php

## Changing the navigation menu headers
In asdf/site/config.php, edit the contents of the my-navbar array. 

For example, if you want to change the 'Modules' navbar title to 'My Modules', change the following row

	'modules'   => array('label'=>'Modules', 'url'=>'module'),

to

	'modules'   => array('label'=>'My Modules', 'url'=>'module'),
	
Deleting the row will remove the link from the navbar.

##Changing the logo
###Option 1
In the asdf/themes/grid/ folder, replace the logo.png file with the new logo file of the same name.
###Option 2
If you want to use a different name for your logo file, place your logo image file in asdf/themes/grid/ and enter the filename as the value of the 'logo' variable in asdf/site/config.php. 

###Changing the site style (colors, fonts etc)
You can edit the stylesheet in asdf/themes/grid/style.css. 

##Creating a blog

###Step 1.
In the 'About Me' tab, click 'view all'.

###Step 2.
Click 'Create new Content' and fill in the fields. 

Title - the title of the blog post
Key - the post's key
Content - this is text content of the  blog post
Type - To create a blog post, type 'post' here (without the quotes).  
Filter - The type of filter to be used. Plain = no filter.

###Step 3.
Click 'Create' to create the blog post. The blog post can now be viewed in the 'My Blog' tab.

##Creating a page

###Step 1.
In the 'About Me' tab, click 'view all'.

###Step 2.
Click 'Create new Content' and fill in the fields. 

Title - the title of the page
Key - the post's key
Content - this is text content of the  blog post
Type - Leave this blank to create a page.  
Filter - The type of filter to be used. Plain = no filter.

###Step 3.
Click 'Create' to create the page. Click 'Content' in the menu bar and the new page will be listed in the bottom of the list. The number is the id of the page.

###Steg 4. 
To add the page to the horizontal top nav bar, edit asdf/site/config.php and add the line 

	'MyPage' => array('label'=>'Nice title', 'url'=>'page/view/NN'),

to the my-navbar array, where NN is the id of the page and 'Nice title' is the title you want to appear in the nav bar. For example, if NN is 10, add the line at the end of the array as follows:

    'my-navbar' => array(
    'home' => array('label'=>'About Me', 'url'=>'my'),
    'blog' => array('label'=>'My Blog', 'url'=>'my/blog'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
    'MyPage' => array('label'=>'Nice title', 'url'=>'page/view/10'), <-- Add this line
  ),

------------------------------------------------------------

Log in details:
#####Admin
- Username: root
- Password: root

#####User
- Usernam: doe
- Password: doe
