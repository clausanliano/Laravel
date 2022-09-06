
-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacoes`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `localizacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posicao` point DEFAULT NULL,
  `localizacao_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
