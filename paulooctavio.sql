-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2018 às 16:34
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paulooctavio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agente`
--

CREATE TABLE `agente` (
  `codAgente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `celular` varchar(16) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `regiao` varchar(180) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agente`
--

INSERT INTO `agente` (`codAgente`, `nome`, `email`, `celular`, `telefone`, `regiao`) VALUES
(1, 'Karinna', 'karinna.carvalho@paulooctavio.com.br', NULL, '(61) 3042-5222', 'Águas Claras e Taguatinga'),
(2, 'Misya', 'misya.reis@paulooctavio.com.br\n ', NULL, '(61) 3315-8539', 'Asa Norte e demais regiões'),
(3, 'Gláucia', 'glaucia.cardozo@paulooctavio.com.br', '', '(61) 3491-6780', 'Águas Claras e Taguatinga'),
(5, 'Sandra', 'sandra.betiato@paulooctavio.com.br \n\n', NULL, '(61) 3315-8587', 'Asa Norte e demais regiões'),
(6, 'Iolanda ', 'iolanda.tenorio@paulooctavio.com.br', NULL, '(61)3315-8553', 'Asa Norte e demais regiões');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `cod` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `destaque` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `descricao` text,
  `thumb` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`cod`, `titulo`, `url`, `destaque`, `status`, `data`, `descricao`, `thumb`) VALUES
(3, 'Ed. Taguatinga Trade Center TTC', 'ed-taguatinga-trade-center-ttc', 2, 2, '2017-10-05', 'A construtora PaulOOctavio continua acreditando em Brasília e por isso foi a única a lançar três novos empreendimentos residenciais e um comercial e residencial. Espalhados pela capital, os empreendimentos foram pensados para atender melhor as necessidades dos brasilienses, com opções de um a três quartos.\n\nO primeiro a ser lançado em 2016 foi o Residencial Marcílio Bione, em Águas Claras. As unidades têm 2 quartos e vão de 53 a 60m². O residencial conta com 10 lojas no térreo e área de lazer com salão de festa, churrasqueira, piscina e academia.\nEm seguida, foi lançado o Residencial Carlos Fernando Mathias, na quadra 110 Norte. O empreendimento oferece unidades de 85 a 92m², com três quartos. Os moradores desse empreendimento contam ainda com a vantagem de estarem localizados perto dos melhores restaurantes da Asa Norte. Com dois subsolos de garagens, as unidades possuem até três vagas na garagem.\n\nO Duo Center Paulo Zimbres foi lançado em agosto no Noroeste. Localizado na quadra 10/11, o edifício tem opções de apartamentos entre 33m² e 42m², e unidades duplex com 46m². Além disso, há também o espaço para o mall, com lojas que vão de 45 a 62m². Os materiais e a tecnologia utilizados no edifício são sustentáveis, alinhando com a proposta do bairro de ser ambientalmente responsável. Com as tecnologias, os moradores poderão economizar energia com os sensores de presença e com o aquecimento solar, além do projeto das unidades ser desenvolvido para aproveitar de forma mais eficaz a iluminação e ventilação natural.\n\nO último a ser lançado neste ano de 2016 foi o Residencial Baltazar Mendonça, na 704 Norte. O empreendimento traz unidades de um e dois quartos, e coberturas duplex. Os apartamentos vão de 44 a 68m² e os duplex de 95 a 138m². Fonte: Eldo Gomes', 'images/2017/10/blg5-1507229472.png'),
(4, 'Com inflação, preços do aluguel caem quase 9% em 2016', 'com-inflacao-precos-do-aluguel-caem-quase-9-em-2016', 1, 2, '2017-10-06', 'A construtora PaulOOctavio continua acreditando em Brasília e por isso foi a única a lançar três novos empreendimentos residenciais e um comercial e residencial. Espalhados pela capital, os empreendimentos foram pensados para atender melhor as necessidades dos brasilienses, com opções de um a três quartos.\n\nO primeiro a ser lançado em 2016 foi o Residencial Marcílio Bione, em Águas Claras. As unidades têm 2 quartos e vão de 53 a 60m². O residencial conta com 10 lojas no térreo e área de lazer com salão de festa, churrasqueira, piscina e academia.\nEm seguida, foi lançado o Residencial Carlos Fernando Mathias, na quadra 110 Norte. O empreendimento oferece unidades de 85 a 92m², com três quartos. Os moradores desse empreendimento contam ainda com a vantagem de estarem localizados perto dos melhores restaurantes da Asa Norte. Com dois subsolos de garagens, as unidades possuem até três vagas na garagem.\n\nO Duo Center Paulo Zimbres foi lançado em agosto no Noroeste. Localizado na quadra 10/11, o edifício tem opções de apartamentos entre 33m² e 42m², e unidades duplex com 46m². Além disso, há também o espaço para o mall, com lojas que vão de 45 a 62m². Os materiais e a tecnologia utilizados no edifício são sustentáveis, alinhando com a proposta do bairro de ser ambientalmente responsável. Com as tecnologias, os moradores poderão economizar energia com os sensores de presença e com o aquecimento solar, além do projeto das unidades ser desenvolvido para aproveitar de forma mais eficaz a iluminação e ventilação natural.\n\nO último a ser lançado neste ano de 2016 foi o Residencial Baltazar Mendonça, na 704 Norte. O empreendimento traz unidades de um e dois quartos, e coberturas duplex. Os apartamentos vão de 44 a 68m² e os duplex de 95 a 138m². Fonte: Eldo Gomes\ns preços médios do aluguel residencial no Brasil caíram 8,95% em 2016, descontada a inflação oficial medida pelo Índice de Preços ao Consumidor Amplo (IPCA). Os dados foram divulgados pelo índice FipeZap nesta terça-feira (17). A queda nominal (sem considerar a inflação) foi de 3,23%.\n\nEm dezembro, os preços ficaram praticamente estáveis, com variação negativa de 0,02%, registrando valor médio de R$ 29,99 por metro quadrado nas 11 cidades pesquisadas. Todas as cidades monitoradas pelo índice tiveram queda real no preço médio do aluguel em 2016. Apenas em São Bernardo do Campo e Santos não houve queda nominal.\n\nA cidade com o maior valor por metro quadrado para o aluguel, em dezembro, era o Rio de Janeiro (R$ 35,21), seguida por São Paulo (R$ 34,95%). As mais baratas foram São Bernardo do Campo (R$18,83) e Curitiba (R$ 16,57).\n\nO Rio de Janeiro teve a maior queda no preço médio da locação em 2016, com recuo de 6,21%, seguida de Campinas, com redução de 4,71% no ano passado.\n\nRentabilidade do aluguel\n\nO retorno dos proprietários com o aluguel foi de 4,4% ao ano em dezembro de 2016. A rentabilidade anual considera a divisão do valor do metro quadrado para locação pelo de venda do imóvel, multiplicado por 12.\n\nEsse percentual foi mais baixo que a taxa de juros real, que foi de 6,9% em 2016. Essa taxa considera a expectativa de inflação para os próximos 12 meses e é medida pelo Banco Central. Também ficou abaixo da caderneta de poupança, que rendeu 8,3% no ano passado e foi maior que a inflação do período, de 6,29%.\n\nA cidade de Santos, no litoral paulista, teve a maior rentabilidade das 11 pesquisadas pelo índice, com retorno de 6,3% no ano passado. Já a cidade menos rentável para o aluguel foi Curitiba (PR), com retorno anualizado de 3,5%. São Paulo apresentou rentabilidade média de 4,8% no mesmo período, e o Rio de Janeiro, 3,8%.\n\nO cálculo do índice considera preços apenas de anúncios para novos aluguéis, sem incorporar a correção em contratos vigentes, cujos preços costumam ser reajustados pelo IGP-M/FGV ou índices similares, de acordo com os contratos estabelecidos.\n\nFonte: G1', 'images/2017/10/blg4.png'),
(5, 'teste', NULL, NULL, NULL, '2017-11-10', 'estou tesntando', NULL),
(6, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(7, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(8, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(9, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(10, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(11, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(12, 'teste', NULL, NULL, NULL, '2017-12-07', 'estou tesntando', NULL),
(13, 'teste', NULL, NULL, NULL, '2017-12-08', 'estou tesntando', NULL),
(14, 'teste', NULL, NULL, NULL, '2017-12-08', 'estou tesntando', NULL),
(15, 'teste', NULL, NULL, NULL, '2017-12-08', 'estou tesntando', NULL),
(16, 'teste', NULL, NULL, NULL, '2017-12-08', 'estou tesntando', NULL),
(17, 'teste', NULL, NULL, NULL, '2017-12-08', 'estou tesntando', NULL),
(18, 'teste', NULL, NULL, NULL, '2017-12-08', 'estou tesntando', NULL),
(19, 'teste', NULL, NULL, NULL, '2017-12-11', 'estou tesntando', NULL),
(20, 'teste', NULL, NULL, NULL, '2017-12-11', 'estou tesntando', NULL),
(21, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(22, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(23, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(24, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(25, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(26, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(27, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(28, 'teste', NULL, NULL, NULL, '2017-12-12', 'estou tesntando', NULL),
(29, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(30, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(31, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(32, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(33, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(34, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(35, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(36, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(37, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(38, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(39, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(40, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(41, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(42, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(43, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(44, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(45, 'teste', NULL, NULL, NULL, '2017-12-13', 'estou tesntando', NULL),
(46, 'teste', NULL, NULL, NULL, '2017-12-17', 'estou tesntando', NULL),
(47, 'teste', NULL, NULL, NULL, '2017-12-19', 'estou tesntando', NULL),
(48, 'teste', NULL, NULL, NULL, '2017-12-21', 'estou tesntando', NULL),
(49, 'teste', NULL, NULL, NULL, '2017-12-21', 'estou tesntando', NULL),
(50, 'teste', NULL, NULL, NULL, '2017-12-22', 'estou tesntando', NULL),
(51, 'teste', NULL, NULL, NULL, '2017-12-23', 'estou tesntando', NULL),
(52, 'teste', NULL, NULL, NULL, '2017-12-23', 'estou tesntando', NULL),
(53, 'teste', NULL, NULL, NULL, '2017-12-27', 'estou tesntando', NULL),
(54, 'teste', NULL, NULL, NULL, '2018-01-01', 'estou tesntando', NULL),
(55, 'teste', NULL, NULL, NULL, '2018-01-05', 'estou tesntando', NULL),
(56, 'teste', NULL, NULL, NULL, '2018-01-05', 'estou tesntando', NULL),
(57, 'teste', NULL, NULL, NULL, '2018-01-07', 'estou tesntando', NULL),
(58, 'teste', NULL, NULL, NULL, '2018-01-10', 'estou tesntando', NULL),
(59, 'teste', NULL, NULL, NULL, '2018-01-12', 'estou tesntando', NULL),
(60, 'teste', NULL, NULL, NULL, '2018-01-14', 'estou tesntando', NULL),
(61, 'teste', NULL, NULL, NULL, '2018-01-14', 'estou tesntando', NULL),
(62, 'teste', NULL, NULL, NULL, '2018-01-16', 'estou tesntando', NULL),
(63, 'teste', NULL, NULL, NULL, '2018-01-17', 'estou tesntando', NULL),
(64, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(65, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(66, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(67, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(68, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(69, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(70, 'teste', NULL, NULL, NULL, '2018-03-19', 'estou tesntando', NULL),
(71, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(72, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(73, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(74, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(75, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(76, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(77, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(78, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(79, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(80, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(81, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(82, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(83, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(84, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(85, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(86, 'teste', NULL, NULL, NULL, '2018-03-20', 'estou tesntando', NULL),
(87, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(88, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(89, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(90, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(91, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(92, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(93, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(94, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(95, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(96, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(97, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(98, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(99, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(100, 'teste', NULL, NULL, NULL, '2018-03-21', 'estou tesntando', NULL),
(101, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(102, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(103, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(104, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(105, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(106, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(107, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(108, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(109, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(110, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(111, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(112, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(113, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(114, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(115, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(116, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(117, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(118, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(119, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(120, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(121, 'teste', NULL, NULL, NULL, '2018-03-22', 'estou tesntando', NULL),
(122, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(123, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(124, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(125, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(126, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(127, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(128, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(129, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(130, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(131, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(132, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(133, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(134, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(135, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(136, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(137, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(138, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(139, 'teste', NULL, NULL, NULL, '2018-03-23', 'estou tesntando', NULL),
(140, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(141, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(142, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(143, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(144, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(145, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(146, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(147, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(148, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(149, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(150, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(151, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(152, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(153, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(154, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(155, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(156, 'teste', NULL, NULL, NULL, '2018-03-24', 'estou tesntando', NULL),
(157, 'teste', NULL, NULL, NULL, '2018-03-25', 'estou tesntando', NULL),
(158, 'teste', NULL, NULL, NULL, '2018-03-25', 'estou tesntando', NULL),
(159, 'teste', NULL, NULL, NULL, '2018-03-25', 'estou tesntando', NULL),
(160, 'teste', NULL, NULL, NULL, '2018-03-25', 'estou tesntando', NULL),
(161, 'teste', NULL, NULL, NULL, '2018-03-25', 'estou tesntando', NULL),
(162, 'teste', NULL, NULL, NULL, '2018-03-25', 'estou tesntando', NULL),
(163, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(164, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(165, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(166, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(167, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(168, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(169, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(170, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(171, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(172, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(173, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(174, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(175, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(176, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(177, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(178, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(179, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(180, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(181, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(182, 'teste', NULL, NULL, NULL, '2018-03-26', 'estou tesntando', NULL),
(183, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(184, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(185, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(186, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(187, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(188, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(189, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(190, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(191, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(192, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(193, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(194, 'teste', NULL, NULL, NULL, '2018-03-27', 'estou tesntando', NULL),
(195, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(196, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(197, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(198, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(199, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(200, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(201, 'teste', NULL, NULL, NULL, '2018-03-28', 'estou tesntando', NULL),
(202, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(203, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(204, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(205, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(206, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(207, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(208, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(209, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(210, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(211, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(212, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(213, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(214, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(215, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(216, 'teste', NULL, NULL, NULL, '2018-03-29', 'estou tesntando', NULL),
(217, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(218, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(219, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(220, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(221, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(222, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(223, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(224, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(225, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(226, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(227, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(228, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(229, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(230, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(231, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(232, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(233, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(234, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(235, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(236, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(237, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(238, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(239, 'teste', NULL, NULL, NULL, '2018-03-30', 'estou tesntando', NULL),
(240, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(241, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(242, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(243, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(244, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(245, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(246, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(247, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(248, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(249, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(250, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(251, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(252, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(253, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(254, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(255, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(256, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(257, 'teste', NULL, NULL, NULL, '2018-03-31', 'estou tesntando', NULL),
(258, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(259, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(260, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(261, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(262, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(263, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(264, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(265, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(266, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(267, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(268, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(269, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(270, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(271, 'teste', NULL, NULL, NULL, '2018-04-01', 'estou tesntando', NULL),
(272, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(273, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(274, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(275, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(276, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(277, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(278, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(279, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(280, 'teste', NULL, NULL, NULL, '2018-04-02', 'estou tesntando', NULL),
(281, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(282, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(283, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(284, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(285, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(286, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(287, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(288, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(289, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(290, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(291, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(292, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(293, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(294, 'teste', NULL, NULL, NULL, '2018-04-03', 'estou tesntando', NULL),
(295, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(296, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(297, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(298, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(299, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(300, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(301, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(302, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(303, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(304, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(305, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(306, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(307, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(308, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(309, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(310, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(311, 'teste', NULL, NULL, NULL, '2018-04-04', 'estou tesntando', NULL),
(312, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(313, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(314, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(315, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(316, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(317, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(318, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(319, 'teste', NULL, NULL, NULL, '2018-04-05', 'estou tesntando', NULL),
(320, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(321, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(322, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(323, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(324, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(325, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(326, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(327, 'teste', NULL, NULL, NULL, '2018-04-06', 'estou tesntando', NULL),
(328, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(329, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(330, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(331, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(332, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(333, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(334, 'teste', NULL, NULL, NULL, '2018-04-07', 'estou tesntando', NULL),
(335, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(336, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(337, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(338, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(339, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(340, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(341, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(342, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(343, 'teste', NULL, NULL, NULL, '2018-04-08', 'estou tesntando', NULL),
(344, 'teste', NULL, NULL, NULL, '2018-04-09', 'estou tesntando', NULL),
(345, 'teste', NULL, NULL, NULL, '2018-04-09', 'estou tesntando', NULL),
(346, 'teste', NULL, NULL, NULL, '2018-04-09', 'estou tesntando', NULL),
(347, 'teste', NULL, NULL, NULL, '2018-04-09', 'estou tesntando', NULL),
(348, 'teste', NULL, NULL, NULL, '2018-04-09', 'estou tesntando', NULL),
(349, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(350, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(351, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(352, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(353, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(354, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(355, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(356, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(357, 'teste', NULL, NULL, NULL, '2018-04-10', 'estou tesntando', NULL),
(358, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(359, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(360, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(361, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(362, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(363, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(364, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(365, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(366, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(367, 'teste', NULL, NULL, NULL, '2018-04-11', 'estou tesntando', NULL),
(368, 'teste', NULL, NULL, NULL, '2018-04-12', 'estou tesntando', NULL),
(369, 'teste', NULL, NULL, NULL, '2018-04-12', 'estou tesntando', NULL),
(370, 'teste', NULL, NULL, NULL, '2018-04-12', 'estou tesntando', NULL),
(371, 'teste', NULL, NULL, NULL, '2018-04-12', 'estou tesntando', NULL),
(372, 'teste', NULL, NULL, NULL, '2018-04-12', 'estou tesntando', NULL),
(373, 'teste', NULL, NULL, NULL, '2018-04-13', 'estou tesntando', NULL),
(374, 'teste', NULL, NULL, NULL, '2018-04-13', 'estou tesntando', NULL),
(375, 'teste', NULL, NULL, NULL, '2018-04-13', 'estou tesntando', NULL),
(376, 'teste', NULL, NULL, NULL, '2018-04-14', 'estou tesntando', NULL),
(377, 'teste', NULL, NULL, NULL, '2018-04-14', 'estou tesntando', NULL),
(378, 'teste', NULL, NULL, NULL, '2018-04-14', 'estou tesntando', NULL),
(379, 'teste', NULL, NULL, NULL, '2018-04-14', 'estou tesntando', NULL),
(380, 'teste', NULL, NULL, NULL, '2018-04-14', 'estou tesntando', NULL),
(381, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(382, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(383, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(384, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(385, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(386, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(387, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(388, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(389, 'teste', NULL, NULL, NULL, '2018-04-15', 'estou tesntando', NULL),
(390, 'teste', NULL, NULL, NULL, '2018-04-16', 'estou tesntando', NULL),
(391, 'teste', NULL, NULL, NULL, '2018-04-16', 'estou tesntando', NULL),
(392, 'teste', NULL, NULL, NULL, '2018-04-16', 'estou tesntando', NULL),
(393, 'teste', NULL, NULL, NULL, '2018-04-16', 'estou tesntando', NULL),
(394, 'teste', NULL, NULL, NULL, '2018-04-16', 'estou tesntando', NULL),
(395, 'teste', NULL, NULL, NULL, '2018-04-16', 'estou tesntando', NULL),
(396, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(397, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(398, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(399, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(400, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(401, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(402, 'teste', NULL, NULL, NULL, '2018-04-17', 'estou tesntando', NULL),
(403, 'teste', NULL, NULL, NULL, '2018-04-18', 'estou tesntando', NULL),
(404, 'teste', NULL, NULL, NULL, '2018-04-18', 'estou tesntando', NULL),
(405, 'teste', NULL, NULL, NULL, '2018-04-19', 'estou tesntando', NULL),
(406, 'teste', NULL, NULL, NULL, '2018-04-19', 'estou tesntando', NULL),
(407, 'teste', NULL, NULL, NULL, '2018-04-19', 'estou tesntando', NULL),
(408, 'teste', NULL, NULL, NULL, '2018-04-20', 'estou tesntando', NULL),
(409, 'teste', NULL, NULL, NULL, '2018-04-20', 'estou tesntando', NULL),
(410, 'teste', NULL, NULL, NULL, '2018-04-21', 'estou tesntando', NULL),
(411, 'teste', NULL, NULL, NULL, '2018-04-21', 'estou tesntando', NULL),
(412, 'teste', NULL, NULL, NULL, '2018-04-21', 'estou tesntando', NULL),
(413, 'teste', NULL, NULL, NULL, '2018-04-22', 'estou tesntando', NULL),
(414, 'teste', NULL, NULL, NULL, '2018-04-22', 'estou tesntando', NULL),
(415, 'teste', NULL, NULL, NULL, '2018-04-22', 'estou tesntando', NULL),
(416, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(417, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(418, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(419, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(420, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(421, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(422, 'teste', NULL, NULL, NULL, '2018-04-23', 'estou tesntando', NULL),
(423, 'teste', NULL, NULL, NULL, '2018-04-24', 'estou tesntando', NULL),
(424, 'teste', NULL, NULL, NULL, '2018-04-25', 'estou tesntando', NULL),
(425, 'teste', NULL, NULL, NULL, '2018-04-25', 'estou tesntando', NULL),
(426, 'teste', NULL, NULL, NULL, '2018-04-27', 'estou tesntando', NULL),
(427, 'teste', NULL, NULL, NULL, '2018-04-27', 'estou tesntando', NULL),
(428, 'teste', NULL, NULL, NULL, '2018-04-28', 'estou tesntando', NULL),
(429, 'teste', NULL, NULL, NULL, '2018-04-28', 'estou tesntando', NULL),
(430, 'teste', NULL, NULL, NULL, '2018-04-28', 'estou tesntando', NULL),
(431, 'teste', NULL, NULL, NULL, '2018-04-28', 'estou tesntando', NULL),
(432, 'teste', NULL, NULL, NULL, '2018-04-29', 'estou tesntando', NULL),
(433, 'teste', NULL, NULL, NULL, '2018-04-30', 'estou tesntando', NULL),
(434, 'teste', NULL, NULL, NULL, '2018-04-30', 'estou tesntando', NULL),
(435, 'teste', NULL, NULL, NULL, '2018-04-30', 'estou tesntando', NULL),
(436, 'teste', NULL, NULL, NULL, '2018-05-01', 'estou tesntando', NULL),
(437, 'teste', NULL, NULL, NULL, '2018-05-01', 'estou tesntando', NULL),
(438, 'teste', NULL, NULL, NULL, '2018-05-02', 'estou tesntando', NULL),
(439, 'teste', NULL, NULL, NULL, '2018-05-02', 'estou tesntando', NULL),
(440, 'teste', NULL, NULL, NULL, '2018-05-02', 'estou tesntando', NULL),
(441, 'teste', NULL, NULL, NULL, '2018-05-03', 'estou tesntando', NULL),
(442, 'teste', NULL, NULL, NULL, '2018-05-04', 'estou tesntando', NULL),
(443, 'teste', NULL, NULL, NULL, '2018-05-04', 'estou tesntando', NULL),
(444, 'teste', NULL, NULL, NULL, '2018-05-04', 'estou tesntando', NULL),
(445, 'teste', NULL, NULL, NULL, '2018-05-04', 'estou tesntando', NULL),
(446, 'teste', NULL, NULL, NULL, '2018-05-04', 'estou tesntando', NULL),
(447, 'teste', NULL, NULL, NULL, '2018-05-05', 'estou tesntando', NULL),
(448, 'teste', NULL, NULL, NULL, '2018-05-05', 'estou tesntando', NULL),
(449, 'teste', NULL, NULL, NULL, '2018-05-05', 'estou tesntando', NULL),
(450, 'teste', NULL, NULL, NULL, '2018-05-05', 'estou tesntando', NULL),
(451, 'teste', NULL, NULL, NULL, '2018-05-06', 'estou tesntando', NULL),
(452, 'teste', NULL, NULL, NULL, '2018-05-06', 'estou tesntando', NULL),
(453, 'teste', NULL, NULL, NULL, '2018-05-06', 'estou tesntando', NULL),
(454, 'teste', NULL, NULL, NULL, '2018-05-06', 'estou tesntando', NULL),
(455, 'teste', NULL, NULL, NULL, '2018-05-07', 'estou tesntando', NULL),
(456, 'teste', NULL, NULL, NULL, '2018-05-07', 'estou tesntando', NULL),
(457, 'teste', NULL, NULL, NULL, '2018-05-07', 'estou tesntando', NULL),
(458, 'teste', NULL, NULL, NULL, '2018-05-07', 'estou tesntando', NULL),
(459, 'teste', NULL, NULL, NULL, '2018-05-07', 'estou tesntando', NULL),
(460, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(461, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(462, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(463, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(464, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(465, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(466, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(467, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(468, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(469, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(470, 'teste', NULL, NULL, NULL, '2018-05-08', 'estou tesntando', NULL),
(471, 'teste', NULL, NULL, NULL, '2018-05-09', 'estou tesntando', NULL),
(472, 'teste', NULL, NULL, NULL, '2018-05-09', 'estou tesntando', NULL),
(473, 'teste', NULL, NULL, NULL, '2018-05-09', 'estou tesntando', NULL),
(474, 'teste', NULL, NULL, NULL, '2018-05-09', 'estou tesntando', NULL),
(475, 'teste', NULL, NULL, NULL, '2018-05-09', 'estou tesntando', NULL),
(476, 'teste', NULL, NULL, NULL, '2018-05-11', 'estou tesntando', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(255) NOT NULL,
  `url_categoria` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `nome_categoria`, `url_categoria`) VALUES
(1, 'Apartamento', 'apartamento'),
(2, 'Kit', 'kit'),
(3, 'Loja', 'loja'),
(4, 'Sala', 'sala');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `cod` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cod_estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`cod`, `nome`, `cod_estado`) VALUES
(1, 'Águas Claras', 1),
(2, 'Asa Norte', 1),
(3, 'Asa Sul', 1),
(4, 'SIG', 1),
(5, 'Sudoeste', 1),
(6, 'Taguatinga', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `cod` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`cod`, `nome`) VALUES
(1, 'Distrito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `cod` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `post_cod` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`cod`, `imagem`, `post_cod`) VALUES
(1, '2f27b9084f69061908d3688952dfe7760.JPG', 1),
(2, '2f27b9084f69061908d3688952dfe7761.JPG', 1),
(3, '356748fd2234bb2eb794de17660103c10.JPG', 1),
(4, '906b82f14ffc9df322bad84cf53290570.JPG', 1),
(5, '00b0a3fc392f5b2f8357c489fb29ecf80.JPG', 1),
(214, '9362e3181a35e190dc82a8d1b4841dee2.jpeg', 3),
(213, '9362e3181a35e190dc82a8d1b4841dee1.jpeg', 3),
(9, 'fad405d234b8dd994a670b5873a68d5d0.jpg', 2),
(212, '9362e3181a35e190dc82a8d1b4841dee0.jpeg', 3),
(13, '183f294f0e501722542574fd22950dfb0.JPG', 4),
(14, '67304a4c0fd3b034fb1bc38c656edbee0.JPG', 4),
(15, '67304a4c0fd3b034fb1bc38c656edbee1.JPG', 4),
(16, '3df94fcb936e6da0b39bfb1d287088e00.jpg', 5),
(17, '3df94fcb936e6da0b39bfb1d287088e01.jpg', 5),
(18, '3df94fcb936e6da0b39bfb1d287088e02.jpg', 5),
(20, '9c318d3a1791534574d2339536bfb9980.jpg', 5),
(21, '9c318d3a1791534574d2339536bfb9981.jpg', 5),
(22, '9c318d3a1791534574d2339536bfb9982.jpg', 5),
(23, '9c318d3a1791534574d2339536bfb9983.jpg', 5),
(24, '9c318d3a1791534574d2339536bfb9984.jpg', 5),
(25, '7ab7dd23189a75c0933dde7e4189955b0.jpg', 2),
(26, '7ab7dd23189a75c0933dde7e4189955b1.jpg', 2),
(27, '7ab7dd23189a75c0933dde7e4189955b2.jpg', 2),
(28, '1790fe541a4c77d82aca975cd7b563cb0.jpg', 1),
(29, '1790fe541a4c77d82aca975cd7b563cb1.jpg', 1),
(30, '1790fe541a4c77d82aca975cd7b563cb2.jpg', 1),
(31, '1790fe541a4c77d82aca975cd7b563cb3.jpg', 1),
(32, '1790fe541a4c77d82aca975cd7b563cb4.jpg', 1),
(33, '1790fe541a4c77d82aca975cd7b563cb5.jpg', 1),
(34, '1790fe541a4c77d82aca975cd7b563cb6.jpg', 1),
(35, '1790fe541a4c77d82aca975cd7b563cb7.jpg', 1),
(36, '1790fe541a4c77d82aca975cd7b563cb8.jpg', 1),
(37, '1790fe541a4c77d82aca975cd7b563cb9.jpg', 1),
(38, '1790fe541a4c77d82aca975cd7b563cb10.jpg', 1),
(39, '1790fe541a4c77d82aca975cd7b563cb11.jpg', 1),
(40, '1790fe541a4c77d82aca975cd7b563cb12.jpg', 1),
(41, '1790fe541a4c77d82aca975cd7b563cb13.jpg', 1),
(42, '1790fe541a4c77d82aca975cd7b563cb14.jpg', 1),
(43, '1790fe541a4c77d82aca975cd7b563cb15.jpg', 1),
(44, '113c2f7feddba059ea4ea9e138a68fe90.jpg', 6),
(45, '113c2f7feddba059ea4ea9e138a68fe91.jpg', 6),
(46, '113c2f7feddba059ea4ea9e138a68fe92.jpg', 6),
(47, '113c2f7feddba059ea4ea9e138a68fe93.jpg', 6),
(48, '113c2f7feddba059ea4ea9e138a68fe94.jpg', 6),
(49, '113c2f7feddba059ea4ea9e138a68fe95.jpg', 6),
(151, '6ce461f41ef301c4d8cfaedd6e7ef17a2.jpg', 7),
(149, '6ce461f41ef301c4d8cfaedd6e7ef17a0.jpg', 7),
(150, '6ce461f41ef301c4d8cfaedd6e7ef17a1.jpg', 7),
(148, '90190fa6324a97d15835c7e047e2531e8.jpg', 7),
(146, '90190fa6324a97d15835c7e047e2531e6.jpg', 7),
(147, '90190fa6324a97d15835c7e047e2531e7.jpg', 7),
(145, '90190fa6324a97d15835c7e047e2531e5.jpg', 7),
(140, '90190fa6324a97d15835c7e047e2531e0.jpg', 7),
(141, '90190fa6324a97d15835c7e047e2531e1.jpg', 7),
(142, '90190fa6324a97d15835c7e047e2531e2.jpg', 7),
(143, '90190fa6324a97d15835c7e047e2531e3.jpg', 7),
(144, '90190fa6324a97d15835c7e047e2531e4.jpg', 7),
(225, '9cdd9d54909c269d6f37f63d4391506c3.jpg', 9),
(226, '9cdd9d54909c269d6f37f63d4391506c4.jpg', 9),
(215, '9362e3181a35e190dc82a8d1b4841dee3.jpeg', 3),
(211, 'ecf398a70fe6ac3d72b1dce5750e787d7.jpg', 8),
(210, 'ecf398a70fe6ac3d72b1dce5750e787d6.jpg', 8),
(208, 'ecf398a70fe6ac3d72b1dce5750e787d4.jpg', 8),
(209, 'ecf398a70fe6ac3d72b1dce5750e787d5.jpg', 8),
(204, 'ecf398a70fe6ac3d72b1dce5750e787d0.jpg', 8),
(205, 'ecf398a70fe6ac3d72b1dce5750e787d1.jpg', 8),
(206, 'ecf398a70fe6ac3d72b1dce5750e787d2.jpg', 8),
(207, 'ecf398a70fe6ac3d72b1dce5750e787d3.jpg', 8),
(93, 'c7a4a3d3885e9e3f988a9776cb61d39d0.jpg', 10),
(94, '28323e89b821eb3ebc60c00a340923740.jpg', 10),
(95, '28323e89b821eb3ebc60c00a340923741.jpg', 10),
(96, '28323e89b821eb3ebc60c00a340923742.jpg', 10),
(97, '28323e89b821eb3ebc60c00a340923743.jpg', 10),
(98, '28323e89b821eb3ebc60c00a340923744.jpg', 10),
(99, '28323e89b821eb3ebc60c00a340923745.jpg', 10),
(100, '28323e89b821eb3ebc60c00a340923746.jpg', 10),
(101, '28323e89b821eb3ebc60c00a340923747.jpg', 10),
(102, '28323e89b821eb3ebc60c00a340923748.jpg', 10),
(103, '28323e89b821eb3ebc60c00a340923749.jpg', 10),
(104, '34aea48c61a6c12b7df30ee988dca5530.jpg', 12),
(105, 'b1d1d1472cab62b7ee665c7386e86e940.jpg', 13),
(106, 'e159cfe97045b9fa806a6c78c70512680.jpg', 14),
(107, '0dc1205879d352790ad71a37f6a137250.jpg', 15),
(108, 'c2fbef186593c33a1be202b496d348470.jpg', 16),
(109, '07fbeb63e66ae856fd8d0a9b201bbc190.jpg', 17),
(110, '239139fb73c9fbab6cdd76e8fcc1661a0.jpg', 18),
(111, '9497aa906dc1ac882a2ffe34e59f7a250.jpg', 19),
(112, 'dd33a3b60a759648b00c57a3772655c00.jpg', 20),
(113, '73dfb7f4be5591de14dac6a89da7c0950.jpg', 21),
(114, 'df06d1b17921fbefc1a8df167d5982e30.jpg', 22),
(115, '61dabc4285e0e3469be53f6f876152750.jpg', 23),
(116, 'c0a80b63a2c16c05f23d58611c60639d0.jpg', 24),
(117, '4c3b63dd891f91e59cf76bd627064eb70.jpg', 11),
(118, '731c1a5e07a4a67c33d5f8b8d0397a3c0.jpg', 26),
(119, '6d7c312f5de0effe55577b6bb2e9eea40.JPG', 21),
(120, '7484cd550be49e6e4f65e2efd0a969fc0.JPG', 21),
(121, '2dc046f8d9ffd099c20d364252fb53820.JPG', 21),
(122, '418158387aaeb020842fe95423c42cb60.jpg', 21),
(123, '418158387aaeb020842fe95423c42cb61.jpg', 21),
(124, '418158387aaeb020842fe95423c42cb62.jpg', 21),
(125, 'dd59f304a3a753ae33581e4d1e5232cd0.jpg', 22),
(126, 'dd59f304a3a753ae33581e4d1e5232cd1.jpg', 22),
(127, 'dd59f304a3a753ae33581e4d1e5232cd2.jpg', 22),
(128, 'dd59f304a3a753ae33581e4d1e5232cd3.jpg', 22),
(129, 'dd59f304a3a753ae33581e4d1e5232cd4.jpg', 22),
(130, 'dd59f304a3a753ae33581e4d1e5232cd5.jpg', 22),
(131, 'dd59f304a3a753ae33581e4d1e5232cd6.jpg', 22),
(132, 'dd59f304a3a753ae33581e4d1e5232cd7.jpg', 22),
(133, 'dd59f304a3a753ae33581e4d1e5232cd8.jpg', 22),
(134, 'dd59f304a3a753ae33581e4d1e5232cd9.jpg', 22),
(135, '0f1efa5b00a79919226e5439b6b00cb90.jpg', 24),
(136, '0f1efa5b00a79919226e5439b6b00cb91.jpg', 24),
(137, '0f1efa5b00a79919226e5439b6b00cb92.jpg', 24),
(138, '0f1efa5b00a79919226e5439b6b00cb93.jpg', 24),
(139, '0f1efa5b00a79919226e5439b6b00cb94.jpg', 24),
(152, 'd4843d5b88e5b0797b3828a8330d58360.jpg', 11),
(153, 'd4843d5b88e5b0797b3828a8330d58361.jpg', 11),
(154, 'd4843d5b88e5b0797b3828a8330d58362.jpg', 11),
(155, 'd4843d5b88e5b0797b3828a8330d58363.jpg', 11),
(156, 'd4843d5b88e5b0797b3828a8330d58364.jpg', 11),
(157, 'ff0ecc58a4d038fb2a46b82cf7f0fe9e0.jpg', 11),
(158, 'adebe3b8c6660054bd8dadf51449a8510.jpg', 26),
(159, 'adebe3b8c6660054bd8dadf51449a8511.jpg', 26),
(160, 'adebe3b8c6660054bd8dadf51449a8512.jpg', 26),
(161, 'adebe3b8c6660054bd8dadf51449a8513.jpg', 26),
(162, 'adebe3b8c6660054bd8dadf51449a8514.jpg', 26),
(163, 'adebe3b8c6660054bd8dadf51449a8515.jpg', 26),
(164, 'da2d423efcafdbad282bdacc789a43800.jpg', 25),
(165, 'da2d423efcafdbad282bdacc789a43801.jpg', 25),
(166, 'da2d423efcafdbad282bdacc789a43802.jpg', 25),
(167, '508aff6c23d92d16c9fd9c948ddf0e870.jpg', 23),
(168, '508aff6c23d92d16c9fd9c948ddf0e871.jpg', 23),
(169, '37bf0fe3c0e26266f48c803fd2c471430.jpg', 23),
(170, 'bc08cd9ba400e5b2fe25ceacd2f82ab50.jpg', 20),
(171, 'bc08cd9ba400e5b2fe25ceacd2f82ab51.jpg', 20),
(172, 'bc08cd9ba400e5b2fe25ceacd2f82ab52.jpg', 20),
(173, 'bc08cd9ba400e5b2fe25ceacd2f82ab53.jpg', 20),
(174, '2a4b0de43515e6a7ee45d84b8304b8920.jpg', 19),
(175, '2a4b0de43515e6a7ee45d84b8304b8921.jpg', 19),
(176, '2a4b0de43515e6a7ee45d84b8304b8922.jpg', 19),
(177, '18bd51e1b264a76213b6a4041fb2143c0.jpg', 18),
(178, '18bd51e1b264a76213b6a4041fb2143c1.jpg', 18),
(179, '18bd51e1b264a76213b6a4041fb2143c2.jpg', 18),
(180, '18bd51e1b264a76213b6a4041fb2143c3.jpg', 18),
(181, '18bd51e1b264a76213b6a4041fb2143c4.jpg', 18),
(182, '18bd51e1b264a76213b6a4041fb2143c5.jpg', 18),
(183, '18bd51e1b264a76213b6a4041fb2143c6.jpg', 18),
(184, '8b4ba6c0cf978d203f81c7d1a92ead170.jpg', 17),
(185, '8b4ba6c0cf978d203f81c7d1a92ead171.jpg', 17),
(186, '8b4ba6c0cf978d203f81c7d1a92ead172.jpg', 17),
(187, '8b4ba6c0cf978d203f81c7d1a92ead173.jpg', 17),
(188, '8b4ba6c0cf978d203f81c7d1a92ead174.jpg', 17),
(189, '80d770ed558a207d71e7a4048ddb4def0.jpg', 16),
(190, '80d770ed558a207d71e7a4048ddb4def1.jpg', 16),
(191, '80d770ed558a207d71e7a4048ddb4def2.jpg', 16),
(192, '0def3fabdb2996b0397414ca38d9e72f0.jpg', 15),
(193, '0def3fabdb2996b0397414ca38d9e72f1.jpg', 15),
(194, '0def3fabdb2996b0397414ca38d9e72f2.jpg', 15),
(195, '0def3fabdb2996b0397414ca38d9e72f3.jpg', 15),
(224, '9cdd9d54909c269d6f37f63d4391506c2.jpg', 9),
(222, '9cdd9d54909c269d6f37f63d4391506c0.jpg', 9),
(223, '9cdd9d54909c269d6f37f63d4391506c1.jpg', 9),
(227, '9cdd9d54909c269d6f37f63d4391506c5.jpg', 9),
(228, '4c6a14f1f31750f4b5f81b6e863dcf9b0.jpg', 28),
(229, '4c6a14f1f31750f4b5f81b6e863dcf9b1.jpg', 28),
(230, '4c6a14f1f31750f4b5f81b6e863dcf9b2.jpg', 28),
(231, '4c6a14f1f31750f4b5f81b6e863dcf9b3.jpg', 28),
(232, '4c6a14f1f31750f4b5f81b6e863dcf9b4.jpg', 28),
(233, '4c6a14f1f31750f4b5f81b6e863dcf9b5.jpg', 28),
(234, '4c6a14f1f31750f4b5f81b6e863dcf9b6.jpg', 28),
(235, '4c6a14f1f31750f4b5f81b6e863dcf9b7.jpg', 28),
(236, '4c6a14f1f31750f4b5f81b6e863dcf9b8.jpg', 28),
(237, '3eb26c0b67d72c484958c29e0aa831e00.JPG', 29),
(238, '3eb26c0b67d72c484958c29e0aa831e01.JPG', 29),
(239, '3eb26c0b67d72c484958c29e0aa831e02.JPG', 29),
(240, '3eb26c0b67d72c484958c29e0aa831e03.JPG', 29),
(241, '3eb26c0b67d72c484958c29e0aa831e04.JPG', 29),
(289, 'c0e99c0a9bc18a76ffd3516e2512240d3.png', 30),
(288, 'c0e99c0a9bc18a76ffd3516e2512240d2.png', 30),
(287, 'c0e99c0a9bc18a76ffd3516e2512240d1.png', 30),
(286, 'c0e99c0a9bc18a76ffd3516e2512240d0.png', 30),
(560, 'd1cefd4dcaece7253aecd10bb74b91ee6.png', 31),
(559, 'd1cefd4dcaece7253aecd10bb74b91ee5.png', 31),
(558, 'd1cefd4dcaece7253aecd10bb74b91ee4.png', 31),
(557, 'd1cefd4dcaece7253aecd10bb74b91ee3.png', 31),
(556, 'd1cefd4dcaece7253aecd10bb74b91ee2.png', 31),
(555, 'd1cefd4dcaece7253aecd10bb74b91ee1.png', 31),
(554, 'd1cefd4dcaece7253aecd10bb74b91ee0.png', 31),
(253, 'af1301a14eb3b60917bcfc8695b486540.JPG', 32),
(254, 'af1301a14eb3b60917bcfc8695b486541.JPG', 32),
(255, 'af1301a14eb3b60917bcfc8695b486542.JPG', 32),
(256, 'af1301a14eb3b60917bcfc8695b486543.JPG', 32),
(257, 'af1301a14eb3b60917bcfc8695b486544.JPG', 32),
(258, 'af1301a14eb3b60917bcfc8695b486545.JPG', 32),
(259, 'af1301a14eb3b60917bcfc8695b486546.JPG', 32),
(260, 'af1301a14eb3b60917bcfc8695b486547.JPG', 32),
(261, 'af1301a14eb3b60917bcfc8695b486548.JPG', 32),
(262, 'af1301a14eb3b60917bcfc8695b486549.JPG', 32),
(263, 'fac0827081a4e11ae667a142b48cdad70.JPG', 33),
(264, 'fac0827081a4e11ae667a142b48cdad71.JPG', 33),
(265, 'fac0827081a4e11ae667a142b48cdad72.JPG', 33),
(266, 'eb78671399199514eb6b0d09aca728860.png', 34),
(267, 'eb78671399199514eb6b0d09aca728861.jpg', 34),
(268, 'eb78671399199514eb6b0d09aca728862.jpg', 34),
(269, 'eb78671399199514eb6b0d09aca728863.jpg', 34),
(270, 'eb78671399199514eb6b0d09aca728864.jpg', 34),
(271, 'eb78671399199514eb6b0d09aca728865.png', 34),
(272, 'eb78671399199514eb6b0d09aca728866.png', 34),
(273, 'eb78671399199514eb6b0d09aca728867.png', 34),
(274, 'af464c2351d87e96b5cab9e7b5f599140.png', 35),
(275, 'af464c2351d87e96b5cab9e7b5f599141.png', 35),
(276, 'af464c2351d87e96b5cab9e7b5f599142.png', 35),
(277, 'af464c2351d87e96b5cab9e7b5f599143.png', 35),
(278, 'af464c2351d87e96b5cab9e7b5f599144.png', 35),
(279, '951808dab8d027f2db96d167c45674bb0.png', 36),
(280, '951808dab8d027f2db96d167c45674bb1.png', 36),
(281, '951808dab8d027f2db96d167c45674bb2.png', 36),
(282, '817d35f921d7300861dcf73d2d17994c0.png', 37),
(283, '817d35f921d7300861dcf73d2d17994c1.png', 37),
(284, '817d35f921d7300861dcf73d2d17994c2.png', 37),
(285, '817d35f921d7300861dcf73d2d17994c3.png', 37),
(290, 'c0e99c0a9bc18a76ffd3516e2512240d4.png', 30),
(291, 'c0e99c0a9bc18a76ffd3516e2512240d5.png', 30),
(292, 'c0e99c0a9bc18a76ffd3516e2512240d6.png', 30),
(293, 'c0e99c0a9bc18a76ffd3516e2512240d7.png', 30),
(294, 'c0e99c0a9bc18a76ffd3516e2512240d8.png', 30),
(295, 'c0e99c0a9bc18a76ffd3516e2512240d9.png', 30),
(296, 'c0e99c0a9bc18a76ffd3516e2512240d10.png', 30),
(297, 'c0e99c0a9bc18a76ffd3516e2512240d11.png', 30),
(298, '19713c26ade6ed00cb05d644e3ac1ec80.png', 38),
(299, 'feeb4083acf7c53d5ebb634deb5c10580.JPG', 38),
(300, '0f72b59032263d43c2e74e6180b9a7ad0.JPG', 38),
(301, 'a397d9c8dfdfaa2f89400eb54eff882b0.JPG', 38),
(302, '8397b6bd7da79905d5e97d9a8eeea9930.JPG', 38),
(303, '668121529b47c12f3e649acd06f9fcce0.JPG', 38),
(304, 'be6485e19fd11713f7407559f50da3ce0.JPG', 38),
(305, '61f57b476e38ffc3500e75bc499c54610.JPG', 38),
(306, '61f57b476e38ffc3500e75bc499c54611.JPG', 38),
(307, '61f57b476e38ffc3500e75bc499c54612.JPG', 38),
(308, '61f57b476e38ffc3500e75bc499c54613.JPG', 38),
(309, '37d9a677899899a301b385dae956f5790.JPG', 38),
(310, '0b6ae0472a254e50d8dd2c41c8be95cc0.jpg', 39),
(311, '0b6ae0472a254e50d8dd2c41c8be95cc1.jpg', 39),
(312, '0b6ae0472a254e50d8dd2c41c8be95cc2.jpg', 39),
(313, '0b6ae0472a254e50d8dd2c41c8be95cc3.jpg', 39),
(314, '0b6ae0472a254e50d8dd2c41c8be95cc4.jpg', 39),
(315, '0b6ae0472a254e50d8dd2c41c8be95cc5.jpg', 39),
(316, '0b6ae0472a254e50d8dd2c41c8be95cc6.jpg', 39),
(317, '0b6ae0472a254e50d8dd2c41c8be95cc7.jpg', 39),
(332, 'c7c9537ad84b9df33e6e88dabc4f62c40.png', 40),
(333, 'c7c9537ad84b9df33e6e88dabc4f62c41.png', 40),
(334, 'c7c9537ad84b9df33e6e88dabc4f62c42.png', 40),
(565, 'bfd3f8a518eeab1e9190da02f1015ff03.png', 42),
(564, 'bfd3f8a518eeab1e9190da02f1015ff02.png', 42),
(563, 'bfd3f8a518eeab1e9190da02f1015ff01.png', 42),
(562, 'bfd3f8a518eeab1e9190da02f1015ff00.png', 42),
(586, 'e929dfaa8a6a9d7e39a3b27f9c6118318.png', 51),
(568, '086053bd561c927c5bf8d417fc29318f2.png', 43),
(567, '086053bd561c927c5bf8d417fc29318f1.png', 43),
(566, '086053bd561c927c5bf8d417fc29318f0.png', 43),
(561, 'd1cefd4dcaece7253aecd10bb74b91ee7.png', 31),
(553, 'a5c5229f131db2ba73eba28842d03ffb1.jpeg', 41),
(552, 'a5c5229f131db2ba73eba28842d03ffb0.jpeg', 41),
(551, 'bb5274c4823728b30f55ee9571810e3c0.jpeg', 44),
(550, '8c3ed3e680890643a4438008947c5c340.png', 44),
(357, 'fb0f17dcb7f857bea803704b79d5382d0.PNG', 45),
(358, 'fb0f17dcb7f857bea803704b79d5382d1.png', 45),
(359, 'fb0f17dcb7f857bea803704b79d5382d2.png', 45),
(360, 'fb0f17dcb7f857bea803704b79d5382d3.png', 45),
(361, 'fb0f17dcb7f857bea803704b79d5382d4.png', 45),
(362, 'fb0f17dcb7f857bea803704b79d5382d5.png', 45),
(363, 'fb0f17dcb7f857bea803704b79d5382d6.png', 45),
(364, 'fb0f17dcb7f857bea803704b79d5382d7.png', 45),
(668, '25de311d8e4847ac37bbb689d7b08c194.png', 46),
(667, '25de311d8e4847ac37bbb689d7b08c193.png', 46),
(666, '25de311d8e4847ac37bbb689d7b08c192.png', 46),
(665, '25de311d8e4847ac37bbb689d7b08c191.png', 46),
(664, '25de311d8e4847ac37bbb689d7b08c190.png', 46),
(674, '80a63b91efc2a626afd2280ff47608c60.png', 58),
(673, 'dec0b28d999528d347a5874f7ea2dd4d4.png', 47),
(672, 'dec0b28d999528d347a5874f7ea2dd4d3.png', 47),
(671, 'dec0b28d999528d347a5874f7ea2dd4d2.png', 47),
(670, 'dec0b28d999528d347a5874f7ea2dd4d1.png', 47),
(669, 'dec0b28d999528d347a5874f7ea2dd4d0.png', 47),
(378, '779e4ac9febdc2efd760b1f485a608650.png', 48),
(379, '779e4ac9febdc2efd760b1f485a608651.png', 48),
(380, '779e4ac9febdc2efd760b1f485a608652.png', 48),
(381, '779e4ac9febdc2efd760b1f485a608653.png', 48),
(382, '779e4ac9febdc2efd760b1f485a608654.png', 48),
(383, '779e4ac9febdc2efd760b1f485a608655.png', 48),
(384, '779e4ac9febdc2efd760b1f485a608656.png', 48),
(549, 'd8355e1371850dff85396b1d47b2344512.jpg', 49),
(548, 'd8355e1371850dff85396b1d47b2344511.jpg', 49),
(547, 'd8355e1371850dff85396b1d47b2344510.jpg', 49),
(546, 'd8355e1371850dff85396b1d47b234459.jpg', 49),
(545, 'd8355e1371850dff85396b1d47b234458.jpg', 49),
(544, 'd8355e1371850dff85396b1d47b234457.jpg', 49),
(543, 'd8355e1371850dff85396b1d47b234456.jpg', 49),
(542, 'd8355e1371850dff85396b1d47b234455.jpg', 49),
(541, 'd8355e1371850dff85396b1d47b234454.jpg', 49),
(540, 'd8355e1371850dff85396b1d47b234453.jpg', 49),
(539, 'd8355e1371850dff85396b1d47b234452.jpg', 49),
(538, 'd8355e1371850dff85396b1d47b234451.jpg', 49),
(537, 'd8355e1371850dff85396b1d47b234450.jpg', 49),
(577, '651e8ac548d5a167db9411abcc342ce28.png', 50),
(576, '651e8ac548d5a167db9411abcc342ce27.png', 50),
(575, '651e8ac548d5a167db9411abcc342ce26.png', 50),
(574, '651e8ac548d5a167db9411abcc342ce25.png', 50),
(573, '651e8ac548d5a167db9411abcc342ce24.png', 50),
(572, '651e8ac548d5a167db9411abcc342ce23.png', 50),
(571, '651e8ac548d5a167db9411abcc342ce22.png', 50),
(570, '651e8ac548d5a167db9411abcc342ce21.png', 50),
(569, '651e8ac548d5a167db9411abcc342ce20.png', 50),
(585, 'e929dfaa8a6a9d7e39a3b27f9c6118317.png', 51),
(584, 'e929dfaa8a6a9d7e39a3b27f9c6118316.png', 51),
(583, 'e929dfaa8a6a9d7e39a3b27f9c6118315.png', 51),
(582, 'e929dfaa8a6a9d7e39a3b27f9c6118314.png', 51),
(581, 'e929dfaa8a6a9d7e39a3b27f9c6118313.png', 51),
(580, 'e929dfaa8a6a9d7e39a3b27f9c6118312.png', 51),
(579, 'e929dfaa8a6a9d7e39a3b27f9c6118311.png', 51),
(578, 'e929dfaa8a6a9d7e39a3b27f9c6118310.png', 51),
(591, 'd275cedcc0dbc7973ef737d257d46b1a4.png', 52),
(590, 'd275cedcc0dbc7973ef737d257d46b1a3.png', 52),
(589, 'd275cedcc0dbc7973ef737d257d46b1a2.png', 52),
(588, 'd275cedcc0dbc7973ef737d257d46b1a1.png', 52),
(587, 'd275cedcc0dbc7973ef737d257d46b1a0.png', 52),
(433, '3f53ac800808ed3c9ab4b4e1356e274d0.jpg', 53),
(434, '3f53ac800808ed3c9ab4b4e1356e274d1.jpg', 53),
(435, '3f53ac800808ed3c9ab4b4e1356e274d2.jpg', 53),
(436, '3f53ac800808ed3c9ab4b4e1356e274d3.jpg', 53),
(437, '3f53ac800808ed3c9ab4b4e1356e274d4.jpg', 53),
(438, '3f53ac800808ed3c9ab4b4e1356e274d5.jpg', 53),
(439, '3f53ac800808ed3c9ab4b4e1356e274d6.jpg', 53),
(600, '05381ff5609b376e722d92ce795c22788.png', 54),
(599, '05381ff5609b376e722d92ce795c22787.png', 54),
(598, '05381ff5609b376e722d92ce795c22786.png', 54),
(597, '05381ff5609b376e722d92ce795c22785.png', 54),
(596, '05381ff5609b376e722d92ce795c22784.png', 54),
(595, '05381ff5609b376e722d92ce795c22783.png', 54),
(594, '05381ff5609b376e722d92ce795c22782.png', 54),
(593, '05381ff5609b376e722d92ce795c22781.png', 54),
(592, '05381ff5609b376e722d92ce795c22780.png', 54),
(449, 'ce003ccf24615ff1da043d35861153850.png', 56),
(450, 'ce003ccf24615ff1da043d35861153851.png', 56),
(451, 'ce003ccf24615ff1da043d35861153852.png', 56),
(452, 'ce003ccf24615ff1da043d35861153853.png', 56),
(453, 'ce003ccf24615ff1da043d35861153854.png', 56),
(454, 'ce003ccf24615ff1da043d35861153855.png', 56),
(455, 'ce003ccf24615ff1da043d35861153856.png', 56),
(456, 'ce003ccf24615ff1da043d35861153857.png', 56),
(457, 'ce003ccf24615ff1da043d35861153858.png', 56),
(458, 'ce003ccf24615ff1da043d35861153859.png', 56),
(459, 'ce003ccf24615ff1da043d358611538510.png', 56),
(620, '0d1b8582eb58defb9edc6cc0961afee719.png', 57),
(619, '0d1b8582eb58defb9edc6cc0961afee718.png', 57),
(618, '0d1b8582eb58defb9edc6cc0961afee717.png', 57),
(617, '0d1b8582eb58defb9edc6cc0961afee716.png', 57),
(616, '0d1b8582eb58defb9edc6cc0961afee715.png', 57),
(615, '0d1b8582eb58defb9edc6cc0961afee714.png', 57),
(614, '0d1b8582eb58defb9edc6cc0961afee713.png', 57),
(613, '0d1b8582eb58defb9edc6cc0961afee712.png', 57),
(612, '0d1b8582eb58defb9edc6cc0961afee711.png', 57),
(611, '0d1b8582eb58defb9edc6cc0961afee710.png', 57),
(610, '0d1b8582eb58defb9edc6cc0961afee79.png', 57),
(609, '0d1b8582eb58defb9edc6cc0961afee78.png', 57),
(608, '0d1b8582eb58defb9edc6cc0961afee77.png', 57),
(607, '0d1b8582eb58defb9edc6cc0961afee76.png', 57),
(606, '0d1b8582eb58defb9edc6cc0961afee75.png', 57),
(605, '0d1b8582eb58defb9edc6cc0961afee74.png', 57),
(604, '0d1b8582eb58defb9edc6cc0961afee73.png', 57),
(603, '0d1b8582eb58defb9edc6cc0961afee72.png', 57),
(602, '0d1b8582eb58defb9edc6cc0961afee71.png', 57),
(601, '0d1b8582eb58defb9edc6cc0961afee70.png', 57),
(633, '715b4ae91585016ff92b6439304887f412.png', 58),
(632, '715b4ae91585016ff92b6439304887f411.png', 58),
(631, '715b4ae91585016ff92b6439304887f410.png', 58),
(630, '715b4ae91585016ff92b6439304887f49.png', 58),
(629, '715b4ae91585016ff92b6439304887f48.png', 58),
(628, '715b4ae91585016ff92b6439304887f47.png', 58),
(627, '715b4ae91585016ff92b6439304887f46.png', 58),
(626, '715b4ae91585016ff92b6439304887f45.png', 58),
(625, '715b4ae91585016ff92b6439304887f44.png', 58),
(624, '715b4ae91585016ff92b6439304887f43.png', 58),
(623, '715b4ae91585016ff92b6439304887f42.png', 58),
(622, '715b4ae91585016ff92b6439304887f41.png', 58),
(621, '715b4ae91585016ff92b6439304887f40.png', 58),
(642, '565e65c875ec12f65bb3aeb938b1d2ee8.png', 59),
(641, '565e65c875ec12f65bb3aeb938b1d2ee7.png', 59),
(640, '565e65c875ec12f65bb3aeb938b1d2ee6.png', 59),
(639, '565e65c875ec12f65bb3aeb938b1d2ee5.png', 59),
(638, '565e65c875ec12f65bb3aeb938b1d2ee4.png', 59),
(637, '565e65c875ec12f65bb3aeb938b1d2ee3.png', 59),
(636, '565e65c875ec12f65bb3aeb938b1d2ee2.png', 59),
(635, '565e65c875ec12f65bb3aeb938b1d2ee1.png', 59),
(634, '565e65c875ec12f65bb3aeb938b1d2ee0.png', 59),
(502, '0dceee40bb5a115e600d6952265bc8930.png', 60),
(503, '0dceee40bb5a115e600d6952265bc8931.png', 60),
(504, '0dceee40bb5a115e600d6952265bc8932.png', 60),
(505, '0dceee40bb5a115e600d6952265bc8933.png', 60),
(506, '0dceee40bb5a115e600d6952265bc8934.png', 60),
(507, '0dceee40bb5a115e600d6952265bc8935.png', 60),
(508, '0dceee40bb5a115e600d6952265bc8936.png', 60),
(509, '0dceee40bb5a115e600d6952265bc8937.png', 60),
(510, '0dceee40bb5a115e600d6952265bc8938.png', 60),
(511, '0dceee40bb5a115e600d6952265bc8939.png', 60),
(512, '0dceee40bb5a115e600d6952265bc89310.png', 60),
(513, '0dceee40bb5a115e600d6952265bc89311.png', 60),
(514, '0dceee40bb5a115e600d6952265bc89312.png', 60),
(515, '0dceee40bb5a115e600d6952265bc89313.png', 60),
(647, '488068c76685a3361b39bdb00eb61b184.png', 61),
(646, '488068c76685a3361b39bdb00eb61b183.png', 61),
(645, '488068c76685a3361b39bdb00eb61b182.png', 61),
(644, '488068c76685a3361b39bdb00eb61b181.png', 61),
(643, '488068c76685a3361b39bdb00eb61b180.png', 61),
(653, 'db3d21ca45cf0952f8260122fd938a165.png', 62),
(652, 'db3d21ca45cf0952f8260122fd938a164.png', 62),
(651, 'db3d21ca45cf0952f8260122fd938a163.png', 62),
(650, 'db3d21ca45cf0952f8260122fd938a162.png', 62),
(649, 'db3d21ca45cf0952f8260122fd938a161.png', 62),
(648, 'db3d21ca45cf0952f8260122fd938a160.png', 62),
(663, 'a1caaf645741182cb345a0db4975f0c69.png', 63),
(662, 'a1caaf645741182cb345a0db4975f0c68.png', 63),
(661, 'a1caaf645741182cb345a0db4975f0c67.png', 63),
(660, 'a1caaf645741182cb345a0db4975f0c66.png', 63),
(659, 'a1caaf645741182cb345a0db4975f0c65.png', 63),
(658, 'a1caaf645741182cb345a0db4975f0c64.png', 63),
(657, 'a1caaf645741182cb345a0db4975f0c63.png', 63),
(656, 'a1caaf645741182cb345a0db4975f0c62.png', 63),
(655, 'a1caaf645741182cb345a0db4975f0c61.png', 63),
(654, 'a1caaf645741182cb345a0db4975f0c60.png', 63);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `cod` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `descricao` text,
  `valor` decimal(10,0) DEFAULT NULL,
  `condominio` decimal(10,0) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `estado` varchar(150) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `quartos` varchar(35) DEFAULT NULL,
  `suite` varchar(10) DEFAULT NULL,
  `banheiro` varchar(10) DEFAULT NULL,
  `andar` varchar(10) DEFAULT NULL,
  `garagem` varchar(10) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `destaque` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `mapa` text,
  `agente` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`cod`, `titulo`, `url`, `descricao`, `valor`, `condominio`, `endereco`, `cidade`, `estado`, `categoria`, `quartos`, `suite`, `banheiro`, `andar`, `garagem`, `cep`, `thumb`, `destaque`, `area`, `mapa`, `agente`, `status`, `view`) VALUES
(42, 'SHIS QI 07', 'shis-qi-07', '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sala com 127m&sup2; na QI 07 Lago Sul. Reformada, ar condicionado, banheiros pronta para loca&ccedil;&atilde;o. &Oacute;tima sala em localiza&ccedil;&atilde;o privilegiada na QI 07 do Lago Sul, &oacute;timo ponto comercial e de excelente movimenta&ccedil;&atilde;o.&nbsp;\r\n', '8000', '2207', 'SHIS QI 07 ', 'Lago Sul', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '71645 970', 'images/2018/03/01-1521478096.png', 1, 127, NULL, 6, 2, 1),
(41, 'Centro Clínico Cléo Octávio ', 'centro-clinico-cleo-octavio', '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Salas com 30m&sup2;, banheiro, bia, vaga de garagem coberta e pronta para loca&ccedil;&atilde;o. Profissional de sa&uacute;de, voc&ecirc; n&atilde;o pode perder a oportunidade de montar sua cl&iacute;nica no mais moderno e belo edif&iacute;cio de Bras&iacute;lia. E o melhor de tudo, um espa&ccedil;o novinho com vantagens sem igual. Seu contrato de aluguel no Centro Cl&iacute;nico Cl&eacute;o Oct&aacute;vio j&aacute; tem inclu&iacute;do o condom&iacute;nio, o IPTU e uma vaga de garagem. Tudo num s&oacute; boleto e com um pre&ccedil;o excepcional. E tem mais: assist&ecirc;ncia t&eacute;cnica 24 horas (2 chamadas por m&ecirc;s) para os servi&ccedil;os de chaveiro, eletricista e bombeiro. Vantagens do empreendimento: Localiza&ccedil;&atilde;o privilegiada no Setor M&eacute;dico Hospitalar Norte, em frente ao HRAN a ao lado do Liberty Mall, 4 elevadores, sendo um deles para macas, portaria com catracas biom&eacute;tricas, projeto planejado para os profissionais de sa&uacute;de, primeira loca&ccedil;&atilde;o e pronto para instala&ccedil;&atilde;o de seu consult&oacute;rio.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;', '2164', NULL, 'SMHN QUADRA 2 BLOCO B', '2', 'Distrito Federal', 3, '0', '0', '1', '1', '0', ' 70710 146', 'images/2018/03/01-1521476424.png', 2, 30, NULL, 5, 1, 0),
(2, 'Sala de 162m² no Brasília Shopping', 'sala-de-162m²-no-brasilia-shopping', '                                                                                                                                                                                                                                                                        Ótima sala de 162m² localizada Brasília Shopping ótima localização no centro de Brasília um prédio exclusivo Toda a comodidade de um dos melhores shoppings de Brasília referencia em salas e escritórios total segurança 3 elevadores,   No Setor Comercial Norte estão presentes diversas edificações de uso comercial, com empresas e escritórios instalados em uma área nobre do Plano Piloto que oferece total infraestrutura com restaurantes, pizzarias, redes de fast-food, farmácias, estacionamentos públicos e vias de acesso de fácil locomoção, além de três shoppings como o Brasília Shopping. Ficando ao lado do Setor Hoteleiro Norte onde se localizam os Melhores hotéis de Brasília, O Setor Comercial Norte é localização para as maiores/melhores empresas e escritórios de Brasília.\r\n                                                                                                                                                                                                                                                ', '15000', '3174', 'Setor Comercial Norte - Brasília Shopping', '2', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/bsb-shopping.jpg', 1, 162, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.326495374123!2d-47.89119303526807!3d-15.786729176971829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3afbc56aa4e1%3A0x7136a082a49c01a!2sSetor+Comercial+Norte+Q+5+Bras%C3%AClia+shopping+-+Asa+Norte%2C+Bras%C3%ADlia+-+DF!5e0!3m2!1spt-BR!2sbr!4v1504714227309', 5, 2, 0),
(30, 'Residencial Antônio Carlos Pires', 'residencial-antonio-carlos-pires', '                                            Residencial Antônio Carlos Pires em Águas Claras, apartamento de 97m² com 3 quartos com armários sendo 1 suíte, ampla sala, cozinha com armários, DCE completa, área de lazer completa e vaga de garagem. Excelente localização próximo ao metrô, comercio local e das principais vias de acesso de Águas Claras.Já é possível vislumbrar Águas Claras completa, tornando-se uma das melhores cidades do Distrito Federal para se viver, oferecendo aos seus moradores um vasto ambiente de beleza com praças, parques, jardins, galerias comerciais, shoppings e outros.                                         ', '1800', '718', 'Residencial Antônio Carlos Pires', '1', 'Distrito Federal', 1, '3', '0', '1', '1', '0', '71908 720', 'images/2017/10/dsc02873-copy.png', 1, 97, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.408964621925!2d-48.018911135055326!3d-15.835088689025925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3213f624bcd9%3A0x32f7d59807e039aa!2sRes.+Antonio+Carlos+Pires+de+Ara%C3%BAjo+-+R.+das+Pitangueiras+-+%C3%81guas+Claras%2C+Bras%C3%ADlia+-+DF%2C+71908-720!5e0!3m2!1spt-BR!2sbr!4v1507919519127', 3, 1, 0),
(31, 'Loja no Península Lazer e Urbanismo ', 'loja-no-peninsula-lazer-e-urbanismo', 'Loja no Pen&iacute;nsula Lazer e Urbanismo. Loja com 86m&sup2; &oacute;tima loja em localiza&ccedil;&atilde;o privilegiada no Pist&atilde;o Sul de Taguatinga pr&oacute;xima aos principais pontos da cidade, pronta para loca&ccedil;&atilde;o a loja est&aacute; preparada para receber a infraestrutura de qualquer neg&oacute;cio.&nbsp; &nbsp;\r\n', '4900', '399', 'Pistão Sul de Taguatinga', '6', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '71936 250', 'images/2018/03/02.png', 1, 86, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7676.637204614892!2d-48.05192892511044!3d-15.83984355609194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3212271aeba1%3A0xd11f996c7c5d91d1!2sPen%C3%ADnsula+Lazer+e+Urbanismo!5e0!3m2!1spt-BR!2sbr!4v1507919583975', 1, 1, 0),
(4, 'SAUS Bloco G', 'saus-bloco-g', '&Aacute;rea corporativa com 1.332,35m&sup2; O im&oacute;vel encontra-se em perfeito estado de conserva&ccedil;&atilde;o, o que ser&aacute; comprovado por meio de vistoria assinada entre as partes. 44 vagas de garagem disponibilizadas na loca&ccedil;&atilde;o. Ar condicionado central em todos os pavimentos. 04 Elevadores que atendem todos os pavimentos e subsolos. Uma copa por pavimento com metragem adequada. &nbsp; Rede de combate a inc&ecirc;ndios atrav&eacute;s de chuveiros automatizados do tipo Sprinklers, rede de hidrantes com RTI, detectores de fuma&ccedil;a, mangueiras e extintores, todos de acordo com o laudo emitido pelo Corpo de Bombeiro. O im&oacute;vel contempla todas as necessidades para o suporte de tecnologia da informa&ccedil;&atilde;o, com salas de servidores em cada pavimento, al&eacute;m de automa&ccedil;&atilde;o predial (BMS) tendo monitora&ccedil;&atilde;o de rede el&eacute;trica, hidr&aacute;ulica, ar condicionado, elevadores, sistema moderno de detec&ccedil;&atilde;o de inc&ecirc;ndio, alarmes e sistema de CFTV digital nos pavimentos, garagens, portarias e &aacute;reas comuns, item importante para seguran&ccedil;a do edif&iacute;cio al&eacute;m do que o credencia na vanguarda de edif&iacute;cio inteligente, classificando na categoria.\r\n', '120000', '32000', 'SAUS', '3', 'Distrito Federal', 2, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/mg-5063.JPG', 2, 133235, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.0380507057225!2d-47.88355918526765!3d-15.801947527350265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b20966a0c75%3A0x1a7add0a150ffb3b!2sSetor+de+Autarquias+Sul+Q.+3+BL+O+-+Bras%C3%ADlia%2C+DF!5e0!3m2!1spt-BR!2sbr!4v1504714191382', 5, 1, 0),
(5, 'SBS Quadra 02', 'sbs-quadra-02', 'O im&oacute;vel &eacute; constitu&iacute;do por 04 andares de escrit&oacute;rio e 02 subsolos destinados a garagem e dep&oacute;sitos, uma &oacute;tima localiza&ccedil;&atilde;o no centro de Bras&iacute;lia pr&oacute;ximo a restaurantes, pontos de t&aacute;xi, metr&ocirc; e de f&aacute;cil acesso as principais vias de Bras&iacute;lia. O im&oacute;vel possui 66 vagas de garagem distribu&iacute;das entre dois subsolos. Banheiros comuns e PNE. 02 Elevadores interligando os andares e os subsolos. Forro modular instalado. Lumin&aacute;rias de alto rendimento instaladas. Dep&oacute;sitos situados no subsolo. Gerador de energia. F&aacute;cil acesso ao transporte p&uacute;blico com parada de &ocirc;nibus e proximidade a rodovi&aacute;ria de Bras&iacute;lia que possui esta&ccedil;&atilde;o metrovi&aacute;ria e &ocirc;nibus. O im&oacute;vel possui condi&ccedil;&otilde;es de acessibilidade previstas no C&oacute;digo de Edifica&ccedil;&otilde;es do Distrito Federal. O edif&iacute;cio atende as normas contra inc&ecirc;ndio e p&acirc;nico de acordo com que preceitua o Decreto Distrital n&deg; 21.361/2000. As instala&ccedil;&otilde;es hidro-sanit&aacute;rias est&atilde;o em concord&acirc;ncia com a legisla&ccedil;&atilde;o vigente. Os arredores do im&oacute;vel possuem vagas publicas. O ar condicionado atende a todos os pavimentos do im&oacute;vel. As janelas e vidros do im&oacute;vel possuem pel&iacute;culas para prote&ccedil;&atilde;o solar. &nbsp;\r\n', '260000', NULL, 'SBS Quadra 02', '3', 'Distrito Federal', 2, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/dsc06348-copy.jpg', 1, 133235, 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1919.5324025427597!2d-47.88313514195597!3d-15.80053656639733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sQUADRA+02+SBS!5e0!3m2!1spt-BR!2sbr!4v1504714128913', 6, 2, 0),
(6, 'SAUS Bloco I', 'saus-bloco-i', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#38;Aacute;rea corporativa com 2.231m&#38;sup2; O im&#38;oacute;vel encontra-se em perfeito estado de conserva&#38;ccedil;&#38;atilde;o, o que ser&#38;aacute; comprovado por meio de vistoria assinada entre as partes. 44 vagas de garagem disponibilizadas na loca&#38;ccedil;&#38;atilde;o. Ar condicionado central em todos os pavimentos. 04 Elevadores que atendem todos os pavimentos e subsolos. Uma copa por pavimento com metragem adequada. Rede de combate a inc&#38;ecirc;ndios atrav&#38;eacute;s de chuveiros automatizados do tipo Sprinklers, rede de hidrantes com RTI, detectores de fuma&#38;ccedil;a, mangueiras e extintores, todos de acordo com o laudo emitido pelo Corpo de Bombeiro. O im&#38;oacute;vel contempla todas as necessidades para o suporte de tecnologia da informa&#38;ccedil;&#38;atilde;o, com salas de servidores em cada pavimento, al&#38;eacute;m de automa&#38;ccedil;&#38;atilde;o predial (BMS) tendo monitora&#38;ccedil;&#38;atilde;o de rede el&#38;eacute;trica, hidr&#38;aacute;ulica, ar condicionado, elevadores, sistema moderno de detec&#38;ccedil;&#38;atilde;o de inc&#38;ecirc;ndio, alarmes e sistema de CFTV digital nos pavimentos, garagens, portarias e &#38;aacute;reas comuns, item importante para seguran&#38;ccedil;a do edif&#38;iacute;cio al&#38;eacute;m do que o credencia na vanguarda de edif&#38;iacute;cio inteligente, classificando na categoria.&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '120000', '32000', 'SAUS Bloco I', '3', 'Distrito Federal', 2, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/mg-5120.JPG', 1, 133235, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.7587585694779!2d-47.8817296493545!3d-15.802106598718954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b20966a0c75%3A0x1a7add0a150ffb3b!2sSetor+de+Autarquias+Sul+Q.+3+BL+O+-+Bras%C3%ADlia%2C+DF!5e0!3m2!1spt-BR!2sbr!4v1504713932150', 5, 1, 0),
(7, 'Apartamento Ilhas do Lago', 'apartamento-ilhas-do-lago', 'Apartamento de 04 quartos 02 su&iacute;tes 03 vagas de garagem cozinha e quartos com arm&aacute;rios Um condom&iacute;nio privilegiado a beira do lago, um dos melhores endere&ccedil;os de Bras&iacute;lia, lazer completo, piscina, churrasqueira, academia, sal&atilde;o de festas, sal&atilde;o de jogos, deck com acesso ao lago e muitas op&ccedil;&otilde;es de lazer. &nbsp; &nbsp;\r\n', '10000', '1970', 'SCEN', '2', 'Distrito Federal', 1, '4', '0', '1', '1', '0', '70800110', 'images/2017/09/01.jpg', 1, 134, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10856.727230908944!2d-48.04818564146474!3d-15.833838279303494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd11f996c7c5d91d1!2sPen%C3%ADnsula+Lazer+e+Urbanismo!5e0!3m2!1spt-BR!2sbr!4v1504710807568', 6, 2, 0),
(49, 'Cobertura de 2 Quartos Res. Renato Russo', 'cobertura-de-2-quartos-res-renato-russo', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;Apartamento com 158m&#38;sup2; no Residencial Renato Russo, 2 quartos com su&#38;iacute;te, ampla sala, cozinha com arm&#38;aacute;rios, &#38;aacute;rea de servi&#38;ccedil;o, DCE completa, 2 vagas de garagem. Excelente localiza&#38;ccedil;&#38;atilde;o em uma das melhores quadras resid&#38;ecirc;ncias da Asa Norte pr&#38;oacute;ximo ao parque Olhos D&#38;rsquo;&#38;aacute;gua. Regi&#38;atilde;o nobre de Bras&#38;iacute;lia, a Asa Norte possui um arranjo urbano estruturado em conceitos de cidade jardim, modernista e concretista. O bairro proporciona uma boa qualidade de vida a seus moradores com v&#38;aacute;rias op&#38;ccedil;&#38;otilde;es de lazer, no bairro tamb&#38;eacute;m se localizam diversos supermercados e hipermercados, farm&#38;aacute;cias, restaurantes, pizzarias, redes de fast-food, hospitais p&#38;uacute;blicos e particulares, parques, escolas, Universidades (incluindo a Universidade de Bras&#38;iacute;lia) postos de combust&#38;iacute;veis bares, igrejas, concession&#38;aacute;rias e v&#38;aacute;rias lojas de bairro gerando praticidade e comodidade para seus moradores. Menos populosa que a Asa Sul a Asa norte oferece uma &#38;oacute;tima qualidade de vida, seguran&#38;ccedil;a, lazer e comodidade para seus moradores com pr&#38;eacute;dios mais novos e modernos.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '5500', '959', 'SQN 212 Bloco “B”', '2', 'Distrito Federal', 1, '2', '0', '1', '1', '0', '70297-400', 'images/2018/03/01.jpg', 1, 158, NULL, 6, 2, 0),
(9, 'Sala Edifício Taguatinga Trade Center TTC', 'sala-edificio-taguatinga-trade-center-ttc', 'Salas comerciais no centro de Taguatinga Edif&iacute;cio Taguatinga Trade Center, TTC Salas a partir de 23m&sup2; Portaria Elevadores Seguran&ccedil;a Movimento centro comercial, F&aacute;cil acesso Localiza&ccedil;&atilde;o privilegiada\r\n', '750', '386', 'St. Central - Centro Taguatinga, Brasília', '6', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '72010010', 'images/2017/09/ed-taguatinga-trade-center-1504877013.jpg', 1, 23, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2896783088595!2d-47.885362885145234!3d-15.788672442439687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3afd490744db%3A0xede43e40e9112531!2sEdif%C3%ADcio+Bras%C3%ADlia+Trade+Center!5e0!3m2!1spt-BR!2sbr!4v1503864056879', 3, 1, 0),
(10, 'Residencia de Espanha', 'residencia-de-espanha', 'Arm&aacute;rios Su&iacute;te Cozinha com arm&aacute;rios Ampla sala Vaga de garagem Pr&eacute;dio novo Sal&atilde;o de festas Churrasqueira Brinquedoteca Academia Muito bem localizado pr&oacute;ximo ao metr&ocirc;. Contato em Taguatinga: (61) 3042-5224 Contato na Asa Norte: (61) 3315-8587 Criada em 1989 como parte do projeto &ldquo;Bras&iacute;lia Revisitada&rdquo;, idealizado pelo urbanista L&uacute;cio Costa, a regi&atilde;o administrativa do Sudoeste se divide em dois setores distintos: o Setor Sudoeste e a Setor Octogonal. Est&aacute; inserida na &aacute;rea tombada como Patrim&ocirc;nio Hist&oacute;rico da Humanidade Por possuir ciclovias, diversas &aacute;reas verdes com quadras poliesportivas e estar pr&oacute;ximo a uma das principais &aacute;reas de lazer ao ar livre do Distrito Federal, o Parque da Cidade Sarah Kubitschek, o Sudoeste se tornou uma das melhores endere&ccedil;os de Bras&iacute;lia, com um &oacute;timo e diversificado comercio oferecendo o melhor que um bairro planejado pode ter.\r\n', '1500', '554', ' Avenida Jacarandá Rua 25 Sul', '1', 'Distrito Federal', 1, '2', '0', '1', '1', '0', '72260000', 'images/2017/09/original-1495637543-residencia-de-espanha.jpg', 1, 66, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.2629663774264!2d-48.03240718526712!3d-15.842770428366919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a326ffc9768f5%3A0x35c705f76cdac0d7!2sResid%C3%AAncia+de+Espanha!5e0!3m2!1spt-BR!2sbr!4v1504713837839', 1, 1, 0),
(11, 'Salas Taguatinga Shopping ', 'salas-taguatinga-shopping', 'Salas Comerciais a partir de 27m&sup2; localizadas no Taguatinga Shopping, torres com salas dispon&iacute;veis com &oacute;tima localiza&ccedil;&atilde;o e boa disponibilidade, podendo ser alugada mais de uma sala para instala&ccedil;&atilde;o de escrit&oacute;rios maiores. Facilidade para loca&ccedil;&atilde;o e &oacute;timas condi&ccedil;&otilde;es. Salas a partir R$ 1.000,00\r\n', '1000', '530', 'QS 01', '6', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '71950904', 'images/2017/09/taguatinga-shopping-1504876820.jpg', 1, 27, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.2922466710215!2d-48.04615268526709!3d-15.841230128328572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a328bd8bc60c1%3A0xd082313d70393121!2sTaguatinga+Shopping!5e0!3m2!1spt-BR!2sbr!4v1504713791717', 3, 1, 0),
(12, 'Garagem Ed. Taguatinga Trade Center', 'garagem-ed-taguatinga-trade-center', '                                            Vagas de garagem no Centro de Taguatinga no Ed. Taguatinga Trade Center, ótimas vagas e aluguel facilitado sem fiador.\r\n                                        ', '180', NULL, 'QD.C-1 ', '6', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '72010010', 'images/2017/09/garagens-taguatinga-trade-center.jpg', 1, 12, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.4738411190547!2d-48.0546970852674!3d-15.831674028090326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bd2af935d9b05%3A0x6764779fe92867e4!2sTaguatinga+Trade+Center!5e0!3m2!1spt-BR!2sbr!4v1504713073933', 1, 1, 0),
(14, 'Garagens Studio In ', 'garagens-studio-in ', '                                            As melhores garagens do Sudoeste com total segurança e comodidade, ótimo preço, lacação facilitada e sem a necessidade de fiador!\r\n                                        ', '150', NULL, 'QMSW 06 ', '5', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '70680600', 'images/2017/09/garagens-studio-in.jpg', 1, 6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15356.410912124993!2d-47.92879374046425!3d-15.798536392030957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a82245dd5f9%3A0x8657214eb19789ef!2sCondom%C3%ADnio+do+Edif%C3%ADcio+Studio+In!5e0!3m2!1spt-BR!2sbr!4v1504713753533', 5, 1, 0),
(15, 'Loja no Centro Empresarial Parque Brasília ', 'loja-no-centro-empresarial-parque-brasilia ', '                                            Loja com 105,47m² no Centro Empresarial Parque Brasília, um dos mais novos centros empresariais de Brasília, construído com modernidade e atendendo os mais altos padrões de clientes. Ótimas condições e facilidade para locação.\r\n\r\n \r\n                                        ', '8000', '1280', 'SIG', '4', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '70610410', 'images/2017/09/loja-no-centro-empresarial-parque-brasilia.jpg', 1, 105, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.180569307006!2d-47.91396828526806!3d-15.794430027163331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a8f94a13fe5%3A0x1c1ae579cce49c2b!2sCentro+Empresarial+Parque+Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1504713623623', 5, 1, 0),
(16, 'Sala Centro Empresarial Parque Brasília', 'sala-centro-empresarial-parque-brasilia', 'Sala comercial com 36m&sup2; no Centro Empresarial Parque Bras&iacute;lia, um dos mais novos centros empresariais de Bras&iacute;lia, constru&iacute;do com modernidade e atendendo os mais altos padr&otilde;es de clientes. &Oacute;timas condi&ccedil;&otilde;es e facilidade para loca&ccedil;&atilde;o.\r\n', '1450', NULL, 'SIG - SIG - Distrito Federal', '4', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '', 'images/2017/09/1.jpg', 1, 36, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.180569307006!2d-47.91396828526806!3d-15.794430027163331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a8f94a13fe5%3A0x1c1ae579cce49c2b!2sCentro+Empresarial+Parque+Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1504713623623', 6, 1, 0),
(17, 'Loja Comercial no Centro Empresarial Brasil 21', 'loja-comercial-no-centro-empresarial-brasil-21', '                                                                                                                                    Loja no Centro Empresarial Brasil 21 . Loja bem localizada um dos melhores endereços de Brasília. Area de grande circulação. Loja pronta para locação aluguel facilitado.                                                                                                                                                                                                                                                                                                                                                                              ', '3500', NULL, 'SHS QD 06 - Asa Sul - Distrito Federal', '3', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '', 'images/2017/09/5.jpg', 1, 40, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2077915133586!2d-47.89572163526801!3d-15.792993727127547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae8af68f0af%3A0x9cce9f5507df0fa7!2sComplexo+Brasil+21!5e0!3m2!1spt-BR!2sbr!4v1504713574798', 5, 1, 0),
(18, 'Sala Centro Empresarial Brasil 21 ', 'sala-centro-empresarial-brasil-21', '&nbsp; &nbsp; Salas comerciais com 35m&sup2; no Centro empresarial Brasil 21, &oacute;tima localiza&ccedil;&atilde;o pr&oacute;ximo ao centro de Bras&iacute;lia, com total seguran&ccedil;a e comodidade que o Brasil 21 oferece com a facilidade e praticidade de loca&ccedil;&atilde;o da Paulooctavio Aluguel. &nbsp;\r\n', '2400', '837', 'SHS QD 06 ', '3', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '', 'images/2017/09/4.jpg', 1, 35, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2077915133586!2d-47.89572163526801!3d-15.792993727127547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae8af68f0af%3A0x9cce9f5507df0fa7!2sComplexo+Brasil+21!5e0!3m2!1spt-BR!2sbr!4v1504713574798', 6, 2, 0),
(19, 'Loja no Hotel Kubitschek Plaza ', 'loja-no-hotel-kubitschek-plaza', '                                            Lojas no hotel Kubitschek Plaza, lojas a partir de 19m² em um dos melhore e mais movimentados hotéis de Brasília, ótimas condições e facilidade para locação.  \r\n                                        ', '2200', '610', 'SHN QD 02 - Setor Hoteleiro Norte ', '2', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/loja-hotel-kubitschek-copy.jpg', 1, 19, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2559224597208!2d-47.88878298526812!3d-15.790453927064421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a4e8f4fffff%3A0xb247722088a7371a!2sKubitschek+Plaza+Hotel!5e0!3m2!1spt-BR!2sbr!4v1504713503767', 5, 2, 0),
(28, 'CNB 10 Loja', 'cnb-10-loja', '&Oacute;tima loja de 194m&sup2; pronta para loca&ccedil;&atilde;o e instala&ccedil;&atilde;o de qualquer neg&oacute;cio em Taguatinga, uma excelente localiza&ccedil;&atilde;o na CNB 10, local de forte comercio e movimenta&ccedil;&atilde;o de pessoas e um ponto comercial de localiza&ccedil;&atilde;o estrat&eacute;gica.', '3500', NULL, 'CNB 10', '6', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '72115105', 'images/2017/10/dsc06861-copy.jpg', 1, 194, 'https://www.google.com/maps/embed?pb=!1m0!4v1507919848132!6m8!1m7!1svX6KOLxm-i3L7KVpxuBTvA!2m2!1d-15.8240074670413!2d-48.06052401325539!3f330!4f0!5f0.7820865974627469', 3, 1, 0),
(29, 'Ed. Alberto Farah', 'ed-alberto-farah', '                                            Loja de 515m² em Taguatinga CSB 02. Ótima loja de 515m² com mezanino fachada recém reformada em Taguatinga, uma excelente localização na CSB 02, local de forte comercio e movimentação de pessoas e um ponto comercial de localização estratégica.                                         ', '6500', NULL, 'Taguatinga CSB 02', '6', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '72015 940', 'images/2017/10/dsc06869-copy.JPG', 1, 515, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.3825724596777!2d-48.058605685055234!3d-15.836477589025085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a32ebeb293b99%3A0x45a9468169503960!2sEdif%C3%ADcio+Alberto+Farah!5e0!3m2!1spt-BR!2sbr!4v1507919710109', 1, 2, 0),
(21, 'Centro Clínico Cléo Octávio ', 'centro-clinico-cleo-octavio', '                                            Salas comerciais a partir de 30m² até 53m² no Centro Clínico Cléo Octávio, o mais novo e moderno Centro Clínico de Brasília, ótima localização próximo ao Hospital da Asa Norte e a W3 Norte, primeira locação e aluguel facilitado.\r\n                                        ', '2200', '368', 'SMHN ', '2', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/centro-clinico-cleo-octavio-asa-norte-copy.jpg', 1, 30, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.363038746235!2d-47.88719808526809!3d-15.784800126923948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3aef14eaaaab%3A0xb90b7bd0c7f322d5!2zQ2VudHJvIENsw61uaWNvIENsw6lvIE9jdMOhdmlv!5e0!3m2!1spt-BR!2sbr!4v1504713335150', 5, 1, 0),
(22, 'Sala Edifício Number One ', 'sala-edificio-number-one', '&Oacute;timas salas comerciais de 351m&sup2; localizada no Ed. Number One; &Oacute;tima localiza&ccedil;&atilde;o no centro de Bras&iacute;lia; Um pr&eacute;dio exclusivo; Primeiro pr&eacute;dio inteligente de Bras&iacute;lia; Referencia em salas e escrit&oacute;rios; Total seguran&ccedil;a; 06 elevadores; Vagas de garagem;\r\n', '26000', '7472', 'SCN QD 01 ', '2', 'Distrito Federal', 2, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/12.jpg', 1, 351, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2795246741334!2d-47.885751285268086!3d-15.789208327033467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b02a101f8c1%3A0x3925e510f4280f0f!2sEdif%C3%ADcio+Number+One!5e0!3m2!1spt-BR!2sbr!4v1504713143966', 6, 1, 0),
(23, 'Loja Comercial Hotel Manhattan Plaza ', 'loja-comercial-hotel-manhattan-plaza', 'Lojas no hotel Manhattan Plaza, lojas a partir de 17m&sup2; em um dos melhore e mais movimentados hot&eacute;is de Bras&iacute;lia, &oacute;timas condi&ccedil;&otilde;es e facilidade para loca&ccedil;&atilde;o.\r\n', '2200', '299', 'SCN', '2', 'Distrito Federal', 1, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/loja-comercial-hotel-manhattan-plaza-copy.jpg', 1, 17, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2559546733573!2d-47.88832198526801!3d-15.790452227064344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b27204fbc8f%3A0xfb4d192278425fea!2sManhattan+Plaza!5e0!3m2!1spt-BR!2sbr!4v1504713261847', 5, 1, 0),
(24, 'Loja no Ed. Number One', 'loja-no-ed-number-one', 'Loja com 44m&sup2; mais mezanino de 40m&sup2; localizada no Ed. Number One, pr&eacute;dio com grande movimenta&ccedil;&atilde;o de pessoas e um &oacute;timo ponto comercial, aluguel facilitado e &oacute;tima condi&ccedil;&atilde;o.\r\n', '6800', '941', 'SCN QD 01', '2', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/loja-no-ed-number-one-copy.jpg', 1, 44, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.2795246741334!2d-47.885751285268086!3d-15.789208327033467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b02a101f8c1%3A0x3925e510f4280f0f!2sEdif%C3%ADcio+Number+One!5e0!3m2!1spt-BR!2sbr!4v1504713143966', 6, 1, 0),
(25, 'Kit Asa Norte ', 'kit-asa-norte', '                                                                                        Região nobre de Brasília, a Asa Norte possui um arranjo urbano estruturado em conceitos de cidade jardim, modernista e concretista. O bairro proporciona uma boa qualidade de vida a seus moradores com várias opções de lazer, no bairro também se localizam diversos supermercados e hipermercados, farmácias, restaurantes, pizzarias, redes de fast-food, hospitais públicos e particulares, parques, escolas, Universidades (incluindo a Universidade de Brasília) postos de combustíveis bares, igrejas, concessionárias e várias lojas de bairro gerando praticidade e comodidade para seus moradores. \r\n                                                                                ', '650', '330', 'SHCN ', '2', 'Distrito Federal', 2, '1', '0', '1', '1', '0', '72260000', 'images/2017/10/1.jpg', 1, 21, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30718.858222973613!2d-47.903744834230956!3d-15.758687647945104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a340800508b%3A0xb54acc69ec12536f!2sAsa+Norte%2C+Bras%C3%ADlia+-+DF%2C+70297-400%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1504875682764', 5, 1, 0),
(26, 'Sala no SBS Ed. João Carlos Saad ', 'sala-no-sbs-ed-joao-carlos-saad', '&Aacute;rea: 33m&sup2;;&nbsp;Sala pronta para loca&ccedil;&atilde;o; &Oacute;timo estado de conserva&ccedil;&atilde;o; Dividida; Pr&eacute;dio com seguran&ccedil;a; Acesso controlado;&nbsp;Aluguel facilitado e uma excelente oportunidade de loca&ccedil;&atilde;o &nbsp;\r\n', '2200', '463', 'SBS ', '3', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '72260000', 'images/2017/09/original-1495647236-sala-no-sbs-ed-joao-carlos-saad-1506629886.jpg', 1, 33, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.057165178483!2d-47.884275885327725!3d-15.8009394890472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b2080f49da9%3A0xb46cda0b1d554247!2sJoao+Carlos+Saad!5e0!3m2!1spt-BR!2sbr!4v1507916485196', 6, 1, 0),
(50, 'Res. Henrique Baeta 901', 'res-henrique-baeta-901', 'Apartamento de 1 quarto em &Aacute;guas Claras com 44m&sup2; e vaga de garagem coberta, o im&oacute;vel possui cozinha com arm&aacute;rios, quarto com arm&aacute;rio, &aacute;rea de servi&ccedil;o, varanda gourmet, em um condom&iacute;nio com &aacute;rea de lazer completa com piscina, churrasqueira, sal&atilde;o de festas, playground e todo a seguran&ccedil;a e infraestrutura de um im&oacute;vel de alto padr&atilde;o.', '1300', '414', 'Rua das Figueiras Lote 08', '1', 'Distrito Federal', 1, '1', '0', '1', '1', '0', '71906-750', 'images/2018/03/09.png', 1, 44, NULL, 1, 1, 0),
(51, 'Ed Minas Gerais Apartamento', 'ed-minas-gerais-apartamento', 'Apartamento de 1 quarto em Taguatinga com 40m&sup2;, o im&oacute;vel est&aacute; em &oacute;timas condi&ccedil;&otilde;es pois acabou de ser reformado, em um pr&eacute;dio muito bem localizado pr&oacute;ximo ao centro de Taguatinga.', '1100', '278', 'CSB 07 Lote 03', '1', 'Distrito Federal', 1, '1', '0', '1', '1', '0', '75015575', 'images/2018/03/0.png', 1, 40, NULL, 1, 1, 0),
(33, 'Centro Empresarial Parque de Brasília', 'centro-empresarial-parque-de-brasilia', 'Sala com 184m&sup2; no SIG. Centro Empresarial Parque Bras&iacute;lia sala com 184m&sup2;, banheiros masculinos e femininos e 2 vagas de garagem, pronta para loca&ccedil;&atilde;o. &Oacute;tima sala em localiza&ccedil;&atilde;o privilegiada no Centro Empresarial Parque Bras&iacute;lia um centro empresarial moderno e arrojado localizado no SIG e pr&oacute;ximo ao centro de Bras&iacute;lia.&nbsp; &nbsp;\r\n', '9400', '2060', ' St. de Industrias Graficas - Cruzeiro', '4', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '70297 400', 'images/2017/10/dsc06967-copy.JPG', 2, 184, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.1804714693526!2d-47.91396828505583!3d-15.79443518905118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a8f94a13fe5%3A0x1c1ae579cce49c2b!2sCentro+Empresarial+Parque+Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1507919267473', 6, 1, 0),
(43, 'Prédio comercial com galpão no SIG', 'predio-comercial-com-galpao-no-sig', '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Im&oacute;vel de 3427,69m&sup2; de &aacute;rea total sendo:&nbsp; Unidade Administrativa constitu&iacute;da por pr&eacute;dio de 5 pavimentos, perfazendo a &aacute;rea total de 1.773,29m&sup2;,&nbsp; composto por 1 subsolo com 19 vagas de garagem, t&eacute;rreo, dois andares tipo e uma cobertura, todos com sanit&aacute;rios coletivos masculinos e femininos, escadas e servido por 1 elevador com capacidade para 6 pessoas. Galp&atilde;o com 1.654,40m2 de &aacute;rea constru&iacute;da, com duas &aacute;reas administrativas na entrada e nos fundos, com dois pavimentos cada, 9 metros de p&eacute; direito livre na &aacute;rea do galp&atilde;o e&nbsp; piso de alta resist&ecirc;ncia. Excelente localiza&ccedil;&atilde;o no SIG pr&oacute;ximo ao centro de Bras&iacute;lia.&nbsp;&nbsp;\r\n', '198000', NULL, 'SIG ', '4', 'Distrito Federal', 0, '0', '0', '1', '1', '0', '70610410 ', 'images/2018/03/01-1513365580.png', 1, 3427, NULL, 6, 1, 0),
(44, 'Lojas Comerciais Centro Clínico Cléo Octávio ', 'lojas-comerciais-centro-clinico-cleo-octavio', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; Loja com 195m&#38;sup2;, vantagens do empreendimento: Localiza&#38;ccedil;&#38;atilde;o privilegiada no Setor M&#38;eacute;dico Hospitalar Norte, em frente ao HRAN a ao lado do Liberty Mall, 4 elevadores, sendo um deles para macas, portaria com catracas biom&#38;eacute;tricas, projeto planejado para os profissionais de sa&#38;uacute;de, primeira loca&#38;ccedil;&#38;atilde;o e pronto para instala&#38;ccedil;&#38;atilde;o de seu consult&#38;oacute;rio.&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '18000', '2423', 'SMHN QUADRA 2 BLOCO B,  Brasília', '2', 'Distrito Federal', 3, '0', '0', '1', '1', '0', '70710 146', 'images/2018/03/01.png', 1, 195, NULL, 5, 1, 0),
(45, 'Sala com 72m² no Golden Office', 'sala-com-72m²-no-golden-office', '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Sala de 72m&sup2; dividida em dois pavimentos, pavimento superior com entrada e banheiro e amplo espa&ccedil;o al&eacute;m de semienterrado, excelente para instala&ccedil;&atilde;o de qualquer empresa. Piso em porcelanato, recep&ccedil;&atilde;o, elevadores, primeira loca&ccedil;&atilde;o. Excelente localiza&ccedil;&atilde;o ao lado do Parque Burle Marx.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\r\n', '2500', '714', 'SGAN 915 Bloco B Sala 101', '2', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '70790150', 'images/2018/03/001.jpg', 1, 72, NULL, 6, 1, 0),
(46, 'Sala 01 C com  vaga de garagem no JK Shopping', 'sala-01-c-com-vaga-de-garagem-no-jk-shopping', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; Sala 01 C com &#38;aacute;rea de&#38;nbsp; 54m&#38;sup2;, ampla com banheiro, excelente acabamento e vaga de garagem. Localizada em um dos melhores shoppings de Bras&#38;iacute;lia, o im&#38;oacute;vel conta com toda a infraestrutura que um Shopping de alto padr&#38;atilde;o proporciona, com pra&#38;ccedil;a de alimenta&#38;ccedil;&#38;atilde;o, seguran&#38;ccedil;a, recep&#38;ccedil;&#38;atilde;o com controle de acesso e todas as vantagens que s&#38;oacute; um Shopping de alto padr&#38;atilde;o como o JK Shopping pode oferecer. PLANT&#38;Atilde;O NO LOCAL, SALA 109. &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '1577', NULL, 'St. M Norte 34 AE 1', '6', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '72145-450', 'images/2018/03/01-1.jpg', 1, 54, NULL, 3, 1, 0),
(47, ' Sala 1604 de 33 e vaga de garagem no JK Shopping', 'sala-1604-de-33-e-vaga-de-garagem-no-jk-shopping', '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sala 1604 com &aacute;rea de 33m&sup2; e vaga de garagem no JK Shopping, ampla com banheiro, excelente acabamento e vaga de garagem. Localizada em um dos melhores shoppings de Bras&iacute;lia, o im&oacute;vel conta com toda a infraestrutura que um Shopping de alto padr&atilde;o proporciona, com pra&ccedil;a de alimenta&ccedil;&atilde;o, seguran&ccedil;a, recep&ccedil;&atilde;o com controle de acesso e todas as vantagens que s&oacute; um Shopping de alto padr&atilde;o como o JK Shopping pode oferecer. PLANT&Atilde;O NO LOCAL, SALA 109. Aluguel: R$ 1.008,90&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\r\n', '1009', NULL, ' St. M Norte 34 AE 1 ', '6', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '72145-450', 'images/2018/03/01-1-1521480816.jpg', 1, 33, NULL, 3, 1, 1),
(52, 'Kitnet Uno Residence', 'kitnet-uno-residence', 'Kitnet de 33m&sup2; no Uno Residence, com arm&aacute;rio, banheiro com arm&aacute;rio embutido e Box, cozinha com arm&aacute;rio, vaga de garagem coberta, sal&atilde;o de festas, sala de gin&aacute;stica, piscina, churrasqueira e portaria 24hs. Aluguel: R$ 700,00 Condom&iacute;nio: R$ 298,00 CEP: 71918-360\r\n', '700', '298', 'RUA 31 Lt 04 N 1806 ÁGUAS CLARAS', '1', 'Distrito Federal', 2, '1', '0', '1', '1', '0', '71918-360', 'images/2018/03/07.jpg', 1, 33, NULL, 1, 1, 23),
(54, 'QI 25 Ed. Guará Master', 'qi-25-ed-guara-master', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#60;strong&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Apartamento de 3 Quartos na QI 25 do Guar&#38;aacute;:&#60;/span&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#60;ul&#62;&#13;&#10;&#60;li style=&#34;padding-left: 30px;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62; 82m&#38;sup2; sala ampla,&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li style=&#34;padding-left: 30px;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;cozinha com arm&#38;aacute;rios&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li style=&#34;padding-left: 30px;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62; &#38;aacute;rea de servi&#38;ccedil;o,&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li style=&#34;padding-left: 30px;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;quartos com arm&#38;aacute;rios &#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li style=&#34;padding-left: 30px;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;vaga de garagem.&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62; Aluguel: R$ 1.800,00 &#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Condom&#38;iacute;nio: R$ 694,00&#38;nbsp;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '1800', '694', 'Guará II QI 25 Conj. 04 Grafite Guará - Guará', 'Guara', 'Distrito Federal', 1, '3', '0', '1', '1', '0', '71060-192', 'images/2018/03/01-1521482407.png', 1, 82, NULL, 1, 1, 0),
(57, 'Apartamento na SQN 213 Bloco I,  Asa Norte', 'apartamento-na-sqn-213-bloco-i-asa-norte', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#60;strong&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Apartamento de 3 Quartos com su&#38;iacute;te na Asa Norte: &#60;/span&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#60;ol style=&#34;list-style-type: lower-alpha;&#34;&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;145m&#38;sup2; ,&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62; cozinha com arm&#38;aacute;rios, fog&#38;atilde;o e forno,&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62; quartos com arm&#38;aacute;rios e varanda, &#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;arm&#38;aacute;rios embutidos, &#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;&#38;aacute;rea de servi&#38;ccedil;o, &#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;DCE completa, &#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;li&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;02 vagas de garagem cobertas.&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;&#60;p&#62;&#60;strong&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Apartamento completamente reformado, com um projeto exclusivo de ilumina&#38;ccedil;&#38;atilde;o, 3 varandas, em um excelente pr&#38;eacute;dio com &#38;aacute;rea de lazer completa muito bem localizado na SQN 213. &#38;nbsp; &#60;/span&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Aluguel: R$ 7.900,00 &#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Condom&#38;iacute;nio: R$ 1.128,00 CEP: 70872-500 &#38;nbsp;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '7900', '1128', 'SQN 213 Bloco I  Asa Norte', '2', 'Distrito Federal', 1, '3', '0', '1', '1', '0', '70872-500', 'images/2018/03/01-1521482707.png', 1, 145, NULL, 6, 1, 12),
(58, 'Res. Carlos Chagas', 'res-carlos-chagas', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;Apartamento de 4 quartos com 128m&#38;sup2; com 2 vagas de garagem, PRIMEIRA LOCA&#38;Ccedil;&#38;Atilde;O, su&#38;iacute;te, sala ampla, cozinha, &#38;aacute;rea de servi&#38;ccedil;o, apartamento vazado, previs&#38;atilde;o para ar condicionado, aquecimento central de &#38;aacute;gua, &#38;aacute;rea de lazer com piscinha adulto e infantil, churrasqueira, sal&#38;atilde;o de festas e academia. O apartamento ser&#38;aacute; entregue com todos os arm&#38;aacute;rios instalados. Viva com tranquilidade e tenha qualidade de vida. More em uma quadra com excelente localiza&#38;ccedil;&#38;atilde;o, pr&#38;oacute;xima &#38;aacute;s escolas e universidades mais completas de Bras&#38;iacute;lia, com&#38;eacute;rcios locais, &#38;oacute;timos restaurantes e infraestrutura completa. &#38;nbsp; Endere&#38;ccedil;o: SQN 208 Bloco K CEP: 70853-110 Aluguel: R$ 5.900,00 Condom&#38;iacute;nio: R$ 888,00 &#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '5900', '888', 'SQN 208 Bloco K', '2', 'Distrito Federal', 1, '4', '0', '1', '1', '0', '70853-110', 'images/2018/04/carlos.png', 2, 128, NULL, 6, 1, 1),
(59, 'Res. Betty Bettiol', 'res-betty-bettiol', 'Apartamento de 2 quartos com 73m&sup2; com 2 vagas de garagem, PRIMEIRA LOCA&Ccedil;&Atilde;O, sala ampla, cozinha, &aacute;rea de servi&ccedil;o, &aacute;rea de lazer com piscinha adulto e infantil, churrasqueira, sal&atilde;o de festas e academia. O apartamento ser&aacute; entregue com todos os arm&aacute;rios colocados.\r\nViva com tranquilidade e tenha qualidade de vida. More em uma quadra com excelente localiza&ccedil;&atilde;o, pr&oacute;xima &aacute;s escolas e universidades mais completas de Bras&iacute;lia, com&eacute;rcios locais, &oacute;timos restaurantes e infraestrutura completa.\r\nEndere&ccedil;o: SQN 211 Bloco I\r\nCEP: 70863-090\r\nAluguel: R$ 3.800,00\r\nCondom&iacute;nio: R$ 597,00\r\n&nbsp;', '3800', '597', 'SQN 211 Bloco I', '2', 'Distrito Federal', 1, '2', '0', '1', '1', '0', '70863-090', 'images/2018/03/09-1521484083.png', 1, 73, NULL, 6, 1, 6),
(61, 'Edifício Toscana STN', 'edificio-toscana-stn', 'Edif&iacute;cio Toscana STN Kit no edif&iacute;cio Toscana com 26m&sup2; com vaga de garagem, arm&aacute;rios, cozinha completa com fog&atilde;o, frigobar e arm&aacute;rio em uma excelente localiza&ccedil;&atilde;o na Asa Norte. &nbsp; Aluguel: R$ 1000,00 Condom&iacute;nio: R$ 305,00 CEP: 70770-100\r\n', '1000', '305', 'Edifício Toscana STN Conj. L', '2', 'Distrito Federal', 2, '1', '0', '1', '1', '0', ' 70770-100', 'images/2018/03/01-1521484512.png', 1, 26, NULL, 6, 1, 11),
(62, 'Complexo Empresarial Brasil 21 ', 'complexo-empresarial-brasil-21', 'Sala com 35m&sup2; para aluguel no Complexo Empresarial Brasil 21, excelente sala localizada em um dos melhores endere&ccedil;os de Bras&iacute;lia, posicionado estrategicamente ao lado da Torre de TV o Brasil 21 fica pr&oacute;ximo da esplanada dos minist&eacute;rios e das principais vias do Plano Piloto, al&eacute;m de ficar pr&oacute;ximo de restaurantes, shoppings, cart&oacute;rios, entre outros pontos comerciais. Aluguel: R$ 2.400,00 Condom&iacute;nio: R$ 889,00 CEP: 70297-400\r\n', '2400', '889', 'Setor Hoteleiro Sul Q. 6 ', '3', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '70297-400', 'images/2018/03/01-1521485066.png', 1, 35, NULL, 6, 1, 7),
(63, 'Complexo Empresarial Brasil 21 ', 'complexo-empresarial-brasil-21', 'Sala com 69m&sup2; para aluguel no Complexo Empresarial Brasil 21, excelente sala localizada em um dos melhores endere&ccedil;os de Bras&iacute;lia, posicionado estrategicamente ao lado da Torre de TV o Brasil 21 fica pr&oacute;ximo da esplanada dos minist&eacute;rios e das principais vias do Plano Piloto, al&eacute;m de ficar pr&oacute;ximo de restaurantes, shoppings, cart&oacute;rios, entre outros pontos comerciais. &nbsp; Aluguel: R$ 4.800,00 Condom&iacute;nio: R$ 1.780,00 CEP: 70297-400\r\n', '4800', '1780', 'Setor Hoteleiro Sul Q. 6', '3', 'Distrito Federal', 4, '0', '0', '1', '1', '0', '70297-400', 'images/2018/03/01-1521485246.png', 1, 69, NULL, 6, 1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `imovel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `imovel`) VALUES
(16, 'centro-empresarial', ' St. de Industrias Graficas Cruzeiro', -15.794435, -47.913967, 'Comercial', 33),
(17, 'loja-no-peninsula-lazer-e-urbanismo', 'Pistão Sul de Taguatinga', -15.834427, -48.049690, 'Residencial', 31),
(18, 'residencial-antonio-carlos-pires', 'Residencial Antônio Carlos Pires', -15.835441, -48.019150, 'Residencial', 30),
(19, 'residencia-de-espanha', ' Avenida Jacarandá Rua 25 Sul', -15.839858, -48.036880, 'Comercial', 10),
(20, 'cobertura-de-2-quartos-res-renato-russo', 'SQN 212 Bloco “B”', -15.749116, -47.885178, 'Residencial', 49),
(21, 'res-carlos-chagas', 'SQN 208 Bloco K', -15.762717, -47.884586, 'Residencial', 58),
(22, 'res-betty-bettiol', 'SQN 211 Bloco I', -15.754080, -47.885288, 'Residencial', 59),
(23, 'complexo-empresarial-brasil-21', 'Setor Hoteleiro Sul Q. 6', -15.792750, -47.895119, 'Comercial', 63),
(24, 'res-carlos-chagas', 'SQN 208 Bloco K', 0.000000, -47.884586, 'Comercial', 58);

-- --------------------------------------------------------

--
-- Estrutura da tabela `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` double NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `properties`
--

INSERT INTO `properties` (`id`, `name`, `image`, `description`, `price`, `latitude`, `longitude`) VALUES
(1, 'Beside Government', 'property2.jpg', 'Beside Government Maternity Hospital, Pantheon Road, Egmore, Egmore, Chennai, Tamil Nadu 600008, Índia', 10000, '13.0896915', '80.2632547'),
(2, 'Rooms in egmore chennai', 'property3.jpg', 'Telising Peruma Tiruvallikeni, Peyalwar Koil St, Narayana Krishnaraja Puram, Triplicane, Chennai, Tamil Nadu 600005, Índia', 20000, '13.0896915', '80.2632547');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `usuario`, `thumb`, `senha`, `permissao`, `status`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agente`
--
ALTER TABLE `agente`
  ADD PRIMARY KEY (`codAgente`);

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agente`
--
ALTER TABLE `agente`
  MODIFY `codAgente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=675;

--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
