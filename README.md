# 🚀 Mezquital Academy

**Mezquital Academy** es una plataforma web desarrollada en **Laravel** orientada a la enseñanza de **ciberseguridad**. Este proyecto integra módulos interactivos que abarcan desde autenticación de usuarios y gestión de perfiles hasta **simulaciones de ataques**, **recursos educativos** y **noticias de ciberseguridad**, complementados con un **asistente AI** para resolver consultas en tiempo real.

---

## 🛠️ Tecnologías Utilizadas

Este proyecto se construyó utilizando herramientas elegidas estratégicamente para asegurar su rendimiento y protección:

- **🖥️ Frameworks:** Laravel y Bootstrap para garantizar una plataforma sólida y eficiente.
- **🗄️ Base de datos:** MySQL.
- **📌 Control de versiones:** Git, facilitando la colaboración entre desarrolladores.
- **☁️ Almacenamiento en la nube:** GitHub.
- **🌍 Alojamiento:** VPS con Ubuntu.
- **🌐 Servidor web:** Nginx.
- **🔒 Seguridad:**
  - ✅ Certificado SSL de Let's Encrypt para cifrado de comunicaciones.
  - 🔑 Gestión de usuarios mediante Auth de Laravel.

---

## ✨ Características Principales

### 🔑 Autenticación y Gestión de Usuarios
- 📝 Registro, inicio de sesión y cierre de sesión.
- ⚙️ Edición de perfil y actualización de contraseña con validaciones robustas (mínimo 12 caracteres, inclusión de letras, números y símbolos).

### 📰 Noticias de Ciberseguridad
- 🔎 Visualización de artículos filtrados por palabras clave, fechas y exclusiones.

### 🎭 Simulaciones y Casos Prácticos
- 🛡️ Módulos interactivos para **identificar correos phishing**, **evaluar compras seguras** y **simular el uso de Wi-Fi público**.
- 📖 Ejercicios prácticos basados en **casos históricos** y **situaciones cotidianas**.

### 🤖 Asistente AI y Chat
- 💬 Integración con la **API de OpenAI y DeepSeek** para generar respuestas en tiempo real mediante chat.

### 🎯 Quiz Interactivo
- 📊 Evaluación de conocimientos a través de cuestionarios con preguntas cargadas desde un archivo JSON.

### 📚 Recursos Educativos
- 🏆 Repositorio de recursos categorizados en niveles (**Principiante**, **Intermedio**, **Avanzado**) para el aprendizaje en ciberseguridad.

---

## 📌 Requisitos

- **PHP:** Versión 7.4 o superior.
- **Composer:** Para la gestión de dependencias.
- **Laravel:** Se recomienda Laravel 8 o superior.
- **Base de datos:** MySQL, PostgreSQL o la que prefieras.
- **Node.js y npm:** Para compilar y gestionar activos front-end (CSS, JS).

---

## ⚡ Instalación

1️⃣ **Clonar el repositorio:**
```bash
git clone https://github.com/tuusuario/mezquital-academy.git
cd mezquital-academy
```

2️⃣ **Instalar dependencias de PHP:**
```bash
composer install
```

3️⃣ **Instalar dependencias de Node.js:**
```bash
npm install
npm run dev
```

4️⃣ **Configurar el archivo de entorno:**
   - Copia el archivo `.env.example` a `.env` y configura la conexión a la base de datos, claves de API (como `OPENAI_API_KEY` y `DEEP_SEEK`), y otros parámetros necesarios.
   - Genera la clave de la aplicación:
```bash
php artisan key:generate
```

5️⃣ **Migrar la base de datos:**
```bash
php artisan migrate
```

---

## 📂 Estructura del Proyecto

### 🔧 Controladores
- **🛡️ AuthController:** Maneja el registro e inicio de sesión.
- **📰 NewsController:** Filtra y muestra noticias de ciberseguridad.
- **💬 ChatController & ChatGPTController:** Integran la API de OpenAI y DeepSeek.
- **📊 QuizController:** Procesa preguntas y puntajes.
- **🎭 PracticasController, SimulacionController & ToolController:** Gestionan ejercicios interactivos.
- **👤 ProfileController:** Permite actualizar datos del usuario de forma segura.

### 📌 Modelos
- **👤 User:** Maneja autenticación y datos sensibles.
- **📚 Resource:** Organiza recursos educativos por nivel.

### 🎨 Vistas (Blade Templates)
- **🔑 Autenticación:** Formularios para login y registro.
- **📰 Noticias, casos prácticos, simulaciones y quizzes.**

### 🚀 Rutas Principales
- 🔑 **Autenticación:** `/login`, `/register`, `/logout`
- 📰 **Noticias y Casos Prácticos:** `/news`, `/casos`
- 🎭 **Simulaciones y Prácticas:** `/practicas/phishing`, `/practicas/compras-seguras`, `/practicas/wifi-publico`
- 📚 **Recursos y Herramientas:** `/resources`, `/tools`

---

## 🎮 Uso del Proyecto

✅ **Navegación:** Una vez autenticado, el usuario puede explorar noticias, participar en simulaciones y acceder a recursos educativos.

🤖 **Chat AI:** Interfaz integrada para interactuar con un **asistente inteligente**.

🎯 **Evaluaciones:** Cuestionarios interactivos para medir el aprendizaje.

---

## 🤝 Contribuciones

¡Las contribuciones son bienvenidas! 🚀 Para proponer mejoras:

1. **Haz un fork del repositorio.**
2. **Crea una rama para tu feature o fix:**  
   ```bash
   git checkout -b feature/nueva-funcionalidad
   ```
3. **Realiza tus cambios y haz commit:**  
   ```bash
   git commit -m 'Agrega nueva funcionalidad'
   ```
4. **Envía tu pull request.**

---

## 📜 Licencia

Este proyecto se distribuye bajo la Licencia MIT.

---

## 📩 Contacto

📧 Para dudas o sugerencias, puedes escribir a: academymezquital@gmail.com

---

🚀 **¡Gracias por ser parte de Mezquital Academy!** 💙
