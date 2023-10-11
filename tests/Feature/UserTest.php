<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_set_database_config(){
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');
        $response=$this->get('/');
        $response->assertStatus(200);


    }
    public function test_get_users_list(){
        $response = $this->get('/api/users');
        //response contiene todos los usuarios


        $response->assertStatus(200);
        // verificamos si el contenido de response, es correcto o no.

        $response->assertJsonStructure([
            ['id','name','email','email_verified_at','created_at','updated_at']
        ]);
        //verificamos si el resultado obtenido (coleccion de usuarios), cumple con la estructura solicitada


        $response->assertJsonFragment(['name'=>'Juan']);
        //verificamos si existe un atributo de name

        $response->assertJsonCount(4);
        //verificamos si la colecion de usuarios obtenida previamente, tiene una cantidad totoal igual a 4
    }

    public function test_get_users_detail(){
        $response=$this->get('/api/users/1');
        //obtengo el objeto de usuario con id igual 1

        $response->assertStatus(200);
        //verifico si la consulta anterior, fue correcta

        $response->assertJsonStructure(       ['id','name','email','email_verified_at','created_at','updated_at']);
        //verifico si el contenido de la consulta, es correcta

        $response->assertJsonFragment(['name'=>'Juan']);
        //verifico si contiene el valor Juan en el atributo name
    }

    public function test_get_non_existing_user_detail(){

        $response=$this->get('/api/users/559');
        //verificamos que no existe el usuario 559, respuesta correcta:  no encontrado
        $response->assertStatus(404);
        // respuesta esperada de la peticion anterior, 404  no encontrado, respuesta encontrada

    }
}

