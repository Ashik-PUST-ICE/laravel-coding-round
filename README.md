# Laravel Coding Round

## Setup Instructions
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Set your database credentials in `.env`
5. Run `php artisan migrate`
6. Run `php artisan serve`

## Available APIs used POSTMAN or ETC

### Blog Post
- POST /api/posts
 {
  "title": "Test Post Title of ",
  "content": "This is a test post content."
}
- GET /api/posts
- GET /api/posts/{id}

### User Registration
- POST /api/register
- GET/api//users/{id}
  

### Task Management
- POST /api/tasks
- PUT /api/tasks/{id}
- GET /api/tasks/pending

  Coding test Api
﻿

POST
Create
http://127.0.0.1:8000/api/posts
﻿

Body
raw (json)
json
{
  "title": "Test Post Title of ",
  "content": "This is a test post content."
}
GET
Get Post
http://127.0.0.1:8000/api/posts/1
﻿

POST
Register a User
http://127.0.0.1:8000/api/register
﻿

{
  "name": "Ashikur Rahman",
  "email": "ashik@example.com",
  "password": "password123"
}


GET
get user
http://127.0.0.1:8000/api/users/1
﻿

POST
Add a Task
http://127.0.0.1:8000/api/tasks
﻿

Body
raw (json)
json
{
    "title": "Complete Laravel API 33"
}
PUT
Update Task
http://127.0.0.1:8000/api/tasks/3
﻿

Body
raw (json)
json
{
    "is_completed": true
}
GET
Get the TAsk
http://127.0.0.1:8000/api/tasks/pending
