create database teste;

use teste;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`) VALUES
(1, 'José'),
(2, 'Maria'),
(3, 'Pedro'),
(4, 'Rafael'),
(5, 'tiago'),
(6, 'Sabrina');


--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);



ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;




