CREATE TRIGGER tr_ai_producao_cafe
AFTER INSERT ON producao_cafe
FOR EACH ROW
INSERT INTO historico (nome_producao, nome_coluna, valor_antigo, novo_valor, tipo_acao, alterado_por, alterado_em)
VALUES (NEW.nome_producao, 'cidade', '', NEW.cidade, 'INSERT', NEW.user_id, CURRENT_TIMESTAMP);
