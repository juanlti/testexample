# testexample
 Php Unit (test de integracion), verificacion de las rutas, consultas, objetos de tipo Usuario


 Si utilizan otra variable de entorno, ejemplo: .env.MyTesting, y no la de producion .env, es necesario realizar algunas modificaciones en el archivo
 phpunit.xml para que el testeo se ejecute sobre la variable  .MyTesting y se aplique en la bd, deben agregar lo siguiente:  
       ***<env name="APP_ENV" value="testing"/>****
        ***<env name="env" value=".env.MyTesting"/>***


 Otra opcion, es realizar la configuracion por terminal (en ningun momento la configuracion global sufrira cambios), solo la instancia en ejecucion, unica desventaja, repeticion de comandos por cada accion a realizar, ejemplo:
    * php artisan migrate --env=testing
    * php artisan db:seed --env=testing
    * php artisan --env=testing

