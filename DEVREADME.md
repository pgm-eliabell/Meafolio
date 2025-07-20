for making new controller/models/... we use a library (symfony/maker-bundle) you can run one by using 
php bin/console make:controller test 
as example 

NOTE: if you seen things like "bin/console", try to find the right command that replaces it with "symfony console". most commands should be available with it

##some helpfull commands: 

ddev composer require symfony/orm-pack      
symfony console list doctrine
symfony console doctrine:database:create
symfony console make:entity  
symfony console make:migration


backend % ddev exec php bin/console doctrine:migrations:migrate
- if youre experiencing problems here try running:ddev exec php bin/console doctrine:migrations:status
- symfony server:restart
- 



ddev exec php bin/console doctrine:mapping:info