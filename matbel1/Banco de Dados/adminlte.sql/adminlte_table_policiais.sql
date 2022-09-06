
-- --------------------------------------------------------

--
-- Estrutura da tabela `policiais`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `policiais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_guerra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_praca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opm_id` bigint(20) UNSIGNED NOT NULL,
  `posto_graduacao_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `policiais`
--

INSERT INTO `policiais` (`id`, `nome`, `nome_guerra`, `cpf`, `matricula`, `numero_praca`, `opm_id`, `posto_graduacao_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Edinardo Gurgel Linhares', 'Gurgel', '00000000000', '0000000', '00000', 1, 4, '2019-11-16 20:47:46', '2019-11-16 20:47:46', NULL),
(2, 'Clausan Liano', 'Liano', '99999999999', '9999999', NULL, 2, 9, '2019-11-16 20:48:45', '2019-11-16 20:48:45', NULL),
(3, 'Romualdo Galvão', 'Galvão', '88888888888', '8888888', '8888', 3, 1, '2019-11-16 20:49:27', '2019-11-16 20:49:27', NULL);
