# Prueba Programador Junior

**Requerimientos de la prueba:**
- Crear una estructura de base de datos para una tienda de electrodomésticos, que permita categorizar los productos, que permita vender los productos en un punto de venta y marque quien lo vendió, fecha y hora.
- Aplicación crear una aplicación en Laravel que permita generar un reporte de:
	- Ventas por fecha.
	- Vendedores
	- Clientes.

# Requisitos
 - Laravel 9.+
 - PhP 8.+
 - Composer
# Instalación
 - Clonar este repositorio
 - Instalar dependencias de composer con: ``` composer install ```
 - Instalar dependencias de npm con: ``` npm install ```
 - Compilar estilos con: ``` npm run dev ```
 - Creamos una nueva base de datos con el motor nuestro motor de base de datos
 - Conectar a base de datos (para poder conectar a la base de datos, es necesario renombar el archivo **.env.example** a **.env** luego buscamos el apartado de conexión y sustituimos por nuestros datos locales, un ejemplo a continuación
 
	 ```
		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=nombre_base_datos_elegido
		DB_USERNAME=root
		DB_PASSWORD=
	```
- Ejecutar las migraciones con el siguiente comando: ```php artisan migrate:fresh --seed``` 
- Por ultimo necesitamos generar una token de acceso con el siguiente comando ```php artisan key:generate```
# Tecnologías utilizadas
- Laravel 9
- Laravel Livewire
- Tailwind CSS
- MySQL

