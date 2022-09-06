
-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--
-- Criação: 25-Out-2019 às 18:26
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$lypa2n.1C.SxkMlC.udIe.aV5Ea/6OjqDd8P7L5FjjGB9Tj58.37C', 'u2Vf3uxTJXdZyhG799As5klANDUNQuB9nNXAN86RHADRh5wvYXQWo0r7DgKi', NULL, NULL),
(4, 'Edinardo Gurgel Linhares', 'edinardolinhares@gmail.com', '$2y$10$lypa2n.1C.SxkMlC.udIe.aV5Ea/6OjqDd8P7L5FjjGB9Tj58.37C', 'I6bFh3T5uk38pTZMge6vWDWm6P2YxMLDliLQaEzkPW53Kewuiu44A1uARSDU', '2020-02-05 19:17:07', '2020-02-05 19:17:07'),
(6, 'Edinard 2', 'ednardolinhares@gmail.com', '$2y$10$k1dYnBqnkVfheOIMhurr9.trg2YfhaIEvY7MjQqLD.oGh9bnBwcEy', 'U64BYkTZOY9ZANs18VZvgEOrVoEjbyojT7fJV8TMbEC92d4z3fRVpn2wxsCh', '2020-02-11 16:28:52', '2020-02-11 16:28:52');

