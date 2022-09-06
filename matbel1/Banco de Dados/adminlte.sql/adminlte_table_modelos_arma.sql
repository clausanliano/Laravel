
-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos_arma`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `modelos_arma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comprimento_cano` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibre_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_arma_id` bigint(20) UNSIGNED NOT NULL,
  `fabricante_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `modelos_arma`
--

INSERT INTO `modelos_arma` (`id`, `nome`, `comprimento_cano`, `observacao`, `calibre_id`, `tipo_arma_id`, `fabricante_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PT100', '108', NULL, 1, 1, 1, '2019-11-16 20:36:27', '2019-11-16 20:36:27', NULL),
(2, 'MD5', '105', NULL, 1, 1, 2, '2019-11-16 20:37:06', '2019-11-16 20:37:06', NULL),
(3, 'CT40', '250', NULL, 1, 3, 1, '2019-11-16 20:37:31', '2019-11-16 20:37:31', NULL),
(4, 'T-4', '300', NULL, 2, 4, 1, '2019-11-16 20:38:13', '2019-11-16 20:38:13', NULL),
(5, 'RVR-6', '84', NULL, 4, 2, 3, '2019-11-16 20:38:44', '2019-11-16 20:38:44', NULL);
