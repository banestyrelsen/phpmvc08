#Installing the framework
###Step 1. 
Clone the framework from https://github.com/banestyrelsen/phpmvc08.git

###Step 2. 
Set access permissions to 777 in the folder asdf/site/data. This is to make the database writable.

###Step 3.  
Upload the folder to a web server using e.g. FileZilla.

###Step 4. 
In the asdf folder, edit the .htaccess file (a hidden file) so that the RewriteBase path matches the site's address on the web server. Edit the line

    [YOUR PATH]/asdf

so that [YOUR PATH] points to the location of the asdf folder on your server.

###Step 5.
Navigate to [YOUR PATH]/asdf/index.php and click module/install to initialize the framework.

#Customizing the framework

##Changing the site's title and footer
Edit the 'header' and 'footer' values at the bottom of the file asdf/site/config.php

For example, to change the header and slogan, change the following:

    'menu_to_region' => array('my-navbar'=>'navbar'),
        'data' => array(
            'header' => 'Asdf',
        'slogan' => ' - the Awesome Site Development Framework',
        'favicon' => 'logo_80x80.png',
        'logo' => 'logo_80x80.png',
        'logo_width'  => 80,
        'logo_height' => 80,
        'footer' => '<p>Asdf &copy</p>',
    ),

to

    'menu_to_region' => array('my-navbar'=>'navbar'),
        'data' => array(
            'header' => 'New Header!',
        'slogan' => ' - new slogan!',
        'favicon' => 'logo_80x80.png',
        'logo' => 'logo_80x80.png',
        'logo_width'  => 80,
        'logo_height' => 80,
        'footer' => '<p>Asdf &copy</p>',
    ),
  
  
## Changing the navigation menu
In asdf/site/config.php, edit the contents of the my-navbar array. 

###Editing and deleting navbar items
If, for example, you want to change the 'Guestbook' navbar title to 'My Guestbook', change the following row

    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),

to

    'guestbook' => array('label'=>'My Guestbook', 'url'=>'my/guestbook'),
   
Deleting the row will remove the 'Guestbook' link from the navbar.

###Adding links

If you want to add links to more of your content on the navbar, just add the row 

    'page1'   => array('label'=>'Test', 'url'=>'page/view/1'),

The value of 'url' is the relative path to the content, i.e. the path after asdf/ in the address. 'page1' must be a unique name in the array.

Then set your browser to [your path]/asdf/index.php and click module/install to initialize the new link.

##Changing the logo
In the asdf/themes/grid/ folder, replace the logo.png file with a image with the same name.

###Changing the site style (colors, fonts etc)
Edit the stylesheet in asdf/themes/grid/style.css. 

##Creating a blog

###Step 1.
In the 'Modules' tab under 'Enabled controller's, click 'content'.

###Step 2.
Click 'Create new Content' and fill in the fields. 

Title - the title of the blog post.
Key - the post's key.
Content - this is text content of the  blog post.
Type - To create a blog post, type 'post' here (without the quotes).  
Filter - The type of filter to be used. Available filters are: plain and htmlpurify. plain = no filter. htmlpurify = uses html tags.

###Step 3.
Click 'Create' to create the blog post. The blog post can now be viewed in the 'My Blog' tab.

##Creating a page

###Step 1.
In the 'Modules' tab under 'Enabled controller's, click 'content'.

###Step 2.
Click 'Create new Content' and fill in the fields. 

Title - the title of the page.
Key - the post's key.
Content - this is text content of the  blog post.
Type - To create a page, type 'page' here (without the quotes).
Filter - The type of filter to be used. Available filters are: plain and htmlpurify. plain = no filter. htmlpurify = uses html tags.

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