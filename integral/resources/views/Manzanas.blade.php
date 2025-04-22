<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA DE MANZANAS</title>
</head>
<body>
    <h1>Soy una Vista</h1>

    <p>Pediste manzanas!!! {{date('d/m/Y')}}</p>
    <p>{{$nombreenvista}}</p>
    <p>{{$numeroenvista}}</p>

    {{-- UTILIZAMOS UN FOR EN EL BLADE --}}
    <ul>
        @for($i = 0; $i < $numeroenvista; $i++)
            <li>{{$i}}</li>    
        @endfor
        
    </ul>
    
    
</body>
</html>