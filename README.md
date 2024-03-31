# Music Playlist System

## Description
This project consists of a Vue.js frontend and a Laravel backend. The frontend handles the user interface and interactions, while the backend manages data storage and business logic. This provide provide 3 services profile, music playlist and subscription. By using profile information, it will able to generate music playlist for user and allow subscrition.

## Relation Table
2. User table user information
3. User table has many relation with User User Genre Table;
4. User table has many relation with User User Interest Table;
5. User table has many relation with User User History Table;
6. User table has many relation with User User Subscription Table;

## Installation

### Frontend (Vue.js)
1. Clone the Vue.js repository: `git clone https://github.com/hanifiskandar/laravel_vue_music_playlist_system_web.git`
2. Navigate to the Vue.js directory: `cd <vue_directory>`
3. Install dependencies: `npm install`
4. Start the development server: `npm run dev`
5. The Vue.js frontend should now be accessible at `http://localhost:3000`

### Backend (Laravel)
1. Clone the Laravel repository: `git clone https://github.com/hanifiskandar/laravel_vue_music_playlist_system_api.git`
2. Navigate to the Laravel directory: `cd <laravel_directory>`
3. Install dependencies: `composer install`
5. Set up your database configuration in the `.env` file // or can use mine #laravel_vue_music_playlist_db
6. Migrate the database: `php artisan migrate`
6. Run seeder for user: `php artisan db:seed --class=DatabaseSeeder`
6. Run seeder for music: `hp artisan db:seed --class=MusicSeeder`
7. Serve the application: `php artisan serve`
8. The Laravel backend should now be accessible at `http://localhost:8000`


## Technologies Used
- Vue 3
- Laravel 10


## Contact Information
Name: Muhammad Hanif Bin Iskandar
Email: muhdhanif0096@gmail.com
Phone: 011-3680 4874
