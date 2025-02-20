# 🌿 Virtual Meditate - Gestión de Gafas VR

Bienvenido a **Virtual Meditate**, un sistema de gestión para dispositivos de Realidad Virtual (VR), diseñado para proporcionar una experiencia inmersiva de meditación y relajación. 🧘‍♂️🌿  

---

## 📌 Características principales
✔️ Gestión de gafas VR con un CRUD automatizado  
✔️ Autenticación segura con Laravel Breeze  
✔️ Interfaz moderna con Tailwind CSS  
✔️ Soporte para base de datos MariaDB  
✔️ Dashboard con modo claro/oscuro  

---

## 🚀 Tecnologías utilizadas
- **Backend:** [Laravel 10](https://laravel.com/) + [CRUD Generator](https://github.com/appzcoder/crud-generator)  
- **Frontend:** Blade + Tailwind CSS  
- **Base de datos:** MariaDB (gestionada con phpMyAdmin)  
- **Dependencias clave:**  
  - [Composer](https://getcomposer.org/)  
  - [Node.js & npm](https://nodejs.org/)  
  - [Vite](https://vitejs.dev/)  

---

## 🛠️ Instalación y configuración

### 1️⃣ **Clonar el repositorio**
```sh
git clone https://github.com/VioletGminisJ25/VirtualMeditateLaravel.git
cd VirtualMeditateLaravel
```

### 2️⃣ **Instalar dependencias**
```sh
composer install
npm install
```

### 3️⃣ **Configurar variables de entorno**
Renombrar el archivo `.env.example` a `.env` y actualizar los datos de la base de datos:
```sh
cp .env.example .env
```
Luego, generar la clave de aplicación:
```sh
php artisan key:generate
```

### 4️⃣ **Configurar la base de datos**
```sh
php artisan migrate
```

### 5️⃣ **Ejecutar el servidor**
```sh
php artisan serve
npm run dev
```
Acceder a `http://127.0.0.1:8000/` en tu navegador. 🚀  

---

## 🎨 Estilos y diseño
- **Paleta de colores:** tonos de gris y morado para coherencia visual  
- **Modo oscuro y claro en el dashboard**  
- **Diseño responsive y minimalista**  

---

## 👥 Contribución
Si deseas contribuir al proyecto, puedes hacer un **fork** del repositorio, crear una rama y enviar un pull request. ¡Toda ayuda es bienvenida! 💜  

---

## 📌 Posibles mejoras futuras
- 📌 Ampliar la tabla de `glasses` con más detalles de hardware  
- 📌 Implementar roles de usuario para planes personalizados  
- 📌 Mejorar la accesibilidad de la interfaz  

---

## 📝 Licencia
Este proyecto es de código abierto bajo la licencia MIT.  

---

✨ *Desarrollado con Laravel, pasión y café ☕ por Javier Santos Rodal* ✨

