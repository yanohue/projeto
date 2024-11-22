-- Client A `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(1, 1, 1, 4000.00, '2024-10-01'),
(1, 1, 1, 1500.00, '2024-11-01'),
(1, 1, 1, 3000.00, '2024-12-01');

-- Client A `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 1, 0.00), -- Laptop A
(2, 1, 200.00), -- Laptop B
(3, 2, 50.00), -- Smartphone A
(4, 2, 0.00), -- Smartphone B
(13, 3, 0.00); -- Monitor A


-- Client B `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(2, 2, 2, 450.00, '2024-10-10'),
(2, 2, 2, 750.00, '2024-11-10'),
(2, 2, 2, 250.00, '2024-12-10');

-- Client B `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(7, 4, 0.00), -- Book A
(8, 4, 0.00), -- Book B
(6, 5, 25.00), -- Wireless Earbuds
(11, 5, 0.00), -- Headphones
(14, 6, 10.00); -- Gaming Keyboard


-- Client C `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(3, 1, 1, 2100.00, '2024-10-15'),
(3, 1, 1, 1800.00, '2024-12-15');

-- Client C `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(9, 7, 100.00), -- Office Chair
(10, 7, 200.00), -- Desk A
(16, 8, 0.00), -- Desk Lamp
(17, 8, 0.00); -- Backpack A


-- Client D `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(4, 2, 1, 65.00, '2024-10-20'),
(4, 2, 1, 45.00, '2024-11-20');

-- Client D `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(18, 9, 0.00), -- Calculator
(19, 9, 0.00), -- Notebook A
(20, 10, 0.00); -- Pen Pack


-- Client E `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(5, 2, 2, 2500.00, '2024-10-25'),
(5, 2, 2, 4500.00, '2024-12-25');

-- Client E `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 11, 0.00), -- Laptop A
(3, 11, 50.00), -- Smartphone A
(2, 12, 0.00), -- Laptop B
(13, 12, 100.00); -- Monitor A


-- Client F `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(6, 1, 2, 2300.00, '2024-10-30'),
(6, 1, 2, 1800.00, '2024-11-30'),
(6, 1, 2, 2100.00, '2024-12-30');

-- Client F `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(5, 11, 0.00), -- Smartwatch A
(6, 11, 10.00), -- Wireless Earbuds
(11, 12, 50.00), -- Headphones
(13, 13, 100.00), -- Monitor A
(16, 13, 0.00); -- Gaming Mouse


-- Client G `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(7, 2, 1, 400.00, '2024-10-05'),
(7, 2, 1, 500.00, '2024-11-05'),
(7, 2, 1, 600.00, '2024-12-05');

-- Client G `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(18, 14, 0.00), -- T-shirt A
(19, 14, 0.00), -- Jacket B
(20, 15, 0.00), -- Socks Pack
(14, 15, 25.00), -- Sports Shoes
(15, 16, 0.00); -- Scarf A


-- Client H `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(8, 2, 1, 100.00, '2024-10-12'),
(8, 2, 1, 75.00, '2024-11-12'),
(8, 2, 1, 50.00, '2024-12-12');

-- Client H `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(17, 17, 0.00), -- Binder A
(18, 17, 0.00), -- Calculator
(20, 18, 0.00), -- Pen Pack
(19, 19, 0.00); -- Notebook A


-- Client I `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(9, 1, 1, 3000.00, '2024-10-25'),
(9, 1, 1, 2500.00, '2024-11-25'),
(9, 1, 1, 3200.00, '2024-12-25');

-- Client I `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 15, 0.00), -- Laptop A
(5, 15, 200.00), -- Smartwatch A
(9, 16, 100.00), -- Office Chair
(13, 17, 0.00), -- Monitor A
(16, 17, 0.00); -- Gaming Mouse


-- Client J `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(10, 1, 1, 150.00, '2024-10-15'),
(10, 1, 1, 120.00, '2024-11-15');

-- Client J `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(18, 18, 0.00), -- Calculator
(19, 18, 0.00); -- Notebook A


-- Client K `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(11, 2, 1, 3300.00, '2024-10-10'),
(11, 2, 1, 3100.00, '2024-11-10'),
(11, 2, 1, 3500.00, '2024-12-10');

-- Client K `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 16, 100.00), -- Laptop A
(5, 16, 0.00), -- Smartwatch A
(9, 17, 50.00), -- Office Chair
(12, 18, 150.00), -- Air Purifier
(16, 18, 20.00); -- Gaming Mouse


-- Client L `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(12, 2, 2, 450.00, '2024-10-02'),
(12, 2, 2, 500.00, '2024-11-02'),
(12, 2, 2, 550.00, '2024-12-02');

-- Client L `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(14, 19, 0.00), -- Sports Shoes
(19, 19, 0.00), -- Socks Pack
(20, 20, 10.00), -- Skincare Lotion
(13, 20, 0.00), -- Yoga Mat
(15, 21, 0.00); -- Scarf A


-- Client M `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(13, 1, 1, 250.00, '2024-10-08'),
(13, 1, 1, 220.00, '2024-11-08');

-- Client M `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(14, 22, 0.00), -- T-shirt B
(17, 22, 0.00), -- Binder A
(19, 23, 0.00); -- Socks Pack


