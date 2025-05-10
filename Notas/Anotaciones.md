# ANOTACIONES LARAVEL/COMPOSER


> //CREA UN NUEVO PROYECTO

    composer create-project laravel/laravel agencia

> Una vez instalado nos tenemos que mover dentro de la carpeta "agencia"
> y ahi lanzar el proyecto

    php artisan serve 

>Enrutador de una vista se encuentra en /route

        Route::get('/Manzanas', function () {//esto en un enrutador
        return view('Manzanas');
        });

        Route::get('NOMBRE DE LA PETICION HTTP', function () {//esto en un enrutador
            return view('NOMBRE DEL ACHIVO');
        });
    
>Las vistas se encuentran en /resources/views
>Para crear un archivo se hace de la siguiente manera

    Manzanas.blade.php

# Codigo

>Para pasar variables en el enrutador se realiza de la siguente manera

    Route::get('/Manzanas', function () {//esto en un enrutador
        $nombre = 'Guido';
        $numero = 7;
        return view('Manzanas', 
        ['nombreenvista' => $nombre ,
         'numeroenvista'=>$numero
        ]);
    });

>En una vista se veria de la siguiente manera y se utiliza asi

    <p>Pediste manzanas!!! {{date('d/m/Y')}}</p>
    <p>{{$nombreenvista}}</p>
    <p>{{$numeroenvista}}</p>

    {{-- UTILIZAMOS UN FOR EN EL BLADE --}}
    <ul>
        @for($i = 0; $i < $numeroenvista; $i++)
            <li>{{$i}}</li>    
        @endfor
        
    </ul>
    
 # Fuera del Curso, comandos Aprendidos

 > Sube las migraciones a la DB
  php artisan migrate 

 > Crear Controlador y model CRUD
 php artisan make:controller TaskControler --resource --model=Task

> ------------------------------------------------------------------------------------
#anotaciones varias

> //Verificamos Version de PHP (debe ser arriba de la 8.1)
 php -v

> //verificamos version de Composer
 composer -V

> //vemos la ruta donde estamos parados en terminal
 pwd

 > ///////	REPOSITORIO CURSO
 https://github.com/exegeses/laravel-60323
