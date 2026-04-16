# ViandaLibre Web

Sistema web para la gestión de viandas de Doña Rosa, desarrollado en PHP con patrón MVC.

## Estructura del Proyecto

```
viandalibre_web/
├── app/                      # Lógica MVC
│   ├── models/               # Modelos de datos
│   ├── views/                # Vistas HTML
│   └── controllers/          # Controladores
├── config/                   # Configuración
├── public/                   # Punto de entrada público
├── includes/                 # Componentes transversales
├── sql/                      # Scripts SQL
└── .gitignore
```

## Instalación

1. Clona o descarga el proyecto
2. Configura la base de datos en `config/db.php`
3. Ejecuta el script SQL en `sql/schema.sql`
4. Accede a `public/index.php` desde tu servidor web

## Uso

- **Catálogo**: `/` - Ver viandas disponibles
- **Admin**: `/admin` - Panel de administración (requiere login)

## Tecnologías

- PHP 7+
- MySQL
- Bootstrap 5
- HTML/CSS/JS