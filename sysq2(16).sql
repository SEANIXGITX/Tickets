-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-11-2023 a las 05:22:56
-- Versión del servidor: 11.1.2-MariaDB-log
-- Versión de PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sysq2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencias`
--

CREATE TABLE `agencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_agencia` varchar(255) NOT NULL,
  `sigla_agencia` varchar(5) NOT NULL,
  `descripcion_agencia` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `departamento_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `agencias`
--

INSERT INTO `agencias` (`id`, `nombre_agencia`, `sigla_agencia`, `descripcion_agencia`, `created_at`, `updated_at`, `departamento_id`) VALUES
(1, 'agencia de la paz', 'a-lpz', 'agencia correspondiente al departamento de la paz', '2023-11-27 08:51:09', '2023-11-27 08:51:09', 1),
(2, 'agencia del alto', 'a-alt', 'agencia correspondiente al departamento de la paz', '2023-11-27 08:51:09', '2023-11-27 08:51:09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_caja` varchar(255) NOT NULL,
  `codigo_caja` varchar(5) NOT NULL,
  `descripcion_caja` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agencia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `servicio_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id`, `nombre_caja`, `codigo_caja`, `descripcion_caja`, `created_at`, `updated_at`, `agencia_id`, `user_id`, `servicio_id`) VALUES
(1, 'caja 1', 'c1', 'atencion de caja', '2023-11-27 08:51:12', '2023-11-27 08:51:12', 1, 3, 1),
(2, 'caja 2', 'c2', 'atencion de caja', '2023-11-27 08:51:12', '2023-11-27 08:51:12', 1, 4, 2),
(3, 'caja 3', 'c3', 'atencion de caja', '2023-11-27 08:51:12', '2023-11-27 08:51:12', 1, 5, 3),
(4, 'caja 4', 'c4', 'atencion de caja', '2023-11-27 08:51:12', '2023-11-27 08:51:12', 1, 6, 4),
(5, 'caja 5', 'c5', 'atencion de caja', '2023-11-27 08:51:12', '2023-11-27 08:51:12', 1, 7, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ci_cliente` int(11) NOT NULL,
  `ci_complemento_cliente` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `ci_cliente`, `ci_complemento_cliente`, `created_at`, `updated_at`) VALUES
(1, 5985649, NULL, '2023-11-27 08:57:08', '2023-11-27 08:57:08'),
(2, 35741, NULL, '2023-11-27 08:57:38', '2023-11-27 08:57:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_departamento` varchar(255) NOT NULL,
  `sigla_departamento` varchar(5) NOT NULL,
  `descripcion_departamento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre_departamento`, `sigla_departamento`, `descripcion_departamento`, `created_at`, `updated_at`) VALUES
