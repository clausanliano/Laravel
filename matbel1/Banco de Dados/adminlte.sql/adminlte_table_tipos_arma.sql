
-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_arma`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `tipos_arma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_arma`
--

INSERT INTO `tipos_arma` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pistola', '2019-11-16 20:35:10', '2019-11-16 20:35:10', NULL),
(2, 'Revólver', '2019-11-16 20:35:20', '2019-11-16 20:35:20', NULL),
(3, 'Carabina', '2019-11-16 20:35:32', '2019-11-16 20:35:32', NULL),
(4, 'Fuzil', '2019-11-16 20:35:44', '2019-11-16 20:35:44', NULL),
(5, 'Espingarda', '2019-11-16 20:35:56', '2019-11-16 20:35:56', NULL);
