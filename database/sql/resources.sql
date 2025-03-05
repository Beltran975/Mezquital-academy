-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 05-03-2025 a las 04:02:32
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
  `image` varchar(255) DEFAULT NULL,
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

INSERT INTO `resources` (`id`, `title`, `image`, `description`, `level`, `src`, `by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cyberscouts', 'https://cyberscouts.osi.es/child/app/assets/img/gui/adult/soynino.png', 'Conviértete en un verdadero Cyberscout. ¿Qué mejor manera de aprender que jugando?', 'Principiante', 'https://www.incibe.es/menores/juegos/cyberscouts/', 'INCIBE', NULL, NULL, NULL),
(2, '¡Carta! el juego de ciberseguridad para las redes sociales', 'https://www.incibe.es/sites/default/files/styles/max_2600x2600/public/contenidos/recursos/juego_carta_1170x850.jpg?itok=h6Farptd', 'Podemos dar protagonismo a niños/as y adolescentes para guiar la dinámica de juego y compartir sus conocimientos y experiencias e intercambiar opiniones en relación con las redes sociales.', 'Principiante', 'https://www.incibe.es/menores/juegos/juegos-didacticos/carta-el-juego-de-ciberseguridad-para-las-redes-sociales', 'INCIBE', NULL, NULL, NULL),
(3, '6 consejos claves de ciberseguridad en educación', 'https://newline-interactive.com/wp-content/uploads/2023/08/Lyra-education.png', 'Es importante poner sobre la mesa una serie de recomendaciones básicas a la hora de introducir herramientas tecnológicas en el aula. Algunas de ellas están relacionadas con la información que damos en Internet, el uso de antivirus eficaces o la utilizació', 'Principiante', 'https://newline-interactive.com/es/6-consejos-claves-de-ciberseguridad-en-educacion/', 'newline', NULL, NULL, NULL),
(4, '¿Cómo resguardamos la ciberseguridad en las comunidades educativas?', 'https://yt3.googleusercontent.com/jBSmttIrQr0bEiU23kRsecybM5XAM-7KdU3I-9gYD9QLIBFIROYZbHa7Kk2jxD6lkziydoBM9Q=w1707-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj', 'Una guía práctica, desarrollada por Google, llamada “Sé genial en internet”, donde se describen los principales aspectos sobre Ciudadanía Digital, y practicar en tiempo real el ámbito Cuidado y Responsabilidades Digitales, descrito por Mineduc.', 'Principiante', 'https://www.youtube.com/watch?v=I0sj-OLbZ2Q', 'Centro de Innovación', NULL, NULL, NULL),
(6, 'SANS Cyber Aces Online', 'https://images.contentstack.io/v3/assets/blt36c2e63521272fdc/blta3c1001e62c51ba7/61e990a88cd123267e7d1fea/CENTRAL_Cyber_Aces_Landing_Page_Assets_2340x500_-_1.jpg?format=png&auto=webp&width=2560', 'Curso gratuito que cubre los fundamentos de la seguridad informática y la administración de sistemas.', 'Principiante', 'https://www.sans.org/cyberaces/', 'SANS', NULL, NULL, NULL),
(8, 'Introducción a la Ciberseguridad', 'https://images.ctfassets.net/ii9ehdcj88bc/2wyzwob1mbJjul3bRJu12Y/a48a1f75cd36b620a7b475616d6d3d03/Cybersecurity.jpg', 'Diversos cursos gratuitos que puedes auditar sin costo, ofrecidos por universidades reconocidas.', 'Principiante', 'https://www.edx.org/learn/cybersecurity#featured-cybersecurity-courses', 'edX', NULL, NULL, NULL),
(9, 'Introducción a Ciberseguridad', 'https://www.netacad.com/p/ff9e491c-49be-4734-803e-a79e6e83dab1/7dc6e66c-935b-4905-b315-61b12ecb801a/image.png?ut=1613561424186', 'Explore el apasionante campo de la ciberseguridad y por qué la ciberseguridad es una carrera preparada para el futuro.', 'Principiante', 'https://www.netacad.com/es/courses/introduction-to-cybersecurity?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(10, 'Analista Junior en Ciberseguridad', 'https://www.netacad.com/p/ff9e491c-49be-4734-803e-a79e6e83dab1/81e0b761-d0e6-461b-8f3d-0d18d566275b/image.png?ut=1614279411709', 'Aprenda a proteger y defender una organización, y obtenga habilidades útiles para comenzar su carrera cibernética.', 'Principiante', 'https://www.netacad.com/es/career-paths/cybersecurity?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(11, 'Hacker ético', 'https://www.netacad.com/p/ff9e491c-49be-4734-803e-a79e6e83dab1/fc550241-ee17-45d1-87dd-1046b6aeb89a/image.png?ut=1680998400000', 'Aprenda el arte de la seguridad ofensiva para descubrir amenazas y vulnerabilidades cibernéticas antes de que lo hagan los ciberdelincuentes.\r\n\r\n', 'Intermedio', 'https://www.netacad.com/es/courses/ethical-hacker?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(12, 'CyberOps Associate', 'https://www.netacad.com/p/ff9e491c-49be-4734-803e-a79e6e83dab1/48a63cce-4d5d-432d-aa30-63309c9e8678/image.png?ut=1724402792412', 'Aprenda a monitorear, detectar y responder a las amenazas cibernéticas y los incidentes de seguridad mientras se prepara para la certificación de CyberOps Associate.', 'Intermedio', 'https://www.netacad.com/es/courses/cyberops-associate?courseLang=es-XL', 'CISCO', NULL, NULL, NULL),
(13, 'Seguridad de OT', 'https://training.fortinet.com/theme/image.php/kifer/theme/1741030782/course-page-banner-2435x720', 'En este curso, aprenderá a asegurar su infraestructura de OT utilizando soluciones de Fortinet. Aprenderá cómo diseñar, implementar, administrar y monitorear los dispositivos FortiGate, FortiNAC, FortiAnalyzer y FortiSIEM', 'Intermedio', 'https://training.fortinet.com/local/staticpage/view.php?page=library_ot-security', 'FORTINET', NULL, NULL, NULL),
(14, 'Analítica avanzada', 'https://training.fortinet.com/theme/image.php/kifer/theme/1741030782/course-page-banner-2435x720', 'Aprenderá a usar FortiSIEM en un entorno multi-inquilino. Usted aprenderá sobre las reglas y su arquitectura, cómo se generan los incidentes, cómo se realizan los cálculos basales, los diferentes métodos de remediación disponibles y cómo las consultas ani', 'Avanzado', 'https://training.fortinet.com/local/staticpage/view.php?page=library_advanced-analytics', 'FORTINET', NULL, NULL, NULL),
(15, 'Técnicas Avanzadas de Ciberseguridad: Integración y Evolución de la Kill Chain en Diversos Escenarios', 'https://smilecomunicacion.com/wp-contenido/uploads/2024/06/ciberseguridad-en-la-empresa.jpg.webp', 'Este curso profundiza en los principales modelos de cadenas de ataque utilizados en ciberseguridad.', 'Avanzado', 'https://arxiv.org/abs/2306.09242?', 'Investigadores independientes', NULL, NULL, NULL),
(16, 'Ciberseguridad Avanzada: Navegando el Futuro de la Defensa Digital', 'https://www.flumotion.com/wp-content/uploads/close-up-hacker-hand-stealing-data-man-networking-laptop-late-night-scaled.jpg', 'Este artículo explora cómo la Inteligencia Artificial (IA) y el Aprendizaje Automático (ML) están revolucionando la ciberseguridad.', 'Avanzado', 'https://www.flumotion.com/ciberseguridad-avanzada-navegando-el-futuro-de-la-defensa-digital/', 'Flumotion', NULL, NULL, NULL);

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
