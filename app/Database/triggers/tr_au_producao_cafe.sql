CREATE TRIGGER tr_au_producao_cafe
AFTER UPDATE ON producao_cafe
FOR EACH ROW
INSERT INTO historico (
nome_producao_antigo, nome_producao_novo,
estado_antigo, estado_novo,
cidade_antigo, cidade_novo,
telefone_antigo, telefone_novo,
area_plantada_antigo, area_plantada_novo,
variedade_cafe_antigo, variedade_cafe_novo,
metodo_cultivo_antigo, metodo_cultivo_novo,
quantidade_safra_antigo, quantidade_safra_novo,
acao,
alterado_por,
alterado_em
)
VALUES (
OLD.nome_producao, NEW.nome_producao,
OLD.estado, NEW.estado,
OLD.cidade, NEW.cidade,
OLD.telefone, NEW.telefone,
OLD.area_plantada, NEW.area_plantada,
OLD.variedade_cafe, NEW.variedade_cafe,
OLD.metodos_cultivo, NEW.metodos_cultivo,
OLD.producao_safra, NEW.producao_safra,
'UPDATE',
OLD.user_id,
CURRENT_TIMESTAMP
);
