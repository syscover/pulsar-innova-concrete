# INNOVA CONCRETE

## Installation

Before install sycover/pulsar-innnova-concrete, you need install syscover/pulsar-core and syscover/pulsar-admin

**1 - After install Laravel framework, execute on console:**
```
composer require techedge/pulsar-innnova-concrete
```

Register service provider, on file config/app.php add to providers array
```
Techedge\InnovaConcrete\InnovaConcreteServiceProvider::class,
```

**2 - Execute publish command**
```
php artisan vendor:publish --provider="Techedge\InnovaConcrete\InnovaConcreteServiceProvider"
```
and
```
composer dump-autoload
```

**3 - And execute migrations and seed database**
```
php artisan migrate
php artisan db:seed --class="InnovaConcreteTableSeeder"
```

**4 - Execute command to load all updates**
```
php artisan migrate --path=vendor/techedge/pulsar-innnova-concrete/src/database/migrations/updates
```
