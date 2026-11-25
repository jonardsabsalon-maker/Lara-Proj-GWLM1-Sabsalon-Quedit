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

The Contact page includes a responsive contact form, contact details, and client-side JavaScript validation.

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

HOME PAGE SCREENSHOT:
<img width="1247" height="893" alt="image" src="https://github.com/user-attachments/assets/489c0c1f-5ecd-4add-8571-76079c4daf55" />


ABOUT PAGE SCREENSHOT:
<img width="1716" height="892" alt="image" src="https://github.com/user-attachments/assets/200b9fab-2eab-46bb-bf03-536eafea1133" />

CONTACT PAGE SCREENSHOT:
<img width="1316" height="847" alt="image" src="https://github.com/user-attachments/assets/67c3a23d-659a-4282-acfe-dc8e276dab5e" />
