## Manual tecnico

  **Para instalar dependencias**
  
  `php composer.phar install`
  
  **configurar app/config/database.php**
  
  ```
  'pgsql' => array(
      'driver'   => 'pgsql',
      'host'     => 'localhost',
      'database' => 'apoyotis_whs',
      'username' => 'postgres',
      'password' => 'postgres',
      'charset'  => 'utf8',
      'prefix'   => '',
      'schema'   => 'public',
  ),
  ```
  
  **Cargar datos**
  
  `php artisan db:seed`
  
  **Desplegar la aplicación**
  
  `php artisan serve`
  
  **Direccion de la aplicacion (navegador web)**
  
  `localhost:8000`
  
  **Usuario por defecto del sistema**
  ```
    Usuario  | Contraseña
  ---------- | ----------
     admin   |    asdf
  ```
