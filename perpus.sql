/*
 Navicat Premium Data Transfer

 Source Server         : mysqlokal
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : localhost:3306
 Source Schema         : perpus

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 09/07/2018 17:14:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mbuku
-- ----------------------------
DROP TABLE IF EXISTS `mbuku`;
CREATE TABLE `mbuku`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp(0) NULL DEFAULT NULL,
  `useri` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `useru` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ref_genre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ktg` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglbeli` date NULL DEFAULT NULL,
  `hrgbeli` float(255, 0) NULL DEFAULT NULL,
  `tsawal` date NULL DEFAULT NULL,
  `tsakhir` date NULL DEFAULT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mbuku
-- ----------------------------
INSERT INTO `mbuku` VALUES (10, '2018-07-09 16:53:53', NULL, NULL, NULL, '667', 'Oke', '2', 'Sewa', '2018-07-09', 100000, '2018-07-09', '2018-07-12', NULL);
INSERT INTO `mbuku` VALUES (12, '2018-07-09 17:11:36', NULL, NULL, NULL, '1122', 'Petualangan', '3', 'Sewa', '2018-07-09', 19000, '2018-07-09', '2018-07-11', NULL);

-- ----------------------------
-- Table structure for mgenre
-- ----------------------------
DROP TABLE IF EXISTS `mgenre`;
CREATE TABLE `mgenre`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp(0) NULL DEFAULT NULL,
  `dateu` timestamp(0) NULL DEFAULT NULL,
  `useri` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `useru` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mgenre
-- ----------------------------
INSERT INTO `mgenre` VALUES (2, NULL, NULL, NULL, NULL, 'xx', 'xx', 'xx');
INSERT INTO `mgenre` VALUES (3, NULL, NULL, NULL, NULL, '1122', 'Petualangan', 'oke');

SET FOREIGN_KEY_CHECKS = 1;
