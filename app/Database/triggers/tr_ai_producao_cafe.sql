CREATE TRIGGER tr_ai_producao_cafe
AFTER INSERT ON producao_cafe
FOR EACH ROW
INSERT INTO historico (nome_tabela, nome_coluna, valor_antigo, novo_valor, alterado_por, alterado_em)
VALUES ('producao_cafe', 'cidade', '', NEW.cidade, 'usuário', CURRENT_TIMESTAMP);
