
-- --------------------------------------------------------

--
-- Estrutura da tabela `armas`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `armas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_serie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_tombo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo_arma_id` bigint(20) UNSIGNED NOT NULL,
  `opm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `armas`
--

INSERT INTO `armas` (`id`, `numero_serie`, `numero_tombo`, `observacao`, `modelo_arma_id`, `opm_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123456', '654321', NULL, 3, 1, '2019-11-16 20:44:21', '2019-11-16 20:44:21', NULL),
(2, '098765', '56789', NULL, 2, 3, '2019-11-16 20:44:44', '2019-11-16 20:44:44', NULL),
(3, '5252525', '321234', NULL, 1, 2, '2019-11-16 20:45:11', '2019-11-16 20:45:11', NULL),
(4, '111111', '222222', NULL, 1, 2, '2019-11-16 20:45:46', '2019-11-16 20:45:46', NULL),
(5, '098765123', '000000', NULL, 5, 4, '2019-11-16 20:46:09', '2019-11-16 20:46:09', NULL),
(6, '987987', '789789', NULL, 4, 1, '2019-11-16 20:46:33', '2019-11-16 20:46:33', NULL),
(7, '444444', '555555', NULL, 2, 1, '2019-11-16 20:46:59', '2019-11-16 20:46:59', NULL);
