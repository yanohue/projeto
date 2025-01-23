-- Insert into `usuario`
INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES
('Admin User', 'admin@example.com', 'admin123'),
('Test User', 'test@example.com', 'test123');

-- Insert into `fornecedor`
INSERT INTO `fornecedor` (`nome`, `cnpj`) VALUES
('Supplier A', '12345678000195'),
('Supplier B', '98765432000150');


-- Insert into `produto`
INSERT INTO `produto` (`id_fornecedor`, `nome`, `valor`, `codigo_barras`, `categoria`, `quantidade_estoque`, `descricao`, `foto`) VALUES
(1, 'Laptop A', 3500.00, '1234567890123', 'Electronics', 50, 'High-performance laptop for work and gaming', 'laptop_a.jpg'),
(1, 'Laptop B', 2800.00, '1234567890124', 'Electronics', 30, 'Affordable laptop with good battery life', 'laptop_b.jpg'),
(1, 'Smartphone A', 1500.00, '1234567890125', 'Electronics', 100, 'Smartphone with a large screen and great camera', 'smartphone_a.jpg'),
(1, 'Smartphone B', 1200.00, '1234567890126', 'Electronics', 80, 'Budget-friendly smartphone with solid performance', 'smartphone_b.jpg'),
(2, 'Monitor A', 800.00, '1234567890127', 'Electronics', 40, '24-inch monitor with 4K resolution', 'monitor_a.jpg'),
(2, 'Office Chair', 250.00, '1234567890128', 'Furniture', 60, 'Ergonomic office chair for long hours of work', 'office_chair.jpg'),
(2, 'Desk A', 500.00, '1234567890129', 'Furniture', 20, 'Modern desk with storage space', 'desk_a.jpg'),
(2, 'Gaming Keyboard', 120.00, '1234567890130', 'Electronics', 70, 'Mechanical keyboard designed for gaming', 'gaming_keyboard.jpg'),
(1, 'Wireless Earbuds', 100.00, '1234567890131', 'Electronics', 150, 'Wireless earbuds with noise cancellation', 'wireless_earbuds.jpg'),
(2, 'Headphones', 200.00, '1234567890132', 'Electronics', 50, 'Over-ear headphones with surround sound', 'headphones.jpg'),
(2, 'Gaming Mouse', 80.00, '1234567890133', 'Electronics', 75, 'RGB gaming mouse with adjustable DPI', 'gaming_mouse.jpg'),
(2, 'T-shirt A', 25.00, '1234567890134', 'Clothing', 200, 'Comfortable cotton t-shirt', 'tshirt_a.jpg'),
(2, 'T-shirt B', 30.00, '1234567890135', 'Clothing', 150, 'Stylish t-shirt for casual wear', 'tshirt_b.jpg'),
(1, 'Calculator', 15.00, '1234567890136', 'Office Supplies', 250, 'Basic calculator for everyday use', 'calculator.jpg'),
(1, 'Notebook A', 5.00, '1234567890137', 'Office Supplies', 300, 'Classic lined notebook for writing', 'notebook_a.jpg'),
(1, 'Pen Pack', 10.00, '1234567890138', 'Office Supplies', 350, 'Pack of 5 pens for office use', 'pen_pack.jpg'),
(1, 'Smartwatch A', 220.00, '1234567890139', 'Electronics', 40, 'Smartwatch with fitness tracking features', 'smartwatch_a.jpg'),
(2, 'Blender A', 120.00, '1234567890140', 'Home Appliances', 60, 'High-power blender for smoothies', 'blender_a.jpg'),
(1, 'Coffee Maker', 80.00, '1234567890141', 'Home Appliances', 100, 'Coffee maker with auto shut-off feature', 'coffee_maker.jpg'),
(1, 'Socks Pack', 20.00, '1234567890142', 'Clothing', 300, 'Pack of 3 pairs of comfortable socks', 'socks_pack.jpg'),
(2, 'Yoga Mat', 40.00, '1234567890143', 'Sports Equipment', 100, 'Non-slip yoga mat for all levels', 'yoga_mat.jpg'),
(1, 'Skincare Lotion', 15.00, '1234567890144', 'Personal Care', 150, 'Moisturizing lotion for all skin types', 'skincare_lotion.jpg');



