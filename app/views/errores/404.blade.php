<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error 404</title>
    <style>
        ul{
            list-style: none;
        }
        ul>li{
            padding: 0.25em;
            font-weight: bold;
        }


    </style>

</head>
<body>
    <center>  
        <div>
            <h1>Ruta no existente</h1>
            <ul>
                <!--<li> {{ $code_error }} </li>-->
                <li> {{ $remote_addr }} </li>
                <li> {{ $query_string }} </li>
                <li> {{ $http_user_agent }} </li>
                <!--<li> {{ $request_method }} </li>-->
            </ul>
        </div>
    
        <img src="404.svg" alt="">

    </center>
</body>
</html>