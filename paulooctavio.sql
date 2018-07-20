-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Jul-2018 às 15:21
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

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

DROP TABLE IF EXISTS `agente`;
CREATE TABLE IF NOT EXISTS `agente` (
  `cod_agente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_agente` varchar(255) NOT NULL,
  `email_agente` varchar(255) NOT NULL,
  `celular_agente` varchar(16) DEFAULT NULL,
  `telefone_agente` varchar(14) DEFAULT NULL,
  `regiao_agente` varchar(180) NOT NULL,
  PRIMARY KEY (`cod_agente`)
) ;

--
-- Extraindo dados da tabela `agente`
--

INSERT INTO `agente` (`cod_agente`, `nome_agente`, `email_agente`, `celular_agente`, `telefone_agente`, `regiao_agente`) VALUES
(1, 'Karinna', 'karinna.carvalho@paulooctavio.com.br', NULL, '(61) 3042-5222', 'Águas Claras e Taguatinga'),
(2, 'Misya', 'misya.reis@paulooctavio.com.br\n ', NULL, '(61) 3315-8539', 'Asa Norte e demais regiões'),
(3, 'Gláucia', 'glaucia.cardozo@paulooctavio.com.br', '', '(61) 3491-6780', 'Águas Claras e Taguatinga'),
(5, 'Sandra', 'sandra.betiato@paulooctavio.com.br \n\n', NULL, '(61) 3315-8587', 'Asa Norte e demais regiões'),
(6, 'Iolanda ', 'iolanda.tenorio@paulooctavio.com.br', NULL, '(61)3315-8553', 'Asa Norte e demais regiões');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

DROP TABLE IF EXISTS `artigo`;
CREATE TABLE IF NOT EXISTS `artigo` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `destaque` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `descricao` text,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) NOT NULL,
  `url_categoria` varchar(100) NOT NULL,
  `status_categoria` int(1) DEFAULT NULL,
  PRIMARY KEY (`cod_categoria`)
) ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `nome_categoria`, `url_categoria`, `status_categoria`) VALUES
(1, 'Apartamento', 'apartamento', 1),
(2, 'Kit', 'kit', 1),
(3, 'Loja', 'loja', 1),
(4, 'Sala', 'sala', 1),
(5, 'Prédio', 'predio', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`cod`)
) ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`cod`, `nome`, `url`, `status`) VALUES
(1, 'Águas Claras', 'aguas-claras', 1),
(2, 'Brazlândia', 'brazlandia', 1),
(3, 'Candangolândia', 'candangolandia', 1),
(4, 'Ceilândia', 'ceilandia', 1),
(5, 'Cruzeiro', 'cruzeiro', 1),
(6, 'Fercal', 'fercal', 1),
(7, 'Gama', 'gama', 1),
(8, 'Guará', 'guara', 1),
(9, 'Itapoã', 'itapoa', 1),
(10, 'Jardim Botânico', 'jardim-botanico', 1),
(11, 'Lago Norte', 'lago-norte', 1),
(12, 'Lago Sul', 'lago-sul', 1),
(13, 'Núcleo Bandeirante', 'nucleo-bandeirante', 1),
(14, 'Paranoá', 'paranoa', 1),
(15, 'ParkWay', 'parkway', 1),
(16, 'Planaltina', 'planaltina', 1),
(17, 'Recanto das Emas', 'recanto-das-emas', 1),
(18, 'Riacho Fundo', 'riacho-fundo', 1),
(19, 'Samambaia', 'samambaia', 1),
(20, 'Santa Maria', 'santa-maria', 1),
(21, 'São Sebastião', 'sao-sebastiao', 1),
(22, 'SCIA', 'scia', 1),
(23, 'SIA', 'sia', 1),
(24, 'Sobradinho', 'sobradinho', 1),
(25, 'Sudoeste', 'sudoeste', 1),
(26, 'Octogonal', 'octogonal', 1),
(27, 'Taguatinga', 'taguatinga', 1),
(28, 'Varjão', 'varjao', 1),
(29, 'Vicente Pires', 'vicente-pires', 1),
(30, 'Noroeste', 'noroeste', 1),
(31, 'Asa Norte', 'asa-norte', 1),
(32, 'Asa Sul', 'asa-sul', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL,
  `post_cod` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`cod`, `imagem`, `post_cod`) VALUES
