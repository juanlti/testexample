# testexample
 Php Unit (test de integracion), verificacion de las rutas, consultas, objetos de tipo Usuario


 Si utilizan otra variable de entorno ejemplo: .env.MyTesting, y no la de producion .env, es necesario realizar algunas modificaciones en el archivo
 phpunit.xml para que el testeo se ejecute sobre la variable  .MyTesting, deben agregar lo siguiente:  
        <env name="APP_ENV" value="testing"/>
        <env name="env" value=".env.MyTesting"/>
 
