-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 11:43:51
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_semana7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contenido`
--

CREATE TABLE `tbl_contenido` (
  `CON_ID` int(11) NOT NULL,
  `TEM_ID` int(11) NOT NULL,
  `CON_CONTENIDO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_contenido`
--

INSERT INTO `tbl_contenido` (`CON_ID`, `TEM_ID`, `CON_CONTENIDO`) VALUES
(1, 1, 'El avance de la tecnología en temas de Inteligencia Artificial, partió de manera sustancial desde el 2021 con CHATGPT, La empresa a cargo de esta investigación es OpenIA '),
(2, 2, 'La importancia de machine Learning en la generación de soluciones en el mundo empresarial es de gran importancia ya que es la base de la generación de detecciones con visión artificial.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_libros`
--

CREATE TABLE `tbl_libros` (
  `lib_id` int(11) NOT NULL,
  `tem_id` int(11) NOT NULL,
  `lib_titulo` varchar(50) NOT NULL,
  `lib_codigo` int(11) NOT NULL,
  `lib_precio` int(11) NOT NULL,
  `lib_resumen` varchar(1000) NOT NULL,
  `lib_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_libros`
--

INSERT INTO `tbl_libros` (`lib_id`, `tem_id`, `lib_titulo`, `lib_codigo`, `lib_precio`, `lib_resumen`, `lib_estado`) VALUES
(1, 1, 'Genius Makers', 121212, 15, 'Genius Makers es un libro escrito por Cade Metz y publicado en marzo del 2021. Ha sido recomendado por la revista Forbes como uno de los libros más importantes para leer sobre IA en el presente año. Este libro cuenta, de una forma amigable y divertida, cómo se constituyó el campo de la Inteligencia Artificial de hoy en día.\r\nEl libro habla sobre las bases de la IA y se fundamenta con anécdotas acerca de cómo fue el desarrollo del Deep Learning hasta como lo conocemos el día de hoy.', 1),
(2, 1, 'Proyectos de Inteligencia Artificial', 131313, 16, 'Proyectos de Inteligencia Artificial es una obra publicada en 2020 por Jaime Miralles Solé. A diferencia de muchos libros que vemos en el mercado que se han preocupado por definir los conceptos relacionados a la IA, habla de su trayectoria desde el siglo pasado y qué pasará con ella en un futuro.\r\n\r\nProyectos de Inteligencia Artificial se enfoca en presentar cómo es el proceso para desarrollar un proyecto de IA en una empresa, qué metodologías se utilizan, los recursos materiales e intelectuales y quién debería estar presente en este proceso, es decir, qué perfiles necesitas para desarrollar tu proyecto IA empresarial.', 1),
(3, 2, 'Reinforcement learning', 50520, 20, 'Aunque suene un poco extraño a primera vista, el aprendizaje de refuerzo funciona a través de un sistema de recompensas y de castigos, a partir del cual el programa al que se está entrenando puede aprender de la experiencia para condicionar su funcionamiento.\r\n\r\nTal como si se tratara de seres humanos, este tipo de Machine Learning está basado en los principios de la psicología conductista.', 1),
(4, 2, 'Redes Neuronales & Deep Learning', 261547, 25, 'En este libro se presentan el origen, la motivación, la inspiración, la evolución y las aplicaciones de las redes neuronales artificiales. Se realiza especial hincapié en las técnicas algorítmicas que permiten el entrenamiento de redes neuronales (esto es, los algoritmos que se utilizan para que las redes aprendan y los distintos problemas que hay que solventar para que las redes neuronales artificiales funcionen correctamente en la práctica). También se detallan múltiples técnicas de tipo heurístico que se han propuesto recientemente para construir redes neuronales \"profundas\" (el origen del término deep learning). Aunque las redes neuronales artificiales existían desde los orígenes de la I.A., la eclosión del deep learning se produjo, ya entrado el siglo XXI, tras conseguir igualar, cuando no mejorar, el rendimiento de los seres humanos en la resolución de tareas que, hasta hace poco, se consideraban de nuestro dominio exclusivo.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_portada`
--

CREATE TABLE `tbl_portada` (
  `POR_ID` int(11) NOT NULL,
  `POR_TITULO` varchar(100) NOT NULL,
  `POR_CONTENIDO` varchar(100) DEFAULT NULL,
  `POR_ESTADO` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_portada`
--

INSERT INTO `tbl_portada` (`POR_ID`, `POR_TITULO`, `POR_CONTENIDO`, `POR_ESTADO`) VALUES
(1, 'Tecnología y más', 'El nuevo mundo de la tecnología y su impacto en la sociedad', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tema`
--

CREATE TABLE `tbl_tema` (
  `TEM_ID` int(11) NOT NULL,
  `TEM_TEMA` varchar(100) NOT NULL,
  `TEM_ESTADO` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tema`
--

INSERT INTO `tbl_tema` (`TEM_ID`, `TEM_TEMA`, `TEM_ESTADO`) VALUES
(1, 'Inteligencia Artificial', 1),
(2, 'Machine Learning', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contenido`
--
ALTER TABLE `tbl_contenido`
  ADD PRIMARY KEY (`CON_ID`);

--
-- Indices de la tabla `tbl_libros`
--
ALTER TABLE `tbl_libros`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indices de la tabla `tbl_portada`
--
ALTER TABLE `tbl_portada`
  ADD PRIMARY KEY (`POR_ID`);

--
-- Indices de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  ADD PRIMARY KEY (`TEM_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_contenido`
--
ALTER TABLE `tbl_contenido`
  MODIFY `CON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_libros`
--
ALTER TABLE `tbl_libros`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_portada`
--
ALTER TABLE `tbl_portada`
  MODIFY `POR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  MODIFY `TEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
