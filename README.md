- Nota importante: El contenido de ésta carpeta debería ir directamente en la carpeta HTDOCS de XAMPP.
El entorno de desarrollo es en localhost y la codificación principal se encuentra en la carpeta platzi/wp-content/themes/platzi

# Platzi - Curso Práctico de Wordpress

Material del curso : https://static.platzi.com/media/public/uploads/copy-of-slides-pptx_306f7fd8-0e01-4cd4-b17f-98bbb57f8c50.pdf 

## WordPress

Sistema de gestión de contenido ( CMS - Content Management System ). 
Desarrollado en PHP y adaptado para funcionar en entornos que utilizan los sistemas de gestión de BDD MySQL. 
Opera bajo la licencia GPL y es de software libre.

### Wordpress.com

Servicio online, no es necesario descargar nada. Te registras y puedes crear un blog o web en sus servidores.

### Wordpress.org

Podemos descargar los archivos fuentes de "Wordpress" e instalarlo en nuestro servidor o entorno local.

### Funcionamiento
- BDD MySQL: Información incluida en el sitio web.
- Tema o Theme: Proveerá la estructura al sitio.
- Plugins: Funcionalidades adicionales e interactividad a la página wen de forma estética.

### Características

- Autoadministrable : Permite administrar contenido y sus configuraciones sin usar código.
- Gestión de usuarios: Permite crear usuários y segmentarlos por roles.
- API REST: Permite generar operaciones mediante API REST.
- Flexible: Permite personalizar tanto su diseño como sus funcionalidades.
- Actualizaciones: Está en constante credimiento.
- Comunidad: Cuenta con una gran comunidad que aporta a su desarrollo.


## Theme

Son los archivos que controlan como el sitio de WordPress será visualizado.
Estos archivos toman la información de la BDD MySQL y genera el código  HTML que se envía al navegador.

### index.php

Archivo principal de nuestro theme y página de inicio.

### style.css

Archivo principal de estilos y parámetros de la plantilla.

### front-page.php

Es la vista que carga por defecto como página de inicio.

### footer.php

Se indica la información del pie de página.

### functions.php

Archivo central de todas las funcionalidades de nuestro theme.

### header.php

Indica la información del encabezado.

### 404.php

Indica la información que se mostrará cuando alguien ingrese a una url de nuestro sitio que no exista.

### page.php

Es la vista que se carga por defecto para páginas cuando no se le especifica una.

### screenshot.png

Este archivo será nuestra imagen de muestra en la sección de theme en el administrador.

### single.php 

Es la vista que se carga por defecto para entradas cuando no se especifica una.