## 🖥️ Descripción del Proyecto  

### 📁 1. Estructura de Estilos (`public/css/`)  
📌 **header.css** y **footer.css** → Estilos exclusivos para el encabezado y el pie de página.  
🎨 **styles.css** → Contiene los estilos generales de la página principal (hero, secciones, etc.).  
📂 Cada página específica tendrá su propio archivo de estilos independiente para mantener la organización.  

---

### 🏗️ 2. Plantilla Base (`resources/layouts/app.blade.php`)  
📌 **Estructura principal** de la aplicación.  
🔗 Incluye `@include('partials.header')` y `@include('partials.footer')` para cargar el encabezado y pie de página.  
🎨 Enlaza los estilos globales (`header.css`, `footer.css`, `styles.css`).  

---

### 🧩 3. Vistas Parciales (`resources/partials/header.blade.php` / `footer.blade.php`)  
📝 Contienen **únicamente** el código HTML del header y footer.  
🔄 Se reutilizan en todas las páginas que vayan a crear ustedes para evitar código repetido.  

---

### 🏠 4. Vista de Inicio (`resources/home.blade.php`)  
🖥️ **Página específica** que extiende la plantilla base con `@extends('layouts.app')`.  
🗂️ Define el contenido principal en `@section('content')`.  
🎨 Puede tener su propio archivo de estilos si es necesario.  
