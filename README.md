# ApiShield

## Version 1.0.0

Step 1 : 

Into config/app  add ``` 'Ghostmanid/ApiShield/ApiShield:class' ```


Step 2 : 

commandline -> php artisan vendor:publish

Step 3: 

Go to app/Kernel.php  -> add  

``` 'apishield' => \App\Http\Middleware\ApiShield::class, ```