# Manual de uso para la aplicación de Laravel
#### [Made by Juan José Vergara with Scribe](https://scribehow.com/shared/Manual_de_uso_para_la_aplicacin_de_Laravel__187hcoZiS-KkxE28yZYm5w)
Este es un manual de uso para la aplicación con laravel. Pasa desde la instalación hasta el uso de la aplicación

#### Descarga de la aplicación


1\. Para empezar en el repositorio debe hacer click en" code" y bajar a la sección de "Download Zip" para descargar el proyecto


#### Configuración inicial


2\. Antes de inicializar la aplicación debe usar la terminal para instalar los paquetes de node_modules el siguiente comando:\
-npm install

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/05eab97f-39cc-4d38-83b0-a9cdbf2126a0/user_cropped_screenshot.jpeg?tl_px=0,0&br_px=859,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=285,107)


3\. Vaya a la carpeta database

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/9af68fe7-1549-4abb-b634-70f0adf58fbd/ascreenshot.jpeg?tl_px=1060,0&br_px=1920,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=497,134)


4\. Debe crear un nuevo archivo .sqlite. para esta demostración está el archivo newdatabase.sqlite pero se usará el archivo database.sqlite

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/c969be65-f3bc-478f-9fd5-d99a203c161f/ascreenshot.jpeg?tl_px=1060,55&br_px=1920,536&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=513,212)


5\. Una vez esté listo se deberá configurar la ubicación de este archivo en las variables de entorno asi que copiaremos el path del archivo

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/8ffd303c-9cfb-4728-ae12-33047af69c9a/ascreenshot.jpeg?tl_px=1036,545&br_px=1896,1026&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,212)


6\. Busque el archivo .env y haga click para ingresar

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/790ada6e-8b12-4e27-b706-2388c85d8e92/ascreenshot.jpeg?tl_px=1060,599&br_px=1920,1080&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=552,246)


7\. Y copuelo en la variable DB_DATABASE

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/220c786f-448c-466b-bab1-66e1f2184b3f/ascreenshot.jpeg?tl_px=0,338&br_px=859,819&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=133,212)


8\. Una vez listo deberá ingresar el comando php artisan migrate para migrar correctamente las migraciones y los modelos de user de la base de datos

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/aaac27da-d771-4253-9bb5-146d3b4a0db5/ascreenshot.jpeg?tl_px=0,599&br_px=859,1080&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=988,428)


9\. Click "Administrator: PowerShell"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/fc0d7eaf-11ea-44dc-a217-2918fe1d1561/ascreenshot.jpeg?tl_px=609,436&br_px=1469,917&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,212)


10\. El resultado debe ser algo como esto

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/058e7638-e0b7-4fa5-b54d-ca07b3c4367e/user_cropped_screenshot.jpeg?tl_px=0,0&br_px=859,181&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=320,326)


#### Correr el proyecto localmente


11\. Una vez listo deberá tener listo dos terminales: Una para ejecutar vite y otra para php

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/1f091149-d2e9-43b6-8a58-b74d302f3cbb/ascreenshot.jpeg?tl_px=918,496&br_px=1778,977&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,212)


12\. Para ejecutar el proyecto en el backend de laravel deberá ingresar el comando php artisan serve

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/dce65178-c74f-4633-9f5a-521cad152dab/ascreenshot.jpeg?tl_px=0,599&br_px=859,1080&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=1352,123)


13\. Para inicializar el front de vue deberá ingresar el comando npm run dev

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/d43674b5-a6ea-49b9-b96f-202dc257e79d/ascreenshot.jpeg?tl_px=0,599&br_px=859,1080&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=1339,110)


#### Acceder al proyecto


14\. Para ingresar al projecto deberá hacer CTRL+ CLICK IZQUIERDO en el link que se muestra en pantalla

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/2fd38544-4aee-4028-977f-a13571c3500a/ascreenshot.jpeg?tl_px=0,599&br_px=859,1080&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=320,304)


#### Manual de uso


15\. Podrá ver la pagina de inicio

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/350b021c-30d5-4759-85f0-18dd05056e10/screenshot.jpeg?tl_px=0,0&br_px=1393,890&force_format=jpeg&q=100&width=1120.0)


16\. Click "Ingreso "

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/a98f30fe-8250-4a10-8d61-d974aa2e96d9/ascreenshot.jpeg?tl_px=740,0&br_px=1600,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=477,113)


17\. Para registrarse vaya al boton de registro e ingrese sus datos

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/70674234-87e7-4175-b792-f45cf948b2cd/ascreenshot.jpeg?tl_px=740,0&br_px=1600,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=611,122)


18\. Una vez tenga listos sus dato haga click en "Registrar"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/a5f2d6ee-549c-4ecf-a897-d05df36ac750/user_cropped_screenshot.jpeg?tl_px=140,130&br_px=1515,900&force_format=jpeg&q=100&width=1120.0&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=524,458)


19\. Tendrá un aviso "¡Registro exitoso!"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/6b9182f7-54dc-4f46-9e40-dc54995d2092/ascreenshot.jpeg?tl_px=372,0&br_px=1232,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,140)


Tip: La aplicación también viene con avisos en caso de no ingresar correctamente los datos en forma de toast rojo


20\. Como puede ver acá, tendrá un aviso en forma de toast para los errores

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/51ac020b-af8c-4d7f-b458-61ee8fc7b470/ascreenshot.jpeg?tl_px=492,0&br_px=1352,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,165)


21\. Ingrese su mail y contraseña para acceder a la pagina de perfil

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/797ae62f-96e3-4887-aebe-9d4aa4aa7a0f/ascreenshot.jpeg?tl_px=479,160&br_px=1339,641&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,212)


22\. Y haga click en "Ingresar"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/f97cb946-37d5-42c7-9eb6-c58876166816/ascreenshot.jpeg?tl_px=415,336&br_px=1275,817&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,212)


23\. Ahora tiene acceso a la ruta protegida con su información personal

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/7b15f17c-de42-4592-a2a1-3ed4f35b7aef/user_cropped_screenshot.jpeg?tl_px=175,71&br_px=1035,552&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=402,212)


24\. Para volver al inicio haga click "Salir de la sesión "

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2025-01-18/b0b91d51-bc9c-4170-be99-fbc3ae0478ba/ascreenshot.jpeg?tl_px=740,0&br_px=1600,480&force_format=jpeg&q=100&width=860&wat_scale=76&wat=1&wat_opacity=1&wat_gravity=northwest&wat_url=https://colony-recorder.s3.amazonaws.com/images/watermarks/EC4899_standard.png&wat_pad=562,113)


#### ¡Listo!


25\. 

![](https://media.tenor.com/DE72MznZMqgAAAAC/cat.gif)
#### [Made with Scribe](https://scribehow.com/shared/Manual_de_uso_para_la_aplicacin_de_Laravel__187hcoZiS-KkxE28yZYm5w)


