/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3307
Source Database       : bd_productos

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2020-03-19 08:19:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('1', null, 'Alexander', 'test', '45000', null);
INSERT INTO `producto` VALUES ('2', null, 'Moto', 'prueba', '78000', null);
INSERT INTO `producto` VALUES ('3', null, 'Moto', 'prueba', '78000', null);
INSERT INTO `producto` VALUES ('4', null, 'Moto', 'prueba', '78000', null);
SET FOREIGN_KEY_CHECKS=1;
