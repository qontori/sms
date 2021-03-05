composer create-project laravel/laravel bpack "8.0.*" --prefer-dist
- created DB 'SMS

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
- added use Backpack\CRUD\app\Models\Traits\CrudTrait; to line 9
- added "CrudTrait"; to the end of line 13 to become "use HasFactory, Notifiable,CrudTrait;"
