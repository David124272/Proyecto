##COMMANDS FOR LARAVEL PROJECT IN UBUNTU
_David Macías Arellano_

####ROUTES
```
php artisan route:list
```

####CONTROLLER WITH MODEL AND RESOURCES
```
php artisan make:controller NameController --model=Name
```

####MIGRATIONS
```
php artisan make:migration create_name_table 
php artisan migration:fresh
php artisan make:model Name -m //Model with migration
php artisan migration:rollback
```
####NO TIMESTAMPS
```
public $timestamps = false; //In model
```

####SEEDERS
```
php artisan make:seeder UserSeeder
php artisan db:seed --class=UserSeeder
```

####FACTORIES
```
php artisan make:factory NameFactory
```

####RUN XAMPP SERVICES UBUNTU
```
cd /opt/lampp
sudo ./manager-linux-x64.run
```