(1, 'la paz', 'r-lpz', 'regional del departamento de la paz', '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(2, 'cochabamba', 'r-cba', 'regional del departamento de cochabamba', '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(3, 'santa cruz', 'r-scz', 'regional del departamento de santa cruz', '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(4, 'oruro', 'r-oru', 'regional del departamento de oruro', '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(5, 'potosí', 'r-pot', 'regional del departamento de potosí', '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(6, 'chuquisaca', 'r-chu', 'regional del departamento de chuquisaca', '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(7, 'tarija', 'r-tar', 'regional del departamento de tarija', '2023-11-27 08:51:09', '2023-11-27 08:51:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_12_214924_create_sessions_table', 1),
(7, '2023_10_12_221209_create_departamentos_table', 1),
(8, '2023_10_12_233838_create_videos_table', 1),
(9, '2023_10_17_003636_create_agencias_table', 1),
(10, '2023_10_18_042637_create_servicios_table', 1),
(11, '2023_10_18_043431_create_cajas_table', 1),
(12, '2023_10_21_220143_create_clientes_table', 1),
(13, '2023_10_25_103920_create_turnos_table', 1),
(14, '2023_11_08_101323_create_permission_tables', 1),
(15, '2023_11_09_101224_add_dept-id_to_users_table', 1),
(16, '2023_11_11_231123_add_agen-id_to_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(2, 'departamento.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(3, 'departamento.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(4, 'departamento.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(5, 'departamento.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(6, 'departamento.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(7, 'departamento.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(8, 'departamento.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(9, 'agencia.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(10, 'agencia.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(11, 'agencia.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(12, 'agencia.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(13, 'agencia.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(14, 'agencia.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(15, 'agencia.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(16, 'servicio.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(17, 'servicio.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(18, 'servicio.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(19, 'servicio.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(20, 'servicio.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(21, 'servicio.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(22, 'servicio.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(23, 'caja.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(24, 'caja.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(25, 'caja.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(26, 'caja.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(27, 'caja.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(28, 'caja.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(29, 'caja.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(30, 'cliente.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(31, 'cliente.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(32, 'cliente.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(33, 'cliente.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(34, 'cliente.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(35, 'cliente.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(36, 'cliente.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(37, 'video.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(38, 'video.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(39, 'video.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(40, 'video.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(41, 'video.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(42, 'video.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(43, 'video.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(44, 'turno.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(45, 'turno.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(46, 'turno.create', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(47, 'turno.store', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(48, 'turno.edit', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(49, 'turno.update', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(50, 'turno.destroy', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(51, 'usuario.index', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(52, 'usuario.show', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(53, 'usuario.create', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(54, 'usuario.store', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(55, 'usuario.edit', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(56, 'usuario.update', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(57, 'usuario.destroy', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(58, 'rol.index', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(59, 'rol.show', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(60, 'rol.create', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(61, 'rol.store', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(62, 'rol.edit', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(63, 'rol.update', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11'),
(64, 'rol.destroy', 'web', '2023-11-27 08:51:11', '2023-11-27 08:51:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(2, 'Supervisor', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(3, 'Atencion', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10'),
(4, 'Asistente', 'web', '2023-11-27 08:51:10', '2023-11-27 08:51:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio` varchar(255) NOT NULL,
  `codigo_servicio` varchar(5) NOT NULL,
  `descripcion_servicio` varchar(255) DEFAULT NULL,
  `estado_servicio` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre_servicio`, `codigo_servicio`, `descripcion_servicio`, `estado_servicio`, `created_at`, `updated_at`) VALUES
(1, 'plataforma', 'pla', 'el servicio de plataforma se encarga de...', 1, '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(2, 'almacenes', 'alm', 'el servicio de almacenes se encarga de...', 1, '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(3, 'carpeta de pagos', 'cp', 'el servicio de carpeta de pagos se encarga de...', 1, '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(4, 'inspección', 'ins', 'el servicio de inspección se encarga de...', 1, '2023-11-27 08:51:09', '2023-11-27 08:51:09'),
(5, 'consultas', 'con', 'el servicio de consultas se encarga de...', 1, '2023-11-27 08:51:09', '2023-11-27 08:51:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4Xj9yyNlLy247AmLqztjHql9Fglu1gZ68vplgBu8', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSEVGZmp4YUpxcmtuMG9GOFVqcGo0WFZ2aWtWMzdGdERTM3JQbVFzYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9zeXNxMi50ZXN0L2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjE6e2k6MDtzOjc6Im1lc3NhZ2UiO31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkTnNHZURGVC41QWtMRE1uNnJ5Zk5CdTdidEhMR3A3dmwxbExEMHFrWDBLTDNmLnh1ZVpZcksiO3M6NzoibWVzc2FnZSI7czoyNzoiVHVybm8gYXNvc2lhZG8gYSBsYSBjYWphIEMyIjt9', 1701076772),
('bYUS74mlsNvWQvtPHesDzVFRva8XjUoie8AM0EX1', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRlQ1bGxiMW9wS3hiZDRkUmkyTEVNOWk4Z1BCb05VMVhoNFM1T0lNaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9zeXNxMi50ZXN0L2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkeTZoL0hFdGE2VVA1aWtZaGhjWE1HdXdnMW9XTnMzNUVlU3JyV1JLZUQxRHBrQVZwLy5KN08iO30=', 1701076856),
('vvg1gTKmGpQqFmvkpKnrabtbq9U1pu6nosM02t5E', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXJUd3pvZnQzRXhGUE1aNU9mQ1B3aDEwOVdYc250N3VwWU13ckloTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9zeXNxMi50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1701076685),
('wBCRG4JIwao9D8V7a7iDvW59C4aTQ5mLv6i9Bj2P', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXp4ak5zMGFtWW95aEx0ZzA3ZHg3Z3ZsYmtncFFwZ3NHWkNOSVhRMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHA6Ly9zeXNxMi50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1701076684);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_turno` varchar(255) NOT NULL,
  `tipo_turno` varchar(255) NOT NULL,
  `estado_turno` varchar(255) NOT NULL DEFAULT 'En Espera',
  `cliente_id` bigint(20) UNSIGNED DEFAULT NULL,
  `servicio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agencia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `caja_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id`, `codigo_turno`, `tipo_turno`, `estado_turno`, `cliente_id`, `servicio_id`, `agencia_id`, `caja_id`, `created_at`, `updated_at`) VALUES
(1, 'PLA-001', '1', 'Atendido', 1, 1, 1, NULL, '2023-11-27 08:57:19', '2023-11-27 09:20:21'),
(2, 'ALM-002', '0', 'En Espera', 2, 2, 1, NULL, '2023-11-27 08:57:46', '2023-11-27 08:57:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `ci` varchar(10) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `departamento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agencia_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `ci`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `departamento_id`, `agencia_id`) VALUES
(1, 'Administrador', 'administrador@gmail.com', NULL, '$2y$10$cq0BDKrjEtcS3jWtGXKLUu7fJo5r5dYTjLnbxSD2x2w1QNWo6rIsW', NULL, NULL, NULL, NULL, '3AiUkyd0TYX7C4rpCnuiON2CUysO8mF7ooaPynBUItrqMRqhLrAlTpdlJ9HP', NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(2, 'Claudia Vargas', 'claudiavargasocana29@gmail.com', NULL, '$2y$10$yD2cFwvaIAA8qlsh.zw/IOqrbzaMlP63mRXHF1f9MwBR8EOdUYlHW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(3, 'Arvid Cummerata', 'atencion1@gmail.com', NULL, '$2y$10$y6h/HEta6UP5ikYhhcXMGuwg1oWNs35EeSrrWRKeD1DpkAVp/.J7O', NULL, NULL, NULL, NULL, '0m8QZJxuJBLoznGYhrlmEfuzwapxI6tcw4cKpSw6nhh51bWUB4Hgie32GwCS', NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(4, 'Prof. Victoria Schumm Sr.', 'atencion2@gmail.com', NULL, '$2y$10$NsGeDFT.5AkLDMn6ryfNBu7btHLGp7vl1lLD0qkX0KL3f.xueZYrK', NULL, NULL, NULL, NULL, 'jCUENLmUp1nnPwcXojmOwDyMgH8DPaQUfzEWb6RKhQfnwS64vOF7F6UJT9zr', NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(5, 'Karli Anderson', 'atencion3@gmail.com', NULL, '$2y$10$G6eHU8Ql.QCDcPUR/eRIy.fubVwYuMUTL07dTlEXFfBdEb8K42P3a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(6, 'Mr. Jerome Ullrich PhD', 'atencion4@gmail.com', NULL, '$2y$10$C2PZ.ot2rZQ5yOtwak.oHOWIwdVs0eQtlNvS4W7Ed7UlbB8H1IlkC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(7, 'Brant Donnelly', 'atencion5@gmail.com', NULL, '$2y$10$V/0UQCtUHmG/YQY372atQuKy4CPktrabnhzHZ2SrS5K2l7Y74z57q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-27 08:51:11', '2023-11-27 08:51:11', 1, 1),
(8, 'Dr. Zena Adams', 'asistente@gmail.com', NULL, '$2y$10$B2FZYewktgEkEzut4snVB.kuSX31g75Un0m7UlGQxb4cQVouwskwG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-27 08:51:12', '2023-11-27 08:51:12', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo_video` varchar(255) DEFAULT NULL,
  `descripcion_video` varchar(255) DEFAULT NULL,
  `ruta_video` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agencias_sigla_agencia_unique` (`sigla_agencia`),
  ADD KEY `agencias_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cajas_agencia_id_foreign` (`agencia_id`),
  ADD KEY `cajas_user_id_foreign` (`user_id`),
  ADD KEY `cajas_servicio_id_foreign` (`servicio_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_ci_complemento_cliente_unique` (`ci_complemento_cliente`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departamentos_sigla_departamento_unique` (`sigla_departamento`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `servicios_codigo_servicio_unique` (`codigo_servicio`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turnos_cliente_id_foreign` (`cliente_id`),
  ADD KEY `turnos_servicio_id_foreign` (`servicio_id`),
  ADD KEY `turnos_agencia_id_foreign` (`agencia_id`),
  ADD KEY `turnos_caja_id_foreign` (`caja_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_departamento_id_foreign` (`departamento_id`),
  ADD KEY `users_agencia_id_foreign` (`agencia_id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencias`
--
ALTER TABLE `agencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD CONSTRAINT `agencias_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD CONSTRAINT `cajas_agencia_id_foreign` FOREIGN KEY (`agencia_id`) REFERENCES `agencias` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `cajas_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `cajas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `turnos_agencia_id_foreign` FOREIGN KEY (`agencia_id`) REFERENCES `agencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turnos_caja_id_foreign` FOREIGN KEY (`caja_id`) REFERENCES `cajas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turnos_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turnos_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_agencia_id_foreign` FOREIGN KEY (`agencia_id`) REFERENCES `agencias` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
