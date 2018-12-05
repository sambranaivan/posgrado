-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 22:51:23
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `posgrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridads`
--

CREATE TABLE `autoridads` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrera_id` int(10) UNSIGNED NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autoridads`
--

INSERT INTO `autoridads` (`id`, `nombre`, `contacto`, `email`, `carrera_id`, `cargo`, `created_at`, `updated_at`) VALUES
(1, 'Arq. Victor Pelli', NULL, NULL, 1, 'Director', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(2, 'Mg. Sandra Raquel Fogar', NULL, NULL, 2, 'Director', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(3, 'Mg. Gabriel Eduardo Ojeda Fosaro', NULL, NULL, 11, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(4, 'Dr. Sonia Cecilia Sgroppo', NULL, NULL, 17, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(5, 'Dr. Enriquelle a Yaniez', NULL, NULL, 19, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(6, 'Dr. Jose Eduardo Lopez', NULL, NULL, 20, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(7, 'Dr. Marcial Sanchez Negrette', NULL, NULL, 21, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(8, 'Dr. Patricia konsinksuk', NULL, NULL, 22, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(9, 'Dr. Maza Miguel Angel', NULL, NULL, 30, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(10, 'Dra. Maria Del Mar Solis Carnicier', NULL, NULL, 37, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(11, 'Mg. Ing. Nora Basterra', NULL, NULL, 40, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(12, 'Dr.  Jorge Osvaldo Gorodner', NULL, NULL, 41, 'Director', '2018-11-12 23:01:06', '2018-11-12 23:01:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(10) UNSIGNED NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `denominacion_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `anio`, `nombre`, `titulo`, `denominacion_id`, `descripcion`, `unidad_id`, `created_at`, `updated_at`, `area`) VALUES
(1, NULL, 'Maestría en Gestión y Desarrollo de la Vivienda Social', 'Magíster en Gestión y Desarrollo de la Vivienda Social', 2, NULL, 3, '2018-11-12 23:01:05', '2018-12-05 22:24:14', 'Ciencias Aplicadas'),
(2, NULL, 'Maestría en Gestión Ambiental y del Territorio Urbano', 'Magister en Gestion Ambiental y del Territorio Urbano', 2, NULL, 3, '2018-11-12 23:01:05', '2018-12-05 22:24:41', 'Ciencias Aplicadas'),
(3, NULL, 'Doctorado de la Universidad  Nacional del Nordeste en el Área de Recursos Naturales', 'Doctor de la UNNE en el Área de Recursos Naturales.', 3, NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Aplicadas'),
(4, NULL, 'Maestría en Producción Vegetal', 'Magíster en Producción  Vegetal', 2, NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Aplicadas'),
(5, NULL, 'Especialización en Manejo de Recursos Forestales', 'Especialista en Manejo de Recursos Forestales ', 1, NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Aplicadas'),
(6, NULL, 'Maestría en Gestión Empresarial', 'Magister en Gestión Empresarial', 2, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Sociales'),
(7, NULL, 'Maestría en Marketing', 'Magister en Marketing', 2, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Sociales'),
(8, NULL, 'Maestría en Contabilidad Superior y Auditoria', 'Magister en Contabilidad Superior y Auditoria', 2, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Sociales'),
(9, NULL, 'Especialización en Gerencia y Vinculación Tecnológica', 'Especialista en Gerencia y Vinculación Tecnológica', 1, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Sociales'),
(10, NULL, 'Especialización en Gestión de la Empresa Agropecuaria', 'Especialista en Gestión de la Empresa Agropecuaria', 1, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Sociales'),
(11, NULL, 'Especialización en Gestión Pública, Provincial y Municipal', 'Especialista en Gestión Pública, Provincial y Municipal', 1, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05', 'Ciencias Sociales'),
(12, NULL, 'Especialización en Tributación', 'Especialista en Tributación', 1, NULL, 5, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(13, NULL, 'Doctorado  de la Universidad Nacional del Nordeste en  Química', 'Doctor de la Universidad Nacional del Nordeste  en  Química', 3, NULL, 6, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Básicas'),
(14, NULL, 'Doctorado  de la Universidad Nacional del Nordeste en Física', 'Doctor de la Universidad Nacional del Nordeste en Física', 3, NULL, 6, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Básicas'),
(15, NULL, 'Doctorado de la Universidad Nacional del Nordeste en Biología', 'Doctor de la Universidad Nacional del Nordeste en Biología', 3, NULL, 6, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Básicas'),
(16, NULL, 'Maestría en Tecnologías de la Información', 'Magister en Tecnologias de la Informacion', 2, NULL, 6, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Aplicadas'),
(17, NULL, 'Especialización en Análisis de Alimentos', 'Especialista en Análisis de Alimentos ', 1, NULL, 6, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Aplicadas'),
(18, NULL, 'Doctorado de la Universidad  Nacional del Nordeste en Ciencias Veterinarias', 'Doctor de la Universidad Nacional del Nordeste en Ciencias Veterinarias', 3, NULL, 7, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(19, NULL, 'Maestría en Producción Animal Subtropical', 'Magíster en Producción  Animal  Subtropical', 2, NULL, 7, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(20, NULL, 'Especialización  en Cirugía de Pequeños Animales', 'Especialista en Cirugía de Pequeños Animales', 1, NULL, 7, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(21, NULL, 'Especialización en Diagnostico  Anatomohistopatológico Veterinario', 'Especialista  en Diagnostico Anatomohistopatológico Veterinario', 1, NULL, 7, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(22, NULL, 'Especialización en Clínica de Animales de Compañía', 'Especialista en Animales de Compañía', 1, NULL, 7, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(23, NULL, 'Doctorado en Derecho', 'Doctor en Derecho', 3, NULL, 8, '2018-11-12 23:01:06', '2018-11-14 23:05:05', 'Ciencias Sociales'),
(24, NULL, 'Maestría en Ciencias Penales', 'Magister en Ciencias Penales', 2, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(25, NULL, 'Maestría en Derecho Empresario', 'Magister en Derecho Empresario', 2, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(26, NULL, 'Maestría en Derecho de Familia, Niñez y Adolescencia', 'Magíster en Derecho de Familia, Niñez y Adolescencia', 2, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(27, NULL, 'Maestría en Magistratura y función Judicial', 'Magister en Magistratura y Función Judicial ', 2, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(28, NULL, 'Especialización en Derecho Laboral', 'Especialista en Derecho Laboral', 1, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(29, NULL, 'Especialización en Derecho Administrativo', 'Especialista en Derecho Administrativo', 1, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(30, NULL, 'Especialización en Seguridad Social', 'Especialista en Seguridad Social', 1, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(31, NULL, 'Especialización en Teoría y Técnica del Proceso Judicial', 'Especialista en Teoría y Técnica del Proceso Judicial', 1, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(32, NULL, 'Especialización en Derecho Notarial y Registral', 'Especialista en Derecho Notarial y Registral', 1, NULL, 8, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(33, NULL, 'Doctorado de la Universidad Nacional del Nordeste en Letras', 'Doctor de la Universidad Nacional del Nordeste en Letras', 3, NULL, 9, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Básicas'),
(34, NULL, 'Doctorado  en Filosofía', 'Doctor en Filosofía', 3, NULL, 9, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Humanas'),
(35, NULL, 'Doctorado de la Universidad Nacional del Nordeste en Geografía ', 'Doctor de la Universidad Nacional del Nordeste en Geografía', 3, NULL, 9, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Sociales'),
(36, NULL, 'Especialización  en Docencia Universitaria', 'Especialista en Docencia Universitaria', 1, NULL, 9, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Humanas'),
(37, NULL, 'Especialización en Historia Regional', 'Especialista en Historia Regional', 1, NULL, 9, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Humanas'),
(38, NULL, 'Doctorado de la Universidad Nacional del Nordeste en el Área de la Ingeniería', 'Doctor de la UNNE en el Área de la Ingeniería', 3, NULL, 10, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Aplicadas'),
(39, NULL, 'Maestría en Ciencias de la Ingeniería', 'Magíster en Ciencias de la  Ingeniería', 2, NULL, 10, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Aplicadas'),
(40, NULL, 'Especialización en Ingeniería Ambiental', 'Especialista  en Ingeniería Ambiental', 1, NULL, 10, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Aplicadas'),
(41, NULL, 'Doctorado de la Universidad Nacional del Nordeste en Medicina', 'Doctor de la UNNE en Medicina', 3, NULL, 1, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(42, NULL, 'Maestría en Ciencias de la Enfermería Comunitaria', 'Magister en Ciencias  de la Enfermería Comunitaria', 2, NULL, 1, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(43, NULL, 'Doctorado de la Universidad Nacional del Nordeste en Odontología  ', 'Doctor de la Universidad  Nacional del Nordeste en Odontología ', 3, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(44, NULL, 'Maestría en Gestión de la Salud Pública con orientación en Prácticas Preventivas', 'Magister en Gestión de la Salud Pública con orientación en Practicas preventivas ', 2, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(45, NULL, 'Maestría en Investigación en Ciencias de la Salud  ', 'Magister Investigación en Ciencias de la Salud', 2, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(46, NULL, 'Especialización  en Odontopediatría ', 'Especialista en Odontopediatría', 1, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(47, NULL, 'Especialización  en Cirugía  y Traumatología Buco maxilofacial', 'Especialista en Cirugía  y Traumatología Buco maxilofacial', 1, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(48, NULL, 'Especialización en Odontología Legal ', 'Especialista en odontología legal', 1, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(49, NULL, 'Especialización en Docencia y Gestión Universitaria con orientación en Ciencias de la Salud ', 'Especialista en Docencia y Gestión Universitaria con orientación en Ciencias  de la Salud.', 1, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias Humanas'),
(50, NULL, 'Especialización en Diagnóstico por Imágenes de la región Buco-Maxilofacial', 'Especialista en Diagnóstico por Imágenes de la Región Buco - Maxilofacial                        ', 1, NULL, 2, '2018-11-12 23:01:06', '2018-11-12 23:01:06', 'Ciencias de la Salud'),
(51, 2016, 'Diplomatura Superior en Electromedicina Aplicada en Rehabilitacion', 'Diplomado Superior en Electromedicina Aplicada en Rehabilitacion', 4, NULL, 1, NULL, NULL, ''),
(52, 2017, 'Diplomatura Superior en Didáctica Orientada a la Formación Profesional en Salud Comunitaria y Medicina Familiar', 'Diplomado Superior en Didáctica Orientada a la Formación Profesional en Salud Comunitaria y Medicina Familiar', 4, NULL, 1, NULL, NULL, ''),
(53, 2018, 'Diplomatura Superior en Diabetes Mellitus y Nutrición', 'Diplomado Superior en Diabetes Mellitus y Nutrición', 4, NULL, 1, NULL, NULL, ''),
(54, NULL, 'Diplomatura Superior en Oftalmologia', 'Diplomado Superior en Oftalmologia', 4, NULL, 1, NULL, NULL, ''),
(55, 2018, 'Diplomatura Superior en Cardiología', 'Diplomado Superior en Cardiología', 4, '', 1, NULL, NULL, ''),
(56, 2018, 'Diplomatura Superior en Reeducación Postural con Abordaje Global y Cadenas Musculares Cruzadas', 'Diplomado Superior en Reeducación Postural con Abordaje Global y Cadenas Musculares Cruzadas', 4, NULL, 1, NULL, NULL, ''),
(57, NULL, 'Diplomatura Superior en Producción Animal de Rumiantes', 'Diplomado Superior en Producción Animal de Rumiantes', 4, NULL, 7, NULL, NULL, ''),
(58, NULL, 'Diplomatura Superior en Osteopatia', 'Diplomado Superior en Osteopatia', 4, NULL, 1, NULL, NULL, ''),
(59, NULL, 'Diplomatura Superior en Derechos de las Familias, Niños, Niñas y Adolescentes', 'Diplomado Superior en Derechos de las Familias, Niños, Niñas y Adolescentes', 4, NULL, 8, NULL, NULL, ''),
(60, NULL, 'Diplomatura Superior en Mediación', 'Diplomado Superior en Mediación', 4, NULL, 8, NULL, NULL, ''),
(61, NULL, 'Diplomatura Superior en Estudios de Procesos Socioeconomicos', 'Diplomado Superior en Estudios de Procesos Socioeconomicos', 4, NULL, 5, NULL, NULL, ''),
(62, 2017, 'Diplomatura Superior en Terapia Cognitivo-Conductual', 'Diplomado Superior en Terapia Cognitivo-Conductual', 4, NULL, 1, NULL, NULL, ''),
(63, NULL, 'Diplomatura Superior en Clínica y Terapéutica de las Adicciones', 'Diplomado Superior en Clínica y Terapéutica de las Adicciones', 4, NULL, 1, NULL, NULL, ''),
(64, 2017, 'Diplomatura Superior en Infectologia Pediatrica con Enfoque Ambiental', 'Diplomado Superior en Infectologia Pediatrica con Enfoque Ambiental', 4, NULL, 1, NULL, NULL, ''),
(65, 2017, 'Diplomatura Superior en Biomedicina Experimental', 'Diplomado Superior en Biomedicina Experimental', 4, NULL, 1, NULL, NULL, ''),
(66, NULL, 'Diplomatura Superior en Sistema Acusatorio y Litigación Oral', 'Diplomado Superior en Sistema Acusatorio y Litigación Oral', 4, NULL, 8, NULL, NULL, ''),
(67, NULL, 'Diplomatura Superior en Mantenimiento de Equipos Mecánicos y Electromecánicos', 'Diplomado Superior en Mantenimiento de Equipos Mecánicos y Electromecánicos', 4, NULL, 10, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denominacions`
--

CREATE TABLE `denominacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `denominacions`
--

INSERT INTO `denominacions` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Especialización', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(2, 'Maestria', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(3, 'Doctorado', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(4, 'Diplomatura Superior', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_04_184152_create_denominacions_table', 1),
(4, '2018_10_04_186031_create_unidads_table', 1),
(5, '2018_10_04_186032_create_carreras_table', 1),
(6, '2018_11_05_184111_create_autoridads_table', 1),
(7, '2018_11_08_183137_create_tramites_table', 1),
(8, '2018_11_08_185319_create_resolucions_table', 1),
(11, '2018_12_05_191532_add_area', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucions`
--

CREATE TABLE `resolucions` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrera_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `resolucions`
--

INSERT INTO `resolucions` (`id`, `codigo`, `descripcion`, `file`, `carrera_id`, `created_at`, `updated_at`) VALUES
(1, 'Res. 734/11', 'Consejo Superior', NULL, 1, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(2, 'Acreditada Res. 355/12', 'Coneau', NULL, 1, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(3, 'Res. 443/16', 'Ministerial', NULL, 1, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(4, 'Res.Nº152/15 C.S.', 'Consejo Superior', NULL, 2, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(5, 'Acreditada (Acta Nº443/16)', 'Coneau', NULL, 2, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(6, ' Res. Nº4074/17 ME', 'Ministerial', NULL, 2, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(7, 'Res. Nº 780/95 C.S.', 'Consejo Superior', 'resolucion_7.pdf', 3, '2018-11-12 23:01:05', '2018-11-14 22:47:43'),
(8, 'Acreditada (Res. Nº 1018/10).', 'Coneau', 'resolucion_8.pdf', 3, '2018-11-12 23:01:05', '2018-11-12 23:02:38'),
(9, 'Res Nº0337/14 ME', 'Ministerial', 'resolucion_9.pdf', 3, '2018-11-12 23:01:05', '2018-11-12 23:03:03'),
(10, 'Res. Nº 874/05 C. S.', 'Consejo Superior', NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(11, 'Acreditada (Res Nº729/12).', 'Coneau', NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(12, 'Res Nº0067/08ME', 'Ministerial', NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(13, 'Res. Nº 972/09 C.S.', 'Consejo Superior', NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(14, 'Acreditada (Res. Nº 348/12)', 'Coneau', NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(15, 'Res. Nº2106/14 ME', 'Ministerial', NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(16, 'Res. Nº 308/99 C.S.', 'Consejo Superior', NULL, 6, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(17, 'Acreditada. (Res. Nº 702/13)', 'Coneau', NULL, 6, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(18, '', 'Ministerial', NULL, 6, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(19, 'Res. Nº 182/12 C.S.', 'Consejo Superior', NULL, 7, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(20, ' Acreditada (Acta 389/13).', 'Coneau', NULL, 7, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(21, ' Res. Nº 1544/15 ME', 'Ministerial', NULL, 7, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(22, 'Res. Nº 816/12 C.S. ', 'Consejo Superior', NULL, 8, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(23, 'Acreditada (Acta 426/15).', 'Coneau', NULL, 8, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(24, 'Res. Nº 561/17 ME', 'Ministerial', NULL, 8, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(25, 'Res. Nº1024/09.', 'Consejo Superior', NULL, 9, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(26, 'Acreditada (Res.Nº823/15)', 'Coneau', NULL, 9, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(27, 'Res. Nº2401/13 ME', 'Ministerial', NULL, 9, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(28, 'Res. Nº 755/06 C.S. ', 'Consejo Superior', NULL, 10, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(29, 'Acreditada (Res. Nº 823/15). ', 'Coneau', NULL, 10, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(30, 'Res. Nº 154/15 ME', 'Ministerial', NULL, 10, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(31, 'Res. Nº 115/09 C.S.', 'Consejo Superior', NULL, 11, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(32, ' Acreditada (Acta 749/15)', 'Coneau', NULL, 11, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(33, 'Res. Nº022/17 ME', 'Ministerial', NULL, 11, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(34, 'Res. Nº 090/97 C.S.', 'Consejo Superior', NULL, 12, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(35, ' Acreditada Res Nº274/16', 'Coneau', NULL, 12, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(36, ' Res. Nº3662/17 ME', 'Ministerial', NULL, 12, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(37, 'Res. Nº 648/95C.S.', 'Consejo Superior', 'resolucion_37.pdf', 13, '2018-11-12 23:01:06', '2018-11-14 21:37:26'),
(38, 'Acreditada (Res. Nº 706/13).', 'Coneau', 'resolucion_38.pdf', 13, '2018-11-12 23:01:06', '2018-11-12 23:01:48'),
(39, 'Res. Nº3121/15 ME', 'Ministerial', 'resolucion_39.pdf', 13, '2018-11-12 23:01:06', '2018-11-12 23:01:26'),
(40, 'Res. Nº 648/95C.S.', 'Consejo Superior', 'resolucion_40.pdf', 14, '2018-11-12 23:01:06', '2018-11-14 21:38:01'),
(41, 'Acreditada (Res. Nº790/13).', 'Coneau', 'resolucion_41.pdf', 14, '2018-11-12 23:01:06', '2018-11-13 21:50:19'),
(42, 'Res. Nº2100/16 ME', 'Ministerial', 'resolucion_42.pdf', 14, '2018-11-12 23:01:06', '2018-11-13 21:49:37'),
(43, 'Res. Nº 648/95 C.S.', 'Consejo Superior', 'resolucion_43.pdf', 15, '2018-11-12 23:01:06', '2018-11-13 22:06:37'),
(44, 'Acreditada (Res. Nº 742/13).', 'Coneau', 'resolucion_44.pdf', 15, '2018-11-12 23:01:06', '2018-11-14 22:57:10'),
(45, 'Res. Nº2855/15 ME', 'Ministerial', 'resolucion_45.pdf', 15, '2018-11-12 23:01:06', '2018-11-13 21:59:06'),
(46, 'Res. Nº 764/14 C.S.', 'Consejo Superior', NULL, 16, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(47, 'Acreditada (Acta Nº434/15).', 'Coneau', NULL, 16, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(48, ' Res Nº4144/17ME', 'Ministerial', NULL, 16, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(49, 'Res. Nº 113/09 C.S.', 'Consejo Superior', NULL, 17, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(50, 'Acreditada (Res. Nº106/16). ', 'Coneau', NULL, 17, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(51, 'Res Nº3683/17ME', 'Ministerial', NULL, 17, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(52, 'Res. Nº 966/13 C.S.', 'Consejo Superior', 'resolucion_52.pdf', 18, '2018-11-12 23:01:06', '2018-11-14 22:50:22'),
(53, 'Acreditada Res. Nº 1206/14.', 'Coneau', 'resolucion_53.pdf', 18, '2018-11-12 23:01:06', '2018-11-14 21:40:44'),
(54, 'Res. Nº1062/17 ME', 'Ministerial', 'resolucion_54.pdf', 18, '2018-11-12 23:01:06', '2018-11-14 21:41:37'),
(55, 'Res. Nº 580/06 CS.', 'Consejo Superior', NULL, 19, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(56, ' Acreditada (Res Nº1204/14).', 'Coneau', NULL, 19, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(57, ' Res. Nº1642/16 ME', 'Ministerial', NULL, 19, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(58, ' Res. Nº373/03 CS.', 'Consejo Superior', NULL, 20, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(59, ' Acreditada (Res Nº1192/14).', 'Coneau', NULL, 20, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(60, ' Res. Nº/11 ME', 'Ministerial', NULL, 20, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(61, ' Nº336/04CS.', 'Consejo Superior', NULL, 21, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(62, ' Acreditada (Res Nº217/08).', 'Coneau', NULL, 21, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(63, ' Res. Nº0610/07 ME', 'Ministerial', NULL, 21, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(64, 'Res. Nº 969/13 C.S.', 'Consejo Superior', NULL, 22, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(65, ' Acreditada (Acta 412/14).', 'Coneau', NULL, 22, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(66, ' Res Nº1874/16 ME', 'Ministerial', NULL, 22, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(67, 'Res. Nº 0330/14 C.S.', 'Consejo Superior', 'resolucion_67.pdf', 23, '2018-11-12 23:01:06', '2018-11-14 23:08:54'),
(68, 'Acreditada (Acta 356/12).', 'Coneau', 'resolucion_68.pdf', 23, '2018-11-12 23:01:06', '2018-11-14 21:45:02'),
(69, 'Res. Nº02477/15 ME', 'Ministerial', 'resolucion_69.pdf', 23, '2018-11-12 23:01:06', '2018-11-14 21:46:15'),
(70, 'Res Nº  200/07 C.S.', 'Consejo Superior', NULL, 24, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(71, ' Acreditada (Res. Nº 560/16).', 'Coneau', NULL, 24, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(72, ' Res. Nº1147/15 ME', 'Ministerial', NULL, 24, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(73, 'Res. Nº 178/13 C.S. ', 'Consejo Superior', NULL, 25, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(74, 'Acreditada (Acta 339/14). ', 'Coneau', NULL, 25, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(75, 'Res Nº1548/16 ME', 'Ministerial', NULL, 25, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(76, 'Res. Nº 507/08 C.S.', 'Consejo Superior', NULL, 26, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(77, ' Acreditada (Res. Nº 154/16).', 'Coneau', NULL, 26, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(78, '  Res. Nº1808/12 ME', 'Ministerial', NULL, 26, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(79, 'Res. Nº 817/16 C.S. ', 'Consejo Superior', NULL, 27, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(80, 'Acreditada (Acta Nº 468/17).', 'Coneau', NULL, 27, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(81, '', 'Ministerial', NULL, 27, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(82, 'Res. Nº 374/08 C.S.', 'Consejo Superior', NULL, 28, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(83, ' Acreditada (Res. Nº 1147/15).', 'Coneau', NULL, 28, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(84, ' Res. Nº3940/17 ME', 'Ministerial', NULL, 28, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(85, 'Res. Nº 410/08 C.S. ', 'Consejo Superior', NULL, 29, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(86, 'Acreditada (Res. Nº 833/15).', 'Coneau', NULL, 29, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(87, ' Res. Nº3823/17 ME', 'Ministerial', NULL, 29, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(88, 'Res. Nº112/09 C.S.', 'Consejo Superior', NULL, 30, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(89, ' Acreditada (Res. Nº 894/15).', 'Coneau', NULL, 30, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(90, ' Res. Nº3985/17 ME', 'Ministerial', NULL, 30, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(91, 'Res. Nº 267/07 C.S.', 'Consejo Superior', NULL, 31, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(92, ' Acreditada (Res. Nº  1047/15).', 'Coneau', NULL, 31, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(93, '  Res. Nº4377/17 ME', 'Ministerial', NULL, 31, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(94, 'Res. Nº 805/14 ', 'Consejo Superior', NULL, 32, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(95, 'C.S. Acreditada (Acta Nº468/17)', 'Coneau', NULL, 32, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(96, '', 'Ministerial', NULL, 32, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(97, 'Res. Nº 517/99 C.S.', 'Consejo Superior', 'resolucion_97.pdf', 33, '2018-11-12 23:01:06', '2018-11-14 23:16:20'),
(98, 'Acreditada (Res. 448/17).', 'Coneau', 'resolucion_98.pdf', 33, '2018-11-12 23:01:06', '2018-11-14 23:23:17'),
(99, 'Res. Nº 2092/14 ME', 'Ministerial', 'resolucion_99.pdf', 33, '2018-11-12 23:01:06', '2018-11-14 21:48:06'),
(100, 'Res. Nº 517/99 C.S.', 'Consejo Superior', 'resolucion_100.pdf', 34, '2018-11-12 23:01:06', '2018-11-14 23:15:18'),
(101, 'Acreditada (Res. Nº  976/13).', 'Coneau', 'resolucion_101.pdf', 34, '2018-11-12 23:01:06', '2018-11-14 21:55:42'),
(102, 'Res. Nº 344/09 ME', 'Ministerial', 'resolucion_102.pdf', 34, '2018-11-12 23:01:06', '2018-11-14 21:57:45'),
(103, 'Res. Nº 517/99 C.S.', 'Consejo Superior', 'resolucion_103.pdf', 35, '2018-11-12 23:01:06', '2018-11-14 23:30:57'),
(104, 'Acreditada (Res.Nº892/15).', 'Coneau', 'resolucion_104.pdf', 35, '2018-11-12 23:01:06', '2018-11-15 00:33:24'),
(105, 'Res. Nº 593/17 ME', 'Ministerial', 'resolucion_105.pdf', 35, '2018-11-12 23:01:06', '2018-11-14 22:13:52'),
(106, 'Res. Nº 147/06 C.S. ', 'Consejo Superior', NULL, 36, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(107, 'Acreditada (Res. Nº 384/13). ', 'Coneau', NULL, 36, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(108, 'Res. Nº 856/17 ME', 'Ministerial', NULL, 36, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(109, 'Res. Nº 570/11 C.S. ', 'Consejo Superior', NULL, 37, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(110, 'Acreditada  (Res. Nº383/13.  ', 'Coneau', NULL, 37, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(111, 'Res. Nº 1373/15 ME', 'Ministerial', NULL, 37, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(112, 'Res. Nº 572/98 C.S.', 'Consejo Superior', 'resolucion_112.pdf', 38, '2018-11-12 23:01:06', '2018-11-15 01:14:58'),
(113, 'Acreditada (Res. Nº 166/17)', 'Coneau', 'resolucion_113.pdf', 38, '2018-11-12 23:01:06', '2018-11-14 23:33:01'),
(114, 'Res Nº664/17 ME', 'Ministerial', 'resolucion_114.pdf', 38, '2018-11-12 23:01:06', '2018-11-14 23:34:58'),
(115, 'Res. Nº 573/98 C.S. ', 'Consejo Superior', NULL, 39, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(116, 'Acreditada (Res. Nº 240/11)- ', 'Coneau', NULL, 39, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(117, 'Res. Nº 1241/15 ME', 'Ministerial', NULL, 39, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(118, 'Res. Nº 1030/15 C.S. ', 'Consejo Superior', NULL, 40, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(119, 'Acreditada  (Acta Nº464/17)', 'Coneau', NULL, 40, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(120, '', 'Ministerial', NULL, 40, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(121, 'Res.Nº037/08 C.S.', 'Consejo Superior', 'resolucion_121.pdf', 41, '2018-11-12 23:01:06', '2018-11-15 01:10:13'),
(122, 'Acreditada (Acta 314/10).', 'Coneau', 'resolucion_122.pdf', 41, '2018-11-12 23:01:06', '2018-11-14 23:37:26'),
(123, 'Res. Nº 1871/11 ME', 'Ministerial', 'resolucion_123.pdf', 41, '2018-11-12 23:01:06', '2018-11-15 01:23:42'),
(124, 'Res. Nº 714/15 C.S.  –  ', 'Consejo Superior', NULL, 42, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(125, 'Acreditada (Sesión  433/15)', 'Coneau', NULL, 42, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(126, 'Res Nº2043/17 ME', 'Ministerial', NULL, 42, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(127, 'Res. Nº 192/05 C.S.', 'Consejo Superior', 'resolucion_127.pdf', 43, '2018-11-12 23:01:06', '2018-11-15 01:15:45'),
(128, 'Acreditada (Res Nº433/14)', 'Coneau', 'resolucion_128.pdf', 43, '2018-11-12 23:01:06', '2018-11-15 01:16:18'),
(129, 'Res. Nº 543/16 ME', 'Ministerial', 'resolucion_129.pdf', 43, '2018-11-12 23:01:06', '2018-11-15 01:17:07'),
(130, 'Res. Nº 0650/11 C.S. ', 'Consejo Superior', NULL, 44, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(131, 'Acreditada (Acta 368/12)', 'Coneau', NULL, 44, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(132, 'Res. Nº 031/15 ME', 'Ministerial', NULL, 44, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(133, 'Res. Nº 0569/11 C.S. ', 'Consejo Superior', NULL, 45, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(134, 'Acreditada (Acta 368/12)', 'Coneau', NULL, 45, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(135, 'Res. Nº 808/15 ME', 'Ministerial', NULL, 45, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(136, 'Res. Nº 179/13 C.S.  ', 'Consejo Superior', NULL, 46, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(137, 'Acreditada (Acta 412/14). ', 'Coneau', NULL, 46, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(138, 'Res Nº 1636/16 ME', 'Ministerial', NULL, 46, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(139, 'Res. Nº 180/13 C.S. ', 'Consejo Superior', NULL, 47, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(140, 'Acreditada (Acta 396/14). ', 'Coneau', NULL, 47, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(141, 'Res Nº 1624/16 ME', 'Ministerial', NULL, 47, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(142, 'Res. Nº 725/11 C.S. ', 'Consejo Superior', NULL, 48, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(143, 'Acreditada (Acta Nº368/12)', 'Coneau', NULL, 48, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(144, 'Res. Nº 1359/15 ME', 'Ministerial', NULL, 48, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(145, 'Res. Nº 754/06 C.S. ', 'Consejo Superior', NULL, 49, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(146, 'Acreditada (Res. Nº 319/13)', 'Coneau', NULL, 49, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(147, 'Res. Nº 1411/08 ME', 'Ministerial', NULL, 49, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(148, 'Res. Nº 838/13 C.S. ', 'Consejo Superior', NULL, 50, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(149, 'Acreditada (Acta Nº 412/14)', 'Coneau', NULL, 50, '2018-11-12 23:01:06', '2018-11-12 23:01:06'),
(150, 'Res. Nº 1482/16 ME', 'Ministerial', NULL, 50, '2018-11-12 23:01:06', '2018-11-12 23:01:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidads`
--

CREATE TABLE `unidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `unidads`
--

INSERT INTO `unidads` (`id`, `alias`, `nombre`, `link`, `domicilio`, `telefono`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'medicina', 'Facultad de Medicina', 'https://med.unne.edu.ar/web/index.php/institucional/posgrado/', NULL, NULL, 2, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(2, 'odontologia', 'Odontología', 'http://odn.unne.edu.ar/posgrado.html', NULL, NULL, 3, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(3, 'arquitectura', 'Facultad de Arquitectura y Urbanismo', 'http://www.arq.unne.edu.ar/posgrado/', NULL, NULL, 4, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(4, 'agrarias', 'Facultad de Ciencias Agrarias', 'http://www.agr.unne.edu.ar/index.php?option=com_content&view=article&id=41&Itemid=152', NULL, NULL, 5, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(5, 'economicas', 'Facultad de Ciencias Económicas', 'http://www.eco.unne.edu.ar/?page_id=121', NULL, NULL, 6, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(6, 'exactas', 'Facultad de  Ciencias  Exactas y Naturales  y Agrimensura', 'http://exa.unne.edu.ar/postgrado/1/index.php?tabla=carreras', NULL, NULL, 7, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(7, 'veterinaria', 'Facultad de Ciencias  Veterinarias', 'http://www.vet.unne.edu.ar/default/secretariaDePosgrado', NULL, NULL, 8, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(8, 'derecho', 'Facultad de Derecho y Ciencias Sociales y Políticas', 'http://www.dch.unne.edu.ar/index.php/posgrado/ofertas-de-cursos-de-psg', NULL, NULL, 9, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(9, 'humanidades', 'Facultad de Humanidades', 'http://hum.unne.edu.ar/postgrado/oferta.htm', NULL, NULL, 10, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(10, 'ingenieria', 'Facultad de Ingeniería ', 'http://www.ing.unne.edu.ar/siyp', NULL, NULL, 11, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(11, 'exactas', 'Facultad de  Ciencias  Exactas y Naturales  y Agrimensura', NULL, NULL, NULL, 1, '2018-11-12 23:01:05', '2018-11-12 23:01:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '$2y$10$6qSbUKhe/VcidrdlPVGVMuXK4nmh/gpto/9GLF6QdkYCwq2b52gLy', '3VTQgAJ2UyxhsuMCpviwn14XVs8rvGcj00N9RqrT38rf6ioGSLzvKMf4V33J', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(2, 'medicina', 'medicina', NULL, '$2y$10$O5iSiSXOSqYpXzGQiXtH4.jQonNOQ1SJYiF02BS9VkK2XN11i2sSq', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(3, 'odontologia', 'odontologia', NULL, '$2y$10$EvJaMfMGD8HB7SC9RQXOAesvSAGJtgLp5E0rJGzQcttXP3ZO5zlH.', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(4, 'arquitectura', 'arquitectura', NULL, '$2y$10$buQE5Wwd291UG/07T8.V0etV.7QyxzlTqNc7brFOly.C60A3WY.fO', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(5, 'agrarias', 'agrarias', NULL, '$2y$10$2mFbUiw4i6IGcQ0LbtdbpObn0cnFpoRxRqmwCYsdLojEda0GUb156', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(6, 'economicas', 'economicas', NULL, '$2y$10$QWEIbkxk7uM745fiHsKave6dOMZJ59S/GgjEjEz4oD5EJypmIQ4ku', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(7, 'exactas', 'exactas', NULL, '$2y$10$KL6JNdAz/MARSq3VC8laVuYOyvBrBQ460it2zliUPkvqxRKvQJC0i', '0IgApkLRSqjxGcBh13UkTWHK8btCPFbmhBXkHWcWpIHxFVoaUE3iMtIdNgGh', '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(8, 'veterinaria', 'veterinaria', NULL, '$2y$10$hhcHTWMcKZ.B.dFkHMnr8e9H1RKTEbkuv08fc/MxmcX/yT/GW3nbu', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(9, 'derecho', 'derecho', NULL, '$2y$10$ypZF6lYRrgJccdaVLJGh6eUSNKPN8U3Gv75wRtHZHGsUCZfrBideq', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(10, 'humanidades', 'humanidades', NULL, '$2y$10$N4oGNNAdCJrfytDmGNWLEODDQaeJYUDBoF0pIb0gArBA/ttTKSWPS', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05'),
(11, 'ingenieria', 'ingenieria', NULL, '$2y$10$ASh5A9GXWSlI0kvkHY8B4uIlg.xEgd5nvw5V5itPDlnk3BELqvlci', NULL, '2018-11-12 23:01:05', '2018-11-12 23:01:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autoridads`
--
ALTER TABLE `autoridads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autoridads_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carreras_denominacion_id_foreign` (`denominacion_id`),
  ADD KEY `carreras_unidad_id_foreign` (`unidad_id`);

--
-- Indices de la tabla `denominacions`
--
ALTER TABLE `denominacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `resolucions`
--
ALTER TABLE `resolucions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resolucions_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidads`
--
ALTER TABLE `unidads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unidads_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autoridads`
--
ALTER TABLE `autoridads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `denominacions`
--
ALTER TABLE `denominacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `resolucions`
--
ALTER TABLE `resolucions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `unidads`
--
ALTER TABLE `unidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autoridads`
--
ALTER TABLE `autoridads`
  ADD CONSTRAINT `autoridads_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_denominacion_id_foreign` FOREIGN KEY (`denominacion_id`) REFERENCES `denominacions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carreras_unidad_id_foreign` FOREIGN KEY (`unidad_id`) REFERENCES `unidads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `resolucions`
--
ALTER TABLE `resolucions`
  ADD CONSTRAINT `resolucions_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `unidads`
--
ALTER TABLE `unidads`
  ADD CONSTRAINT `unidads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
