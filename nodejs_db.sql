/*
Navicat MySQL Data Transfer

Source Server         : link2
Source Server Version : 50136
Source Host           : localhost:3306
Source Database       : nodejs_db

Target Server Type    : MYSQL
Target Server Version : 50136
File Encoding         : 65001

Date: 2015-03-26 23:25:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', '111', '1111111111111111111111111111', '2015-03-26 22:04:37');
INSERT INTO `blog` VALUES ('2', '222', '222222', '2015-03-26 00:00:00');
INSERT INTO `blog` VALUES ('3', '2223', '222222', '2015-03-26 00:00:00');
INSERT INTO `blog` VALUES ('4', '2223', '222222', '2015-03-26 00:00:00');
INSERT INTO `blog` VALUES ('10', 'yhyhhhh', 'hhhhh', '2015-03-26 00:00:00');

-- ----------------------------
-- Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', 'nodejs1');
INSERT INTO `test` VALUES ('2', 'nodejs2');
