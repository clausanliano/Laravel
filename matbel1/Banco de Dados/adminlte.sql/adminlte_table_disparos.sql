
-- --------------------------------------------------------

--
-- Estrutura da tabela `disparos`
--
-- Criação: 28-Out-2019 às 02:49
--

CREATE TABLE `disparos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_hora` datetime NOT NULL,
  `quantidade` int(11) NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `policial_id` bigint(20) UNSIGNED NOT NULL,
  `arma_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_municao_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_disparo_id` bigint(20) UNSIGNED NOT NULL,
  `localizacao_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
