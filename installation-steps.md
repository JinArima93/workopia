In terminal run command:
composer install

Open Windows Powershell (Run as administrator)
Run command:
Set-ExecutionPolicy RemoteSigned
Enter A
Close Windows Powershell

In terminal run command:
npm install

---- .env file ----
Create '.env' file in the main folder (workopia)
Copy content from '.env.example' to '.env'
Change APP_URL to:
APP_URL=http://workopia-main.test

---

In terminal run command:
php artisan key:generate

Create 'database.sqlite' file under database folder
In terminal run command:
php artisan migrate

To run server run command on terminal:
npm run dev
