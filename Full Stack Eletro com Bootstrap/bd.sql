create database fullstackeletro;


create table fullstackeletro.produtos (

    id int not null primary key auto_increment,
    categoria varchar (30) not null, 
    imagem varchar (50) not null unique,
    descricao varchar(100) not null,
    preco float not null, 
    preco_venda float not null

);

insert into produtos values ('id', 'categoria', 'imagem', 'descricao', 'preco', 'preco_venda')
(default, 'geladeira' , "imagem/geladeirag.webp", "Geladeira Frost Free Electrolux 480 litros",3099.00 , 2799.00),
(default, 'geladeira',"imagem/geladeirainoxg.webp", "Geladeira Frost Free Electrolux 350 litros Inox", 4509.90, 3869.0),
(default, 'geladeira', "imagem/sideby.webp", "Refrigerador Samsung com SmartThings – 582L", 21300.00, 17809.00),
(default, 'fogao',"imagem/fogaobco.jpeg","Fogão Esmaltec 4 bocas", 599.00, 309.90),
(default, 'fogao',"/imagem/fogaoinox.jpeg","Fogão Electrolux 4 bocas Inox", 799.00, 500.50),
(default, 'microonda', "imagem/microbco.jpeg", "Micro ondas Electrolux 20 litros", 500.00, 419.90),
(default, 'microondas', "imagem/microinox.jpg", "Micro ondas Brastemp Inox 30 litros", 809.90, 519.90),
(default, 'microondas', "imagem/microinoxepreto.jpg", "Microondas Philco 25 Litros Preto Com Inox", 654.00, 519.00),
(default, 'lavaloucas', "imagem/lavaloucas.jpeg", "Lava-Louças Electrolux com Display Digital - Inox", 1329.00, 1009.00),
(default,'lavaloucas', "imagem/lavaloucasbranco.jpeg", "Lava Louça Compacta 8 Serviços Branca - Brastemp", 1109.90, 899.00),
(default, 'maquinadelavarroupas',"imagem/lavaroupa.jpeg" ,"Máquina de lavar e secar Electrolux 10 kg", 3999.00, 2509.00),
(default, 'maquinadelavarroupas', "imagem/lavadora1.webp", "Lavadora Consul 10KG - Painel Digital", 890.00, 519.00);