-- Client N `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(14, 1, 2, 600.00, '2024-10-20'),
(14, 1, 2, 550.00, '2024-11-20'),
(14, 1, 2, 500.00, '2024-12-20');

-- Client N `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(6, 24, 0.00), -- Wireless Earbuds
(7, 24, 0.00), -- Blender A
(9, 25, 50.00), -- Office Chair
(12, 26, 100.00), -- Air Purifier
(16, 26, 0.00); -- Gaming Mouse


-- Client O `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(15, 2, 1, 200.00, '2024-10-22'),
(15, 2, 1, 180.00, '2024-11-22');

-- Client O `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(17, 27, 0.00), -- Binder A
(18, 27, 0.00); -- Calculator


-- Client P `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(16, 2, 1, 2000.00, '2024-10-30'),
(16, 1, 1, 2200.00, '2024-11-30');

-- Client P `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(3, 28, 50.00), -- Dumbbells
(10, 28, 0.00), -- Treadmill
(14, 29, 0.00), -- T-shirt B
(15, 29, 0.00), -- Hoodie
(16, 29, 20.00); -- Sports Watch


-- Client Q `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(17, 1, 2, 800.00, '2024-10-12'),
(17, 2, 2, 850.00, '2024-11-12');

-- Client Q `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 30, 50.00), -- Laptop A
(5, 30, 100.00), -- Smartwatch A
(9, 31, 0.00), -- Office Chair
(12, 31, 50.00), -- Air Purifier
(16, 31, 20.00); -- Gaming Mouse


-- Client R `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(18, 2, 1, 400.00, '2024-10-05'),
(18, 2, 1, 350.00, '2024-11-05');

-- Client R `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(14, 32, 0.00), -- T-shirt B
(17, 32, 0.00), -- Binder A
(19, 33, 0.00); -- Socks Pack


-- Client S `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(19, 2, 2, 1500.00, '2024-10-15'),
(19, 2, 2, 1300.00, '2024-11-15'),
(19, 2, 2, 1400.00, '2024-12-15');

-- Client S `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(6, 34, 0.00), -- Wireless Earbuds
(7, 34, 0.00), -- Blender A
(9, 34, 50.00), -- Office Chair
(12, 35, 100.00), -- Air Purifier
(16, 35, 0.00); -- Gaming Mouse


-- Client T `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(20, 1, 1, 250.00, '2024-10-18'),
(20, 1, 1, 280.00, '2024-11-18');

-- Client T `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(18, 36, 0.00), -- Calculator
(19, 36, 0.00), -- Socks Pack
(20, 37, 10.00); -- Skincare Lotion


-- Client U `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(21, 2, 2, 1200.00, '2024-10-25'),
(21, 2, 2, 1100.00, '2024-11-25');

-- Client U `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(7, 38, 0.00), -- Blender A
(8, 38, 0.00), -- Coffee Maker
(9, 39, 50.00), -- Office Chair
(12, 39, 0.00); -- Air Purifier


-- Client V `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(22, 1, 1, 400.00, '2024-10-30'),
(22, 2, 1, 350.00, '2024-11-30');

-- Client V `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(14, 40, 0.00), -- T-shirt B
(15, 40, 0.00), -- Hoodie
(17, 41, 0.00), -- Binder A
(20, 41, 20.00); -- Skincare Lotion


-- Client W `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(23, 2, 2, 800.00, '2024-10-22'),
(23, 1, 2, 850.00, '2024-11-22');

-- Client W `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 42, 50.00), -- Laptop A
(5, 42, 100.00), -- Smartwatch A
(10, 43, 0.00), -- Treadmill
(14, 43, 0.00), -- T-shirt B
(16, 43, 20.00); -- Sports Watch


-- Client X `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(24, 1, 1, 900.00, '2024-10-15'),
(24, 2, 1, 950.00, '2024-11-15'),
(24, 1, 1, 850.00, '2024-12-15');

-- Client X `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(6, 44, 0.00), -- Wireless Earbuds
(7, 44, 0.00), -- Blender A
(8, 44, 100.00), -- Coffee Maker
(9, 45, 50.00), -- Office Chair
(12, 45, 0.00); -- Air Purifier


-- Client Y `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(25, 2, 1, 250.00, '2024-10-02'),
(25, 1, 1, 300.00, '2024-11-02');

-- Client Y `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(20, 46, 0.00), -- Skincare Lotion
(17, 46, 0.00), -- Binder A
(18, 47, 10.00), -- Calculator
(19, 47, 0.00), -- Socks Pack
(5, 47, 20.00); -- Smartwatch A


-- Client Z `venda`
INSERT INTO `venda` (`id_cliente`, `id_funcionario`, `id_pagamento`, `valor`, `data`) VALUES
(26, 1, 2, 1200.00, '2024-10-12'),
(26, 1, 2, 1150.00, '2024-11-12'),
(26, 1, 2, 1300.00, '2024-12-12');

-- Client Z `itens_venda`
INSERT INTO `itens_venda` (`id_produto`, `id_venda`, `desconto_item`) VALUES
(1, 48, 50.00), -- Laptop A
(5, 48, 30.00), -- Smartwatch A
(7, 48, 100.00), -- Blender A
(9, 49, 0.00), -- Office Chair
(12, 49, 50.00); -- Air Purifier
