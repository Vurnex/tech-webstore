# Tech Webstore
Project to create an online webstore that sells common tech products.

[Click here for a live preview](https://laqhamil.a2hosted.com/public/dashboard) (The website is currently inactive. Leaving a link for future reference.)

The website allows the user to view a list of products, add them to a cart, and checkout. It also allows an admin to add, edit, and delete products and transactions. 

This project was originally completed in Spring 2022 during my Junior year of my IT Degree. In January 2023, I took the old project and made some changes / improvements to it. Some of those changes include cleaning up the front end, changing how some code works in the back end, and modifying / simplifying how the backend interacts with the database. 

Previously, the project and database was hosted on my local machine through localhost using Apache and MySQL through XAMPP. Now, the project is on shared hosting (cPanel) through A2 Hosting. The MySQL database is also provided through cPanel. 

This project uses CodeIgniter 4 Framework for the MVC Pattern.

## How It Works

The project uses the MVC (Model, View, Controller) pattern. There are user views and admin views. The models provide the data from the database. The controllers serve the views, grabs data from the views, and uses the models to create, read, update, and delete to the database.

### User

The user will first be greeted with a log in or sign up page to make an account. They won't be able to access the website without being logged in.

Once logged in, the user will be presented with the homepage. They have the option of going to the products, about, and contacts page. In the products page, they can choose from a list of products to add to a cart. The cart total is updated with each product added. Once the user is finished, they can checkout. In the checkout page, they are presented with the items they chose and the costs for each product. Once they confirm the items and costs, they can checkout / purchase. Afterwards, they are presented with a page stating they have completed their purchase.

### Admin 

The Admin will be greeted with the same page as the user on the homepage. However, an account logged in as admin will have an admin view presented. With this view, they have options for viewing, adding and editing, and deleting products and sales.

The products, sales, and user accounts are stored in an external database. The project accesses the database using the framework's built in methods as well as using MySQLi.

## What I Learned While Working On This Project

- MVC Pattern and how it works
- How to use an MVC framework like CodeIgniter 4
- First usage of a CSS framework like Bootstrap
- PHP Sessions
- More ways to manipulate the DOM with Javascript and jQuery
- Honeypot and how it can protect against spam

## Languages, Tools, and Frameworks Used

- HTML, CSS, Javascript, PHP
- jQuery, Bootstrap
- CodeIgniter 4.3.1 Framework

## Examples

Sign In

![image](https://user-images.githubusercontent.com/107071736/213969410-34c143f5-70fb-4ff1-bf64-5743c31e0ca6.png)

Dashboard (User View)

![image](https://user-images.githubusercontent.com/107071736/213969515-45567223-b093-4b80-9424-9bb242b97b5f.png)

Dashboard (Admin View)

![image](https://user-images.githubusercontent.com/107071736/213969824-c4341bfa-1044-4932-bcf2-931981673b30.png)

Add Products (Admin)

![image](https://user-images.githubusercontent.com/107071736/213969868-4c3c78ba-a9cf-432e-a092-a43e5c428c09.png)

Product (User View)

![image](https://user-images.githubusercontent.com/107071736/213969579-a5b4ce72-54e4-4087-925e-7fcee590172a.png)

Products (Admin View)

![image](https://user-images.githubusercontent.com/107071736/213969939-798fa132-c337-4579-936c-ae0842d70e04.png)

Cart

![image](https://user-images.githubusercontent.com/107071736/213969687-93c81e30-9d96-436c-99d1-44222708a7cf.png)


