-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Set-2018 às 22:58
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemadoisw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IDCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`IDCategoria`, `descricao`) VALUES
(2, 'Camisa'),
(5, 'Roupa'),
(7, 'Calca'),
(8, 'terno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `IDCliente` int(11) NOT NULL,
  `limite` float(18,2) DEFAULT NULL,
  `IDRevendedor` int(11) DEFAULT NULL,
  `IDExecutiva` int(11) DEFAULT NULL,
  `IDEmpresaria` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCliente`),
  KEY `fk_cliente_revendedor_idx` (`IDRevendedor`),
  KEY `fk_cliente_empresaria_idx` (`IDEmpresaria`),
  KEY `fk_cliente_executiva_idx` (`IDExecutiva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`IDCliente`, `limite`, `IDRevendedor`, `IDExecutiva`, `IDEmpresaria`) VALUES
(35, 0.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `IDContato` int(11) NOT NULL AUTO_INCREMENT,
  `IDPessoa` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telRes` varchar(45) DEFAULT NULL,
  `telCom` varchar(45) DEFAULT NULL,
  `telCel` varchar(45) DEFAULT NULL,
  `operadora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDContato`,`IDPessoa`),
  KEY `fk_pessoafisica_contato_idx` (`IDPessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`IDContato`, `IDPessoa`, `nome`, `email`, `telRes`, `telCom`, `telCel`, `operadora`) VALUES
