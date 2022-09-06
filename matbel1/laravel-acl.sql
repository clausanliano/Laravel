-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2020 às 20:47
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel-acl`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anos_viatura`
--

CREATE TABLE `anos_viatura` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `armas`
--

CREATE TABLE `armas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_serie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_tombo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo_arma_id` bigint(20) UNSIGNED NOT NULL,
  `opm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `calibres`
--

CREATE TABLE `calibres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `calibres`
--

INSERT INTO `calibres` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '.40', '2020-02-07 18:46:00', '2020-02-07 18:46:00', NULL),
(2, '.38', '2020-02-07 18:46:08', '2020-02-07 18:46:08', NULL),
(3, '.55', '2020-02-07 18:49:49', '2020-02-07 18:49:49', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cautelas`
--

CREATE TABLE `cautelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_cautela` date NOT NULL,
  `dt_exclusao` date DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cautela` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `policial_id` bigint(20) UNSIGNED NOT NULL,
  `arma_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condicoes_escolta`
--

CREATE TABLE `condicoes_escolta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `destinos_escolta`
--

CREATE TABLE `destinos_escolta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disparos`
--

CREATE TABLE `disparos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_hora` datetime NOT NULL,
  `quantidade` int(11) NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `policial_id` bigint(20) UNSIGNED NOT NULL,
  `arma_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_municao_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_disparo_id` bigint(20) UNSIGNED NOT NULL,
  `localizacao_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escoltas`
--

CREATE TABLE `escoltas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `horario_saida` time DEFAULT NULL,
  `horario_chegada_destino` time DEFAULT NULL,
  `horario_saida_destino` time DEFAULT NULL,
  `horario_chegada` time DEFAULT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordem_servico_id` bigint(20) UNSIGNED NOT NULL,
  `viatura_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comandante_id` bigint(20) UNSIGNED DEFAULT NULL,
  `motorista_id` bigint(20) UNSIGNED DEFAULT NULL,
  `patrulheiro_id` bigint(20) UNSIGNED DEFAULT NULL,
  `localizacao_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE `fabricantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Taurus', '2020-02-07 18:46:23', '2020-02-07 18:46:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes_viatura`
--

CREATE TABLE `fabricantes_viatura` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacoes`
--

CREATE TABLE `localizacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posicao` point DEFAULT NULL,
  `localizacao_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_08_28_232302_create_permission_tables', 1),
(9, '2018_08_28_232345_create_products_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_10_24_101835_create_calibres_table', 1),
(12, '2019_10_24_101836_create_anos_viatura_table', 1),
(13, '2019_10_24_101847_create_condicoes_escolta_table', 1),
(14, '2019_10_24_101848_create_motivos_escolta_table', 1),
(15, '2019_10_24_101849_create_destinos_escolta_table', 1),
(16, '2019_10_24_101850_create_fabricantes_table', 1),
(17, '2019_10_24_101851_create_fabricantes_viatura_table', 1),
(18, '2019_10_24_101906_create_tipos_arma_table', 1),
(19, '2019_10_24_101918_create_modelos_arma_table', 1),
(20, '2019_10_24_101919_create_modelos_viatura_table', 1),
(21, '2019_10_24_101927_create_opms_table', 1),
(22, '2019_10_24_101928_create_armas_table', 1),
(23, '2019_10_24_102015_create_tipos_disparo_table', 1),
(24, '2019_10_24_102034_create_tipos_municao_table', 1),
(25, '2019_10_24_102057_create_localizacoes_table', 1),
(26, '2019_10_24_102135_create_postos_graduacoes_table', 1),
(27, '2019_10_24_102148_create_policiais_table', 1),
(28, '2019_10_24_102149_create_disparos_table', 1),
(29, '2019_10_24_102150_create_cautelas_table', 1),
(30, '2019_10_24_102500_create_viaturas_table', 1),
(31, '2019_10_24_102501_create_ordens_servico_table', 1),
(32, '2019_10_24_102502_create_escoltas_table', 1),
(33, '2020_02_06_120754_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos_arma`
--

CREATE TABLE `modelos_arma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comprimento_cano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibre_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_arma_id` bigint(20) UNSIGNED NOT NULL,
  `fabricante_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos_viatura`
--

CREATE TABLE `modelos_viatura` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabricante_viatura_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 6),
(13, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motivos_escolta`
--

CREATE TABLE `motivos_escolta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `opms`
--

CREATE TABLE `opms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `opms`
--

INSERT INTO `opms` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1º BPM', '2020-03-09 21:19:19', '2020-03-09 21:19:19', NULL),
(2, '9º BPM', '2020-03-09 21:19:26', '2020-03-09 21:19:26', NULL),
(3, '12º BPM', '2020-03-09 21:49:27', '2020-03-09 21:49:27', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordens_servico`
--

CREATE TABLE `ordens_servico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_evento` datetime DEFAULT NULL,
  `horario_evento` time DEFAULT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorizacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escoltado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivo_escolta_id` bigint(20) UNSIGNED NOT NULL,
  `destino_escolta_id` bigint(20) UNSIGNED NOT NULL,
  `condicao_escolta_id` bigint(20) UNSIGNED NOT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `localizacao_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-02-05 19:07:52', '2020-02-05 19:07:52'),
(2, 'role-create', 'web', '2020-02-05 19:07:52', '2020-02-05 19:07:52'),
(3, 'role-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(4, 'role-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(5, 'product-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(6, 'product-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(7, 'product-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(8, 'product-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(9, 'user-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(10, 'user-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(11, 'user-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(12, 'user-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(13, 'arma-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(23, 'arma-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(24, 'arma-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(25, 'arma-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(26, 'calibre-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(27, 'calibre-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(28, 'calibre-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(29, 'calibre-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(30, 'fabricante-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(31, 'fabricante-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(32, 'fabricante-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(33, 'fabricante-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(34, 'modelo_arma-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(35, 'modelo_arma-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(36, 'modelo_arma-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(37, 'modelo_arma-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(38, 'tipo_arma-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(39, 'tipo_arma-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(40, 'tipo_arma-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(41, 'tipo_arma-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(42, 'cautela-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(43, 'cautela-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(44, 'cautela-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(45, 'cautela-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(46, 'disparo-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(47, 'disparo-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(48, 'disparo-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(49, 'disparo-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(50, 'tipo_disparo-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(51, 'tipo_disparo-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(52, 'tipo_disparo-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(53, 'tipo_disparo-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(54, 'tipo_municao-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(55, 'tipo_municao-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(56, 'tipo_municao-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(57, 'tipo_municao-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(58, 'condicao_escolta-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(59, 'condicao_escolta-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(60, 'condicao_escolta-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(61, 'condicao_escolta-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(62, 'destino_escolta-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(63, 'destino_escolta-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(64, 'destino_escolta-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(65, 'destino_escolta-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(66, 'escolta-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(67, 'escolta-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(68, 'escolta-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(69, 'escolta-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(70, 'localizacao-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(71, 'localizacao-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(72, 'localizacao-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(73, 'localizacao-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(74, 'opm-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(75, 'opm-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(76, 'opm-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(77, 'opm-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(78, 'policial-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(79, 'policial-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(80, 'policial-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(81, 'policial-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(82, 'posto_graduacao-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(83, 'posto_graduacao-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(84, 'posto_graduacao-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(85, 'posto_graduacao-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(86, 'ano_viatura-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(87, 'ano_viatura-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(88, 'ano_viatura-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(89, 'ano_viatura-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(90, 'fabricante_viatura-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(91, 'fabricante_viatura-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(92, 'fabricante_viatura-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(93, 'fabricante_viatura-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(94, 'modelo_viatura-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(95, 'modelo_viatura-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(96, 'modelo_viatura-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(97, 'modelo_viatura-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(98, 'viatura-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(99, 'viatura-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(100, 'viatura-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(101, 'viatura-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(102, 'motivo_escolta-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(103, 'motivo_escolta-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(104, 'motivo_escolta-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(105, 'motivo_escolta-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(106, 'ordem_servico-list', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(107, 'ordem_servico-edit', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(108, 'ordem_servico-create', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53'),
(109, 'ordem_servico-delete', 'web', '2020-02-05 19:07:53', '2020-02-05 19:07:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `policiais`
--

CREATE TABLE `policiais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_guerra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_praca` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `posto_graduacao_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postos_graduacoes`
--

CREATE TABLE `postos_graduacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(2, 'Coturno', 'Chebel', '2020-02-07 14:29:13', '2020-02-07 17:48:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'web', 'web', NULL, NULL),
(2, 'Listar Produtos', 'web', '2020-02-07 14:29:50', '2020-02-07 14:30:02'),
(7, 'Básica Material Bélico', 'web', '2020-02-10 15:11:02', '2020-02-10 15:11:02'),
(8, 'Administrador Material Bélico', 'web', '2020-02-11 13:59:50', '2020-02-11 13:59:50'),
(9, 'Administrador Pq Moto', 'web', '2020-02-11 14:10:26', '2020-02-11 14:20:38'),
(10, 'Administrador Ordem de Serviço', 'web', '2020-02-11 14:15:56', '2020-02-11 14:20:57'),
(11, 'Administrador Escolta', 'web', '2020-02-11 14:19:40', '2020-02-11 14:19:40'),
(12, 'Administrador Cadastros Pessoal e OPM', 'web', '2020-02-11 14:24:03', '2020-02-11 14:24:03'),
(13, 'Básica Pq Moto', 'web', '2020-03-09 22:17:29', '2020-03-09 22:17:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 7),
(13, 8),
(23, 1),
(23, 8),
(24, 1),
(24, 8),
(25, 1),
(25, 8),
(26, 1),
(26, 7),
(26, 8),
(27, 1),
(27, 8),
(28, 1),
(28, 8),
(29, 1),
(29, 8),
(30, 1),
(30, 7),
(30, 8),
(31, 1),
(31, 8),
(32, 1),
(32, 8),
(33, 1),
(33, 8),
(34, 1),
(34, 7),
(34, 8),
(35, 1),
(35, 8),
(36, 1),
(36, 8),
(37, 1),
(37, 8),
(38, 1),
(38, 7),
(38, 8),
(39, 1),
(39, 8),
(40, 1),
(40, 8),
(41, 1),
(41, 8),
(42, 1),
(42, 7),
(42, 8),
(43, 1),
(43, 8),
(44, 1),
(44, 8),
(45, 1),
(45, 8),
(46, 1),
(46, 7),
(46, 8),
(47, 1),
(47, 8),
(48, 1),
(48, 8),
(49, 1),
(49, 8),
(50, 1),
(50, 7),
(50, 8),
(51, 1),
(51, 8),
(52, 1),
(52, 8),
(53, 1),
(53, 8),
(54, 1),
(54, 7),
(54, 8),
(55, 1),
(55, 8),
(56, 1),
(56, 8),
(57, 1),
(57, 8),
(58, 1),
(58, 11),
(59, 1),
(59, 11),
(60, 1),
(60, 11),
(61, 1),
(61, 11),
(62, 1),
(62, 11),
(62, 13),
(63, 1),
(63, 11),
(64, 1),
(64, 11),
(65, 1),
(65, 11),
(66, 1),
(66, 11),
(66, 13),
(67, 1),
(67, 11),
(68, 1),
(68, 11),
(69, 1),
(69, 11),
(70, 1),
(70, 11),
(71, 1),
(71, 11),
(72, 1),
(72, 11),
(73, 1),
(73, 11),
(74, 1),
(74, 12),
(74, 13),
(75, 1),
(75, 12),
(76, 1),
(76, 12),
(77, 1),
(77, 12),
(78, 1),
(78, 12),
(79, 1),
(79, 12),
(80, 1),
(80, 12),
(81, 1),
(81, 12),
(82, 1),
(82, 12),
(83, 1),
(83, 12),
(84, 1),
(84, 12),
(85, 1),
(85, 12),
(86, 1),
(86, 9),
(86, 13),
(87, 1),
(87, 9),
(88, 1),
(88, 9),
(89, 1),
(89, 9),
(90, 1),
(90, 9),
(90, 13),
(91, 1),
(91, 9),
(92, 1),
(92, 9),
(93, 1),
(93, 9),
(94, 1),
(94, 9),
(94, 13),
(95, 1),
(95, 9),
(96, 1),
(96, 9),
(97, 1),
(97, 9),
(98, 1),
(98, 9),
(98, 13),
(99, 1),
(99, 9),
(100, 1),
(100, 9),
(101, 1),
(101, 9),
(102, 11),
(102, 13),
(103, 11),
(104, 11),
(105, 11),
(106, 10),
(106, 13),
(107, 10),
(108, 10),
(109, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_arma`
--

CREATE TABLE `tipos_arma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_disparo`
--

CREATE TABLE `tipos_disparo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_municao`
--

CREATE TABLE `tipos_municao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$FUYaLws43pmljQbzAlO74uwHkaUAnhZxSGhSlNaODH695wrOVdDLe', 'xZ7PYpXLSGQSpBsdFwZP7cnpdyjhCLAMld47edY5LBwRgsk3K7KFDAXBP7w4', NULL, NULL),
(4, 'Edinardo Gurgel Linhares', 'edinardolinhares@gmail.com', '$2y$10$hGNVpATits7OB9Ikyu0w5uuJfbm7/.tqpR56Rl99VGemtr6XBw.F2', 'esR6QZf1ITmnw9RrGX00WTR7wPMCykQF3qP350qDpC1slheKdPzBft2GWkoZ', '2020-03-09 21:13:45', '2020-03-09 21:13:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viaturas`
--

CREATE TABLE `viaturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ano_viatura_id` bigint(20) UNSIGNED DEFAULT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `modelo_viatura_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anos_viatura`
--
ALTER TABLE `anos_viatura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anos_viatura_nome_unique` (`nome`);

--
-- Índices para tabela `armas`
--
ALTER TABLE `armas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `armas_numero_serie_unique` (`numero_serie`),
  ADD UNIQUE KEY `armas_numero_tombo_unique` (`numero_tombo`),
  ADD KEY `armas_modelo_arma_id_foreign` (`modelo_arma_id`),
  ADD KEY `armas_opm_id_foreign` (`opm_id`);

--
-- Índices para tabela `calibres`
--
ALTER TABLE `calibres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calibres_nome_unique` (`nome`);

--
-- Índices para tabela `cautelas`
--
ALTER TABLE `cautelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cautelas_opm_id_foreign` (`opm_id`),
  ADD KEY `cautelas_policial_id_foreign` (`policial_id`),
  ADD KEY `cautelas_arma_id_foreign` (`arma_id`);

--
-- Índices para tabela `condicoes_escolta`
--
ALTER TABLE `condicoes_escolta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `condicoes_escolta_nome_unique` (`nome`);

--
-- Índices para tabela `destinos_escolta`
--
ALTER TABLE `destinos_escolta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `destinos_escolta_nome_unique` (`nome`);

--
-- Índices para tabela `disparos`
--
ALTER TABLE `disparos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disparos_opm_id_foreign` (`opm_id`),
  ADD KEY `disparos_policial_id_foreign` (`policial_id`),
  ADD KEY `disparos_arma_id_foreign` (`arma_id`),
  ADD KEY `disparos_tipo_municao_id_foreign` (`tipo_municao_id`),
  ADD KEY `disparos_tipo_disparo_id_foreign` (`tipo_disparo_id`),
  ADD KEY `disparos_localizacao_id_foreign` (`localizacao_id`);

--
-- Índices para tabela `escoltas`
--
ALTER TABLE `escoltas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escoltas_ordem_servico_id_foreign` (`ordem_servico_id`),
  ADD KEY `escoltas_viatura_id_foreign` (`viatura_id`),
  ADD KEY `escoltas_comandante_id_foreign` (`comandante_id`),
  ADD KEY `escoltas_motorista_id_foreign` (`motorista_id`),
  ADD KEY `escoltas_patrulheiro_id_foreign` (`patrulheiro_id`),
  ADD KEY `escoltas_localizacao_id_foreign` (`localizacao_id`);

--
-- Índices para tabela `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fabricantes_nome_unique` (`nome`);

--
-- Índices para tabela `fabricantes_viatura`
--
ALTER TABLE `fabricantes_viatura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fabricantes_viatura_nome_unique` (`nome`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `localizacoes_localizacao_id_foreign` (`localizacao_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `modelos_arma`
--
ALTER TABLE `modelos_arma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelos_arma_nome_unique` (`nome`),
  ADD KEY `modelos_arma_calibre_id_foreign` (`calibre_id`),
  ADD KEY `modelos_arma_tipo_arma_id_foreign` (`tipo_arma_id`),
  ADD KEY `modelos_arma_fabricante_id_foreign` (`fabricante_id`);

--
-- Índices para tabela `modelos_viatura`
--
ALTER TABLE `modelos_viatura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelos_viatura_nome_unique` (`nome`),
  ADD KEY `modelos_viatura_fabricante_viatura_id_foreign` (`fabricante_viatura_id`);

--
-- Índices para tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `motivos_escolta`
--
ALTER TABLE `motivos_escolta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `motivos_escolta_nome_unique` (`nome`);

--
-- Índices para tabela `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Índices para tabela `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Índices para tabela `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Índices para tabela `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Índices para tabela `opms`
--
ALTER TABLE `opms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ordens_servico`
--
ALTER TABLE `ordens_servico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ordens_servico_nome_unique` (`nome`),
  ADD UNIQUE KEY `ordens_servico_autorizacao_unique` (`autorizacao`),
  ADD KEY `ordens_servico_motivo_escolta_id_foreign` (`motivo_escolta_id`),
  ADD KEY `ordens_servico_destino_escolta_id_foreign` (`destino_escolta_id`),
  ADD KEY `ordens_servico_condicao_escolta_id_foreign` (`condicao_escolta_id`),
  ADD KEY `ordens_servico_opm_id_foreign` (`opm_id`),
  ADD KEY `ordens_servico_localizacao_id_foreign` (`localizacao_id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `policiais`
--
ALTER TABLE `policiais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `policiais_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `policiais_matricula_unique` (`matricula`),
  ADD KEY `policiais_opm_id_foreign` (`opm_id`),
  ADD KEY `policiais_posto_graduacao_id_foreign` (`posto_graduacao_id`);

--
-- Índices para tabela `postos_graduacoes`
--
ALTER TABLE `postos_graduacoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `postos_graduacoes_nome_unique` (`nome`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Índices para tabela `tipos_arma`
--
ALTER TABLE `tipos_arma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipos_arma_nome_unique` (`nome`);

--
-- Índices para tabela `tipos_disparo`
--
ALTER TABLE `tipos_disparo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipos_municao`
--
ALTER TABLE `tipos_municao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipos_municao_nome_unique` (`nome`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `viaturas`
--
ALTER TABLE `viaturas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `viaturas_nome_unique` (`nome`),
  ADD KEY `viaturas_ano_viatura_id_foreign` (`ano_viatura_id`),
  ADD KEY `viaturas_opm_id_foreign` (`opm_id`),
  ADD KEY `viaturas_modelo_viatura_id_foreign` (`modelo_viatura_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anos_viatura`
--
ALTER TABLE `anos_viatura`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `armas`
--
ALTER TABLE `armas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `calibres`
--
ALTER TABLE `calibres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cautelas`
--
ALTER TABLE `cautelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `condicoes_escolta`
--
ALTER TABLE `condicoes_escolta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `destinos_escolta`
--
ALTER TABLE `destinos_escolta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disparos`
--
ALTER TABLE `disparos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `escoltas`
--
ALTER TABLE `escoltas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fabricantes_viatura`
--
ALTER TABLE `fabricantes_viatura`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `modelos_arma`
--
ALTER TABLE `modelos_arma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `modelos_viatura`
--
ALTER TABLE `modelos_viatura`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `motivos_escolta`
--
ALTER TABLE `motivos_escolta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `opms`
--
ALTER TABLE `opms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ordens_servico`
--
ALTER TABLE `ordens_servico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de tabela `policiais`
--
ALTER TABLE `policiais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `postos_graduacoes`
--
ALTER TABLE `postos_graduacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tipos_arma`
--
ALTER TABLE `tipos_arma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipos_disparo`
--
ALTER TABLE `tipos_disparo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipos_municao`
--
ALTER TABLE `tipos_municao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `viaturas`
--
ALTER TABLE `viaturas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `armas`
--
ALTER TABLE `armas`
  ADD CONSTRAINT `armas_modelo_arma_id_foreign` FOREIGN KEY (`modelo_arma_id`) REFERENCES `modelos_arma` (`id`),
  ADD CONSTRAINT `armas_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`);

--
-- Limitadores para a tabela `cautelas`
--
ALTER TABLE `cautelas`
  ADD CONSTRAINT `cautelas_arma_id_foreign` FOREIGN KEY (`arma_id`) REFERENCES `armas` (`id`),
  ADD CONSTRAINT `cautelas_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`),
  ADD CONSTRAINT `cautelas_policial_id_foreign` FOREIGN KEY (`policial_id`) REFERENCES `policiais` (`id`);

--
-- Limitadores para a tabela `disparos`
--
ALTER TABLE `disparos`
  ADD CONSTRAINT `disparos_arma_id_foreign` FOREIGN KEY (`arma_id`) REFERENCES `armas` (`id`),
  ADD CONSTRAINT `disparos_localizacao_id_foreign` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `disparos_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`),
  ADD CONSTRAINT `disparos_policial_id_foreign` FOREIGN KEY (`policial_id`) REFERENCES `policiais` (`id`),
  ADD CONSTRAINT `disparos_tipo_disparo_id_foreign` FOREIGN KEY (`tipo_disparo_id`) REFERENCES `tipos_disparo` (`id`),
  ADD CONSTRAINT `disparos_tipo_municao_id_foreign` FOREIGN KEY (`tipo_municao_id`) REFERENCES `tipos_municao` (`id`);

--
-- Limitadores para a tabela `escoltas`
--
ALTER TABLE `escoltas`
  ADD CONSTRAINT `escoltas_comandante_id_foreign` FOREIGN KEY (`comandante_id`) REFERENCES `policiais` (`id`),
  ADD CONSTRAINT `escoltas_localizacao_id_foreign` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `escoltas_motorista_id_foreign` FOREIGN KEY (`motorista_id`) REFERENCES `policiais` (`id`),
  ADD CONSTRAINT `escoltas_ordem_servico_id_foreign` FOREIGN KEY (`ordem_servico_id`) REFERENCES `ordens_servico` (`id`),
  ADD CONSTRAINT `escoltas_patrulheiro_id_foreign` FOREIGN KEY (`patrulheiro_id`) REFERENCES `policiais` (`id`),
  ADD CONSTRAINT `escoltas_viatura_id_foreign` FOREIGN KEY (`viatura_id`) REFERENCES `viaturas` (`id`);

--
-- Limitadores para a tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  ADD CONSTRAINT `localizacoes_localizacao_id_foreign` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacoes` (`id`);

--
-- Limitadores para a tabela `modelos_arma`
--
ALTER TABLE `modelos_arma`
  ADD CONSTRAINT `modelos_arma_calibre_id_foreign` FOREIGN KEY (`calibre_id`) REFERENCES `calibres` (`id`),
  ADD CONSTRAINT `modelos_arma_fabricante_id_foreign` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricantes` (`id`),
  ADD CONSTRAINT `modelos_arma_tipo_arma_id_foreign` FOREIGN KEY (`tipo_arma_id`) REFERENCES `tipos_arma` (`id`);

--
-- Limitadores para a tabela `modelos_viatura`
--
ALTER TABLE `modelos_viatura`
  ADD CONSTRAINT `modelos_viatura_fabricante_viatura_id_foreign` FOREIGN KEY (`fabricante_viatura_id`) REFERENCES `fabricantes_viatura` (`id`);

--
-- Limitadores para a tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `ordens_servico`
--
ALTER TABLE `ordens_servico`
  ADD CONSTRAINT `ordens_servico_condicao_escolta_id_foreign` FOREIGN KEY (`condicao_escolta_id`) REFERENCES `condicoes_escolta` (`id`),
  ADD CONSTRAINT `ordens_servico_destino_escolta_id_foreign` FOREIGN KEY (`destino_escolta_id`) REFERENCES `destinos_escolta` (`id`),
  ADD CONSTRAINT `ordens_servico_localizacao_id_foreign` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `ordens_servico_motivo_escolta_id_foreign` FOREIGN KEY (`motivo_escolta_id`) REFERENCES `motivos_escolta` (`id`),
  ADD CONSTRAINT `ordens_servico_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`);

--
-- Limitadores para a tabela `policiais`
--
ALTER TABLE `policiais`
  ADD CONSTRAINT `policiais_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`),
  ADD CONSTRAINT `policiais_posto_graduacao_id_foreign` FOREIGN KEY (`posto_graduacao_id`) REFERENCES `postos_graduacoes` (`id`);

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `viaturas`
--
ALTER TABLE `viaturas`
  ADD CONSTRAINT `viaturas_ano_viatura_id_foreign` FOREIGN KEY (`ano_viatura_id`) REFERENCES `anos_viatura` (`id`),
  ADD CONSTRAINT `viaturas_modelo_viatura_id_foreign` FOREIGN KEY (`modelo_viatura_id`) REFERENCES `modelos_viatura` (`id`),
  ADD CONSTRAINT `viaturas_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
