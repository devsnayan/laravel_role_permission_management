
# Laravel Permission management system with Tailwind CSS 

This project is a Laravel-based student management system that uses Breeze for authentication and Spatie Permission for role-based access control. The application allows users to perform CRUD operations on student data with permissions based on user roles.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Running Migrations](#running-migrations)
- [Seeding Data](#seeding-data)
- [Roles and Permissions](#roles-and-permissions)
- [Middleware](#middleware)
- [Contributing](#contributing)
- [License](#license)

## Installation

1. Clone the repository:

   \`\`\`bash
   git clone https://github.com/yourusername/student-management-system.git
   cd student-management-system
   \`\`\`

2. Install dependencies:

   \`\`\`bash
   composer install
   npm install
   npm run dev
   \`\`\`

3. Copy the .env.example file to .env and update the environment variables as needed:

   \`\`\`bash
   cp .env.example .env
   \`\`\`

4. Generate an application key:

   \`\`\`bash
   php artisan key:generate
   \`\`\`

## Configuration

Ensure your config/auth.php is properly set up with web as the default guard:

\`\`\`php
'defaults' => [
    'guard' => 'web',
    'passwords' => 'users',
],

'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'api' => [
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
    ],
],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],
],
\`\`\`

## Usage

### Authentication

This application uses Laravel Breeze for authentication. You can register, log in, and log out users using the built-in authentication routes and views provided by Breeze.

### CRUD Operations for Students

The application allows the following CRUD operations on students:
- Create a new student
- View a list of students
- Edit student details
- Delete a student

### Role-Based Access Control

Roles and permissions are managed using Spatie's Laravel Permission package. This package allows you to define roles and assign permissions to those roles, which are then assigned to users.

## Running Migrations

Run the following command to create the necessary tables:

\`\`\`bash
php artisan migrate
\`\`\`

## Seeding Data

To seed the database with initial roles and permissions, run the following command:

\`\`\`bash
php artisan db:seed --class=RolePermissionSeeder
php artisan db:seed --class=UserRoleSeeder
\`\`\`

### Role and Permission Seeder

\`\`\`php
// database/seeders/RolePermissionSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $editorRole = Role::create(['name' => 'editor', 'guard_name' => 'web']);
        $viewerRole = Role::create(['name' => 'viewer', 'guard_name' => 'web']);

        // Create permissions
        $permissions = [
            'view students',
            'add students',
            'edit students',
            'delete students',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        $editorRole->givePermissionTo(['view students', 'edit students']);
        $viewerRole->givePermissionTo(['view students']);
    }
}
\`\`\`

### User Role Seeder

\`\`\`php
// database/seeders/UserRoleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // Find users
        $adminUser = User::find(1); // Assuming user with ID 1 exists
        $editorUser = User::find(2); // Assuming user with ID 2 exists

        // Assign roles to users
        if ($adminUser) {
            $adminUser->assignRole('admin');
        }
        if ($editorUser) {
            $editorUser->assignRole('editor');
        }
    }
}
\`\`\`

## Roles and Permissions

To manage roles and permissions, you can use the following commands:

### Creating a Role

\`\`\`php
use Spatie\Permission\Models\Role;

Role::create(['name' => 'admin']);
\`\`\`

### Creating a Permission

\`\`\`php
use Spatie\Permission\Models\Permission;

Permission::create(['name' => 'edit articles']);
\`\`\`

### Assigning a Role to a User

\`\`\`php
$user = User::find(1);
$user->assignRole('admin');
\`\`\`

### Checking a User's Role

\`\`\`php
$user->hasRole('admin');
\`\`\`

### Assigning a Permission to a Role

\`\`\`php
$role = Role::findByName('admin');
$role->givePermissionTo('edit articles');
\`\`\`

### Middleware

Ensure your middleware is correctly registered and uses the appropriate guard:

\`\`\`php
// app/Http/Kernel.php

protected $routeMiddleware = [
    // Other middleware
    'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
    'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
];
\`\`\`

And use the middleware in your routes or controllers:

\`\`\`php
// In routes or controller methods

$this->middleware(['permission:edit articles', 'guard:web']);
\`\`\`

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any changes.

## License

This project is open-source and available under the [MIT License](LICENSE).