(10, 28, 'Cláudio e Filipe Informática ME', 'compras@claudioefilipeinformaticame.com.br', '(11) 3596-9527', NULL, '(11) 98967-8140', 'Tim'),
(11, 29, 'Nicolas Thiago Vinicius Souza', 'nnicolasthiagoviniciussouza@ppconsulting.com.', '(47) 2992-2391', NULL, '(47) 98328-9880', 'Oi'),
(12, 30, 'Fábio Francisco Caldeira', 'fabiofranciscocaldeira_@agencia10clic.com.br', '(11) 2826-9377', NULL, '(11) 98775-2980', 'Vivo'),
(13, 31, 'Luan Kaique Melo', 'luankaiquemelo_@santosferreira.adv.br', '(96) 2765-7936', NULL, '(96) 99981-0009', 'Oi'),
(14, 32, 'Bento César Ribeiro', 'bentocesarribeiro-86@projetochama.com.br', '', NULL, '', 'Tim'),
(15, 33, 'Hadassa e Priscila Publicidade e Propaganda M', 'financeiro@hadassaepriscilapublicidadeepropag', '(19) 2693-8871', NULL, '(19) 98705-4647', 'Oi'),
(16, 34, 'Maria José de Oliveira', 'teste@teste.com.br', '(43) 3375-5457', NULL, '(43) 99979-4866', 'Tim'),
(17, 35, 'Bruno Vicente Gael Fernandes', 'brunovicentegaelfernandes_@artelazer.com', '(18) 2524-1817', NULL, '(18) 99608-1963', 'Sercomtel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresaria`
--

DROP TABLE IF EXISTS `empresaria`;
CREATE TABLE IF NOT EXISTS `empresaria` (
  `IDEmpresaria` int(11) NOT NULL,
  `IDExecutiva` int(11) DEFAULT NULL,
  `limite` float(18,2) DEFAULT NULL,
  PRIMARY KEY (`IDEmpresaria`),
  KEY `fk_empresaria_executiva_idx` (`IDExecutiva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `IDEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `IDPessoa` int(11) NOT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `tblEnderecocol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDEndereco`,`IDPessoa`),
  KEY `fk_endereco_pessoa_idx` (`IDPessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`IDEndereco`, `IDPessoa`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `tblEnderecocol`) VALUES
(10, 28, '03307-900', 'Rua Tuiuti', '271', '2562', 'Tatuapé', 'São Paulo', 'SP', NULL),
(11, 29, '89162-548', 'Rua Ervin Dolzan', '692', '', 'Navegantes', 'Rio do Sul', 'SC', NULL),
(12, 30, '05131-050', 'Rua Roberto de Lamenais', '125', '', 'Vila Mangalot', 'São Paulo', 'SP', NULL),
(13, 31, '68928-229', 'Avenida Júlio Cardoso', '441', '', 'Fonte Nova', 'Santana', 'AP', NULL),
(14, 32, '72405-510', 'Quadra 51', '788', '', 'Setor Central (Gama)', 'Brasília', 'DF', NULL),
(15, 33, '13732-475', 'Avenida José Justi', '1111', '', 'Jardim São Benedito', 'Mococa', 'SP', NULL),
(16, 34, '86186-150', 'Rua Pisa', '1111', 'casa', 'Jardim Montecatini', 'Cambé', 'PR', NULL),
(17, 35, '16075-350', 'Praça Henry Ford', '117', 'casa', 'Parque Industrial', 'Araçatuba', 'SP', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `IDEstoque` int(11) NOT NULL AUTO_INCREMENT,
  `IDProduto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `movimento` char(1) DEFAULT NULL,
  `IDFilial` int(11) DEFAULT NULL,
  `estMinimo` int(11) DEFAULT NULL,
  `estMaximo` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEstoque`),
  KEY `fk_estoque_produto_idx` (`IDProduto`),
  KEY `fk_estoque_filial_idx` (`IDFilial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoqueconsignado`
--

DROP TABLE IF EXISTS `estoqueconsignado`;
CREATE TABLE IF NOT EXISTS `estoqueconsignado` (
  `IDEstoqueConsignado` int(11) NOT NULL AUTO_INCREMENT,
  `IDProduto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `movimento` char(1) DEFAULT NULL,
  `IDFilial` int(11) DEFAULT NULL,
  `IDPessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEstoqueConsignado`),
  KEY `fk_estoque_produto_idx` (`IDProduto`),
  KEY `fk_estoque_filial_idx` (`IDFilial`),
  KEY `fk_estoqueConsginado_pessoa_idx` (`IDPessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoquemovimentado`
--

DROP TABLE IF EXISTS `estoquemovimentado`;
CREATE TABLE IF NOT EXISTS `estoquemovimentado` (
  `IDEstoqueMovimentado` int(11) NOT NULL AUTO_INCREMENT,
  `IDProduto` int(11) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `tipoMovimento` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEstoqueMovimentado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `executiva`
--

DROP TABLE IF EXISTS `executiva`;
CREATE TABLE IF NOT EXISTS `executiva` (
  `IDExecutiva` int(11) NOT NULL,
  `limite` float(18,2) DEFAULT NULL,
  PRIMARY KEY (`IDExecutiva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

DROP TABLE IF EXISTS `filial`;
CREATE TABLE IF NOT EXISTS `filial` (
  `IDFilial` int(11) NOT NULL AUTO_INCREMENT,
  `IDPessoaFilial` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDFilial`),
  KEY `fk_filial_pessoa_idx` (`IDPessoaFilial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `IDFornecedor` int(11) NOT NULL,
  PRIMARY KEY (`IDFornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`IDFornecedor`) VALUES
(34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `IDGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`IDGrupo`, `descricao`) VALUES
(1, 'Remedio'),
(2, 'Roupas'),
(3, 'Veiculo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `IDMarcas` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDMarcas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`IDMarcas`, `Descricao`) VALUES
(1, 'elsy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `IDPedido` int(11) NOT NULL AUTO_INCREMENT,
  `IDPessoa` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `tipoPedido` int(11) DEFAULT NULL,
  `tipoPagamento` int(11) DEFAULT NULL,
  `situacaoPedido` int(11) DEFAULT NULL,
  `comissao` float DEFAULT NULL,
  `tblPedidocol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDPedido`),
  KEY `fk_pedido_tipoPagamento_idx` (`tipoPagamento`),
  KEY `fk_pedido_tipopedido_idx` (`tipoPedido`),
  KEY `fk_pedido_situacao_idx` (`situacaoPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidoitens`
--

DROP TABLE IF EXISTS `pedidoitens`;
CREATE TABLE IF NOT EXISTS `pedidoitens` (
  `IDPedidoItens` int(11) NOT NULL,
  `IDProduto` int(11) NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `precoUnitario` float(18,2) DEFAULT NULL,
  `precoTotal` float(18,2) DEFAULT NULL,
  `descontoUnitario` float(18,2) DEFAULT NULL,
  `descontoTotal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDPedidoItens`,`IDProduto`),
  KEY `fk_pedidoitens_produto_idx` (`IDProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidopagamento`
--

DROP TABLE IF EXISTS `pedidopagamento`;
CREATE TABLE IF NOT EXISTS `pedidopagamento` (
  `IDPedido` int(11) NOT NULL,
  `dataPagamento` date DEFAULT NULL,
  `tipoPagamento` int(11) DEFAULT NULL,
  `valorParcela` float DEFAULT NULL,
  PRIMARY KEY (`IDPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `IDPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `IDPessoaTipo` int(11) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `nomeFantasia` varchar(45) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `IDTipoCadastro` int(11) NOT NULL,
  PRIMARY KEY (`IDPessoa`),
  KEY `fk_pessoa_pessoatipo_idx` (`IDPessoaTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`IDPessoa`, `IDPessoaTipo`, `codigo`, `nome`, `nomeFantasia`, `data_cadastro`, `situacao`, `comment`, `IDTipoCadastro`) VALUES
(28, 2, '40687', 'Cláudio e Filipe Informática ME', '2wti', '2018-09-11', 'Ativo', 'pj', 0),
(29, 1, '9017', 'Nicolas Thiago Vinicius Souza', 'THIAGO', '2018-09-11', 'Ativo', '', 0),
(30, 1, '8440', 'Fábio Francisco Caldeira', 'CALDEIRA', '2018-09-11', 'Ativo', '', 0),
(31, 1, '24807', 'Luan Kaique Melo', 'Luan - amigo patricia', '2018-09-11', 'Ativo', '', 0),
(32, 1, '', 'Bento César Ribeiro', 'Magrão', '2018-09-11', 'Ativo', '', 0),
(33, 2, '60840', 'Hadassa e Priscila Publicidade e Propaganda M', 'Publicidade Ajax Propaganda ME', '2018-09-11', 'Ativo', '', 2),
(34, 2, '31853', 'Maria José de Oliveira', 'maria', '2018-09-11', 'Ativo', '', 5),
(35, 1, '38361', 'Bruno Vicente Gael Fernandes', 'Bruno Vicente', '2018-09-14', 'Ativo', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoafisica`
--

DROP TABLE IF EXISTS `pessoafisica`;
CREATE TABLE IF NOT EXISTS `pessoafisica` (
  `IDPessoaFisica` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  PRIMARY KEY (`IDPessoaFisica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='		';

--
-- Extraindo dados da tabela `pessoafisica`
--

INSERT INTO `pessoafisica` (`IDPessoaFisica`, `cpf`, `rg`, `dataNascimento`) VALUES
(29, 620798, '10.112.389-9', '1996-06-17'),
(30, 710882, '33.608.788-3', '1996-04-21'),
(31, 389157, '17.723.289-4', '1996-12-23'),
(32, 303294, '17.053.340-2', '2000-07-17'),
(35, 301511, '33.842.041-1', '2015-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoajuridica`
--

DROP TABLE IF EXISTS `pessoajuridica`;
CREATE TABLE IF NOT EXISTS `pessoajuridica` (
  `IDPessoaJuridica` int(11) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `inscricaoEstadual` varchar(45) DEFAULT NULL,
  `InscricaoMunicial` varchar(45) DEFAULT NULL,
  `dataAbertura` date DEFAULT NULL,
  PRIMARY KEY (`IDPessoaJuridica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';

--
-- Extraindo dados da tabela `pessoajuridica`
--

INSERT INTO `pessoajuridica` (`IDPessoaJuridica`, `cnpj`, `inscricaoEstadual`, `InscricaoMunicial`, `dataAbertura`) VALUES
(28, '69.794.718/0001-01', '550.039.466.386', 'ISENTO', '2013-12-27'),
(33, '99.175.930/0001-43', '609.554.236.926', '609.554.236.926', '2011-02-02'),
(34, '12.675.001/0001-15', 'ISENTO', 'ISENTO', '2018-06-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoatipo`
--

DROP TABLE IF EXISTS `pessoatipo`;
CREATE TABLE IF NOT EXISTS `pessoatipo` (
  `IDPessoaTipo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDPessoaTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoatipo`
--

INSERT INTO `pessoatipo` (`IDPessoaTipo`, `descricao`) VALUES
(1, 'Fisica'),
(2, 'Juridica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prazopagamento`
--

DROP TABLE IF EXISTS `prazopagamento`;
CREATE TABLE IF NOT EXISTS `prazopagamento` (
  `IDPrazoPag` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `periodicidade` varchar(45) NOT NULL,
  `parcela` varchar(45) NOT NULL,
  `initDias` varchar(45) NOT NULL,
  PRIMARY KEY (`IDPrazoPag`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prazopagamento`
--

INSERT INTO `prazopagamento` (`IDPrazoPag`, `descricao`, `periodicidade`, `parcela`, `initDias`) VALUES
(1, '30 Dias', '30', '1', '30'),
(2, 'A vista', '1', '1', '1'),
(3, '45 Dias', '45', '1', '45'),
(4, '30/60/90 Dias', '30', '3', '30'),
(5, '15/45 Dias', '30', '2', '15'),
(6, '15/45/60 Dias', '15', '3', '15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco`
--

DROP TABLE IF EXISTS `preco`;
CREATE TABLE IF NOT EXISTS `preco` (
  `IDPreco` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `comissao` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDPreco`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `preco`
--

INSERT INTO `preco` (`IDPreco`, `descricao`, `comissao`) VALUES
(1, 'Tabela Atacado', 2),
(2, 'Tabela Varejo', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `precopessoa`
--

DROP TABLE IF EXISTS `precopessoa`;
CREATE TABLE IF NOT EXISTS `precopessoa` (
  `IDPreco` int(11) NOT NULL,
  `IDPessoa` int(11) NOT NULL,
  PRIMARY KEY (`IDPreco`,`IDPessoa`),
  KEY `fk_precoPessoa_pessoa_idx` (`IDPessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `precopessoa`
--

INSERT INTO `precopessoa` (`IDPreco`, `IDPessoa`) VALUES
(1, 33),
(2, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `precoproduto`
--

DROP TABLE IF EXISTS `precoproduto`;
CREATE TABLE IF NOT EXISTS `precoproduto` (
  `IDPreco` int(11) NOT NULL,
  `IDProduto` int(11) NOT NULL,
  `valor` float(18,2) DEFAULT NULL,
  PRIMARY KEY (`IDPreco`,`IDProduto`),
  KEY `fk_precoProduto_produto_idx` (`IDProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `IDProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `precoCusto` float(18,2) DEFAULT NULL,
  `precoVenda` float(18,2) DEFAULT NULL,
  `situacao` char(1) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `IDGrupo` int(11) DEFAULT NULL,
  `IDCategoria` int(11) DEFAULT NULL,
  `IDMarcas` int(11) DEFAULT NULL,
  `codBarras` varchar(45) DEFAULT NULL,
  `IDfornecedor` int(11) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL,
  `IDUnidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDProduto`),
  KEY `fk_produto_grupo_idx` (`IDGrupo`),
  KEY `fk_produto_marca_idx` (`IDMarcas`),
  KEY `fk_produto_categoria_idx` (`IDCategoria`),
  KEY `fk_produto_fornecedor_idx` (`IDfornecedor`),
  KEY `fk_produto_unidade_idx` (`IDUnidade`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`IDProduto`, `nome`, `codigo`, `precoCusto`, `precoVenda`, `situacao`, `descricao`, `IDGrupo`, `IDCategoria`, `IDMarcas`, `codBarras`, `IDfornecedor`, `foto`, `dataCadastro`, `IDUnidade`) VALUES
(1, 'teste', '123456', 100.00, 200.00, 'A', 'teste', 1, 7, 1, '', 34, '', '2018-09-17', 1),
(2, 'teste dois', '1234', 100.00, 200.00, 'A', 'teste', 1, 7, 1, '45566666', 34, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `revendedor`
--

DROP TABLE IF EXISTS `revendedor`;
CREATE TABLE IF NOT EXISTS `revendedor` (
  `IDRevendedor` int(11) NOT NULL,
  `limite` float(18,2) DEFAULT NULL,
  `tabelaPreco` int(11) DEFAULT NULL,
  `IDEmpresaria` int(11) DEFAULT NULL,
  `IDExecutiva` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDRevendedor`),
  KEY `fk_revendedor_empresaria_idx` (`IDEmpresaria`),
  KEY `fk_revendedor_executiva_idx` (`IDExecutiva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `revendedor`
--

INSERT INTO `revendedor` (`IDRevendedor`, `limite`, `tabelaPreco`, `IDEmpresaria`, `IDExecutiva`) VALUES
(33, 200.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacaopedido`
--

DROP TABLE IF EXISTS `situacaopedido`;
CREATE TABLE IF NOT EXISTS `situacaopedido` (
  `IDSituacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDSituacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipocadastro`
--

DROP TABLE IF EXISTS `tipocadastro`;
CREATE TABLE IF NOT EXISTS `tipocadastro` (
  `IDTipoCadastro` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`IDTipoCadastro`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipocadastro`
--

INSERT INTO `tipocadastro` (`IDTipoCadastro`, `descricao`) VALUES
(1, 'Cliente'),
(2, 'Revendedor'),
(3, 'Empresaria'),
(4, 'Executiva'),
(5, 'Fornecedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopagamento`
--

DROP TABLE IF EXISTS `tipopagamento`;
CREATE TABLE IF NOT EXISTS `tipopagamento` (
  `IDTipoPagamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDTipoPagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipopagamento`
--

INSERT INTO `tipopagamento` (`IDTipoPagamento`, `descricao`) VALUES
(1, 'Dinheiro'),
(2, 'Cheque'),
(3, 'Boleto'),
(4, 'Cartão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopedido`
--

DROP TABLE IF EXISTS `tipopedido`;
CREATE TABLE IF NOT EXISTS `tipopedido` (
  `IDTipoPedido` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDTipoPedido`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipopedido`
--

INSERT INTO `tipopedido` (`IDTipoPedido`, `Descricao`) VALUES
(1, 'Venda'),
(2, 'Venda Consignada'),
(3, 'Devolução');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

DROP TABLE IF EXISTS `unidade`;
CREATE TABLE IF NOT EXISTS `unidade` (
  `IDUnidades` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDUnidades`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`IDUnidades`, `descricao`) VALUES
(1, 'UN'),
(2, 'KG');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_empresaria` FOREIGN KEY (`IDEmpresaria`) REFERENCES `empresaria` (`IDEmpresaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_executiva` FOREIGN KEY (`IDExecutiva`) REFERENCES `executiva` (`IDExecutiva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_pessoa` FOREIGN KEY (`IDCliente`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_revendedor` FOREIGN KEY (`IDRevendedor`) REFERENCES `revendedor` (`IDRevendedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_pessoafisica_contato` FOREIGN KEY (`IDPessoa`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresaria`
--
ALTER TABLE `empresaria`
  ADD CONSTRAINT `fkEmpresaria_pessoa` FOREIGN KEY (`IDEmpresaria`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresaria_executiva` FOREIGN KEY (`IDExecutiva`) REFERENCES `executiva` (`IDExecutiva`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_pessoa` FOREIGN KEY (`IDPessoa`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `fk_estoque_filial` FOREIGN KEY (`IDFilial`) REFERENCES `filial` (`IDFilial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estoque_produto` FOREIGN KEY (`IDProduto`) REFERENCES `produto` (`IDProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estoqueconsignado`
--
ALTER TABLE `estoqueconsignado`
  ADD CONSTRAINT `fk_estoqueConsginado_pessoa` FOREIGN KEY (`IDPessoa`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estoque_filial_estoqueConsignado` FOREIGN KEY (`IDFilial`) REFERENCES `filial` (`IDFilial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estoque_produto_estoqueConsignado` FOREIGN KEY (`IDProduto`) REFERENCES `produto` (`IDProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `executiva`
--
ALTER TABLE `executiva`
  ADD CONSTRAINT `fk_executiva_pessoa` FOREIGN KEY (`IDExecutiva`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `filial`
--
ALTER TABLE `filial`
  ADD CONSTRAINT `fk_filial_pessoa` FOREIGN KEY (`IDPessoaFilial`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fk_fornecedor_pessoa` FOREIGN KEY (`IDFornecedor`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_situacao` FOREIGN KEY (`situacaoPedido`) REFERENCES `situacaopedido` (`IDSituacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_tipoPagamento` FOREIGN KEY (`tipoPagamento`) REFERENCES `tipopagamento` (`IDTipoPagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_tipopedido` FOREIGN KEY (`tipoPedido`) REFERENCES `tipopedido` (`IDTipoPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidoitens`
--
ALTER TABLE `pedidoitens`
  ADD CONSTRAINT `fk_pedidoitens_pedido` FOREIGN KEY (`IDPedidoItens`) REFERENCES `pedido` (`IDPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidoitens_produto` FOREIGN KEY (`IDProduto`) REFERENCES `produto` (`IDProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidopagamento`
--
ALTER TABLE `pedidopagamento`
  ADD CONSTRAINT `fk_pedidoPagamento` FOREIGN KEY (`IDPedido`) REFERENCES `pedido` (`IDPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_pessoatipo` FOREIGN KEY (`IDPessoaTipo`) REFERENCES `pessoatipo` (`IDPessoaTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoafisica`
--
ALTER TABLE `pessoafisica`
  ADD CONSTRAINT `fk_pessoaFisica_Pessoa` FOREIGN KEY (`IDPessoaFisica`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoajuridica`
--
ALTER TABLE `pessoajuridica`
  ADD CONSTRAINT `fk_pessoaJuridica_pessoa` FOREIGN KEY (`IDPessoaJuridica`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `precopessoa`
--
ALTER TABLE `precopessoa`
  ADD CONSTRAINT `fk_precoPessoa_pessoa` FOREIGN KEY (`IDPessoa`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_precoPessoa_preco` FOREIGN KEY (`IDPreco`) REFERENCES `preco` (`IDPreco`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `precoproduto`
--
ALTER TABLE `precoproduto`
  ADD CONSTRAINT `fk_precoProduto_preco` FOREIGN KEY (`IDPreco`) REFERENCES `preco` (`IDPreco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_precoProduto_produto` FOREIGN KEY (`IDProduto`) REFERENCES `produto` (`IDProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`IDCategoria`) REFERENCES `categoria` (`IDCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_fornecedor` FOREIGN KEY (`IDfornecedor`) REFERENCES `fornecedor` (`IDFornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_grupo` FOREIGN KEY (`IDGrupo`) REFERENCES `grupo` (`IDGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_marca` FOREIGN KEY (`IDMarcas`) REFERENCES `marcas` (`IDMarcas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_unidade` FOREIGN KEY (`IDUnidade`) REFERENCES `unidade` (`IDUnidades`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `revendedor`
--
ALTER TABLE `revendedor`
  ADD CONSTRAINT `fk_revendedor_empresaria` FOREIGN KEY (`IDEmpresaria`) REFERENCES `empresaria` (`IDEmpresaria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_revendedor_executiva` FOREIGN KEY (`IDExecutiva`) REFERENCES `executiva` (`IDExecutiva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_revendedor_pessoa` FOREIGN KEY (`IDRevendedor`) REFERENCES `pessoa` (`IDPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
