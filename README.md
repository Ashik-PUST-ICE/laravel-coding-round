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
  
- GET /api/posts
- GET /api/posts/{id}

### User Registration
- POST /api/register
- GET/api//users/{id}
  

### Task Management
- POST /api/tasks
- PATCH /api/tasks/{id}
- GET /api/tasks/pending



  Coding test Api
﻿

POST
Create
/api/posts
﻿

Body
raw (json)

{
  "title": "Test Post Title of ",
  "content": "This is a test post content."
}

GET
Get Post
/api/posts/1
﻿

POST
Register a User
/api/register
﻿

{
  "name": "Ashikur Rahman",
  "email": "ashik@example.com",
  "password": "password123"
}


GET
get user
/api/users/1
﻿

POST
Add a Task
/api/tasks
﻿

Body

{
    "title": "Complete Laravel API 33"
}
PATCH
Update Task
/api/tasks/3
﻿

Body

{
    "is_completed": true
}
GET
Get the TAsk
/api/tasks/pending
