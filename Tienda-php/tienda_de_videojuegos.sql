-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2023 a las 05:19:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda de videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolas`
--

CREATE TABLE `consolas` (
  `nombre` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consolas`
--

INSERT INTO `consolas` (`nombre`, `empresa`, `precio`, `imagen`) VALUES
('PlayStation 4', 'Sony', 400, 'images/ps4.png'),
('Nintendo Switch', 'Nintendo', 300, 'images/switch.png'),
('Xbox One', 'Microsoft', 400, 'images/xbox.png'),
('PC', 'El fabricante varia', 400, 'images/pc.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contraseña`) VALUES
('lautaro', '12345'),
('victor', '54321'),
('profe', '1010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `titulo` varchar(100) NOT NULL,
  `plataforma` varchar(100) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `edad` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`titulo`, `plataforma`, `fecha_lanzamiento`, `precio`, `imagen`, `descripcion`, `edad`) VALUES
('Zelda: Breath of the Wild', 'Nintendo Switch', '2017-03-03', 60, 'images/zelda.png', 'Olvida todo lo que sabes acerca de los juegos de la serie The Legend of Zelda. Explora y descubre un mundo lleno de aventuras en The Legend of Zelda: Breath of the Wild, una nueva saga que rompe los esquemas de la aclamada serie. Viaja a través de praderas y bosques, y alcanza cimas de montañas mientras descubres cómo cayó en la ruina el reino de Hyrule en esta emocionante aventura al aire libre. Ahora con Nintendo Switch, tu aventura será más libre y extensa que nunca. Lleva tu consola y vive una gran aventura como Link de la manera que más te guste.', 12),
('God of War', 'PlayStation 4', '2018-04-20', 50, 'images/god.png', 'Kratos vuelve a ser padre. Como mentor y protector de Atreus, un hijo determinado a ganarse el respeto de su padre, se ve obligado a contener la ira que durante tanto tiempo lo ha caracterizado mientras recorre un mundo lleno de peligros junto a su muchacho.', 18),
('Half Life 2', 'PC', '2004-11-16', 10, 'images/half.png', 'La historia del juego transcurre, aproximadamente, 20 años después de Half-Life. Gordon Freeman aceptó trabajar para G-Man tras derrotar a Nihilanth, tras lo cual fue puesto en un estado de hibernación, donde ha quedado congelado en el tiempo.', 16),
('Grand Theft Auto V', 'PlayStation 4', '2013-09-17', 20, 'images/gta.png', 'Un joven estafador callejero, un ladrón de bancos retirado y un psicópata aterrador se ven involucrados con lo peor y más desquiciado del mundo criminal, del gobierno de los EE. UU. y de la industria del espectáculo, y tendrán que llevar a cabo una serie de peligrosos golpes para sobrevivir en una ciudad implacable en la que no pueden confiar en nadie. Y mucho menos los unos en los otros.', 18),
('Rim World', 'PC', '2013-11-04', 25, 'images/rim.png', 'El juego pone al jugador en el papel de gestor de una nueva colonia en un planeta del borde galáctico, donde los colonos deben sobrevivir a diversos eventos generados de manera aleatoria por la inteligencia artificial cuentacuentos.', 16),
('Halo 5', 'Xbox', '2015-10-27', 20, 'images/halo.png', 'Halo 5: Guardians ofrece experiencias multijugador épicas que incluyen distintos modos, completas herramientas de construcción de niveles y un nuevo capítulo en la saga del Jefe Maestro. Y ahora, con Xbox One X, los jugadores pueden disfrutar de mejoras gráficas, resolución de hasta 4K y mayor fidelidad visual que hacen que el juego luzca mejor que nunca; todo ello manteniendo una tasa constante de 60 imágenes por segundo para conseguir la jugabilidad más fluida posible.', 16),
('Mario kart 8', 'Nintendo Switch', '2014-05-29', 20, 'images/mario.png', 'La jugabilidad principal sigue siendo la misma de las ediciones anteriores de Mario Kart. Incluye el mismo diseño de Karts de Mario Kart 7, se puede planear con ala deltas y conducir bajo el agua como en la entrega anterior. Las motocicletas introducidas en Mario Kart Wii reapareceren. El juego cuenta con mas de 30 personajes jugables.', 3),
('Fifa 23', 'PlayStation 4', '2022-09-27', 40, 'images/fifa.png', 'FIFA 23 es un videojuego de simulación de fútbol publicado por Electronic Arts. Es la trigésima entrega de la serie FIFA desarrollada por EA Sports, y la última entrega bajo el estandarte de FIFA', 3),
('Terraria', 'PC', '2011-05-16', 10, 'images/terraria.png', 'Terraria es un videojuego de acción, aventura y de sandbox producido de forma independiente por el estudio Re-Logic. Tiene características tales como la exploración, la artesanía, la construcción de estructuras y el combate.', 12),
('Bioshock Remastered', 'PlayStation 4', '2007-08-21', 10, 'images/bioshock.png', 'BioShock es un Videojuego de disparos en primera persona con personalizaciones de juegos de rol, elementos de juego de sigilo y fragmentos de survival horror lo que hace al juego prácticamente un sandbox, muy similar a System Shock 2. El jugador toma el rol de Jack, el protagonista, que tiene como objetivo luchar a través de Rapture, al usar armas y plásmidos (modificaciones genéticas), a fin de completar objetivos. En ocasiones, el jugador puede optar por usar tácticas de sigilo para pasar inadvertido por cámaras de seguridad y torretas.', 18),
('Stardew Valley', 'PC', '2016-02-26', 5, 'images/stardew.png', 'En Stardew Valley, el jugador toma el rol de un personaje que se encuentra atrapado en un trabajo de oficina y para escapar de él se va a vivir a la granja de su abuelo, la cual se encuentra en ruinas. La granja se encuentra ubicada en un lugar llamado Pueblo Pelícano.', 12),
('Infamous Second Son', 'PlayStation 4', '2014-03-21', 5, 'images/infamous.png', 'Rodeados por una sociedad que les teme, los superhumanos son cazados sin compasión y enjaulados por el Departamento de Protección Unificada (DUP). Sumérgete en una Seattle clausurada como Delsin Rowe, quién recientemente ha descubierto su poder de superhumano y que ahora puede luchar contra el opresivo DUP. Disfruta tu poder mientras decides cómo poner a prueba tus habilidades y sé testigo de los resultados de tus acciones que tienen un impacto en la ciudad y en las personas a tu alrededor.', 16),
('Call of Duty Black Ops 3', 'PlayStation 4', '2015-11-05', 20, 'images/bo3.png', 'Bienvenido a 2065. Una nueva clase de soldados de operaciones encubiertas surge mientras que la línea que separa a la humanidad de la alta tecnología robótica propia de los conflictos armados se vuelve difusa.', 18),
('Animal Crossing', 'Nintendo Switch', '2001-04-14', 20, 'images/animalcrossing.png', 'El jugador asume el papel de un personaje humano que se muda a una aldea rural poblada de animales antropomorfos, donde vive indefinidamente. El juego es abierto ya que no cuenta con objetivos definidos. Algunas actividades incluyen recolectar artículos, pescar, plantar flores, decorar la vivienda y socializar con los residentes de la aldea. Animal Crossing se caracteriza por el juego en tiempo real, utilizando el reloj y el calendario internos de la consola de videojuegos. Por lo tanto, el paso del tiempo afecta al mundo ficticio y a los eventos que transcurren en él.', 3),
('Viva Piñata', 'Xbox', '2006-11-09', 10, 'images/viva.png', 'Atrae y domestica a tus piñatas favoritas. Hay más de 60 especies en estado salvaje en Isla Piñata.Personaliza todo, desde la hierba que pisas al sombrero que lleva puesto tu piñata.Bienvenido a Isla Piñata. ¡Disfruta de tu estancia!', 3),
('Disco Elysium', 'PC', '2019-10-15', 10, 'images/disco.png', 'Disco Elysium - The Final Cut es un revolucionario juego de rol de mundo abierto. Encarna a un detective con un conjunto único de habilidades a su disposición y un barrio entero que recorrer. Interroga personajes memorables, desentraña casos o acepta sobornos. Sé un héroe o un ser humano desastroso.', 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
