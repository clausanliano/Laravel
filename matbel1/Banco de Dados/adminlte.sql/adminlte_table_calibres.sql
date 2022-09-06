
-- --------------------------------------------------------

--
-- Estrutura da tabela `calibres`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `calibres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `calibres`
--

INSERT INTO `calibres` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '.40', '2019-11-16 20:32:55', '2019-11-16 20:32:55', NULL),
(2, '7,62', '2019-11-16 20:33:04', '2019-11-16 20:33:04', NULL),
(3, '5,56', '2019-11-16 20:33:18', '2019-11-16 20:33:18', NULL),
(4, '.38', '2019-11-16 20:33:29', '2019-11-16 20:33:29', NULL),
(5, '9mm', '2019-11-16 20:33:41', '2019-11-16 20:33:41', NULL),
(6, '380', '2019-11-16 20:34:02', '2019-11-16 20:34:02', NULL);
