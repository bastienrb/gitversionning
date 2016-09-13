/*
Navicat MySQL Data Transfer

Source Server         : Danesia
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : iim_git_soundcloud

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-09-13 02:12:24
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `musics`
-- ----------------------------
DROP TABLE IF EXISTS `musics`;
CREATE TABLE `musics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT 'refers to id in users table',
  `title` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of musics
-- ----------------------------
INSERT INTO `musics` VALUES ('1', '1', 'UN*DEUX - Shopping Day', 'musics/d0dbde0148d66ddf8ae815e014e2a668.1.mp3', '2015-10-01 15:35:05');
INSERT INTO `musics` VALUES ('2', '1', 'FlicFlac - Can\'t Get Away (Bootleg)', 'musics/4baf839a4706fdc8caf286cd35dba410.1.mp3', '2015-10-02 13:41:26');
INSERT INTO `musics` VALUES ('3', '3', 'Wu Tang Clan - Protect Ya Neck', 'musics/4297e49507d04bb995759b3aced264c8.3.mp3', '2016-09-13 02:00:06');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'encrypted passwords are better',
  `picture` varchar(255) NOT NULL COMMENT 'name of profile picture',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Git', 'git@initiation.com', 'password', 'view/profil_pic/e8df43b8a90546b15da8591c89711879.1.jpg', '2015-10-01 13:13:46');
INSERT INTO `users` VALUES ('3', 'bastienrb', 'bastien.robert@wanadoo.fr', 'coucou', 'view/profil_pic/8be11fe0b787f72419fd24a52b8a4679.3.png', '2016-09-12 18:31:43');
