# api-ospos
Contains api for ospos

For a New Installation you must do some of theses additional steps on the server.



1. composer install
2. php artisan passport:client --personal
3. sudo chgrp -R apache storage
4. sudo chgrp -R apache bootstrap/cache
5. sudo chmod -R 775 storage
6. sudo chmod -R 775 bootstrap/cache
7. openssl genrsa -out storage/oauth-private.key 4096
8. openssl rsa -in storage/oauth-private.key -pubout > storage/oauth-public.key

Copt/Edit .env with proper prod/dev/env values.

Then run php artisan migrate 

then head over to 
https://console.cloud.google.com/apis/credentials/oauthclient/1027404820453-28sfjuqov9ut6l28jt9jm2u0h8if5bkb.apps.googleusercontent.com?project=walts-order-manager


## Quick-Links:  
[Update to How Artisan Commands are Registered](./app/Console/README.md) (Spoiler: You don't need to anymore!)  
[Update to How Eloquent Models are Generated](./app/Models/README.md)  


Thanks all folks! Please add edit as needed# laravel-sample
