CREATE TRIGGER tr_ad_producao_cafe
AFTER DELETE ON producao_cafe
FOR EACH ROW
INSERT INTO historico (nome_producao, nome_coluna, valor_antigo, novo_valor, tipo_acao, alterado_por, alterado_em)
VALUES (OLD.nome_producao, 'cidade', OLD.cidade, '', 'DELETE', OLD.user_id, CURRENT_TIMESTAMP);
