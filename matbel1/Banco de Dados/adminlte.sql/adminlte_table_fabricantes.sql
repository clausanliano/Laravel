
-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `fabricantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Taurus', '2019-11-16 20:34:30', '2019-11-16 20:34:30', NULL),
(2, 'Imbel', '2019-11-16 20:34:40', '2019-11-16 20:34:40', NULL),
(3, 'Rossi', '2019-11-16 20:34:51', '2019-11-16 20:34:51', NULL);
