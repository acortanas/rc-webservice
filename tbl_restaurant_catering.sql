/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : website

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 14/06/2019 23:31:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_restaurant_catering
-- ----------------------------
DROP TABLE IF EXISTS `tbl_restaurant_catering`;
CREATE TABLE `tbl_restaurant_catering`  (
  `rc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rc_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rc_cuisine` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rc_currency` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rc_average_cost` int(11) NOT NULL,
  `rc_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rc_address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rc_city` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`rc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_restaurant_catering
-- ----------------------------
INSERT INTO `tbl_restaurant_catering` VALUES (1, 'Catering Rakyat', 'Indonesian, Sunda', 'IDR', 30000, '082111888792', 'Jl. Lincar II No. 17, Bogor Utara', 'Bogor');
INSERT INTO `tbl_restaurant_catering` VALUES (2, 'RM Lily Catering', 'Indonesian-Medan', 'IDR', 35000, '(021) 5678752', 'Komplek Taman Duta Mas, Jl. Tubagus Angke, Jelamba', 'Jakarta');
INSERT INTO `tbl_restaurant_catering` VALUES (3, 'Bunga Rampai', 'Indonesian', 'IDR', 350000, '(021) 31926224', 'Jl. Teuku Cik Ditiro No. 35, Menteng', 'Jakarta');
INSERT INTO `tbl_restaurant_catering` VALUES (4, 'WAKI Japanese BBQ Dining', 'Japanese, Grill, BBQ, Korean, ', 'IDR', 150000, '081290109624', 'Lantai 1, Jl. Tanjung Karang No. 5, Thamrin', 'Jakarta');
INSERT INTO `tbl_restaurant_catering` VALUES (5, 'Claypot Popo', 'Chinese, Asian', 'IDR', 50000, '085959939889', 'Jl. H. Agus Salim No. 23A, Menteng', 'Jakarta');
INSERT INTO `tbl_restaurant_catering` VALUES (6, 'HERITAGE by Tan Goei', 'Belanda, Indonesian', 'IDR', 200000, '(021) 3155057', 'Jl. Teuku Cik Ditiro No. 3, Menteng', 'Jakarta');

SET FOREIGN_KEY_CHECKS = 1;
