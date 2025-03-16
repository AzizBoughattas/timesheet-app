# Laravel Timesheet App

This is a Laravel-based Timesheet App that allows users to log their work hours for different projects. It includes features like user authentication, project management, timesheet logging, and dynamic attributes for projects.

---

## **Setup Instructions**

### **Prerequisites**

-   PHP 8.0 or higher
-   Composer
-   MySQL
-   Laravel Passport (for API authentication)

### **Steps**

1. Clone the repository:
    ```bash
    git clone https://github.com/AzizBoughattas/timesheet-app.git
    cd timesheet-app
    ```
2. Install dependencies:
   composer install
3. Set up the .env file:
   cp .env.example .env
4. Generate an application key:
   php artisan key:generate
5. Configure the database:
   Update the .env file with your database credentials:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=timesheet_app
   DB_USERNAME=root
   DB_PASSWORD=
6. Run migrations and seeders:
   php artisan migrate --seed
7. Install Laravel Passport:
   php artisan passport:install
8. Start the development server:
   php artisan serve
9. Access the app at:
   http://127.0.0.1:8000

### API Documentation

Authentication
Register: POST /api/register

Login: POST /api/login

Logout: POST /api/logout

Users
Get All Users: GET /api/users

Get User by ID: GET /api/users/{id}

Create User: POST /api/users

Update User: PUT /api/users/{id}

Delete User: DELETE /api/users/{id}

Projects
Get All Projects: GET /api/projects

Get Project by ID: GET /api/projects/{id}

Create Project: POST /api/projects

Update Project: PUT /api/projects/{id}

Delete Project: DELETE /api/projects/{id}

Timesheets
Get All Timesheets: GET /api/timesheets

Get Timesheet by ID: GET /api/timesheets/{id}

Create Timesheet: POST /api/timesheets

Update Timesheet: PUT /api/timesheets/{id}

Delete Timesheet: DELETE /api/timesheets/{id}

Attributes (EAV)
Get All Attributes: GET /api/attributes

Get Attribute by ID: GET /api/attributes/{id}

Create Attribute: POST /api/attributes

Update Attribute: PUT /api/attributes/{id}

Delete Attribute: DELETE /api/attributes/{id}

Attribute Values
Get All Attribute Values: GET /api/attribute-values

Get Attribute Value by ID: GET /api/attribute-values/{id}

Create Attribute Value: POST /api/attribute-values

Update Attribute Value: PUT /api/attribute-values/{id}

Delete Attribute Value: DELETE /api/attribute-values/{id}

## Example Requests/Responses

## Register

Request:

curl -X POST http://127.0.0.1:8000/api/register \
 -H "Content-Type: application/json" \
 -d '{
"first_name": "John",
"last_name": "Doe",
"email": "john.doe@example.com",
"password": "password",
"password_confirmation": "password"
}'

Response:

{
"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ij..."
}

## Login

Request:

curl -X POST http://127.0.0.1:8000/api/login \
 -H "Content-Type: application/json" \
 -d '{
"email": "john.doe@example.com",
"password": "password"
}'

Response:

{
"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ij..."
}

## Create Project

Request:

curl -X POST http://127.0.0.1:8000/api/projects \
 -H "Authorization: Bearer YOUR_ACCESS_TOKEN" \
 -H "Content-Type: application/json" \
 -d '{
"name": "Project A",
"status": "active"
}'

Response:
{
"id": 1,
"name": "Project A",
"status": "active",
"created_at": "2025-03-16T18:55:51.000000Z",
"updated_at": "2025-03-16T18:55:51.000000Z"
}

## Create Timesheet

Request:

curl -X POST http://127.0.0.1:8000/api/timesheets \
 -H "Authorization: Bearer YOUR_ACCESS_TOKEN" \
 -H "Content-Type: application/json" \
 -d '{
"task_name": "Design UI",
"date": "2025-03-16",
"hours": 5,
"project_id": 1
}'
Response:

{
"id": 1,
"task_name": "Design UI",
"date": "2025-03-16",
"hours": 5,
"user_id": 1,
"project_id": 1,
"created_at": "2025-03-16T18:55:51.000000Z",
"updated_at": "2025-03-16T18:55:51.000000Z"
}

## Test Credentials

Email: john.doe@example.com

Password: password
