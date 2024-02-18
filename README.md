
# Shortly - Vue & Laravel URL Shortener

As the name implies, Shorty transforms your lengthy, mundane URLs into concise, eye-catching links effortlessly! This simple web application is powered by Vue.js and Laravel, offering an intuitive user experience.


## Screenshots

![App Screenshot](https://adarshjaiswal.com/wp-content/uploads/2024/02/screencapture-127-0-0-1-8000-2024-02-18-18_48_03.png)


## Features

- Shorten URLs: Condense lengthy web addresses into concise, easy-to-share links.
- Track Your Shortened URLs: Monitor the performance and engagement of your shortened URLs.
- Authentication: Secure access to your account with robust authentication protocols, ensuring your data remains protected.
- Password Reset: Easily reset your password in case you forget it, ensuring uninterrupted access to your account.


## Installation

first clone the repo 

```bash
  git clone https://github.com/Adarshjaiswal/shortly.git
```
Then, switch to the cloned folder.
```bash
  cd shortly
```
Install  the dependencies using composer and npm.
 ```bash
 composer install
``` 
and 
 ```bash
 npm install
```   
If any error during Installation on node modules due to version then please use 
 ```bash
 npm install --force
```  
Copy the .env.example file and make the required configuration changes in the .env file(Like database name, host, username and password)
```bash
cp .env.example .env
```
Generate a new application key
```bash
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```
Start the local development server
```bash
php artisan serve
```
Start Vite for bundling the assets or Hot Module Reload (required)
```bash
npm run dev
```
Woohoo! you are all done with Installation!

## Feedback

If you have any feedback, please reach out to us at admin@adarshjaiswal.com

