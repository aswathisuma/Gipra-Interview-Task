# Gipra-Interview-Task
Gipra Interview Task

git init

git remote add origin https://github.com/aswathisuma/Gipra-Interview-Task.git

git add .

git commit -m "Initial commit"

git checkout -b UAT

git push origin UAT


#project configuration

git clone https://github.com/aswathisuma/Gipra-Interview-Task.git

git checkout UAT

composer install

rename .env.example to .env

php artisan key:generate

Set your database credentials in the env file

php artisan migrate:install

php artisan migrate --seed


