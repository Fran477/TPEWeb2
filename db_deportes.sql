-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 02:22:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_deportes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Barras y Discos', 'Trabajamos con discos y barras de calidad internacional, las barras cuentan con un agarre confortable y son suaves al tacto.'),
(2, 'Bandas', 'Nuestras bandas son ideales para realizar entrenamientos de cardio, además que contamos con materiales de alta calidad muy resistentes.'),
(3, 'Mancuernas', 'Contamos con una amplia variedad de mancuernas, de gran calidad con muy buen agarre.'),
(4, 'Colchonetas', 'Contamos con colchonetas de calidad internacional, las mejores para usar en casa o en un gimnasio.'),
(5, 'Kits de Entrenamiento', 'Ideales para arrancar a entrenarte en tu casa o para llevar, de gran calidad y todo lo que necesitas en un solo kit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `precio`, `descripcion`, `stock`, `imagen`, `id_categoria`) VALUES
(2, 'Barra 1,10 mts c/ topes mariposa (30 mm)', 7500, 'Marca: FITNESAS Modelo: Barra 1,10 mts - Cromada - Maciza Material: Hierro macizo - Agarre moleteado Peso Aproximado: 6 kg Diámetro: 30 mm', 20, 'https://http2.mlstatic.com/D_NQ_NP_808630-MLA31351581616_072019-O.jpg', 1),
(4, 'Disco Bumper Fitnesas Olimpico 20 kg (50 mm)', 5400, 'Modelo: Disco de Bumper Material: Caucho Diámetro interno: 50 mm Color: Negro Peso: 20 kg', 40, 'https://fitnesas.com.ar/img/Producto/1900/disco-bumper-fitnesas-olimpico-20-kg-50-mm5500-big-60c2930f23721.jpeg', 1),
(5, 'Mini Banda plana Circular Latex 25 cm', 2800, 'Marca: FITNESASModelo: Banda CircularTamaño de la banda: 25 cm x 5cmMaterial: Banda de látexTensión Suave: Color RosaTensión Media: Color GrisTensión Fuerte: Color NaranjaTensión Extra Fuerte: Color NegroIdeal para trabajos de piernas', 53, 'https://fitnesas.com.ar/img/Producto/1960/mini-banda-plana-circular-latex-25-cm1397-big-60c293302bbc1.jpeg', 2),
(12, 'Disco 5 Kg Con Agarres Tipo Body Pump', 1000, 'Discos de plasticos ideales para tus entrenamientos en casa o para llevar, de la mejor calidad del mercado.', 45, 'https://http2.mlstatic.com/D_NQ_NP_682917-MLA45015345334_022021-V.jpg', 1),
(17, 'Set 5 Bandas Elásticas latex Con Manijas Fitnesas', 3090, 'Banda de látex Ideal para estiramiento, fortalecimiento, tonificación, rehabilitación. Recomendada para actividades de Yoga, Pilates, Fitness, etc. Abdominales, brazos, piernas y espalda. Ultra - Resistente y duradera. Ideal para ejercicios en casa. Mejora movimiento y flexibilidad. Infinidad de ejercicios! Nos permite realizar cientos de movimientos, y complementar todo tipo de actividad.', 56, 'https://fitnesas.com.ar/img/Producto/89c53a64-b2a9-05ab-a825-630d787999f9/banda-con-manija-09-60f1803f82c68.jpeg', 2),
(18, 'Super banda Dual Power band 21 mm', 1450, 'Latex de alta resistencia Utilizada para realizar dominadas, elongar, hacer trabajos de fuerza, resistencia, potencia etc Ideal para crossfit y entrenamiento funcional Material elástico resistente para soportar peso Excelente calidad Elástica y circular Material elástico resistente para soportar peso', 36, 'https://fitnesas.com.ar/img/Producto/1908/super-banda-power-band-dual-21-mm5866-big-60c29313c2f7f.jpeg', 2),
(19, 'Kit de Barra + Mancuernas + 24kg', 9379, 'Discos plásticos con agarre para ejercicio Incluye: 1 BARRA 1,30 MTS 2 MANCUERNAS 2 DISCOS 5 KG 4 DISCOS DE 2,5 KG 4 DISCOS DE 1 KG 6 TOPES', 62, 'https://fitnesas.com.ar/img/Producto/2027/kit-de-barra-mancuernas-24kg2458-big-60c29365c595e.jpeg', 1),
(20, 'Disco Fundicion 1,25 kg (30 mm)', 475, 'Modelo: Disco con peso Material: Fundición Diámetro interno: 30mm Color: Negro Peso: 1,25 kg Ideal para mancuernas cromadas', 44, 'https://fitnesas.com.ar/img/Producto/1758/disco-fundicion-60c781545f6f8.jpeg', 1),
(21, 'Mancuerna cromada maciza c/ rosca', 1550, 'Material: Metal Peso aproximado: 2,5 kg aprox Diametro: 30 mm Tamaño de la barra: 36 cm aprox Precio por unidad Cromada Agarre moleteado antideslizante', 25, 'https://fitnesas.com.ar/img/Producto/1750/mancuerna-cromada-maciza-c-rosca3809-big-60c292bf9544f.jpeg', 3),
(22, 'Mancuerna Hexagonal cromada Caucho 5 kg', 3490, 'Modelo: Mancuerna Hexagonal - IMPORTADA Material: Goma de alta densidad Color: Negro Peso: 5 kg Precio por unidad Forma de la mancuerna Hexagonal Mancuerna Hexagonal con punta de goma Cromadas Engomadas Agarre antideslizante', 56, 'https://fitnesas.com.ar/img/Producto/2003/mancuerna-hexagonal-cromada-caucho-5-kg9603-big-60c293573f53c.jpeg', 3),
(23, 'Mancuerna Hueca Tipo Body', 730, 'Marca: FITNESAS Modelo: Mancuerna hueca Medida: 35 cm de largo Diámetro: 25 mm Material: Hierro - Hueca Incluye topes mariposa', 25, 'https://fitnesas.com.ar/img/Producto/23179e74-5f64-937e-fb94-0b5d8cea03a6/Body-pump1-60dc98a5d077c.png', 3),
(24, 'Colchoneta 1 x 0,50 x 0,04 Polex alta densidad 90 kg', 2145, 'Largo: 100 cm Ancho: 50 cm Espesor: 4 cm Densidad: 90 kg/mÂ³ Material de la cobertura: Tela impermeable Materiales del relleno: Polex de alta densidad Funda reforzada, totalmente lavable e impermeables (ambas caras) Con cierre Color: varios (Sujeto a disponibilidad)', 23, 'https://fitnesas.com.ar/img/Producto/b4cb0aa6-0b0a-fa05-4e06-58522a0e91e8/50productos-Mesa-de-trabajo-1-60ff0016a41b1.jpeg', 4),
(25, 'Colchoneta Plegable', 1188, 'Marca: FITNESAS Largo: 100 cm Ancho: 42 cm Espesor: 3 cm Densidad: 70 kg Material de la cobertura: Tela impermeable Materiales del relleno: : Goma espuma Ideal para trasladar y guardar', 40, 'https://fitnesas.com.ar/img/Producto/1842/colchoneta-plegable-fitnesas3648-big-60c292ef27e97.jpeg', 4),
(26, 'Colchoneta 1 x 0,50 x 0,04 Foam alta densidad 70 kg', 1330, 'Largo: 100 cm Ancho: 50 cm Espesor: 4 cm Densidad: 70 kg/mÂ³ Material de la cobertura: Tela impermeable vinilica Materiales del relleno: : Goma espuma de alta densidad Funda reforzada, totalmente lavable e impermeables (ambas caras) Con cierre', 32, 'https://fitnesas.com.ar/img/Producto/1883/colchoneta-1-x-050-x-004-compactado-alta-densidad-70kg-vinilica5462-big-60c293054e476.jpeg', 4),
(27, 'Kit Bandas + Step!', 1998, 'Marca: FITNESAS Modelo: Kit Bandas + Step Color: Varios Incluye: 1 Step Funcional (37 cm x 27 cm x 13 cm) 1 Banda Circular Látex 30 cm 1 Banda con manijas', 56, 'https://fitnesas.com.ar/img/Producto/2012/kit-bandas-step-9137-big-60c2935e6abb9.jpeg', 5),
(28, 'Kit 3 kg', 3886, 'Marca: FITNESAS Modelo: Kit 3 kg Color: Varios Incluye: 1 Colchonenta 1 x 0,40 x 0,03 ALTA DENSIDAD 90 kg - Plegable al medio - (Polex) 2 Mancuernas PVC 3 kg 1 Par Tobilleras 3 kg (Ribeteadas o Regulables sujeto a disponibilidad)', 28, 'https://fitnesas.com.ar/img/Producto/2022/kit-3-kg3855-big-60c29363f3892.jpeg', 5),
(29, 'Kit Bandas + Colchoneta!', 2196, 'Marca: FITNESAS Modelo: Kit Bandas + Colchoneta Color: Varios Incluye: 1 Colchoneta Plegable 1 Banda Circular Látex 30 cm 1 Banda con manijas', 41, 'https://fitnesas.com.ar/img/Producto/2014/kit-bandas-colchoneta-6314-big-60c293602da7d.jpeg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contraseña` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `contraseña`) VALUES
(1, 'Francisco', '$2y$10$zIyg/g1QPkjx9I9pfttKAu2bOtTZJJzMZv84sFQORx2FuYubyjtN2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
