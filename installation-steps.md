In terminal run command:
composer install

Open Windows Powershell (Run as administrator)
Run command:
Set-ExecutionPolicy RemoteSigned
Enter A
Close Windows Powershell

In terminal run command:
npm install

Create .env file in the main folder (workopia)
Copy content from .env.example to .env
Change APP_URL to:
APP_URL=http://workopia-main.test

In terminal run command:
php artisan key:generate

Create database.sqlite under database folder
In terminal run command:
php artisan migrate