INSERT INTO `cliente` (`cpf`, `nome`, `telefone`, `score`, `data_nascimento`, `limite_credito`, `email`, `recebe_whatsapp`, `recebe_email`, `recebe_sms`) VALUES
-- Clientes A-E
('11111111111', 'Client A', '55912345001', 750, '1980-01-01', 2000.00, 'client.a@example.com', 1, 1, 1),
('22222222222', 'Client B', '55912345002', 700, '1985-02-01', 2500.00, 'client.b@example.com', 1, 1, 1),
('33333333333', 'Client C', '55912345003', 680, '1990-03-01', 1500.00, 'client.c@example.com', 0, 1, 1),
('44444444444', 'Client D', '55912345004', 620, '1995-04-01', 1000.00, 'client.d@example.com', 1, 0, 0),
('55555555555', 'Client E', '55912345005', 780, '1987-05-01', 3000.00, 'client.e@example.com', 1, 1, 1),
-- Clientes F-J
('66666666666', 'Client F', '55912345006', 800, '1982-06-01', 3500.00, 'client.f@example.com', 1, 1, 1),
('77777777777', 'Client G', '55912345007', 720, '1992-07-01', 2000.00, 'client.g@example.com', 0, 1, 0),
('88888888888', 'Client H', '55912345008', 650, '1988-08-01', 1000.00, 'client.h@example.com', 1, 0, 1),
('99999999999', 'Client I', '55912345009', 770, '1990-09-01', 3000.00, 'client.i@example.com', 1, 1, 1),
('10101010101', 'Client J', '55912345010', 680, '1993-10-01', 1500.00, 'client.j@example.com', 0, 1, 1),
-- Clientes K-O
('11111111111', 'Client K', '55912345011', 900, '1985-11-10', 5000.00, 'client.k@example.com', 1, 1, 1),
('12121212121', 'Client L', '55912345012', 850, '1994-12-20', 4000.00, 'client.l@example.com', 0, 1, 1),
('13131313131', 'Client M', '55912345013', 750, '1990-05-15', 2500.00, 'client.m@example.com', 1, 0, 0),
('14141414141', 'Client N', '55912345014', 680, '1988-01-01', 1500.00, 'client.n@example.com', 1, 1, 1),
('15151515151', 'Client O', '55912345015', 770, '1992-03-25', 3500.00, 'client.o@example.com', 0, 1, 0),
-- Clientes P-T
('16161616161', 'Client P', '55912345016', 800, '1989-07-11', 7000.00, 'client.p@example.com', 1, 1, 1),
('17171717171', 'Client Q', '55912345017', 760, '1991-08-21', 6000.00, 'client.q@example.com', 0, 1, 1),
('18181818181', 'Client R', '55912345018', 690, '1993-09-14', 5000.00, 'client.r@example.com', 1, 0, 0),
('19191919191', 'Client S', '55912345019', 830, '1987-10-29', 4500.00, 'client.s@example.com', 0, 1, 1),
('20202020202', 'Client T', '55912345020', 780, '1990-02-03', 3500.00, 'client.t@example.com', 1, 1, 0),
-- Clientes U-Z
('21212121212', 'Client U', '55912345021', 760, '1992-03-05', 5000.00, 'client.u@example.com', 1, 0, 1),
('22222222222', 'Client V', '55912345022', 710, '1988-06-19', 4500.00, 'client.v@example.com', 0, 1, 0),
('23232323232', 'Client W', '55912345023', 720, '1995-07-30', 6000.00, 'client.w@example.com', 1, 1, 1),
('24242424242', 'Client X', '55912345024', 800, '1986-11-10', 7000.00, 'client.x@example.com', 1, 1, 1),
('25252525252', 'Client Y', '55912345025', 750, '1990-12-23', 5500.00, 'client.y@example.com', 0, 1, 1),
('26262626262', 'Client Z', '55912345026', 780, '1994-02-20', 6500.00, 'client.z@example.com', 1, 0, 1);


