
-- --------------------------------------------------------

--
-- Estrutura para vista `visual`
--
DROP TABLE IF EXISTS `visual`;

CREATE ALGORITHM=MERGE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visual`  AS  select `agenda`.`id` AS `id`,`agenda`.`Nome` AS `Nome`,`agenda`.`Telefone` AS `Telefone`,`agenda`.`DN` AS `DN` from `agenda` order by `agenda`.`id` WITH LOCAL CHECK OPTION ;
