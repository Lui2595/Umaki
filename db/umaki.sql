/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 100411
Source Host           : localhost:3306
Source Database       : umaki

Target Server Type    : MYSQL
Target Server Version : 100411
File Encoding         : 65001

Date: 2020-12-03 12:40:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL DEFAULT '',
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Sushi', 'El mejor Sushi', 'icon_sushi_cat-min.png');
INSERT INTO `categorias` VALUES ('2', 'Arroz', 'El mejor arroz', 'icon_rice-min.png');
INSERT INTO `categorias` VALUES ('3', 'Ensaladas', 'FIt of Fitness', 'icon_salad-min.png');
INSERT INTO `categorias` VALUES ('4', 'Entradas', 'Para empezar', 'entrada-min.png');
INSERT INTO `categorias` VALUES ('5', 'Combos', 'Para compartir', 'combo-min.png');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `tipo` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  `fecha_pedido` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES ('1', '1', '138.00', '1', '5', '2020-12-01 14:01:37');
INSERT INTO `pedidos` VALUES ('2', '1', '110.00', '1', '5', '2020-12-02 10:00:19');
INSERT INTO `pedidos` VALUES ('3', '1', '110.00', '1', '5', '2020-12-02 10:06:28');
INSERT INTO `pedidos` VALUES ('4', '1', '110.00', '1', '5', '2020-12-02 10:08:27');
INSERT INTO `pedidos` VALUES ('5', '1', '110.00', '1', '5', '2020-12-02 10:09:16');
INSERT INTO `pedidos` VALUES ('6', '1', '110.00', '1', '5', '2020-12-02 10:10:12');
INSERT INTO `pedidos` VALUES ('7', '1', '110.00', '1', '5', '2020-12-02 10:11:02');
INSERT INTO `pedidos` VALUES ('8', '1', '110.00', '1', '5', '2020-12-02 10:11:36');
INSERT INTO `pedidos` VALUES ('9', '1', '110.00', '1', '5', '2020-12-02 10:13:58');
INSERT INTO `pedidos` VALUES ('10', '1', '110.00', '1', '5', '2020-12-02 10:14:40');
INSERT INTO `pedidos` VALUES ('11', '7', '239.00', '1', '5', '2020-12-02 10:23:56');
INSERT INTO `pedidos` VALUES ('12', '7', '239.00', '1', '5', '2020-12-02 10:24:47');
INSERT INTO `pedidos` VALUES ('13', '7', '124.00', '1', '5', '2020-12-03 09:52:59');
INSERT INTO `pedidos` VALUES ('14', '7', '124.00', '1', '5', '2020-12-03 09:55:49');

-- ----------------------------
-- Table structure for pedidos_productos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos_productos`;
CREATE TABLE `pedidos_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(10) DEFAULT NULL,
  `id_producto` int(10) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `precio` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pedidos_productos
-- ----------------------------
INSERT INTO `pedidos_productos` VALUES ('1', '1', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('2', '1', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('3', '1', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('4', '1', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('5', '1', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('6', '1', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('7', '6', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('8', '6', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('9', '7', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('10', '7', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('11', '8', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('12', '8', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('13', '9', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('14', '9', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('15', '10', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('16', '10', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('17', '12', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('18', '12', '1', '1', '99.00');
INSERT INTO `pedidos_productos` VALUES ('19', '12', '3', '1', '85.00');
INSERT INTO `pedidos_productos` VALUES ('20', '13', '7', '1', '69.00');
INSERT INTO `pedidos_productos` VALUES ('21', '13', '5', '1', '55.00');
INSERT INTO `pedidos_productos` VALUES ('22', '14', '7', '1', '69.00');
INSERT INTO `pedidos_productos` VALUES ('23', '14', '5', '1', '55.00');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'vacio.svg',
  `id_categoria` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', 'Boneless', 'Exquisitos trozos de pechuga de pollo, empanizada (350 gr) acompañados de apio, zanahoria y blue cheese \\n Bañados en la salsa de tu prefenencia: BBQ, Bufalo, Lemon peper o Naturales', 'vacio.svg', '4', '99.00');
INSERT INTO `productos` VALUES ('2', 'Papas a la Francesa ', 'Papas a la francesa con un toque de lemon peper y acompañados con salsa catsup', 'vacio.svg', '4', '35.00');
INSERT INTO `productos` VALUES ('3', 'Brochetas', 'Banderillas empanizadas, queso y camarón (3pz), acompañadas con aderezo de chipotle ', 'vacio.svg', '4', '85.00');
INSERT INTO `productos` VALUES ('4', 'Kushiages', 'Empanizados de queso (6 Pz)', 'vacio.svg', '4', '69.00');
INSERT INTO `productos` VALUES ('5', 'Ensalada Sunomono con Cangrejo', 'Cama de finas tiritas de pepino, baladas con nuestra vinagreta dulce, furikake y cangrejo', 'vacio.svg', '3', '55.00');
INSERT INTO `productos` VALUES ('6', 'Ensalada Sunomono con Camarón', 'Cama de finas tiritas de pepino, baladas con nuestra vinagreta dulce, furikake y camarón', 'vacio.svg', '3', '65.00');
INSERT INTO `productos` VALUES ('7', 'Ensalada Sunomono Mixto', 'Cama de finas tiritas de pepino, baladas con nuestra vinagreta dulce, furikake, cangrejo y camarón', 'vacio.svg', '3', '69.00');

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nivel` int(1) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unico` (`correo`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'luisfer_hdz9@hotmail.com', '202cb962ac59075b964b07152d234b70', '0', '2020-11-30 19:23:14');
INSERT INTO `usuarios` VALUES ('3', 'lpruneda@heintec.com.mx', '202cb962ac59075b964b07152d234b70', '3', '2020-11-30 21:08:08');
INSERT INTO `usuarios` VALUES ('4', 'fpruneda@heintec.com.mx', '202cb962ac59075b964b07152d234b70', '3', '2020-11-30 21:09:01');
INSERT INTO `usuarios` VALUES ('5', 'xpruneda@heintec.com.mx', '202cb962ac59075b964b07152d234b70', '3', '2020-11-30 21:09:49');
INSERT INTO `usuarios` VALUES ('6', 'luisfer_hdz92@hotmail.com', '202cb962ac59075b964b07152d234b70', '3', '2020-11-30 21:13:35');
INSERT INTO `usuarios` VALUES ('7', 'rcoss@heintec.com.mx', '202cb962ac59075b964b07152d234b70', '3', '2020-12-02 10:17:08');
INSERT INTO `usuarios` VALUES ('8', 'asd@asd', '202cb962ac59075b964b07152d234b70', '3', '2020-12-03 09:01:00');

-- ----------------------------
-- Table structure for usuarios_datos
-- ----------------------------
DROP TABLE IF EXISTS `usuarios_datos`;
CREATE TABLE `usuarios_datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `telefono` varchar(15) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios_datos
-- ----------------------------
INSERT INTO `usuarios_datos` VALUES ('1', '1', 'Luis ', 'Pruneda', '8441223334', 'Real de Valencia 308', 'Los Reales ', 'Guinda');
INSERT INTO `usuarios_datos` VALUES ('2', '7', 'raul ', 'coss', '1234564', 'xxxxxxx', 'sur', 'asd');
SET FOREIGN_KEY_CHECKS=1;
