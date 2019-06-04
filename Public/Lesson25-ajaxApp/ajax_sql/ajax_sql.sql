/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : ajax_sql

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-09 11:30:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_name` varchar(255) DEFAULT NULL,
  `post_content` text,
  `post_image` text,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'This is a wider card 1', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('2', 'This is a wider card 2', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('3', 'This is a wider card 3', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('4', 'This is a wider card 4', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('5', 'This is a wider card 5', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('6', 'This is a wider card 6', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('7', 'This is a wider card 7', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('8', 'This is a wider card 8', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('9', 'This is a wider card 9', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('10', 'This is a wider card 10', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('11', 'This is a wider card 11', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('12', 'This is a wider card 12', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('13', 'This is a wider card 13', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('14', 'This is a wider card 14', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('15', 'This is a wider card 15', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('16', 'This is a wider card 16', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('17', 'This is a wider card 17', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('18', 'This is a wider card 18', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('19', 'This is a wider card 19', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('20', 'This is a wider card 20', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('21', 'This is a wider card 21', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('22', 'This is a wider card 22', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('23', 'This is a wider card 23', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('24', 'This is a wider card 24', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('25', 'This is a wider card 25', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('26', 'This is a wider card 26', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('27', 'This is a wider card 27', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('28', 'This is a wider card 28', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('29', 'This is a wider card 29', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('30', 'This is a wider card 30', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
INSERT INTO `posts` VALUES ('31', 'This is a wider card 31', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'images/flower.jpg');
