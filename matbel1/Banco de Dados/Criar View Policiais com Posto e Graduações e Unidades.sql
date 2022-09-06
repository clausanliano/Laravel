CREATE view policiais as SELECT f.NOME_PO AS 'nome', f.NOMEGUERRA_PO AS 'nome_guerra',
f.CPF_PO AS 'cpf', g.posto_graduacao AS 'graduacao', g.posto_precedencia AS 'precedencia', 
f.MATRICULA_PO AS 'matricula', f.rg_pm AS 'rg', u.codigo AS 'opm', u.nome_pais AS 'nome_pais', 
f.datainclusao_po AS 'dt_inc', f.NUMERO_PO AS 'numero_praca' 
FROM dp_rh.funcionarios f JOIN dp_rh.graduacoes g ON g.id = f.graduacao_id 
JOIN dp_rh.unidades u ON u.id = f.unidade_id;

create view opms as select `u`.`id` AS `id`, `u`.`codigo` AS `nome`, `u`.`tipo` AS `tipo`,
`u`.`unidade_id` AS `unidade_id`, `u`.`pais` AS `pais`, `u`.`nome_pais` AS `nome_pais` 
from  `dp_rh`.`unidades` `u` 