(1, '921b5c3d44217f243a2e402bbe2302290.png', 2),
(2, '921b5c3d44217f243a2e402bbe2302291.png', 2),
(3, '921b5c3d44217f243a2e402bbe2302292.png', 2),
(4, '921b5c3d44217f243a2e402bbe2302293.png', 2),
(5, '921b5c3d44217f243a2e402bbe2302294.png', 2),
(6, '921b5c3d44217f243a2e402bbe2302295.png', 2),
(7, '921b5c3d44217f243a2e402bbe2302296.png', 2),
(8, '921b5c3d44217f243a2e402bbe2302297.png', 2),
(9, '921b5c3d44217f243a2e402bbe2302298.png', 2),
(10, '921b5c3d44217f243a2e402bbe2302299.png', 2),
(11, 'ab6a6ed9aa87830fc42df0dbe360f6b20.JPG', 3),
(12, 'ab6a6ed9aa87830fc42df0dbe360f6b21.JPG', 3),
(13, 'ab6a6ed9aa87830fc42df0dbe360f6b22.JPG', 3),
(14, '30eef9b28eaaaa1a9436612a206dc10d0.jpg', 4),
(15, '30eef9b28eaaaa1a9436612a206dc10d1.jpg', 4),
(16, '30eef9b28eaaaa1a9436612a206dc10d2.jpg', 4),
(17, '30eef9b28eaaaa1a9436612a206dc10d3.jpg', 4),
(18, '30eef9b28eaaaa1a9436612a206dc10d4.jpg', 4),
(19, '30eef9b28eaaaa1a9436612a206dc10d5.jpg', 4),
(20, '151d6f9f980a0cc1ba582171f62de3e50.JPG', 1),
(21, '151d6f9f980a0cc1ba582171f62de3e51.JPG', 1),
(22, '151d6f9f980a0cc1ba582171f62de3e52.JPG', 1),
(23, '151d6f9f980a0cc1ba582171f62de3e53.JPG', 1),
(24, '151d6f9f980a0cc1ba582171f62de3e54.JPG', 1),
(25, 'f5d79fe0274ec8b22f20066eeadabf340.jpg', 5),
(26, 'f5d79fe0274ec8b22f20066eeadabf341.jpg', 5),
(27, 'f5d79fe0274ec8b22f20066eeadabf342.jpg', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE IF NOT EXISTS `imovel` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `descricao` text,
  `condominio` text,
  `obs_alugar` text,
  `valor_aluguel` float(10,2) NOT NULL,
  `valor_condominio` float(10,2) DEFAULT NULL,
  `iptu` float(10,2) DEFAULT NULL,
  `seguro` float(10,2) DEFAULT NULL,
  `destaque` int(11) NOT NULL,
  `agente` int(11) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `quarto` varchar(35) DEFAULT NULL,
  `suite` varchar(10) DEFAULT NULL,
  `banheiro` varchar(10) DEFAULT NULL,
  `andar` varchar(10) DEFAULT NULL,
  `garagem` varchar(10) DEFAULT NULL,
  `mapa` text,
  `street` text,
  `view` int(11) DEFAULT NULL,
  `pet` int(1) DEFAULT NULL,
  `parada` int(1) DEFAULT NULL,
  PRIMARY KEY (`cod`,`categoria`)
) ;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`cod`, `thumb`, `titulo`, `url`, `categoria`, `status`, `descricao`, `condominio`, `obs_alugar`, `valor_aluguel`, `valor_condominio`, `iptu`, `seguro`, `destaque`, `agente`, `cep`, `endereco`, `cidade`, `area`, `quarto`, `suite`, `banheiro`, `andar`, `garagem`, `mapa`, `street`, `view`, `pet`, `parada`) VALUES
(1, 'imovel/2018/07/res-paulo-zimbres-1532028287.JPG', 'Res. Paulo Zimbres ', 'res-paulo-zimbres', 1, 1, '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p style=&#34;text-align: justify;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Apartamento com 36m&#38;sup2;, vaga de garagem em uma &#38;oacute;tima localiza&#38;ccedil;&#38;atilde;o no Noroeste, pr&#38;eacute;dio novo e im&#38;oacute;vel de 1&#38;deg; localiza&#38;ccedil;&#38;atilde;o, excelente acabamento e aluguel facilitado.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;p style=&#34;text-align: justify;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Viver bem, com todo o conforto que a modernidade oferece, assim s&#38;atilde;o os bairros ecol&#38;oacute;gicos que come&#38;ccedil;aram a se disseminar no s&#38;eacute;culo 21. Em Bras&#38;iacute;lia, o Noroeste &#38;eacute; um dos grandes exemplos desse modelo de bairro ambientalmente respons&#38;aacute;vel. Aqui, n&#38;atilde;o s&#38;oacute; os materiais e a tecnologia utilizados s&#38;atilde;o sustent&#38;aacute;veis mas t&#38;ecirc;m ainda servi&#38;ccedil;os urbanos inspirados nos tr&#38;ecirc;s &#34;erres&#34; fundamentais na preserva&#38;ccedil;&#38;atilde;o do planeta: reduzir, reutilizar e reciclar.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;p style=&#34;text-align: justify;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;O Edif&#38;iacute;cio Paulo Zimbres Duo Center, localizado na quadra 10/11,&#38;nbsp; e &#38;eacute; uma homenagem ao professor e arquiteto respons&#38;aacute;vel pelo projeto do Noroeste. O empreendimento conta com um mall de lojas no Pilotis para atender aos futuros moradores. O empreendimento oferece seguran&#38;ccedil;a aos moradores com garagem subterr&#38;acirc;nea e circuito interno de TV, al&#38;eacute;m de acabamento de alto padr&#38;atilde;o. Os materiais e a tecnologia utilizados no edif&#38;iacute;cio s&#38;atilde;o sustent&#38;aacute;veis, alinhados com a proposta do bairro de ser ambientalmente respons&#38;aacute;vel.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 'Disponível piscina, churrasqueira, academia, salão de festas, sauna, lavanderia no prédio, espaço gourmet na área comum, portaria 24hrs.', 'Comprovante de renda mensal bruta. A renda pode ser composta por até 4 pessoas físicas. Esse valor pode variar em função do aluguel final acordado. Maiores informações entre em contato.', 1300.00, 450.00, 0.00, 0.00, 1, 5, '70686645', 'CLNW 10/11 Lote I', '30', 36, '2', '0', '1', '0', '0', '', NULL, 9, 1, 1),
(2, 'imovel/2018/07/res-betty-bettiol.JPG', 'Res. Betty Bettiol', 'res-betty-bettiol', 1, 1, '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Apartamento de 73m&#38;sup2; na SQN 211, 2 quartos com arm&#38;aacute;rios sendo 1 su&#38;iacute;te, sala ampla, banheiro social, cozinha com arm&#38;aacute;rios, banheiros com arm&#38;aacute;rios embutidos, box e blindex, &#38;aacute;rea de servi&#38;ccedil;o com banheiro, 2 vagas de garagem cobertas, &#60;strong&#62;PRIMEIRA LOCA&#38;Ccedil;&#38;Atilde;O&#60;/strong&#62;, &#38;aacute;rea de lazer completa com piscinha adulto e infantil, churrasqueira, sal&#38;atilde;o de festas e academia.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Viva com tranquilidade e tenha qualidade de vida. More em uma quadra com excelente localiza&#38;ccedil;&#38;atilde;o, pr&#38;oacute;xima &#38;aacute;s escolas e universidades mais completas de Bras&#38;iacute;lia, com&#38;eacute;rcios locais, &#38;oacute;timos restaurantes e infraestrutura completa.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '', '', 3800.00, 597.00, 0.00, 0.00, 2, 5, '70863090', 'SQN 211 Bloco I', '31', 73, '2', '1', '2', '0', '2', '', NULL, 2, 1, 1),
(5, 'imovel/2018/07/kit-asa-norte.jpg', 'Kit Asa Norte ', 'kit-asa-norte', 2, 1, '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;Regi&#38;atilde;o nobre de Bras&#38;iacute;lia, a Asa Norte possui um arranjo urbano estruturado em conceitos de cidade jardim, modernista e concretista. O bairro proporciona uma boa qualidade de vida a seus moradores com v&#38;aacute;rias op&#38;ccedil;&#38;otilde;es de lazer, no bairro tamb&#38;eacute;m se localizam diversos supermercados e hipermercados, farm&#38;aacute;cias, restaurantes, pizzarias, redes de fast-food, hospitais p&#38;uacute;blicos e particulares, parques, escolas, Universidades (incluindo a Universidade de Bras&#38;iacute;lia) postos de combust&#38;iacute;veis bares, igrejas, concession&#38;aacute;rias e v&#38;aacute;rias lojas de bairro gerando praticidade e comodidade para seus moradores.&#38;nbsp;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '', '', 650.00, 330.00, 0.00, 0.00, 2, 5, '70856550', 'CLN ', '31', 21, '0', '0', '1', '0', '0', '', NULL, 2, 1, 1),
(3, 'imovel/2018/07/saus-qd-01-bloco-g.JPG', 'SAUS QD 01 Bloco G', 'saus-qd-01-bloco-g', 5, 1, '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p style=&#34;text-align: justify;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;&#38;Aacute;rea corporativa com 2247m&#38;sup2; no centro de Bras&#38;iacute;lia, 2 pavimentos com piso elevado, sistema de ar condicionado central, recep&#38;ccedil;&#38;atilde;o, 2 conjuntos de banheiros por pavimento totalizando 4 banheiros, 2 copas, elevadores interligando os pavimentos e garagens, &#38;aacute;rea t&#38;eacute;cnica, vagas de garagem, condom&#38;iacute;nio completo com seguran&#38;ccedil;a e presta&#38;ccedil;&#38;atilde;o de servi&#38;ccedil;os de manuten&#38;ccedil;&#38;atilde;o e limpeza das &#38;aacute;reas comuns, excelente localiza&#38;ccedil;&#38;atilde;o do SAUS QD 01 pr&#38;oacute;ximo a Biblioteca Nacional, Esplanada dos Minist&#38;eacute;rios e atendido pelas principais vias de acesso do Plano Piloto.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', NULL, '', 120000.00, 22840.88, 0.00, 0.00, 1, 5, '70070010', 'SAUS Quadra 1', '32', 2247, '0', '0', '4', '0', '0', '', '', 12, 1, 1),
(4, 'imovel/2018/07/saus-qd-01-bloco-i.JPG', 'SAUS QD 01 Bloco I', 'saus-qd-01-bloco-i', 5, 1, '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p style=&#34;text-align: justify;&#34;&#62;&#60;span style=&#34;font-size: 12pt;&#34;&#62;&#38;Aacute;rea corporativa com 2231m&#38;sup2; totalmente reformado com piso elevado de alto padr&#38;atilde;o tecnol&#38;oacute;gico em porcelanato, sistema de ar condicionado central, recep&#38;ccedil;&#38;atilde;o, 4 conjuntos de banheiros por pavimento totalizando 8 banheiros, 2 copas, elevadores interligando os pavimentos e garagens, &#38;aacute;rea t&#38;eacute;cnica, vagas de garagem, condom&#38;iacute;nio completo com seguran&#38;ccedil;a e presta&#38;ccedil;&#38;atilde;o de servi&#38;ccedil;os de manuten&#38;ccedil;&#38;atilde;o e limpeza das &#38;aacute;reas comuns, excelente localiza&#38;ccedil;&#38;atilde;o do SAUS QD 01 pr&#38;oacute;ximo a Biblioteca Nacional, Esplanada dos Minist&#38;eacute;rios e atendido pelas principais vias de acesso do Plano Piloto.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', '', '', 120000.00, 23160.54, 0.00, 0.00, 1, 3, '70070010', 'SAUS Quadra 1', '32', 2231, '0', '0', '8', '0', '0', '', '', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `markers`
--

DROP TABLE IF EXISTS `markers`;
CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `imovel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ;

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

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` double NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ;

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

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`cod`)
) ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `usuario`, `thumb`, `senha`, `permissao`, `status`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
