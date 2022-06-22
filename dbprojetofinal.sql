-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2022 às 04:33
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbprojetofinal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `idDoador` int(3) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `doacao1` varchar(50) NOT NULL,
  `doacao2` varchar(50) NOT NULL,
  `doacao3` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `dta_doacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`idDoador`, `nome`, `endereco`, `cidade`, `estado`, `cep`, `email`, `telefone`, `doacao1`, `doacao2`, `doacao3`, `descricao`, `dta_doacao`) VALUES
(23, 'Luis', 'Rua Cabral< 96', 'Porto Alegre', 'RS', 90950430, 'luis@gmail.com', '999237646', '', '', '', '', '0000-00-00'),
(24, 'Fabiola Ff', 'rua prz', 'PORTAO', 'rs', 9081420, 'fab@gmail.com', '999999999', '', '', '', '', '0000-00-00'),
(25, 'Larissa Jjj', 'Rua Gomes, 33', 'Viamão', 'RS', 93920754, 'larissa@gmail.com', '999763427', 'Sofá 3 Lugares', 'Cama Casal', 'Cobertor Casal', 'hhhhhhhhhhhhhhhhh', '2022-06-30'),
(26, 'Mauricio', 'Rua Vitoriano, 813', 'Novo Hamburgo', 'RS', 90943875, 'mauricio@gmail.com', '999564372', 'Cama Solteiro', 'Roupa de Cama Adulto', 'Roupa de Cama Adulto', 'hhhhhhhhhhhh', '2022-06-30'),
(27, 'Joel', 'Rua Leopoldo, 34', 'Porto Alegre', 'RS', 90340997, 'joel@gmail.com', '999567483', 'Sofá 3 Lugares', 'Cama Casal', 'Sofá 2 Lugares', 'jjjjjjjjjjj', '2022-06-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(3, 'Mara Silveira', 'mara@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Vera Amorim', 'vera@gmail.com', '43cca4b3de2097b9558efefd0ecc3588'),
(9, 'Marcio', 'marciomluiz@yahoo.com.br', '202cb962ac59075b964b07152d234b70'),
(10, 'Paula Silva', 'paula@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Josué', 'josue@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Jacinta', 'j@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_token`
--

CREATE TABLE `usuarios_token` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL,
  `expirado_em` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_token`
--

INSERT INTO `usuarios_token` (`id`, `id_usuario`, `hash`, `used`, `expirado_em`) VALUES
(28, 9, '2b3bf5beeb773bdc0c2767e4f618c6a9', 0, '2022-01-14 20:41:00'),
(29, 9, '3c9085ec84c0b244554c0899604170dc', 0, '2022-01-14 20:47:00'),
(30, 9, '8db34a3899f0da11713ab9b08d2af747', 1, '2022-01-14 20:49:00'),
(31, 9, '5d9fcace7087e85ca8f70d08c8aab8da', 0, '2022-01-14 20:53:00'),
(32, 9, 'c433e26e0b7a59974c1d2e203bc8be80', 0, '2022-01-14 20:54:00'),
(33, 9, 'd121d99ae39e3885f8b9e7dcf343317e', 0, '2022-01-14 20:54:00'),
(34, 9, 'ee9e240d1134378f8cacbbf41f806951', 0, '2022-01-14 20:55:00'),
(35, 9, 'd0fb13a9996755634d6c749523e43ce5', 0, '2022-01-14 20:55:00'),
(36, 9, '13b43ffb86044e09dd587ad5334de778', 0, '2022-01-14 20:56:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntario`
--

CREATE TABLE `voluntario` (
  `idVoluntario` int(3) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `voluntario`
--

INSERT INTO `voluntario` (`idVoluntario`, `nome`, `endereco`, `cidade`, `estado`, `cep`, `email`, `telefone`) VALUES
(9, 'Marcio', 'Rua Vargas, 1212', 'Porto Alegre', 'RS', 90150007, 'marcio@gmail.com', '99195284'),
(10, 'Daniela ', 'Rua das Acácias, 309', 'Porto Alegre', 'RS', 90580009, 'daniela@gmail.com', '999472548'),
(11, 'Viviane ', 'Rua das Hortênsias, 21', 'Viamão', 'RS', 90450006, 'viviane@gmail.com', '51998174248'),
(12, 'Fabiana ', 'Rua dos Monges, 1245', 'Canoas', 'RS', 90150007, 'fabiana@gmail.com', '51998253448'),
(14, 'Jacob', 'Rua do Vigário, 72', 'Porto Alegre', 'RS', 91910587, 'jacob@gmail.com', '996142758'),
(15, 'Ivo', 'Rua Cabral, 903', 'Porto Alegre', 'RS', 90170009, 'ivo@gmail.com', '993154648'),
(17, 'Douglas', 'Rua Alfredo, 212', 'Canoas', 'RS', 90230004, 'douglas@gmail.com', '996034536');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`idDoador`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_token`
--
ALTER TABLE `usuarios_token`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`idVoluntario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `idDoador` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios_token`
--
ALTER TABLE `usuarios_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `idVoluntario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
