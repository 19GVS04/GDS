-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2021 at 07:56 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gds`
--

-- --------------------------------------------------------

--
-- Table structure for table `avancados`
--

CREATE TABLE `avancados` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avancados`
--

INSERT INTO `avancados` (`Id`, `Nome`, `Idade`, `Img`) VALUES
(1, 'Pedro Festas', 19, 'festas.jpg'),
(2, 'Francélio', 37, 'fran.jpg'),
(3, 'João Té', 17, 'te.jpg'),
(4, 'André Neves', 20, 'ne.jpg'),
(5, 'Pedro Neves', 19, 'neves.jpg'),
(6, 'Rui Saldanha', 28, 'saldanha.jpg'),
(7, 'David Esteves', 18, 'de.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Telemovel` int(9) NOT NULL,
  `Mensagem` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `defesas`
--

CREATE TABLE `defesas` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defesas`
--

INSERT INTO `defesas` (`Id`, `Nome`, `Idade`, `Img`) VALUES
(1, 'Valter', 36, 'valter.jpg'),
(2, 'Hugo Fernandes', 19, 'hugo.jpg'),
(3, 'João André', 20, 'jandre.jpg'),
(4, 'Benny', 24, 'benny.jpg'),
(5, 'Diogo Viana', 21, 'dviana.jpg'),
(6, 'Carlos Andrade', 19, 'candrade.jpg'),
(7, 'Simão Figueiredo', 27, 'simao.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `equipa_tecnica`
--

CREATE TABLE `equipa_tecnica` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Cargo` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipa_tecnica`
--

INSERT INTO `equipa_tecnica` (`Id`, `Nome`, `Cargo`, `Idade`, `Img`) VALUES
(1, 'João Lopes', 'Treinador', 36, 'mister.jpg'),
(2, 'Quim Zé', 'Treinador Adjunto', 36, 'qz.png'),
(3, 'Diogo Teles', 'Prepardor Físico', 25, 'qz.png');

-- --------------------------------------------------------

--
-- Table structure for table `guarda_redes`
--

CREATE TABLE `guarda_redes` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guarda_redes`
--

INSERT INTO `guarda_redes` (`Id`, `Nome`, `Idade`, `Img`) VALUES
(1, 'Abel Calçada', 30, 'abel.png'),
(2, 'Diogo Nunes', 19, 'nunes.jpg'),
(3, 'João Breda', 18, 'breda.jpg'),
(4, 'Diogo Pais', 20, 'pais.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medios`
--

CREATE TABLE `medios` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medios`
--

INSERT INTO `medios` (`Id`, `Nome`, `Idade`, `Img`) VALUES
(1, 'Ruben Tavares', 20, 'ruben.jpg'),
(2, 'Miguel Messi', 22, 'messi.jpg'),
(3, 'Leo', 19, 'leo.jpg'),
(4, 'Eurico', 21, 'eurico.jpg'),
(5, 'Henrique Santos', 19, 'mini.jpg'),
(6, 'Artur Martins', 27, 'artur.jpg'),
(7, 'Rui Pereira', 28, 'rui.jpg'),
(8, 'Diogo Silva', 17, 'diogo.jpg'),
(9, 'David Ferreira', 19, 'david.jpg'),
(10, 'Gustavo González', 25, 'gg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`Id`, `Email`) VALUES
(1, 'teste@teste.com'),
(2, 'iscac17309@fgim.com'),
(3, 'gdsnews@teste.com');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `Id` int(11) NOT NULL,
  `Data` varchar(256) NOT NULL,
  `Titulo` text NOT NULL,
  `Tema` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL,
  `Completa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`Id`, `Data`, `Titulo`, `Tema`, `Img`, `Completa`) VALUES
(1, '7 JUN', 'Francisco Morais assina por uma época.', 'ÉPOCA 2021-2022 | JUNIORES', 'not1.jpg', 'O Defesa Central / Médio Centro Francisco Morais assina por uma época, tem 17 anos e vem do CD Tondela para um regresso a casa.'),
(2, '22 JUN', '1ª DIVISÃO | GRUPO SUL. Primeiras jornadas.', 'ÉPOCA 2021-2022 | SENIORES', 'not2.jpg', 'Fique a par do GDS e marque já na sua agenda os jogos da nova época.'),
(3, '23 JUN', 'Hugo renova por mais uma época.', 'ÉPOCA 2021-2022 | SENIORES', 'not3.jpg', 'Hugo renova por mais uma épocaHugo renova por mais uma épocaHugo renova por mais uma época'),
(4, '14 AGO', 'João Lopes renova por mais uma época.', 'ÉPOCA 2021-2022 | SENIORES', 'not5.jpg', 'ÉPOCA 2021-2022 | SENIORES\r\nÉPOCA 2021-2022 | SENIORES\r\nÉPOCA 2021-2022 | SENIORES\r\nÉPOCA 2021-2022 | SENIORES\r\nÉPOCA 2021-2022 | SENIORES\r\n'),
(5, '19 AGO', 'TESOURO URBANO renova por mais uma época.', 'ÉPOCA 2021-2022. Patrocinadores.\r\n', 'not4.jpg', 'ÉPOCA 2021-2022\r\nÉPOCA 2021-2022\r\nÉPOCA 2021-2022\r\nÉPOCA 2021-2022\r\nÉPOCA 2021-2022\r\nÉPOCA 2021-2022\r\n'),
(6, '25 AGO', 'Artur renova por mais uma época.', 'ÉPOCA 2021-2022 | SENIORES', 'not6.jpg', 'ÉPOCA 2021-2022 | SENIORESÉPOCA 2021-2022 | SENIORESÉPOCA 2021-2022 | SENIORESÉPOCA 2021-2022 | SENIORESÉPOCA 2021-2022 | SENIORES'),
(7, '7 SET', 'Tijane Baldé renova por mais uma época.', 'ÉPOCA 2021-2022 | JUNIORES', 'tito.jpg', 'Exemploexex'),
(8, '9 SET', 'Gonçalo renova por mais uma época', 'ÉPOCA 2021-2022 | JUNIORES', 'grp.jpg', 'Exemploexex'),
(9, '10 SET', 'Salvador assina por uma época.', 'ÉPOCA 2021-2022 | JUVENIS', 'salvador.jpg', 'Exemploexex');

-- --------------------------------------------------------

--
-- Table structure for table `prox_jogo`
--

CREATE TABLE `prox_jogo` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(256) NOT NULL,
  `Descricao` text NOT NULL,
  `Horas` varchar(256) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prox_jogo`
--

INSERT INTO `prox_jogo` (`Id`, `Titulo`, `Descricao`, `Horas`, `Img`) VALUES
(1, '9 MAI', 'O jogo GDS x VILA CHA DE SA vai ter local no Estevão Faria.', '16H00', 'proxjogo2.jpg'),
(2, '20 DEZ', 'O jogo GDS x CAMPIA vai ter local no Estevão Faria.', '11H00', 'proxjogo1.jpg'),
(3, '13 DEZ', 'O jogo CANAS SENHORIM x GDS vai ter local no Complexo Desportivo Canas de Senhorim.', '11H00', 'Noticia2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `socios`
--

CREATE TABLE `socios` (
  `Id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Data` varchar(255) NOT NULL,
  `Localidade` text NOT NULL,
  `Morada` text NOT NULL,
  `Codigo` varchar(8) NOT NULL,
  `Nif` int(9) NOT NULL,
  `Bi` int(8) NOT NULL,
  `Telemovel` int(9) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Foto` varchar(255) CHARACTER SET swe7 NOT NULL,
  `Socio` enum('+65','estudante','normal','peao','bancada','cativo') NOT NULL,
  `Cobranca` enum('estadiomunicipal','estadioestevaofaria','sede','morada') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socios`
--

INSERT INTO `socios` (`Id`, `Nome`, `Data`, `Localidade`, `Morada`, `Codigo`, `Nif`, `Bi`, `Telemovel`, `Email`, `Foto`, `Socio`, `Cobranca`) VALUES
(1, 'João Bredad', '25/06/1997', 'Coimbra', 'Rua do teste, Coimbra', '3467-76', 454654654, 45775474, 456789012, 'iscac17309@fgim.com', '', '+65', 'estadiomunicipal'),
(2, 'João Bredad', '25/06/1997', 'Coimbra', 'Rua do teste, Coimbra', '3467-76', 867867867, 78678847, 456789012, 'iscac17309@fgim.com', '2-1.png', 'estudante', 'estadiomunicipal');

-- --------------------------------------------------------

--
-- Table structure for table `tabela_classificacao`
--

CREATE TABLE `tabela_classificacao` (
  `Id` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabela_classificacao`
--

INSERT INTO `tabela_classificacao` (`Id`, `Img`) VALUES
(1, 'tabela.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avancados`
--
ALTER TABLE `avancados`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `defesas`
--
ALTER TABLE `defesas`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `equipa_tecnica`
--
ALTER TABLE `equipa_tecnica`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guarda_redes`
--
ALTER TABLE `guarda_redes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `medios`
--
ALTER TABLE `medios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `prox_jogo`
--
ALTER TABLE `prox_jogo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tabela_classificacao`
--
ALTER TABLE `tabela_classificacao`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socios`
--
ALTER TABLE `socios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
