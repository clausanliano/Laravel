
-- --------------------------------------------------------

--
-- Estrutura da tabela `postos_graduacoes`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `postos_graduacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `postos_graduacoes`
--

INSERT INTO `postos_graduacoes` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sd', NULL, NULL, NULL),
(2, 'Cb', NULL, NULL, NULL),
(3, '3º Sgt', NULL, NULL, NULL),
(4, '2º Sgt', NULL, NULL, NULL),
(5, '1º Sgt', NULL, NULL, NULL),
(6, 'St', NULL, NULL, NULL),
(7, '2º Ten', NULL, NULL, NULL),
(8, '1º Ten', NULL, NULL, NULL),
(9, 'Cap', NULL, NULL, NULL),
(10, 'Maj', NULL, NULL, NULL),
(11, 'TC', NULL, NULL, NULL),
(12, 'Cel', NULL, NULL, NULL),
(13, 'Al Sgt', NULL, NULL, NULL);
