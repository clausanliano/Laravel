
-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_24_101835_create_calibres_table', 1),
(5, '2019_10_24_101850_create_fabricantes_table', 1),
(6, '2019_10_24_101906_create_tipos_arma_table', 1),
(7, '2019_10_24_101918_create_modelos_arma_table', 1),
(8, '2019_10_24_101927_create_opms_table', 1),
(9, '2019_10_24_101928_create_armas_table', 1),
(10, '2019_10_24_102015_create_tipos_disparo_table', 1),
(11, '2019_10_24_102034_create_tipos_municao_table', 1),
(12, '2019_10_24_102057_create_localizacoes_table', 1),
(13, '2019_10_24_102135_create_postos_graduacoes_table', 1),
(14, '2019_10_24_102148_create_policiais_table', 1),
(15, '2019_10_24_102149_create_disparos_table', 1),
(16, '2019_10_24_102150_create_cautelas_table', 1);
