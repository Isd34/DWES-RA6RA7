# Docker Laravel - Proyecto Didáctico

Entorno Docker con dos proyectos Laravel:
- **proyecto1**: CRUD tradicional con vistas Blade
- **proyecto2**: Servidor Web API RESTful

## Requisitos

- Docker Desktop
- Git

## Conectar repositorio local con el remoto

### Opción A: Clonar el repositorio (recomendado para nuevos colaboradores)

```bash
# Clonar el repositorio
git clone https://github.com/Isd34/DWES-RA6RA7.git

# Entrar al directorio
cd DWES-RA6RA7
```

### Opción B: Conectar un directorio existente al repositorio remoto

Si ya tienes el proyecto en tu máquina y quieres conectarlo al repositorio:

```bash
# Ir al directorio del proyecto
cd ruta/a/tu/proyecto

# Inicializar git (si no está inicializado)
git init

# Añadir el repositorio remoto
git remote add origin https://github.com/Isd34/DWES-RA6RA7.git

# Descargar los cambios del repositorio remoto
git fetch origin

# Sincronizar con la rama main
git branch -M main
git pull origin main
```

### Comandos Git para colaboradores

```bash
# Ver estado de los archivos
git status

# Descargar últimos cambios del repositorio remoto
git pull origin main

# Añadir cambios al staging
git add .

# Crear un commit
git commit -m "Descripción de los cambios"

# Subir cambios al repositorio remoto
git push origin main
```

## Instalación

### 2. Levantar los contenedores Docker

```bash
docker-compose up -d
```

### 3. Configurar proyecto1

```bash
# Entrar al contenedor
docker exec -it laravel-examen-app bash

# Ir a proyecto1
cd /var/www/html/proyecto1

# Instalar dependencias
composer install

# Copiar .env.example a .env
cp .env.example .env

# Editar .env y añadir la contraseña
# DB_PASSWORD=root

# Generar APP_KEY
php artisan key:generate

# Ejecutar migraciones
php artisan migrate
```

### 4. Configurar proyecto2

```bash
# Dentro del contenedor, ir a proyecto2
cd /var/www/html/proyecto2

# Instalar dependencias
composer install

# Copiar .env.example a .env
cp .env.example .env

# Editar .env y añadir la contraseña
# DB_PASSWORD=root

# Generar APP_KEY
php artisan key:generate
```

## URLs de acceso

| Proyecto | URL |
|----------|-----|
| proyecto1 (CRUD) | http://localhost:8080/proyecto1/public/tasks |
| proyecto2 (API) | http://localhost:8080/proyecto2/public/tasks |

## Endpoints API (proyecto2)

| Acción | Método | URL |
|--------|--------|-----|
| Listar tareas | GET | `/proyecto2/public/api/tasks` |
| Ver tarea | GET | `/proyecto2/public/api/tasks/{id}` |
| Crear tarea | POST | `/proyecto2/public/api/tasks` |
| Actualizar tarea | PUT | `/proyecto2/public/api/tasks/{id}` |
| Eliminar tarea | DELETE | `/proyecto2/public/api/tasks/{id}` |

### Ejemplo de uso con Thunder Client

**Crear tarea (POST):**
```json
{
    "title": "Nueva tarea",
    "description": "Descripción de la tarea"
}
```

## Configuración de Base de Datos

Ambos proyectos comparten la misma base de datos MySQL:

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
```

## Comandos útiles

```bash
# Entrar al contenedor
docker exec -it laravel-examen-app bash

# Reiniciar contenedor
docker restart laravel-examen-app

# Limpiar caché de Laravel
php artisan route:clear
php artisan config:clear
php artisan cache:clear
```
