SELECT e.bairro, 
       AVG(v.valor) AS ticket_medio, 
       COUNT(v.id_venda) AS quantidade_compras, 
       SUM(v.valor) AS total_vendas
FROM venda v
JOIN cliente c ON v.id_cliente = c.id_cliente
JOIN endereco e ON c.id_cliente = e.cliente_id_cliente
GROUP BY e.bairro
ORDER BY ticket_medio DESC;