-- Insert into `endereco` para os clientes A-Z
INSERT INTO `endereco` (`cliente_id_cliente`, `fornecedor_id_fornecedor`, `uf`, `cidade`, `logradouro`, `bairro`, `numero`, `cep`, `complemento`) VALUES
(1, NULL, 'SP', 'São Paulo', 'Rua A', 'Centro', '123', '01010101', 'Apt 101'),
(2, NULL, 'RJ', 'Rio de Janeiro', 'Avenida B', 'Zona Sul', '456', '22022022', NULL),
(3, NULL, 'MG', 'Belo Horizonte', 'Rua C', 'Savassi', '789', '30303030', 'Bloco 2'),
(4, NULL, 'RS', 'Porto Alegre', 'Rua D', 'Centro Histórico', '101', '40404040', 'Apartamento 202'),
(5, NULL, 'BA', 'Salvador', 'Rua E', 'Pelourinho', '202', '50505050', 'Casa 5'),
(6, NULL, 'SP', 'São Paulo', 'Avenida F', 'Vila Madalena', '303', '60606060', NULL),
(7, NULL, 'CE', 'Fortaleza', 'Rua G', 'Meireles', '404', '70707070', 'Andar 3'),
(8, NULL, 'PE', 'Recife', 'Rua H', 'Boa Viagem', '505', '80808080', 'Bloco A'),
(9, NULL, 'GO', 'Goiânia', 'Avenida I', 'Setor Bueno', '606', '90909090', NULL),
(10, NULL, 'PR', 'Curitiba', 'Rua J', 'Centro', '707', '10101010', 'Sala 2'),
(11, NULL, 'SP', 'São Paulo', 'Rua K', 'Vila Mariana', '808', '11111111', 'Apt 301'),
(12, NULL, 'ES', 'Vitória', 'Avenida L', 'Praia do Canto', '909', '12121212', 'Casa 10'),
(13, NULL, 'DF', 'Brasília', 'Rua M', 'Asa Sul', '1010', '13131313', NULL),
(14, NULL, 'MG', 'Belo Horizonte', 'Rua N', 'Funcionários', '1111', '14141414', 'Andar 5'),
(15, NULL, 'SP', 'São Paulo', 'Avenida O', 'Jardim Paulista', '1212', '15151515', 'Cobertura 2'),
(16, NULL, 'SC', 'Florianópolis', 'Rua P', 'Centro', '1313', '16161616', 'Sala Comercial'),
(17, NULL, 'PR', 'Curitiba', 'Rua Q', 'Batel', '1414', '17171717', 'Apt 1003'),
(18, NULL, 'BA', 'Salvador', 'Avenida R', 'Pituba', '1515', '18181818', 'Bloco B'),
(19, NULL, 'RJ', 'Rio de Janeiro', 'Rua S', 'Ipanema', '1616', '19191919', NULL),
(20, NULL, 'SP', 'São Paulo', 'Rua T', 'Vila Progredior', '1717', '20202020', 'Apt 502'),
(21, NULL, 'AL', 'Maceió', 'Rua U', 'Ponta Verde', '1818', '21212121', 'Casa 12'),
(22, NULL, 'MG', 'Uberlândia', 'Rua V', 'Centro', '1919', '22222222', 'Cobertura 3'),
(23, NULL, 'SP', 'São Paulo', 'Rua W', 'Itaim Bibi', '2020', '23232323', 'Apartamento 204'),
(24, NULL, 'RS', 'Porto Alegre', 'Rua X', 'Moinhos de Vento', '2121', '24242424', 'Apartamento 101'),
(25, NULL, 'CE', 'Fortaleza', 'Avenida Y', 'Centro', '2222', '25252525', NULL),
(26, NULL, 'SP', 'São Paulo', 'Rua Z', 'Bela Vista', '2323', '26262626', 'Apartamento 707');


-- Insert into `funcionario`
INSERT INTO `funcionario` (`nome`, `email`, `salario`, `meta`, `cargo`, `comissao`) VALUES
('Alice Manager', 'alice.manager@example.com', 4500.00, 20000.00, 'Manager', 5.0),
('Bob Seller', 'bob.seller@example.com', 3000.00, 10000.00, 'Seller', 2.5);

-- Insert into `forma_pagamento`
INSERT INTO `forma_pagamento` (`nome`, `tipo`, `aceita_parcelamento`, `prazo_parcela`, `juros`) VALUES
('Credit Card', 'Electronic', 1, 30, 1.5),
('Cash', 'Physical', 0, NULL, NULL);


-- Insert into `estoque`
INSERT INTO `estoque` (`id_produto`, `quantidade`, `tipo_movimentacao`, `data_movimentacao`) VALUES
(1, '10', 'Entrada', '2024-10-20'),
(2, '5', 'Saída', '2024-11-15');

-- Insert into `parcela`
INSERT INTO `parcela` (`id_venda`, `id_cliente`, `id_funcionario`, `id_pagamento`, `valor_parcela`, `data_vencimento`, `data_pagamento`, `numero_parcela`, `confirma_pagamento`) VALUES
(1, 1, 1, 1, 75.00, '2024-12-01', NULL, 1, 0),
(1, 1, 1, 1, 75.00, '2025-01-01', NULL, 2, 0);

-- Insert into `status_chamado`
INSERT INTO `status_chamado` (`situacao`) VALUES
('Open'),
('Closed');

-- Insert into `satisfacao_feedback`
INSERT INTO `satisfacao_feedback` (`nota_satisfacao`, `feedback_atendimento`) VALUES
(5, 'Excellent service'),
(3, 'Average experience');

-- Insert into `chamado`
INSERT INTO `chamado` (`id_venda`, `id_cliente`, `id_funcionario`, `id_pagamento`, `id_status_chamado`, `id_satisfacao`, `descricao`) VALUES
(1, 1, 1, 1, 1, 1, 'Issue with delivery'),
(2, 2, 2, 2, 2, 2, 'Refund request');

-- Insert into `conta_pagar`
INSERT INTO `conta_pagar` (`id_fornecedor`, `valor_parcela`, `data_vencimento`, `data_pagamento`, `numero_parcela`, `confirma_pagamento`) VALUES
(1, 500.00, '2024-11-30', NULL, 1, 0);

-- Insert into `analise_produto`
INSERT INTO `analise_produto` (`id_produto`, `id_fornecedor`, `data`, `valor_minimo`, `valor_medio`) VALUES
(1, 1, '2024-11-20', 25.00, 30.00);

-- Insert into `projecao`
INSERT INTO `projecao` (`id_produto`, `id_fornecedor`, `data`, `quantidade`, `desconto`, `valor_unitario`, `valor_total`) VALUES
(1, 1, '2024-12-01', 20, 2.00, 27.99, 559.80);
