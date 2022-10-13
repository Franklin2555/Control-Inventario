-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2022 a las 04:35:51
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activations`
--

CREATE TABLE `activations` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `forbidden` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'Administrator', 'Administrator', 'administrator@brackets.sk', '$2y$10$iAoO1Ebqc3EJkgOqlMu.P.ByNutxQagYntzhB9Ex9EnLACB.q05iS', 'hzuIowJyFnp1TXumoaFkikB4JxEcgWSAtJDCl3nOtnMQV0okWzQv3TbNWztG', 1, 0, 'en', NULL, '2022-10-04 08:07:40', '2022-10-04 08:18:02', '2022-10-04 08:18:02'),
(2, 'José', 'López', 'jlr123@gmail.com', '$2y$10$oN5y8qsnMlQssB09JSjbG.7.fsZAvI9W3LrYFijephD4hQ/2ATLCa', 'CbgEOihyoH4hnMjwQwgQ4V96MaGCpXDldWhfqFFiGLr0E4qoBG2EPvXD8wrj', 1, 0, 'en', NULL, '2022-10-04 08:20:49', '2022-10-04 08:30:16', '2022-10-04 08:30:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'A la Plancha', '2022-10-04 08:34:31', '2022-10-04 08:34:31'),
(2, 'Al Carbón', '2022-10-04 08:35:00', '2022-10-04 08:35:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2017_08_24_000000_create_activations_table', 1),
(4, '2017_08_24_000000_create_admin_activations_table', 1),
(5, '2017_08_24_000000_create_admin_password_resets_table', 1),
(6, '2017_08_24_000000_create_admin_users_table', 1),
(7, '2018_07_18_000000_create_wysiwyg_media_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2020_10_21_000000_add_last_login_at_timestamp_to_admin_users_table', 1),
(11, '2022_10_04_020737_create_media_table', 1),
(12, '2022_10_04_020737_create_permission_tables', 1),
(13, '2022_10_04_020742_fill_default_admin_user_and_permissions', 1),
(14, '2022_10_04_020737_create_translations_table', 2),
(15, '2022_10_04_022145_create_producto_table', 3),
(16, '2022_10_04_022632_fill_permissions_for_producto', 4),
(17, '2022_10_04_023105_create_categoria_table', 5),
(18, '2022_10_04_023246_fill_permissions_for_categorium', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1),
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 2);

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
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(2, 'admin.translation.index', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(3, 'admin.translation.edit', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(4, 'admin.translation.rescan', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(5, 'admin.admin-user.index', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(6, 'admin.admin-user.create', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(7, 'admin.admin-user.edit', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(8, 'admin.admin-user.delete', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(9, 'admin.upload', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(10, 'admin.admin-user.impersonal-login', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40'),
(11, 'admin.producto', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(12, 'admin.producto.index', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(13, 'admin.producto.create', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(14, 'admin.producto.show', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(15, 'admin.producto.edit', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(16, 'admin.producto.delete', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(17, 'admin.producto.bulk-delete', 'admin', '2022-10-04 08:26:38', '2022-10-04 08:26:38'),
(18, 'admin.categorium', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51'),
(19, 'admin.categorium.index', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51'),
(20, 'admin.categorium.create', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51'),
(21, 'admin.categorium.show', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51'),
(22, 'admin.categorium.edit', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51'),
(23, 'admin.categorium.delete', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51'),
(24, 'admin.categorium.bulk-delete', 'admin', '2022-10-04 08:32:51', '2022-10-04 08:32:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_expiracion` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `costo`, `precio`, `cantidad`, `fecha_expiracion`, `created_at`, `updated_at`) VALUES
(1, 'Coca Cola', 0.25, 2.25, 10, '2022-10-06', '2022-10-04 08:29:28', '2022-10-04 08:29:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2022-10-04 08:07:40', '2022-10-04 08:07:40');

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
(24, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`text`)),
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `namespace`, `group`, `key`, `text`, `metadata`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brackets/admin-ui', 'admin', 'operation.succeeded', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(2, 'brackets/admin-ui', 'admin', 'operation.failed', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(3, 'brackets/admin-ui', 'admin', 'operation.not_allowed', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(4, '*', 'admin', 'admin-user.columns.first_name', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(5, '*', 'admin', 'admin-user.columns.last_name', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(6, '*', 'admin', 'admin-user.columns.email', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(7, '*', 'admin', 'admin-user.columns.password', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(8, '*', 'admin', 'admin-user.columns.password_repeat', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(9, '*', 'admin', 'admin-user.columns.activated', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(10, '*', 'admin', 'admin-user.columns.forbidden', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(11, '*', 'admin', 'admin-user.columns.language', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(12, 'brackets/admin-ui', 'admin', 'forms.select_an_option', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(13, '*', 'admin', 'admin-user.columns.roles', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(14, 'brackets/admin-ui', 'admin', 'forms.select_options', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(15, '*', 'admin', 'admin-user.actions.create', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(16, 'brackets/admin-ui', 'admin', 'btn.save', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(17, '*', 'admin', 'admin-user.actions.edit', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(18, '*', 'admin', 'admin-user.actions.index', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(19, 'brackets/admin-ui', 'admin', 'placeholder.search', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(20, 'brackets/admin-ui', 'admin', 'btn.search', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(21, '*', 'admin', 'admin-user.columns.id', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(22, '*', 'admin', 'admin-user.columns.last_login_at', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(23, 'brackets/admin-ui', 'admin', 'btn.edit', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(24, 'brackets/admin-ui', 'admin', 'btn.delete', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(25, 'brackets/admin-ui', 'admin', 'pagination.overview', '[]', NULL, '2022-10-04 08:08:20', '2022-10-04 08:08:20', NULL),
(26, 'brackets/admin-ui', 'admin', 'index.no_items', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(27, 'brackets/admin-ui', 'admin', 'index.try_changing_items', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(28, 'brackets/admin-ui', 'admin', 'btn.new', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(29, 'brackets/admin-ui', 'admin', 'profile_dropdown.account', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(30, 'brackets/admin-auth', 'admin', 'profile_dropdown.profile', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(31, 'brackets/admin-auth', 'admin', 'profile_dropdown.password', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(32, 'brackets/admin-auth', 'admin', 'profile_dropdown.logout', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(33, 'brackets/admin-ui', 'admin', 'sidebar.content', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(34, 'brackets/admin-ui', 'admin', 'sidebar.settings', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(35, '*', 'admin', 'admin-user.actions.edit_password', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(36, '*', 'admin', 'admin-user.actions.edit_profile', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(37, 'brackets/admin-auth', 'admin', 'activation_form.title', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(38, 'brackets/admin-auth', 'admin', 'activation_form.note', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(39, 'brackets/admin-auth', 'admin', 'auth_global.email', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(40, 'brackets/admin-auth', 'admin', 'activation_form.button', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(41, 'brackets/admin-auth', 'admin', 'login.title', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(42, 'brackets/admin-auth', 'admin', 'login.sign_in_text', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(43, 'brackets/admin-auth', 'admin', 'auth_global.password', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(44, 'brackets/admin-auth', 'admin', 'login.button', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(45, 'brackets/admin-auth', 'admin', 'login.forgot_password', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(46, 'brackets/admin-auth', 'admin', 'forgot_password.title', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(47, 'brackets/admin-auth', 'admin', 'forgot_password.note', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(48, 'brackets/admin-auth', 'admin', 'forgot_password.button', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(49, 'brackets/admin-auth', 'admin', 'password_reset.title', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(50, 'brackets/admin-auth', 'admin', 'password_reset.note', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(51, 'brackets/admin-auth', 'admin', 'auth_global.password_confirm', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(52, 'brackets/admin-auth', 'admin', 'password_reset.button', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(53, 'brackets/admin-auth', 'activations', 'email.line', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(54, 'brackets/admin-auth', 'activations', 'email.action', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(55, 'brackets/admin-auth', 'activations', 'email.notRequested', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(56, 'brackets/admin-auth', 'admin', 'activations.activated', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(57, 'brackets/admin-auth', 'admin', 'activations.invalid_request', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(58, 'brackets/admin-auth', 'admin', 'activations.disabled', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(59, 'brackets/admin-auth', 'admin', 'activations.sent', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(60, 'brackets/admin-auth', 'admin', 'passwords.sent', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(61, 'brackets/admin-auth', 'admin', 'passwords.reset', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(62, 'brackets/admin-auth', 'admin', 'passwords.invalid_token', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(63, 'brackets/admin-auth', 'admin', 'passwords.invalid_user', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(64, 'brackets/admin-auth', 'admin', 'passwords.invalid_password', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(65, 'brackets/admin-auth', 'resets', 'email.line', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(66, 'brackets/admin-auth', 'resets', 'email.action', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(67, 'brackets/admin-auth', 'resets', 'email.notRequested', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(68, '*', 'auth', 'failed', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(69, '*', 'auth', 'throttle', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(70, '*', '*', 'Manage access', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(71, '*', '*', 'Translations', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL),
(72, '*', '*', 'Configuration', '[]', NULL, '2022-10-04 08:08:21', '2022-10-04 08:08:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int(10) UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indices de la tabla `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indices de la tabla `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indices de la tabla `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

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
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_namespace_index` (`namespace`),
  ADD KEY `translations_group_index` (`group`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
