composer create-project laravel/laravel sms "8.0.*" --prefer-dist
- created DB 'SMS

change env to reflect appropriate DB

composer require backpack/crud:"4.1.*"

php artisan backpack:install
- created user

composer require --dev laravel-shift/blueprint

[note for laravel 8, blueprint requires] ... https://blueprint.laravelshift.com/docs/advanced-configuration/

php artisan vendor:publish --tag=blueprint-config 
- changed generate_fqcn_route --> true
- changed models_namespace --> Models

create draft.yml

php artisan blueprint:build

php artisan migrate

composer require --dev backpack/generators

php artisan backpack:build

Additional edits made to fix problems
App\Models\User.php
- added "use Backpack\CRUD\app\Models\Traits\CrudTrait;" to line 9
- added "CrudTrait"; to the end of line 13 to become "use HasFactory, Notifiable,CrudTrait;"


---------------- add backpack permission manager

Permisson Manager
- composer require backpack/permissionmanager
- php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
- php artisan migrate
- php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"

>>>>> add to user.php model
use Backpack\CRUD\app\Models\Traits\CrudTrait; // <------------------------------- this one
use Spatie\Permission\Traits\HasRoles;// <---------------------- and this one

class User extends Authenticatable
{
    use CrudTrait; // <----- this
    use HasRoles; // <------ and thi
>>>>>>

php artisan vendor:publish --provider="Backpack\PermissionManager\PermissionManagerServiceProvider"

config/backpack/base.php
 // The guard that protects the Backpack admin panel.
    // If null, the config.auth.defaults.guard value will be used.
-   'guard' => 'backpack',
+   'guard' => null,


