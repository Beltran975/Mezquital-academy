-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
---- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2025 a las 23:36:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mezquital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `resources`
--

INSERT INTO `resources` (`id`, `title`, `description`, `level`, `src`, `by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cyberscouts', 'Conviértete en un verdadero Cyberscout. ¿Qué mejor manera de aprender que jugando?', 'Principiante', 'https://www.incibe.es/menores/juegos/cyberscouts/', 'INCIBE', NULL, NULL, NULL),
(2, '¡Carta! el juego de ciberseguridad para las redes sociales', 'Podemos dar protagonismo a niños/as y adolescentes para guiar la dinámica de juego y compartir sus conocimientos y experiencias e intercambiar opiniones en relación con las redes sociales.', 'Principiante', 'https://www.incibe.es/menores/juegos/juegos-didacticos/carta-el-juego-de-ciberseguridad-para-las-redes-sociales', 'INCIBE', NULL, NULL, NULL),
(3, '6 consejos claves de ciberseguridad en educación', 'Es importante poner sobre la mesa una serie de recomendaciones básicas a la hora de introducir herramientas tecnológicas en el aula. Algunas de ellas están relacionadas con la información que damos en Internet, el uso de antivirus eficaces o la utilizació', 'Principiante', 'https://newline-interactive.com/es/6-consejos-claves-de-ciberseguridad-en-educacion/', 'newline', NULL, NULL, NULL),
(4, '¿Cómo resguardamos la ciberseguridad en las comunidades educativas?', 'Una guía práctica, desarrollada por Google, llamada “Sé genial en internet”, donde se describen los principales aspectos sobre Ciudadanía Digital, y practicar en tiempo real el ámbito Cuidado y Responsabilidades Digitales, descrito por Mineduc.', 'Principiante', 'https://www.youtube.com/watch?v=I0sj-OLbZ2Q', 'Centro de Innovación', NULL, NULL, NULL),
(6, 'SANS Cyber Aces Online', 'Curso gratuito que cubre los fundamentos de la seguridad informática y la administración de sistemas.', 'Principiante', 'https://www.sans.org/cyberaces/', 'SANS', NULL, NULL, NULL),
(8, 'Introducción a la Ciberseguridad', 'Diversos cursos gratuitos que puedes auditar sin costo, ofrecidos por universidades reconocidas.', 'Principiante', 'https://www.edx.org/learn/cybersecurity#featured-cybersecurity-courses', 'edX', NULL, NULL, NULL),
(9, 'Introducción a Ciberseguridad', 'Explore el apasionante campo de la ciberseguridad y por qué la ciberseguridad es una carrera preparada para el futuro.', 'Principiante', 'https://www.netacad.com/es/courses/introduction-to-cybersecurity?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(10, 'Analista Junior en Ciberseguridad', 'Aprenda a proteger y defender una organización, y obtenga habilidades útiles para comenzar su carrera cibernética.', 'Principiante', 'https://www.netacad.com/es/career-paths/cybersecurity?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(11, 'Hacker ético', 'Aprenda el arte de la seguridad ofensiva para descubrir amenazas y vulnerabilidades cibernéticas antes de que lo hagan los ciberdelincuentes.\r\n\r\n', 'Intermedio', 'https://www.netacad.com/es/courses/ethical-hacker?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(12, 'CyberOps Associate', 'Aprenda a monitorear, detectar y responder a las amenazas cibernéticas y los incidentes de seguridad mientras se prepara para la certificación de CyberOps Associate.', 'Intermedio', 'https://www.netacad.com/es/courses/cyberops-associate?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(13, 'Seguridad de OT', 'En este curso, aprenderá a asegurar su infraestructura de OT utilizando soluciones de Fortinet. Aprenderá cómo diseñar, implementar, administrar y monitorear los dispositivos FortiGate, FortiNAC, FortiAnalyzer y FortiSIEM', 'Intermedio', 'https://training.fortinet.com/local/staticpage/view.php?page=library_ot-security', 'FORTINET', NULL, NULL, NULL),
(14, 'Analítica avanzada', 'Aprenderá a usar FortiSIEM en un entorno multi-inquilino. Usted aprenderá sobre las reglas y su arquitectura, cómo se generan los incidentes, cómo se realizan los cálculos basales, los diferentes métodos de remediación disponibles y cómo las consultas ani', 'Avanzado', 'https://training.fortinet.com/local/staticpage/view.php?page=library_advanced-analytics', 'FORTINET', NULL, NULL, NULL),
(15, 'Técnicas Avanzadas de Ciberseguridad: Integración y Evolución de la Kill Chain en Diversos Escenarios', 'Este curso profundiza en los principales modelos de cadenas de ataque utilizados en ciberseguridad.', 'Avanzado', 'https://arxiv.org/abs/2306.09242?', 'Investigadores independientes', NULL, NULL, NULL),
(16, 'Ciberseguridad Avanzada: Navegando el Futuro de la Defensa Digital', 'Este artículo explora cómo la Inteligencia Artificial (IA) y el Aprendizaje Automático (ML) están revolucionando la ciberseguridad.', 'Avanzado', 'https://www.flumotion.com/ciberseguridad-avanzada-navegando-el-futuro-de-la-defensa-digital/', 'Flumotion', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 03-03-2025 a las 02:02:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `praxaton`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `resources`
--

INSERT INTO `resources` (`id`, `title`, `description`, `src`, `by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cyberscouts', 'Conviértete en un verdadero Cyberscout. ¿Qué mejor manera de aprender que jugando?', 'https://www.incibe.es/menores/juegos/cyberscouts/', 'INCIBE', NULL, NULL, NULL),
(2, '¡Carta! el juego de ciberseguridad para las redes sociales', 'Podemos dar protagonismo a niños/as y adolescentes para guiar la dinámica de juego y compartir sus conocimientos y experiencias e intercambiar opiniones en relación con las redes sociales.', 'https://www.incibe.es/menores/juegos/juegos-didacticos/carta-el-juego-de-ciberseguridad-para-las-redes-sociales', 'INCIBE', NULL, NULL, NULL),
(3, '6 consejos claves de ciberseguridad en educación', 'Es importante poner sobre la mesa una serie de recomendaciones básicas a la hora de introducir herramientas tecnológicas en el aula. Algunas de ellas están relacionadas con la información que damos en Internet, el uso de antivirus eficaces o la utilizació', 'https://newline-interactive.com/es/6-consejos-claves-de-ciberseguridad-en-educacion/', 'newline', NULL, NULL, NULL),
(4, '¿Cómo resguardamos la ciberseguridad en las comunidades educativas?', 'Una guía práctica, desarrollada por Google, llamada “Sé genial en internet”, donde se describen los principales aspectos sobre Ciudadanía Digital, y practicar en tiempo real el ámbito Cuidado y Responsabilidades Digitales, descrito por Mineduc.', 'https://www.youtube.com/watch?v=I0sj-OLbZ2Q', 'Centro de Innovación', NULL, NULL, NULL),
(5, 'Entrenamiento de ciberseguridad que reduce la responsabilidad empresarial', 'Plataforma con numerosos cursos gratuitos en ciberseguridad, que abarcan desde conceptos básicos hasta temas avanzados.', 'https://www.cybrary.it', 'cybrary', NULL, NULL, NULL),
(6, 'SANS Cyber Aces Online', 'Curso gratuito que cubre los fundamentos de la seguridad informática y la administración de sistemas.', 'https://www.sans.org/cyberaces/', 'SANS', NULL, NULL, NULL),
(7, 'Open Security Training', 'Ofrece cursos gratuitos sobre análisis forense, hacking ético y otros aspectos de la ciberseguridad.', 'https://opensecuritytraining.info/', 'Open Security Training', NULL, NULL, NULL),
(8, 'Introducción a la Ciberseguridad', 'Diversos cursos gratuitos que puedes auditar sin costo, ofrecidos por universidades reconocidas.', 'https://www.edx.org/learn/cybersecurity#featured-cybersecurity-courses', 'edX', NULL, NULL, NULL),
(9, 'Cursos de Ciberseguridad', 'Plataforma con cursos gratuitos para auditar (algunos ofrecen certificado gratuito en ocasiones), ideales para profundizar en el tema.', 'https://www.coursera.org/courses?query=cybersecurity', 'Coursera', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
