# rocking
reserva de tours, reserva de carros de golf y venta de fotos

#configuración del proyecto
1. Permisos de escritura: Después de instalar Laravel, tal vez debas configurar algunos permisos, Los directorios entre storage y la carpeta bootstrap/cache deben tener permisos de escritura por el servidor web.
Asegúrate de configurar esto correctamente usando:
		
	sudo chmod -R 755 storage

2. Instalando dependencias con Composer. De esta forma se instalarán todas las dependencias necesarias para el proyecto que fueron definidas en el archivo composer.json durante el desarrollo.

	composer install

3. Archivo de configuración de Laravel: Cada nuevo proyecto con Laravel, por defecto tiene un archivo .env con los datos de configuración necesarios para el mismo, cuando utilizamos un sistema de control de versiones como git, este archivo se excluye del repositorio por medidas de seguridad.
Sin embargo  existe un archivo llamado .env.example que es un ejemplo de como crear un el archivo de configuración, podemos copiar este archivo desde la consola con:
	
	$ cp .env.example .env

De esta forma ya tenemos el archivo de configuración de nuestro proyecto.

4. Creando un nuevo API key: Por medidas de seguridad cada proyecto de Laravel cuenta con una clave única que se crea en el archivo .env al iniciar el proyecto. En caso de que el desarrollador no te haya proporcionado están información, puedes generar una nueva API key desde la consola usando:
	
	$ php artisan key:generate

5. Base de datos y migraciones: 
	5.1. crear la base de datos definida en el archivo .env
	5.2. Por lo general las bases de datos en los proyectos de Laravel se crean haciendo uso de las migraciones. Para ejecutar la migración desde la consola usando artisan

	$php artisan migrate









