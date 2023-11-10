1.Introduction:🖐️
This is a simple product management application built with Laravel and utilizes a MySQL database. The application allows users to perform CRUD operations on products, including adding, viewing, updating, and deleting product details. The user interface is developed using Laravel Blade, and basic form validation is implemented. Additionally, there is a basic authentication system that restricts CRUD operations to logged-in users.

2.Database Setup:
Before starting, ensure that you have a MySQL database server set up. Create a new database for this application. The database name is user.

3.Installation:
Clone the repository:git clone https://github.com/sadik7375/Simplified-Custom-Inventory-Management-System-.git

4.Change into the project directory:
cd Simplified-Custom-Inventory-Management-System
Install dependencies:
composer install

5.Copy the .env.example file to create a new .env file:cp .env.example .env

6.Database Migration:
Run the following commands to set up the database tables:php artisan migrate


7.CRUD Operations:
The application supports the following CRUD operations for products:

Add Product: Navigate to /product/create to add a new product.
View Products: Navigate to /product to view all products.
Update Product: Navigate to /product/{id}/edit to edit the details of a specific product.
Delete Product: Navigate to /product/{id} to delete a specific product.

8.User Interface:
The front-end is developed using Laravel Blade. The UI is designed to be simple and user-friendly for product management.

9.Authentication:
The application includes a basic authentication system. To access CRUD operations, users must be logged in. Use the following commands to set up authentication


demo account:
Email:wahidsdik7375@gmail.com
password:12345678











