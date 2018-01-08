# Laravel CMS

It's simple CMS project. I have worked in this project while I have started learning laravel. I learn step by step and implement in this project.

I am uploading this project in public becuase it will help someone who want to start in laravel.

I have not added seed file in this project for demo data. I have uploaded database.sql file with this project. you just need to upload database file after done migration in your local project. 

# What is covered in repo:

	- Add/Update/View/Delete Post/Portfolio/Video
	- Homepage slider management with caption and external link
	- Page Management with slug generation. page layout selection, Ckeditior, parent selection for page.
	- Expert settings in Our expert section. you can add your company expert(team) this section and 
	  it will display in about us page as well. Also you can add skills of your company this section.
	- homepage content is fully dynamic. you can change it from homepage under setting menu.
	- you can manage all footer colums in global setting and header/footer menu as well. 

# Installation

When you clone this project cd into directory and then:

 - Copy .env.example to .env
 - `composer install`
 - `chmod -R 777 storage/ bootstrap/`
 - `php artisan key:generate`
 - Fill .env file with database credentials and upload paths.
 - Import database.sql to your database

# Admin Details

 URL : yourlocalurl/admin/dashboard    
 username : admin@gmail.com
 password : 12345678

Now you are all set. 
