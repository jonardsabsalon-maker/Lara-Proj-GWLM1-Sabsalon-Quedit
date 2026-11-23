# Kidits Cafe

## Group
- Section: GWLM1
- Members: John Paul Quedit,
           Jonard Sabsalon
- Group name:  Gogeta

## Theme

Kidits Cafe is a neighborhood coffee shop website. 
The pages share a layout and navigation.

## Modules and branches

| Member | Assignment | Branch |
| Member 1 (leader) | Project setup, shared layout, and Home page with image carousel | `Dev-member1-Quedit-Sabsalon` |
| Member 2 | About page with Read More toggle and animated counters | `Dev-member2-Quedit` |
| Member 3 | Contact page | `Dev-member3-Sabsalon` |

Contact is not yet implemented on this branch. Its owner should add the route and page before the navigation can be fully tested.

## Run locally

Requires PHP 8.4.1 or later and Composer.

```powershell
git clone https://github.com/jonardsabsalon-maker/Lara-Proj-GWLM1-Sabsalon-Quedit.git
cd Lara-Proj-GWLM1-Sabsalon-Quedit
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000. If asked to create the database during migration, answer yes.

## Screenshots

Add screenshots of the Home, About, and Contact pages before submission.
