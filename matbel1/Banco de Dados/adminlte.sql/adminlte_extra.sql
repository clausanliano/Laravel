
--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `armas`
--
ALTER TABLE `armas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `armas_numero_serie_unique` (`numero_serie`),
  ADD UNIQUE KEY `armas_numero_tombo_unique` (`numero_tombo`),
  ADD KEY `armas_modelo_arma_id_foreign` (`modelo_arma_id`),
  ADD KEY `armas_opm_id_foreign` (`opm_id`);

--
-- Índices para tabela `calibres`
--
ALTER TABLE `calibres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calibres_nome_unique` (`nome`);

--
-- Índices para tabela `disparos`
--
ALTER TABLE `disparos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disparos_opm_id_foreign` (`opm_id`),
  ADD KEY `disparos_policial_id_foreign` (`policial_id`),
  ADD KEY `disparos_arma_id_foreign` (`arma_id`),
  ADD KEY `disparos_user_id_foreign` (`user_id`),
  ADD KEY `disparos_tipo_municao_id_foreign` (`tipo_municao_id`),
  ADD KEY `disparos_tipo_disparo_id_foreign` (`tipo_disparo_id`),
  ADD KEY `disparos_localizacao_id_foreign` (`localizacao_id`);

--
-- Índices para tabela `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fabricantes_nome_unique` (`nome`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `localizacoes_localizacao_id_foreign` (`localizacao_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `modelos_arma`
--
ALTER TABLE `modelos_arma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelos_arma_nome_unique` (`nome`),
  ADD KEY `modelos_arma_calibre_id_foreign` (`calibre_id`),
  ADD KEY `modelos_arma_tipo_arma_id_foreign` (`tipo_arma_id`),
  ADD KEY `modelos_arma_fabricante_id_foreign` (`fabricante_id`);

--
-- Índices para tabela `opms`
--
ALTER TABLE `opms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `policiais`
--
ALTER TABLE `policiais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `policiais_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `policiais_matricula_unique` (`matricula`),
  ADD KEY `policiais_opm_id_foreign` (`opm_id`),
  ADD KEY `policiais_posto_graduacao_id_foreign` (`posto_graduacao_id`);

--
-- Índices para tabela `postos_graduacoes`
--
ALTER TABLE `postos_graduacoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `postos_graduacoes_nome_unique` (`nome`);

--
-- Índices para tabela `tipos_arma`
--
ALTER TABLE `tipos_arma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipos_arma_nome_unique` (`nome`);

--
-- Índices para tabela `tipos_disparo`
--
ALTER TABLE `tipos_disparo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipos_municao`
--
ALTER TABLE `tipos_municao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipos_municao_nome_unique` (`nome`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `armas`
--
ALTER TABLE `armas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `calibres`
--
ALTER TABLE `calibres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `disparos`
--
ALTER TABLE `disparos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `modelos_arma`
--
ALTER TABLE `modelos_arma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `opms`
--
ALTER TABLE `opms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `policiais`
--
ALTER TABLE `policiais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `postos_graduacoes`
--
ALTER TABLE `postos_graduacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tipos_arma`
--
ALTER TABLE `tipos_arma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tipos_disparo`
--
ALTER TABLE `tipos_disparo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipos_municao`
--
ALTER TABLE `tipos_municao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `armas`
--
ALTER TABLE `armas`
  ADD CONSTRAINT `armas_modelo_arma_id_foreign` FOREIGN KEY (`modelo_arma_id`) REFERENCES `modelos_arma` (`id`),
  ADD CONSTRAINT `armas_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`);

--
-- Limitadores para a tabela `disparos`
--
ALTER TABLE `disparos`
  ADD CONSTRAINT `disparos_arma_id_foreign` FOREIGN KEY (`arma_id`) REFERENCES `armas` (`id`),
  ADD CONSTRAINT `disparos_localizacao_id_foreign` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `disparos_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`),
  ADD CONSTRAINT `disparos_policial_id_foreign` FOREIGN KEY (`policial_id`) REFERENCES `policiais` (`id`),
  ADD CONSTRAINT `disparos_tipo_disparo_id_foreign` FOREIGN KEY (`tipo_disparo_id`) REFERENCES `tipos_disparo` (`id`),
  ADD CONSTRAINT `disparos_tipo_municao_id_foreign` FOREIGN KEY (`tipo_municao_id`) REFERENCES `tipos_municao` (`id`),
  ADD CONSTRAINT `disparos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `localizacoes`
--
ALTER TABLE `localizacoes`
  ADD CONSTRAINT `localizacoes_localizacao_id_foreign` FOREIGN KEY (`localizacao_id`) REFERENCES `localizacoes` (`id`);

--
-- Limitadores para a tabela `modelos_arma`
--
ALTER TABLE `modelos_arma`
  ADD CONSTRAINT `modelos_arma_calibre_id_foreign` FOREIGN KEY (`calibre_id`) REFERENCES `calibres` (`id`),
  ADD CONSTRAINT `modelos_arma_fabricante_id_foreign` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricantes` (`id`),
  ADD CONSTRAINT `modelos_arma_tipo_arma_id_foreign` FOREIGN KEY (`tipo_arma_id`) REFERENCES `tipos_arma` (`id`);

--
-- Limitadores para a tabela `policiais`
--
ALTER TABLE `policiais`
  ADD CONSTRAINT `policiais_opm_id_foreign` FOREIGN KEY (`opm_id`) REFERENCES `opms` (`id`),
  ADD CONSTRAINT `policiais_posto_graduacao_id_foreign` FOREIGN KEY (`posto_graduacao_id`) REFERENCES `postos_graduacoes` (`id`);
