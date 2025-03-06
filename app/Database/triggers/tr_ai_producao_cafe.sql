CREATE TRIGGER tr_ai_producao_cafe
AFTER INSERT ON producao_cafe
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
'', NEW.nome_producao,
'', NEW.estado,
'', NEW.cidade,
'', NEW.telefone,
'', NEW.area_plantada,
'', NEW.variedade_cafe,
'', NEW.metodos_cultivo,
'', NEW.producao_safra,
'INSERT',
NEW.user_id,
CURRENT_TIMESTAMP
);
