CREATE TRIGGER tr_au_producao_cafe
AFTER UPDATE ON producao_cafe
FOR EACH ROW
INSERT INTO historico (nome_producao, nome_coluna, valor_antigo, novo_valor, tipo_acao, alterado_por, alterado_em)
VALUES (NEW.nome_completo, 'cidade', '', NEW.cidade, 'UPDATE', NEW.user_id, CURRENT_TIMESTAMP);
