CREATE TRIGGER tr_ad_producao_cafe
AFTER DELETE ON producao_cafe
FOR EACH ROW
INSERT INTO historico (
id_usuario,
nome_producao_antigo, nome_producao_novo,
estado_antigo, estado_novo,
cidade_antigo, cidade_novo,
telefone_antigo, telefone_novo,
area_plantada_antigo, area_plantada_novo,
variedade_cafe_antigo, variedade_cafe_novo,
metodo_cultivo_antigo, metodo_cultivo_novo,
quantidade_safra_antigo, quantidade_safra_novo,
acao,
alterado_em
)
VALUES (
OLD.nome_producao, '',
OLD.estado, '',
OLD.cidade, '',
OLD.telefone, '',
OLD.area_plantada, '',
OLD.variedade_cafe, '',
OLD.metodos_cultivo, '',
OLD.producao_safra, '',
'DELETE',
OLD.id_usuario,
CURRENT_TIMESTAMP
);
