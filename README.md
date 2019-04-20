# Repo Name project [codeclimate badge] [testing badge]

Laravel tutorial to create a form a user can use to create
edit, update and delete a project.

## Description

CRUD application built with PHP and Laravel.
It is a form that uses mysql database (MAMP for Mac) to store record of projects.

## Documentation

The prefix: ```http://localhost:8000/```

| #  | endpoint            | description                  |
|----|---------------------|------------------------------|
| 1. | /projects           | show all projects            |
| 2. | /projects/id/edit   | select project to edit by id |
| 3. | /projects/create    | create new project           |

## Setup

1. On your terminal select a folder where you choose to host the application
2. ```mkdir myproject```
3. ```cd myproject```
4. ```git clone https://github.com/Teatoller/project.git```
5. ```cd project```
6. Open project in your favorite editor.
   I am using vscode: to open the vscode from terminal enter ```code .``` and click ```return```

7. create a database called ```tutorial``` in mysql
8. create a table in it called ```projects``` with the following fields;

| #  | name        | type         |
|----|-------------|--------------|
| 1. | id          | biginit(20)  |
| 2. | title       | varchar(255) |
| 3. | description | text         |
| 4. | created_at  | timestamp    |
| 5. | updated_at  | timestamp    |

9 create a .env file using the `.env.example`

   Adjust the following field variables.

| #  | parameter   | variable |
|----|-------------|----------|
| 1. | DB_DATABASE | tutorial |
| 2. | DB_PORT     | 8889     |
| 3. | DB_USERNAME | root     |
| 4. | DB_PASSWORD | root     |

### Dependencies

1. PHP  7.1.23
2. Laravel > 5.7
3. yarn
4. mysql

### Getting Started

1. run ```composer install``` on terminal
2. run ```yarn install``` on terminal
3. run ```php artisan serve```

The development server will start on host:<http://127.0.0.1:8001>
Check you default browser . You can  in any case manually copy the link an paste on the browser.

Use the endpoints detailed earlier to test the application.

### Run The Service

n/a

## Testing

n/a
