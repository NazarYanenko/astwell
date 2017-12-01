# astwell
test task
composer install , composer update, composer dump-autoload ,php artisan key:generate(update env file before), php artisan migrate, php artisan seed (may take alot of time because dy default seeders will make over 36600 records to database. Can be configurated in Seeder classes)
For become administator use php artisan tinker  and $a = new Admin; $a->name = 'Your name'; $a->email = 'Your email'; $a->password = Hash::make('set the password'); $a->save();
