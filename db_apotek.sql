/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : db_apotek

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 29/08/2020 17:19:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for detail_penjualan
-- ----------------------------
DROP TABLE IF EXISTS `detail_penjualan`;
CREATE TABLE `detail_penjualan`  (
  `no_struk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_obat` int(11) NULL DEFAULT NULL,
  `qty` int(11) NULL DEFAULT NULL,
  `sub_total` double NULL DEFAULT NULL,
  INDEX `no_struk`(`no_struk`) USING BTREE,
  CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`no_struk`) REFERENCES `penjualan` (`no_struk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for obat
-- ----------------------------
DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 497 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of obat
-- ----------------------------
INSERT INTO `obat` VALUES (2, 'ABBOCATH 18', 'PCS', 14950);
INSERT INTO `obat` VALUES (3, 'ABBOCATH 20', 'PCS', 14950);
INSERT INTO `obat` VALUES (4, 'ABSOLUTE', 'PCS', 14400);
INSERT INTO `obat` VALUES (5, 'ACETON 60ML', 'BOTOL', 6750);
INSERT INTO `obat` VALUES (6, 'ACIFAR CR 5 GR', 'TUBE', 6400);
INSERT INTO `obat` VALUES (7, 'ACITRAL TAB', 'STRIP', 1380);
INSERT INTO `obat` VALUES (8, 'ACLONAC GEL', 'TUBE', 33902);
INSERT INTO `obat` VALUES (9, 'ACNOL 10ML', 'PCS', 9517);
INSERT INTO `obat` VALUES (10, 'ACTIFED H 60ML', 'BOTOL', 29040);
INSERT INTO `obat` VALUES (11, 'ACTIFED K 60ML', 'BOTOL', 26289);
INSERT INTO `obat` VALUES (12, 'ACTIFED M 60ML', 'BOTOL', 29040);
INSERT INTO `obat` VALUES (13, 'ACTIRAL', 'BOTOL', 1600);
INSERT INTO `obat` VALUES (14, 'ACYCLOVIR CR 5GR INF', 'TUBE', 3900);
INSERT INTO `obat` VALUES (15, 'ACYCLOVIR CR 5GR KF', 'TUBE', 4095);
INSERT INTO `obat` VALUES (16, 'ACYCLOVIR TAB 200MG', 'TABLET', 408);
INSERT INTO `obat` VALUES (17, 'ACYCLOVIR TAB 200MG INF', 'TABLET', 500);
INSERT INTO `obat` VALUES (18, 'ACYCLOVIR TAB 400MG HEX', 'TABLET', 559);
INSERT INTO `obat` VALUES (19, 'ACYCLOVIR TAB 400MG INF', 'TABLET', 714);
INSERT INTO `obat` VALUES (20, 'ADEM SARI', 'PACK', 1174);
INSERT INTO `obat` VALUES (21, 'ADEM SARI @1', 'PCS', 1507);
INSERT INTO `obat` VALUES (22, 'ADEM SARI @24', 'PCS', 1289);
INSERT INTO `obat` VALUES (23, 'ADEM SARI FRESH @6', 'BOX', 1241);
INSERT INTO `obat` VALUES (24, 'ADI CUP 240ML', 'BOTOL', 680);
INSERT INTO `obat` VALUES (25, 'AFI FLU TAB @1000', 'TABLET', 360);
INSERT INTO `obat` VALUES (26, 'AFIFLU TAB', 'TABLET', 384);
INSERT INTO `obat` VALUES (27, 'AFIRHEUMA', 'KAPS', 313);
INSERT INTO `obat` VALUES (28, 'AFITRACIN 10 ML', 'BOTOL', 1560);
INSERT INTO `obat` VALUES (29, 'AFITSON CENGKEH', 'PCS', 3450);
INSERT INTO `obat` VALUES (30, 'AGUARIA 330ML', 'BOTOL', 1707);
INSERT INTO `obat` VALUES (31, 'AILIN TM 5ML', 'BOTOL', 5009);
INSERT INTO `obat` VALUES (32, 'AINIE SBN SIRIH 110 ML', 'BOTOL', 5959);
INSERT INTO `obat` VALUES (33, 'AKURAT', 'PCS', 9900);
INSERT INTO `obat` VALUES (34, 'AKURAT COMPACT', 'PACK', 15813);
INSERT INTO `obat` VALUES (35, 'ALANG SARI @7', 'PCS', 1011);
INSERT INTO `obat` VALUES (36, 'ALAT PEMANCUNG HIDUNG', 'PCS', 10400);
INSERT INTO `obat` VALUES (37, 'ALAT PEMB. KOMEDO', 'PCS', 10400);
INSERT INTO `obat` VALUES (38, 'ALAT PEMB. TELINGA', 'PCS', 10400);
INSERT INTO `obat` VALUES (39, 'ALBA PASTILES', 'PACK', 8000);
INSERT INTO `obat` VALUES (40, 'ALBI GURAH', 'BOTOL', 26450);
INSERT INTO `obat` VALUES (41, 'ALBIGURAA 18 KAPS ', 'BOTOL', 16720);
INSERT INTO `obat` VALUES (42, 'ALBIGURAA 25 KAPS ALBIRUNI', 'BOTOL', 22880);
INSERT INTO `obat` VALUES (43, 'ALBOTHYL 10 ML', 'BOTOL', 30993);
INSERT INTO `obat` VALUES (44, 'ALBOTHYL 5ML', 'BOTOL', 19888);
INSERT INTO `obat` VALUES (45, 'ALBU GURAH JUMBO', 'BOTOL', 51750);
INSERT INTO `obat` VALUES (46, 'ALCO PLUS DMP 100 ML', 'BOTOL', 29095);
INSERT INTO `obat` VALUES (47, 'ALERDEX TAB', 'TABLET', 1224);
INSERT INTO `obat` VALUES (48, 'ALKOHOL 100ML ONEMED', 'BOTOL', 3000);
INSERT INTO `obat` VALUES (49, 'ALKOHOL 70% 100 ML AFI', 'BOTOL', 3840);
INSERT INTO `obat` VALUES (50, 'ALKOHOL 70% 100 ML HAKO', 'BOTOL', 2960);
INSERT INTO `obat` VALUES (51, 'ALKOHOL 70% 100 ML SEINO', 'BOTOL', 3000);
INSERT INTO `obat` VALUES (52, 'ALKOHOL 70% 100ML BERLICO', 'BOTOL', 3789);
INSERT INTO `obat` VALUES (53, 'ALKOHOL 70% 100ML NUFA', 'BOTOL', 3551);
INSERT INTO `obat` VALUES (54, 'ALKOHOL 70% 300 ML ONEMED', 'BOTOL', 9000);
INSERT INTO `obat` VALUES (55, 'ALKOHOL 70% 300ML AFI', 'BOTOL', 13585);
INSERT INTO `obat` VALUES (56, 'ALKOHOL SWAB', 'PCS', 230);
INSERT INTO `obat` VALUES (57, 'ALLERGIL CR 2% 5GR', 'TUBE', 3749);
INSERT INTO `obat` VALUES (58, 'ALLERIN EXP 60 ML', 'BOTOL', 12548);
INSERT INTO `obat` VALUES (59, 'ALLERON TAB', 'TABLET', 158);
INSERT INTO `obat` VALUES (60, 'ALLETROL TM 5 ML', 'BOTOL', 12279);
INSERT INTO `obat` VALUES (61, 'ALLETROL ZM 3,5GR', 'TUBE', 10382);
INSERT INTO `obat` VALUES (62, 'ALLOPURINOL 100 MG', 'TABLET', 165);
INSERT INTO `obat` VALUES (63, 'ALLOPURINOL 300 MG', 'TABLET', 319);
INSERT INTO `obat` VALUES (64, 'ALLOPURINOL TAB 100MG FM', 'TABLET', 172);
INSERT INTO `obat` VALUES (65, 'ALMINA KIDS', 'BOTOL', 35200);
INSERT INTO `obat` VALUES (66, 'ALMINA MADU JINTEN', 'BOTOL', 50600);
INSERT INTO `obat` VALUES (67, 'ALOFAR TAB 300MG', 'TABLET', 465);
INSERT INTO `obat` VALUES (68, 'ALPARA 60ML', 'BOTOL', 9331);
INSERT INTO `obat` VALUES (69, 'ALPARA TAB', 'TABLET', 578);
INSERT INTO `obat` VALUES (70, 'ALPHARA 60ML', 'BOTOL', 11963);
INSERT INTO `obat` VALUES (71, 'ALVIT DROP', 'PCS', 9200);
INSERT INTO `obat` VALUES (72, 'AMBEVEN CAP', 'STRIP', 11845);
INSERT INTO `obat` VALUES (73, 'AMBROXOL SYR 60 ML', 'BOTOL', 4125);
INSERT INTO `obat` VALUES (74, 'AMBROXOL TAB', 'TABLET', 156);
INSERT INTO `obat` VALUES (75, 'AMINOPHYLLIN 200MG @1000', 'TABLET', 180);
INSERT INTO `obat` VALUES (76, 'AMLODIPIN TAB 10 MG HEX', 'TABLET', 2646);
INSERT INTO `obat` VALUES (77, 'AMLODIPIN TAB 10 MG INDO', 'TABLET', 2115);
INSERT INTO `obat` VALUES (78, 'AMLODIPIN TAB 10 MG SOHO', 'TABLET', 1150);
INSERT INTO `obat` VALUES (79, 'AMLODIPIN TAB 5 MG', 'TABLET', 1199);
INSERT INTO `obat` VALUES (80, 'AMLODIPIN TAB 5 MG DEXA', 'TABLET', 625);
INSERT INTO `obat` VALUES (81, 'AMLODIPIN TAB 5 MG HEX', 'TABLET', 3025);
INSERT INTO `obat` VALUES (82, 'AMLODIPIN TAB 5 MG INF', 'BOX', 1200);
INSERT INTO `obat` VALUES (83, 'AMLODIPIN TAB 5 MG KF', 'TABLET', 1200);
INSERT INTO `obat` VALUES (84, 'AMOXSAN CAP 500MG', 'CAP', 3875);
INSERT INTO `obat` VALUES (85, 'AMOXSAN DROP', 'BOTOL', 26441);
INSERT INTO `obat` VALUES (86, 'AMOXSAN DRY SYR 125MG', 'BOTOL', 24326);
INSERT INTO `obat` VALUES (87, 'AMOXSAN SYR 60ML', 'BOTOL', 37709);
INSERT INTO `obat` VALUES (88, 'AMOXYCILLIN SYR 60ML', 'BOTOL', 4625);
INSERT INTO `obat` VALUES (89, 'AMOXYCILLIN TAB 500 MG', 'TABLET', 363);
INSERT INTO `obat` VALUES (90, 'AMOXYCILLIN TAB 500 MG BERNO', 'TABLET', 351);
INSERT INTO `obat` VALUES (91, 'AMOXYCILLIN TAB 500 MG INDO', 'TABLET', 481);
INSERT INTO `obat` VALUES (92, 'AMOXYCILLIN TAB 500 MG KF', 'TABLET', 481);
INSERT INTO `obat` VALUES (93, 'AMOXYCILLIN TAB 500 MG NOVA', 'TABLET', 450);
INSERT INTO `obat` VALUES (94, 'AMOXYCILLIN TAB 500MG RAMA', 'TABLET', 429);
INSERT INTO `obat` VALUES (95, 'AMPICILIN TAB 500 MG INDO', 'TABLET', 463);
INSERT INTO `obat` VALUES (96, 'AMPICILLIN TAB 500 MG ERITA', 'TABLET', 377);
INSERT INTO `obat` VALUES (97, 'AMPICILLIN TAB 500 MG KF', 'TABLET', 491);
INSERT INTO `obat` VALUES (98, 'AMPICILLIN TAB 500 MG MEPRO', 'TABLET', 481);
INSERT INTO `obat` VALUES (99, 'AMPICILLIN TAB 500 MG RAMA', 'TABLET', 429);
INSERT INTO `obat` VALUES (100, 'AMURATEN', 'SCT', 2990);
INSERT INTO `obat` VALUES (101, 'ANABION 60 ML', 'BOTOL', 6072);
INSERT INTO `obat` VALUES (102, 'ANABION DHA 60 ML', 'BOTOL', 7590);
INSERT INTO `obat` VALUES (103, 'ANACETIN SYR 60ML', 'BOTOL', 6324);
INSERT INTO `obat` VALUES (104, 'ANAKONIDIN OBH 30 ML', 'BOTOL', 6148);
INSERT INTO `obat` VALUES (105, 'ANAKONIDIN OBH 60ML', 'BOTOL', 9981);
INSERT INTO `obat` VALUES (106, 'ANAKONIDIN SYR 30ML', 'BOTOL', 6041);
INSERT INTO `obat` VALUES (107, 'ANAKONIDIN SYR 60ML', 'BOTOL', 9981);
INSERT INTO `obat` VALUES (108, 'ANASTAN TAB', 'TABLET', 540);
INSERT INTO `obat` VALUES (109, 'ANATON 60 ML', 'BOTOL', 4950);
INSERT INTO `obat` VALUES (110, 'ANATON TAB', 'TABLET', 396);
INSERT INTO `obat` VALUES (111, 'ANDALAN LAKTASI', 'STRIP', 11385);
INSERT INTO `obat` VALUES (112, 'ANDALAN PIL KB', 'STRIP', 4025);
INSERT INTO `obat` VALUES (113, 'ANLENE ACT CHO 100GR', 'PACK', 12075);
INSERT INTO `obat` VALUES (114, 'ANLENE ACT CHO 250GR', 'PACK', 27972);
INSERT INTO `obat` VALUES (115, 'ANLENE ACT VAN 100GR', 'PACK', 11558);
INSERT INTO `obat` VALUES (116, 'ANLENE ACT VAN 250GR', 'PACK', 27810);
INSERT INTO `obat` VALUES (117, 'ANLENE ACTIFIT 250GR PLN', 'PACK', 27783);
INSERT INTO `obat` VALUES (118, 'ANLENE ACTIVIT 600 GR PLAIN', 'PACK', 62501);
INSERT INTO `obat` VALUES (119, 'ANLENE GOLD CHO 100GR', 'PACK', 11610);
INSERT INTO `obat` VALUES (120, 'ANLENE GOLD CHO 250GR', 'PACK', 31212);
INSERT INTO `obat` VALUES (121, 'ANLENE GOLD PLAIN 250GR', 'PACK', 31212);
INSERT INTO `obat` VALUES (122, 'ANLENE GOLD PLN 100GR', 'PACK', 11610);
INSERT INTO `obat` VALUES (123, 'ANLENE GOLD VAN 250GR', 'PACK', 31212);
INSERT INTO `obat` VALUES (124, 'ANLENE TOTAL 200GR PLN', 'PACK', 33480);
INSERT INTO `obat` VALUES (125, 'ANLENE TOTAL CHO 200GR', 'PACK', 32832);
INSERT INTO `obat` VALUES (126, 'ANLENE TOTAL VAN 200GR', 'PACK', 32832);
INSERT INTO `obat` VALUES (127, 'ANMUM MATERNA CHO 80GR', 'PACK', 12708);
INSERT INTO `obat` VALUES (128, 'ANMUM MATERNA PLAIN 80GR', 'PACK', 11558);
INSERT INTO `obat` VALUES (129, 'ANMUM MATERNA VAN MG 200 GR', 'PACK', 36369);
INSERT INTO `obat` VALUES (130, 'ANMUM SB CHO 200 GR', 'PACK', 38726);
INSERT INTO `obat` VALUES (131, 'ANMUM SB PLAIN 200 GR', 'PACK', 35829);
INSERT INTO `obat` VALUES (132, 'ANTALGIN TAB', 'TABLET', 325);
INSERT INTO `obat` VALUES (133, 'ANTALGIN TAB BERLICO', 'TABLET', 322);
INSERT INTO `obat` VALUES (134, 'ANTALGIN TAB INDO', 'TABLET', 194);
INSERT INTO `obat` VALUES (135, 'ANTANGIN CAIR', 'SCT', 1824);
INSERT INTO `obat` VALUES (136, 'ANTANGIN JRG BOX @10', 'SCT', 1872);
INSERT INTO `obat` VALUES (137, 'ANTANGIN JRG TAB', 'STRIP', 1824);
INSERT INTO `obat` VALUES (138, 'ANTANGIN PERMEN HONEY MINT', 'PCS', 1040);
INSERT INTO `obat` VALUES (139, 'ANTASIDA DOEN 60 ML KF', 'BOTOL', 4620);
INSERT INTO `obat` VALUES (140, 'ANTASIDA DOEN 60ML FM', 'BOTOL', 4428);
INSERT INTO `obat` VALUES (141, 'ANTASIDA DOEN TAB ERRELA', 'TABLET', 216);
INSERT INTO `obat` VALUES (142, 'ANTASIDA DOEN TAB KF', 'TABLET', 190);
INSERT INTO `obat` VALUES (143, 'ANTASIDA SYR 60 ML SAMP', 'BOTOL', 3558);
INSERT INTO `obat` VALUES (144, 'ANTASIDA TAB @100', 'TABLET', 176);
INSERT INTO `obat` VALUES (145, 'ANTASIDA TAB @1000', 'TABLET', 35);
INSERT INTO `obat` VALUES (146, 'ANTASIDA TAB AFI', 'TABLET', 102);
INSERT INTO `obat` VALUES (147, 'ANTASIDA TAB FM', 'TABLET', 146);
INSERT INTO `obat` VALUES (148, 'ANTIMO ANAK JERUK 10’S', 'SCT', 1012);
INSERT INTO `obat` VALUES (149, 'ANTIMO ANAM STRW 10’S', 'SCT', 1012);
INSERT INTO `obat` VALUES (150, 'ANTIMO TAB', 'STRIP', 3960);
INSERT INTO `obat` VALUES (151, 'ANTIPLAQUE PG 75GR', 'PCS', 15275);
INSERT INTO `obat` VALUES (152, 'ANTIZ GEL 60ML JRK', 'BOTOL', 6565);
INSERT INTO `obat` VALUES (153, 'ANTIZ GEL BT60 FRESH', 'BOTOL', 6565);
INSERT INTO `obat` VALUES (154, 'ANTIZA 60 ML', 'BOTOL', 16731);
INSERT INTO `obat` VALUES (155, 'ANTIZA TAB', 'TABLET', 928);
INSERT INTO `obat` VALUES (156, 'APIALYS DROP 10ML', 'BOTOL', 31625);
INSERT INTO `obat` VALUES (157, 'APIALYS SYR 60ML', 'BOTOL', 28175);
INSERT INTO `obat` VALUES (158, 'AQUA DANONE 1500ML', 'BOTOL', 4440);
INSERT INTO `obat` VALUES (159, 'AQUARIA BTL 330 ML', 'BOTOL', 1861);
INSERT INTO `obat` VALUES (160, 'AQUARIA BTL 600 ML', 'BOTOL', 2360);
INSERT INTO `obat` VALUES (161, 'ARM SLIM (L)', 'PCS', 28600);
INSERT INTO `obat` VALUES (162, 'ARM SLIM (M)', 'PCS', 28600);
INSERT INTO `obat` VALUES (163, 'ARM SLIM (S)', 'PCS', 28600);
INSERT INTO `obat` VALUES (164, 'AROMATIC', 'BOTOL', 9945);
INSERT INTO `obat` VALUES (165, 'ARTHRIFEN PLUS TAB', 'TABLET', 734);
INSERT INTO `obat` VALUES (166, 'ARTHRIFEN SYR', 'BOTOL', 17710);
INSERT INTO `obat` VALUES (167, 'ASAM MEFENAMAT TAB 500 MG AFI', 'TABLET', 203);
INSERT INTO `obat` VALUES (168, 'ASAM MEFENAMAT TAB 500 MG INDO', 'TABLET', 229);
INSERT INTO `obat` VALUES (169, 'ASAM MEFENAMAT TAB 500 MG KF', 'TABLET', 229);
INSERT INTO `obat` VALUES (170, 'ASAM MEFENAMAT TAB 500 MG LAND', 'TABLET', 169);
INSERT INTO `obat` VALUES (171, 'ASAM MEFENAMAT TAB 500 MG NOVA', 'TABLET', 156);
INSERT INTO `obat` VALUES (172, 'ASEPSO FRESH ORANGE', 'PACK', 5938);
INSERT INTO `obat` VALUES (173, 'ASEPSO SOAP CLEAN 80 GR', 'PCS', 5938);
INSERT INTO `obat` VALUES (174, 'ASEPSO SOAP REG 80GR', 'PCS', 6395);
INSERT INTO `obat` VALUES (175, 'ASIFIT TAB @30', 'BOTOL', 48984);
INSERT INTO `obat` VALUES (176, 'ASMASOLON TAB @4', 'STRIP', 1656);
INSERT INTO `obat` VALUES (177, 'ASPILET TAB@100', 'TABLET', 667);
INSERT INTO `obat` VALUES (178, 'ASPIRIN TAB  500 MG', 'TABLET', 487);
INSERT INTO `obat` VALUES (179, 'ASTHIN FORCE', 'TABLET', 4083);
INSERT INTO `obat` VALUES (180, 'ASTHMA SOHO @1000', 'TABLET', 278);
INSERT INTO `obat` VALUES (181, 'ASTHMA SOHO@4', 'STRIP', 1670);
INSERT INTO `obat` VALUES (182, 'AUTAN JNR LOT 50ML', 'BOTOL', 7849);
INSERT INTO `obat` VALUES (183, 'AUTAN LOT FAM @5', 'SCT', 594);
INSERT INTO `obat` VALUES (184, 'AUTAN LOT JUNIOR 7ML ', 'STRIP', 498);
INSERT INTO `obat` VALUES (185, 'AUTAN S&S LOT 50ML', 'BOTOL', 6469);
INSERT INTO `obat` VALUES (186, 'AVAIL BIRU', 'PACK', 31850);
INSERT INTO `obat` VALUES (187, 'AVAIL HIJAU', 'PACK', 27300);
INSERT INTO `obat` VALUES (188, 'AVAIL MERAH', 'PACK', 31850);
INSERT INTO `obat` VALUES (189, 'AZOVIR CR 5 ', 'TUBE', 13750);
INSERT INTO `obat` VALUES (190, 'B & B KIDS SHP 100 ML', 'BOTOL', 6240);
INSERT INTO `obat` VALUES (191, 'B&B KIDS SHAMPO', 'BOTOL', 5003);
INSERT INTO `obat` VALUES (192, 'BABY COUGH PACDIN 60 ML', 'BOTOL', 4433);
INSERT INTO `obat` VALUES (193, 'BABY COUGH SYR 60ML', 'BOTOL', 3855);
INSERT INTO `obat` VALUES (194, 'BALPIRIK HIJAU EKSTA KUAT', 'PCS', 4746);
INSERT INTO `obat` VALUES (195, 'BALPIRIK JASMINE', 'PCS', 5226);
INSERT INTO `obat` VALUES (196, 'BALPIRIK KAYU PTH', 'PCS', 4727);
INSERT INTO `obat` VALUES (197, 'BALPIRIK KUNING EKSTRA KUAT', 'PCS', 4727);
INSERT INTO `obat` VALUES (198, 'BALPIRIK LAVENDER', 'PCS', 5226);
INSERT INTO `obat` VALUES (199, 'BALPIRIK MERAH EKSTRA KUAT', 'PCS', 5292);
INSERT INTO `obat` VALUES (200, 'BALPIRIK ROSE', 'PCS', 5226);
INSERT INTO `obat` VALUES (201, 'BAN LENG TJENG', 'BOTOL', 10580);
INSERT INTO `obat` VALUES (202, 'BATUGIN 120 ML', 'BOTOL', 16129);
INSERT INTO `obat` VALUES (203, 'BATUGIN 300 ML', 'BOTOL', 28641);
INSERT INTO `obat` VALUES (204, 'BAYCUTEN N CR 5 GR', 'TUBE', 41859);
INSERT INTO `obat` VALUES (205, 'BAYGON COIL REG STD', 'PACK', 2610);
INSERT INTO `obat` VALUES (206, 'BD ALKOHOL SWABS', 'PACK', 480);
INSERT INTO `obat` VALUES (207, 'BEAKER GLASS 50CC', 'PCS', 48000);
INSERT INTO `obat` VALUES (208, 'BEAR BRAND 189 ML', 'BOTOL', 6696);
INSERT INTO `obat` VALUES (209, 'BEBELAC 1  200GR', 'PACK', 28782);
INSERT INTO `obat` VALUES (210, 'BEBELAC 2 200GR', 'PACK', 28134);
INSERT INTO `obat` VALUES (211, 'BEBELOVE 1 200GR', 'PACK', 34074);
INSERT INTO `obat` VALUES (212, 'CALCIFAR TAB', 'TABLET', 160);
INSERT INTO `obat` VALUES (213, 'CALCIUM LACT @1000', 'TABLET', 105);
INSERT INTO `obat` VALUES (214, 'CALCUSOL CAP @30', 'KAPS', 995);
INSERT INTO `obat` VALUES (215, 'CALCUSOL CAP @50', 'BOTOL', 44390);
INSERT INTO `obat` VALUES (216, 'CALLUSOL', 'BOTOL', 27671);
INSERT INTO `obat` VALUES (217, 'CANDISTIN DROP', 'BOTOL', 40563);
INSERT INTO `obat` VALUES (218, 'CANESTEN CR 3GR', 'PCS', 16141);
INSERT INTO `obat` VALUES (219, 'CANESTEN CR 5GR', 'PCS', 19784);
INSERT INTO `obat` VALUES (220, 'CANTIK LANGSING KAPS', 'BOTOL', 35750);
INSERT INTO `obat` VALUES (221, 'CAPORIT 50 GR AFI', 'BOTOL', 2960);
INSERT INTO `obat` VALUES (222, 'CAPTOPRIL 12,5MG KF', 'TABLET', 117);
INSERT INTO `obat` VALUES (223, 'CAPTOPRIL 25MG', 'TABLET', 170);
INSERT INTO `obat` VALUES (224, 'CAPTOPRIL TAB 12,5 MG INDO', 'TABLET', 127);
INSERT INTO `obat` VALUES (225, 'CAPTOPRIL TAB 25 MG INDO', 'TABLET', 207);
INSERT INTO `obat` VALUES (226, 'CARBIDU 0,75MG TAB', 'TABLET', 303);
INSERT INTO `obat` VALUES (227, 'CARBIDU TAB 0,5MG', 'TABLET', 288);
INSERT INTO `obat` VALUES (228, 'CATAFLAM 50MG', 'TABLET', 4954);
INSERT INTO `obat` VALUES (229, 'CAVICUR DHA 60ML', 'BOTOL', 7167);
INSERT INTO `obat` VALUES (230, 'CAVICUR TAB', 'STRIP', 5445);
INSERT INTO `obat` VALUES (231, 'CAVIPLEX 60 ML', 'BOTOL', 5768);
INSERT INTO `obat` VALUES (232, 'CAVIPLEX CAP', 'KAPS', 430);
INSERT INTO `obat` VALUES (233, 'CAVIPLEX DROPS', 'BOTOL', 4506);
INSERT INTO `obat` VALUES (234, 'CAZETIN DROP', 'BOTOL', 20625);
INSERT INTO `obat` VALUES (235, 'CDR EFF @10', 'PCS', 31379);
INSERT INTO `obat` VALUES (236, 'CDR FORTOS EFF@10', 'BOTOL', 33953);
INSERT INTO `obat` VALUES (237, 'CDR FRUIT PUNCH 10’S', 'BOTOL', 28525);
INSERT INTO `obat` VALUES (238, 'CEFADROXYL 60 ML INDO', 'BOTOL', 11440);
INSERT INTO `obat` VALUES (239, 'CEFADROXYL KAPS', 'KAPS', 1038);
INSERT INTO `obat` VALUES (240, 'CEFADROXYL KAPS 500MG BERNO', 'KAPS', 1144);
INSERT INTO `obat` VALUES (241, 'CEFADROXYL KAPS 500MG DEXA', 'KAPS', 767);
INSERT INTO `obat` VALUES (242, 'CEFADROXYL KAPS 500MG MEDIKON', 'KAPS', 878);
INSERT INTO `obat` VALUES (243, 'CEFAT DS 60ML', 'BOTOL', 46653);
INSERT INTO `obat` VALUES (244, 'CEFIXIME 100MG HEX @50', 'KAPS', 3113);
INSERT INTO `obat` VALUES (245, 'CEFIXIME CAP', 'TABLET', 3375);
INSERT INTO `obat` VALUES (246, 'CEIXIME SYR', 'BOTOL', 37813);
INSERT INTO `obat` VALUES (247, 'CENDO AUGENTONIC 5ML', 'PCS', 31250);
INSERT INTO `obat` VALUES (248, 'CENDO CATARLENT 15ML', 'BOTOL', 29728);
INSERT INTO `obat` VALUES (249, 'CENDO CATARLENT 5ML', 'PCS', 23890);
INSERT INTO `obat` VALUES (250, 'CENDO CENFRESH MD', 'PCS', 4537);
INSERT INTO `obat` VALUES (251, 'CENDO CENFRESH TM 5ML', 'BOTOL', 33902);
INSERT INTO `obat` VALUES (252, 'CENDO EYE FRESH MD', 'PCS', 4881);
INSERT INTO `obat` VALUES (253, 'CENDO FENICOL 0,25% TM 5ML', 'BOTOL', 23031);
INSERT INTO `obat` VALUES (254, 'CENDO FENICOL 0,5% TM 5ML', 'BOTOL', 32313);
INSERT INTO `obat` VALUES (255, 'CENDO GENTA 0,3% TM 5ML', 'BOTOL', 29906);
INSERT INTO `obat` VALUES (256, 'CENDO GENTAMYCIN EO 0,3%', 'TUBE', 33344);
INSERT INTO `obat` VALUES (257, 'CENDO LITERS 15ML', 'BOTOL', 21821);
INSERT INTO `obat` VALUES (258, 'DAKTARIN CR 10GR', 'PCS', 33770);
INSERT INTO `obat` VALUES (259, 'DAKTARIN CR 5GR', 'PCS', 20096);
INSERT INTO `obat` VALUES (260, 'DAKTARIN DIAPER CR 10GR', 'TUBE', 56059);
INSERT INTO `obat` VALUES (261, 'DAKTARIN ORAL GEL', 'TUBE', 61468);
INSERT INTO `obat` VALUES (262, 'DAKTARIN POWDER 20GR', 'BOTOL', 50600);
INSERT INTO `obat` VALUES (263, 'DAMABEN DROPS', 'BOTOL', 15180);
INSERT INTO `obat` VALUES (264, 'DAMABEN SYR', 'BOTOL', 11722);
INSERT INTO `obat` VALUES (265, 'DANCOW 1+ MADU 200GR', 'PACK', 18603);
INSERT INTO `obat` VALUES (266, 'DANCOW 3+ MADU 200GR', 'PACK', 18198);
INSERT INTO `obat` VALUES (267, 'DANCOW BATITA 150 VAN', 'PACK', 11232);
INSERT INTO `obat` VALUES (268, 'DANCOW BATITA MADU 150GR', 'PACK', 11232);
INSERT INTO `obat` VALUES (269, 'DANCOW BATITA MD 300GR', 'PACK', 21141);
INSERT INTO `obat` VALUES (270, 'DANCOW CAL CHO 200GR', 'PACK', 15687);
INSERT INTO `obat` VALUES (271, 'DANCOW DATITA MD 150GR', 'PACK', 10530);
INSERT INTO `obat` VALUES (272, 'DANCOW DATITA VAN 150GR', 'PACK', 10206);
INSERT INTO `obat` VALUES (273, 'DANCOW IRON FULL CR 200GR', 'PACK', 16659);
INSERT INTO `obat` VALUES (274, 'DANCOW IRON FULL CREAM 400GR', 'PACK', 32805);
INSERT INTO `obat` VALUES (275, 'DANCOW IRON INSTA 200GR', 'PACK', 16281);
INSERT INTO `obat` VALUES (276, 'DANCOW UHT 190 ML ACTIV', 'PACK', 3840);
INSERT INTO `obat` VALUES (277, 'DANEURON TAB', 'TABLET', 342);
INSERT INTO `obat` VALUES (278, 'DAPYRIN TAB 500MG @200', 'TABLET', 195);
INSERT INTO `obat` VALUES (279, 'DARSI PIL', 'PACK', 7910);
INSERT INTO `obat` VALUES (280, 'DARYANT-TULLE 10’S', 'PCS', 15813);
INSERT INTO `obat` VALUES (281, 'DECADRYL SYR 120 ML', 'BOTOL', 14548);
INSERT INTO `obat` VALUES (282, 'DECADRYL SYR 60ML', 'BOTOL', 10753);
INSERT INTO `obat` VALUES (283, 'DECOLGEN HERBAFLU', 'SCT', 1898);
INSERT INTO `obat` VALUES (284, 'DECOLGEN SYR  60ML', 'BOTOL', 8934);
INSERT INTO `obat` VALUES (285, 'DECOLGEN TAB', 'STRIP', 1498);
INSERT INTO `obat` VALUES (286, 'DECOLSIN CAP', 'STRIP', 2366);
INSERT INTO `obat` VALUES (287, 'DECOLSIN SYR 60ML', 'BOTOL', 16262);
INSERT INTO `obat` VALUES (288, 'DECUBAL CR 20 GR', 'TUBE', 20592);
INSERT INTO `obat` VALUES (289, 'DEE DEE MOSQUITO 50 GR', 'BOTOL', 5753);
INSERT INTO `obat` VALUES (290, 'DEE DEE SHP REF 125 ML', 'BOTOL', 5265);
INSERT INTO `obat` VALUES (291, 'DEGIROL TAB', 'STRIP', 2985);
INSERT INTO `obat` VALUES (292, 'DEMACOLIN 60 ML', 'BOTOL', 8040);
INSERT INTO `obat` VALUES (293, 'DEMACOLIN TAB', 'TABLET', 306);
INSERT INTO `obat` VALUES (294, 'DEMACOLIN TAB 1000', 'TABLET', 364);
INSERT INTO `obat` VALUES (295, 'DEPO PROGESTIN 3CC', 'VIAL', 8450);
INSERT INTO `obat` VALUES (296, 'DERMATIX ULTRA GEL 7GR', 'TUBE', 50000);
INSERT INTO `obat` VALUES (297, 'DERMOVATE CR 5 GR', 'TUBE', 52938);
INSERT INTO `obat` VALUES (298, 'DESOLEX N CR 10 GR', 'TUBE', 26787);
INSERT INTO `obat` VALUES (299, 'DETTOL HAND SNT', 'BOTOL', 6859);
INSERT INTO `obat` VALUES (300, 'DETTOL LIQ 100ML', 'BOTOL', 13048);
INSERT INTO `obat` VALUES (301, 'DETTOL LIQ 50ML', 'BOTOL', 5585);
INSERT INTO `obat` VALUES (302, 'DETTOL SOAP 110 GR ALL', 'PCS', 4628);
INSERT INTO `obat` VALUES (303, 'DETTOL SOAP 70GR ACT', 'PCS', 2977);
INSERT INTO `obat` VALUES (304, 'DETTOL SOAP 70GR FRESH', 'PCS', 2993);
INSERT INTO `obat` VALUES (305, 'DETTOL SOAP 70GR SENS', 'PCS', 2977);
INSERT INTO `obat` VALUES (306, 'DETTOL SOAP COOL 70GR', 'PCS', 3438);
INSERT INTO `obat` VALUES (307, 'DETTOL SOAP ORG 70GR', 'PCS', 2993);
INSERT INTO `obat` VALUES (308, 'DETTOL TALK 150 GR', 'BOTOL', 16385);
INSERT INTO `obat` VALUES (309, 'DETTOL TALK 75GR', 'PCS', 10625);
INSERT INTO `obat` VALUES (310, 'DEXAMETHASON 0,5MG @1000', 'TABLET', 41);
INSERT INTO `obat` VALUES (311, 'DEXAMETHASON 0,5MG HARSEN', 'TABLET', 199);
INSERT INTO `obat` VALUES (312, 'DEXAMETHASON 0,75MG HARSEN', 'TABLET', 217);
INSERT INTO `obat` VALUES (313, 'DEXANTA SYR', 'BOTOL', 12144);
INSERT INTO `obat` VALUES (314, 'DEXANTA TAB', 'TABLET', 192);
INSERT INTO `obat` VALUES (315, 'DEXIGEN CR 5 GR', 'TUBE', 8625);
INSERT INTO `obat` VALUES (316, 'DEXMOLEX 100ML', 'BOTOL', 9075);
INSERT INTO `obat` VALUES (317, 'DEXTAMIN 60ML', 'BOTOL', 37754);
INSERT INTO `obat` VALUES (318, 'DEXTAMIN TAB', 'TABLET', 1817);
INSERT INTO `obat` VALUES (319, 'DEXTEEM PLUS TAB', 'TABLET', 303);
INSERT INTO `obat` VALUES (320, 'DEXTRAL 100 ML', 'BOTOL', 10428);
INSERT INTO `obat` VALUES (321, 'DEXTRAL 60 ML', 'BOTOL', 8437);
INSERT INTO `obat` VALUES (322, 'DEXTRAL F TAB', 'TABLET', 756);
INSERT INTO `obat` VALUES (323, 'DEXTRAL TAB', 'TABLET', 591);
INSERT INTO `obat` VALUES (324, 'DEXTROFORT 60 ML', 'BOTOL', 8494);
INSERT INTO `obat` VALUES (325, 'DEXTROMETHORHAN 15MG TAB', 'TABLET', 119);
INSERT INTO `obat` VALUES (326, 'DEXTROMETHORPAN 60 ML INDO', 'BOTOL', 3723);
INSERT INTO `obat` VALUES (327, 'DEXTROMETHORPAN 60 ML RAMA', 'BOTOL', 3300);
INSERT INTO `obat` VALUES (328, 'DEXTROSE 5% 500ML', 'BOTOL', 13650);
INSERT INTO `obat` VALUES (329, 'DEXYCOL TAB 500 MG', 'TABLET', 767);
INSERT INTO `obat` VALUES (330, 'DHE DHE SHP', 'BOTOL', 1524);
INSERT INTO `obat` VALUES (331, 'DIABETASOL 600GR VNL', 'PACK', 16829);
INSERT INTO `obat` VALUES (332, 'DIABETASOL CAPPU 180GR', 'PACK', 39339);
INSERT INTO `obat` VALUES (333, 'DIABETASOL CHO 180GR', 'PACK', 38934);
INSERT INTO `obat` VALUES (334, 'DIABETASOL NR', 'STRIP', 2530);
INSERT INTO `obat` VALUES (335, 'DIABETASOL SWEET 37,5', 'PACK', 16705);
INSERT INTO `obat` VALUES (336, 'DIABETASOL VAN 180GR', 'PACK', 38934);
INSERT INTO `obat` VALUES (337, 'DIABETASOL VD 180 GR VNL', 'PACK', 40122);
INSERT INTO `obat` VALUES (338, 'DIALET', 'TABLET', 144);
INSERT INTO `obat` VALUES (339, 'DIANE TAB', 'PACK', 3477);
INSERT INTO `obat` VALUES (340, 'DIAPET CAP', 'STRIP', 1518);
INSERT INTO `obat` VALUES (341, 'DIAPET NR', NULL, 2600);
INSERT INTO `obat` VALUES (342, 'DIAPET SYR', 'BOTOL', 6958);
INSERT INTO `obat` VALUES (343, 'DIASEC TAB', 'TABLET', 2338);
INSERT INTO `obat` VALUES (344, 'DIGOXIN TAB', 'TABLET', 179);
INSERT INTO `obat` VALUES (345, 'DILTIAZEM 30MG TAB GKF', 'TABLET', 255);
INSERT INTO `obat` VALUES (346, 'DINA KAPAS BIASA', 'PACK', 1438);
INSERT INTO `obat` VALUES (347, 'DINA KAPAS POTONG 30GR', 'PACK', 3125);
INSERT INTO `obat` VALUES (348, 'DIONICOL KAPS', 'KAPS', 848);
INSERT INTO `obat` VALUES (349, 'DIONICOL SYR 60ML', 'BOTOL', 5999);
INSERT INTO `obat` VALUES (350, 'DIPROGENTA OINT 5GR', 'TUBE', 51321);
INSERT INTO `obat` VALUES (351, 'DIPS SYR 10 CC', 'PCS', 3600);
INSERT INTO `obat` VALUES (352, 'DISP SYR NIPRO 10 CC', 'PCS', 3600);
INSERT INTO `obat` VALUES (353, 'DISP SYR NIPRO 20 CC', 'PCS', 8000);
INSERT INTO `obat` VALUES (354, 'DISP SYR NIPRO 3 CC', 'PCS', 1750);
INSERT INTO `obat` VALUES (355, 'DISP SYR NIPRO 5 CC', 'PCS', 3000);
INSERT INTO `obat` VALUES (356, 'DISP. SYR 10CC TERUMO', 'PCS', 2340);
INSERT INTO `obat` VALUES (357, 'DISP. SYR 1CC INS TERUMO', 'PCS', 2600);
INSERT INTO `obat` VALUES (358, 'DISP. SYR 1CC TERUMO', 'PCS', 2400);
INSERT INTO `obat` VALUES (359, 'DISP. SYR 3CC BD', 'PCS', 1280);
INSERT INTO `obat` VALUES (360, 'DISP. SYR 3CC TERUMO', 'PCS', 1560);
INSERT INTO `obat` VALUES (361, 'DISP. SYR 5CC BD', 'PCS', 2400);
INSERT INTO `obat` VALUES (362, 'DUMOCALCIN MINT 30', 'TABLET', 481);
INSERT INTO `obat` VALUES (363, 'DUREX COMFORT 3’S', 'PACK', 11780);
INSERT INTO `obat` VALUES (364, 'DUREX EXTRA SAFE @3', 'PCS', 14561);
INSERT INTO `obat` VALUES (365, 'DUREX FETHERLITE @3', 'PCS', 13236);
INSERT INTO `obat` VALUES (366, 'DUREX LOVE 3’S', 'PACK', 11780);
INSERT INTO `obat` VALUES (367, 'DUREX RIBBED @3', 'PACK', 13236);
INSERT INTO `obat` VALUES (368, 'DUREX STRW 3’S', 'PACK', 13236);
INSERT INTO `obat` VALUES (369, 'DUREX TOGETHER @3', 'PCS', 11108);
INSERT INTO `obat` VALUES (370, 'E JUSS', 'PACK', 3910);
INSERT INTO `obat` VALUES (371, 'EASY TOUCH', 'PACK', 12500);
INSERT INTO `obat` VALUES (372, 'EASY TOUCH BLOOD CHOLESTEROL @10', 'PCS', 17550);
INSERT INTO `obat` VALUES (373, 'EASY TOUCH BLOOD GLUCOSE @25', 'PCS', 80500);
INSERT INTO `obat` VALUES (374, 'EASY TOUCH URIC ACID @25', 'PCS', 4160);
INSERT INTO `obat` VALUES (375, 'EFISOL LIQ 10ML', 'BOTOL', 21505);
INSERT INTO `obat` VALUES (376, 'EKSIM 7GR', NULL, 7000);
INSERT INTO `obat` VALUES (377, 'ELKANA SYR 60ML', 'BOTOL', 21175);
INSERT INTO `obat` VALUES (378, 'ELKANA TAB', 'TABLET', 805);
INSERT INTO `obat` VALUES (379, 'EM KAPSUL', 'PACK', 7910);
INSERT INTO `obat` VALUES (380, 'EMBALAGE', 'PCS', 100);
INSERT INTO `obat` VALUES (381, 'EMERON SHP 50 ML SM', 'BOTOL', 2145);
INSERT INTO `obat` VALUES (382, 'EMERON SHP 50ML LIME', 'BOTOL', 2145);
INSERT INTO `obat` VALUES (383, 'EMINETON', 'TABLET', 1725);
INSERT INTO `obat` VALUES (384, 'EMPENG GROSIR', 'PCS', 10010);
INSERT INTO `obat` VALUES (385, 'EMPENG NINIO @24', 'PCS', 7084);
INSERT INTO `obat` VALUES (386, 'ENATIN', 'KAPS', 1392);
INSERT INTO `obat` VALUES (387, 'ENBATIC', 'PCS', 2544);
INSERT INTO `obat` VALUES (388, 'ENBATIC ZALF', 'PCS', 7081);
INSERT INTO `obat` VALUES (389, 'ENERVON C @30', 'BOTOL', 28359);
INSERT INTO `obat` VALUES (390, 'ENERVON C @4', 'STRIP', 3969);
INSERT INTO `obat` VALUES (391, 'ENERVON C EFF', 'PCS', 26964);
INSERT INTO `obat` VALUES (392, 'ENERVON C PLUS 120 ML', 'BOTOL', 16569);
INSERT INTO `obat` VALUES (393, 'ENKASARI SYR 60ML', 'BOTOL', 13685);
INSERT INTO `obat` VALUES (394, 'ESQUISE BARU', 'SCT', 518);
INSERT INTO `obat` VALUES (395, 'ESTER C @30', 'BOTOL', 34122);
INSERT INTO `obat` VALUES (396, 'ESTER C @4', 'STRIP', 5000);
INSERT INTO `obat` VALUES (397, 'ESTER C EFF', 'PCS', 27025);
INSERT INTO `obat` VALUES (398, 'ESVAT TAB 10MG', 'TABLET', 1502);
INSERT INTO `obat` VALUES (399, 'ETABION TAB', 'TABLET', 197);
INSERT INTO `obat` VALUES (400, 'ETAFLUSIN SYR 60ML', 'BOTOL', 4048);
INSERT INTO `obat` VALUES (401, 'ETAFLUSIN TAB', 'TABLET', 525);
INSERT INTO `obat` VALUES (402, 'ETAGESIC 60ML', 'BOTOL', 3723);
INSERT INTO `obat` VALUES (403, 'ETAMOX 60ML', 'BOTOL', 5280);
INSERT INTO `obat` VALUES (404, 'ETAMOX TAB 500MG', 'TABLET', 480);
INSERT INTO `obat` VALUES (405, 'ETAMOXUL F TAB', 'TABLET', 377);
INSERT INTO `obat` VALUES (406, 'ETAMOXUL TAB', 'TABLET', 221);
INSERT INTO `obat` VALUES (407, 'ETTAWA SUSU KAMBING', 'PACK', 31050);
INSERT INTO `obat` VALUES (408, 'ETTAWA SUSU KAMBING PAKET', 'PACK', 50600);
INSERT INTO `obat` VALUES (409, 'EVER E 250 BOTOL', 'BOTOL', 57558);
INSERT INTO `obat` VALUES (410, 'EVER E 250IU @12', 'PACK', 23866);
INSERT INTO `obat` VALUES (411, 'EVION TAB 100', 'TABLET', 1299);
INSERT INTO `obat` VALUES (412, 'EXLUTON PIL KB', 'STRIP', 21299);
INSERT INTO `obat` VALUES (413, 'EXSIM 19 BIRU', 'PACK', 2588);
INSERT INTO `obat` VALUES (414, 'EXTRA JOSS', 'PACK', 925);
INSERT INTO `obat` VALUES (415, 'EXTRAFLU TAB', 'TABLET', 177);
INSERT INTO `obat` VALUES (416, 'FACIAL NASA TRAVEL PACK', 'PACK', 2888);
INSERT INTO `obat` VALUES (417, 'FACIAL SUCCESSFUL', 'PACK', 5606);
INSERT INTO `obat` VALUES (418, 'FAKTU OINT 20GR', 'TUBE', 99220);
INSERT INTO `obat` VALUES (419, 'FAMEPRIM TAB', 'TABLET', 288);
INSERT INTO `obat` VALUES (420, 'FAMOTODINE KAPS', 'KAPS', 147);
INSERT INTO `obat` VALUES (421, 'FANBO PWD PUFF', 'POT', 3673);
INSERT INTO `obat` VALUES (422, 'FARGETIK TAB 500MG', 'TABLET', 495);
INSERT INTO `obat` VALUES (423, 'FARIDEXON TAB', 'TABLET', 161);
INSERT INTO `obat` VALUES (424, 'FARIDEXON TAB 0,5MG', 'TABLET', 103);
INSERT INTO `obat` VALUES (425, 'FARMOTEN TAB 12,5MG', 'TABLET', 329);
INSERT INTO `obat` VALUES (426, 'FARMOTEN TAB 25MG ', 'TABLET', 1012);
INSERT INTO `obat` VALUES (427, 'FARSIFEN 400MG TAB', 'TABLET', 371);
INSERT INTO `obat` VALUES (428, 'FARSIFEN 60 ML', 'BOTOL', 8750);
INSERT INTO `obat` VALUES (429, 'FASIDOL DROP', 'BOTOL', 8353);
INSERT INTO `obat` VALUES (430, 'FASIDOL F 60 ML', 'BOTOL', 4741);
INSERT INTO `obat` VALUES (431, 'FASIDOL SYR 60ML', 'BOTOL', 4649);
INSERT INTO `obat` VALUES (432, 'FASORBID 5MG TAB', 'TABLET', 279);
INSERT INTO `obat` VALUES (433, 'FATIGON C PLUS ', 'STRIP', 4428);
INSERT INTO `obat` VALUES (434, 'FATIGON SPIRIT', 'STRIP', 5579);
INSERT INTO `obat` VALUES (435, 'FATIGON TAB @4', 'STRIP', 2650);
INSERT INTO `obat` VALUES (436, 'FATIGON VIRO @5', 'STRIP', 3416);
INSERT INTO `obat` VALUES (437, 'FAXIDEN TAB 20MG', 'TABLET', 351);
INSERT INTO `obat` VALUES (438, 'FEMINAX @4', 'STRIP', 1800);
INSERT INTO `obat` VALUES (439, 'FERMINO', 'BOTOL', 15000);
INSERT INTO `obat` VALUES (440, 'FERMINO KAPS 20′', 'BOTOL', 39600);
INSERT INTO `obat` VALUES (441, 'FEVRIN SYR 60ML', 'BOTOL', 14295);
INSERT INTO `obat` VALUES (442, 'FEVRIN TAB', 'STRIP', 4599);
INSERT INTO `obat` VALUES (443, 'FG TROCHES @120', 'TABLET', 1028);
INSERT INTO `obat` VALUES (444, 'FIESTA ALL NIGHT @3', 'PACK', 6749);
INSERT INTO `obat` VALUES (445, 'FIESTA PARTY 12’S', 'PACK', 23399);
INSERT INTO `obat` VALUES (446, 'FIESTA PASSION @3', 'PACK', 6749);
INSERT INTO `obat` VALUES (447, 'FIMESTAN F TAB ', 'TABLET', 267);
INSERT INTO `obat` VALUES (448, 'FITKOM ANGGUR', 'BOTOL', 11385);
INSERT INTO `obat` VALUES (449, 'FITKOM GUMMY', 'PACK', 14916);
INSERT INTO `obat` VALUES (450, 'FITKOM GUMMY CALCIUM', 'PACK', 16445);
INSERT INTO `obat` VALUES (451, 'FITKOM GUMMY FRUIT&VEGGIE', 'PACK', 20350);
INSERT INTO `obat` VALUES (452, 'FITKOM JERUK', 'PACK', 11385);
INSERT INTO `obat` VALUES (453, 'FITKOM PLATINUM 100 ML', 'BOTOL', 15307);
INSERT INTO `obat` VALUES (454, 'FITKOM STRW', 'PACK', 11385);
INSERT INTO `obat` VALUES (455, 'FLAGYSTATIS OVULE', 'SUPPO', 21137);
INSERT INTO `obat` VALUES (456, 'FLAMAR GEL 20 GR', 'TUBE', 16964);
INSERT INTO `obat` VALUES (457, 'FLAMESON 4 MG', 'TABLET', 862);
INSERT INTO `obat` VALUES (458, 'FLAMIGRA TAB', 'TABLET', 434);
INSERT INTO `obat` VALUES (459, 'FLORA MADU TRPC 100ML', 'BOTOL', 13685);
INSERT INTO `obat` VALUES (460, 'FLOXIFAR TAB', 'TABLET', 560);
INSERT INTO `obat` VALUES (461, 'FLOXIGRA 500MG TAB', 'TABLET', 946);
INSERT INTO `obat` VALUES (462, 'FLUCADEX SYR 60 ML', 'BOTOL', 10078);
INSERT INTO `obat` VALUES (463, 'FLUCADEX TAB', 'TABLET', 480);
INSERT INTO `obat` VALUES (464, 'FLUDANE PLUS SYR 60ML', 'BOTOL', 18343);
INSERT INTO `obat` VALUES (465, 'FLUDANE SYR 60ML', 'BOTOL', 14916);
INSERT INTO `obat` VALUES (466, 'HC SENSI GLOVES (S) GROSIR', 'PACK', 45600);
INSERT INTO `obat` VALUES (467, 'HEMAVITON ACTION @5', 'STRIP', 5335);
INSERT INTO `obat` VALUES (468, 'HEMAVITON C 1000 150ML', 'BOTOL', 4154);
INSERT INTO `obat` VALUES (469, 'HEMAVITON C 1000 @5', 'PCS', 1064);
INSERT INTO `obat` VALUES (470, 'HEMAVITON E DRINK 150 ML', 'BOTOL', 3640);
INSERT INTO `obat` VALUES (471, 'HEMAVITON JRENG 10’S', 'PCS', 722);
INSERT INTO `obat` VALUES (472, 'HEMAVITON SKIN N', 'STRIP', 4715);
INSERT INTO `obat` VALUES (473, 'HEMAVITON STAMINA', 'STRIP', 4974);
INSERT INTO `obat` VALUES (474, 'HEMORID KAPS', 'KAPS', 747);
INSERT INTO `obat` VALUES (475, 'HEPATOSOL VAN 185GR', 'PACK', 69552);
INSERT INTO `obat` VALUES (476, 'HERBA JAWI', 'BOTOL', 25300);
INSERT INTO `obat` VALUES (477, 'HERBORIST SB SERE 160GR', 'PCS', 6611);
INSERT INTO `obat` VALUES (478, 'HERBORIST SR 80GR', 'PCS', 3996);
INSERT INTO `obat` VALUES (479, 'HERKUAT KAPS', 'KAPS', 1604);
INSERT INTO `obat` VALUES (480, 'HEROCYN 150GR', 'PCS', 12036);
INSERT INTO `obat` VALUES (481, 'HEROCYN 75GR', 'PCS', 7876);
INSERT INTO `obat` VALUES (482, 'HEROCYN BABY 100GR', 'BOTOL', 4479);
INSERT INTO `obat` VALUES (483, 'HEXAVASK TAB 5MG', 'TABLET', 2383);
INSERT INTO `obat` VALUES (484, 'HEXON SYR 60ML', 'BOTOL', 8476);
INSERT INTO `obat` VALUES (485, 'HEXOS MINT PERMENT', 'PCS', 1459);
INSERT INTO `obat` VALUES (486, 'HEXOS SUGAR FREE', 'PCS', 8159);
INSERT INTO `obat` VALUES (487, 'HI-LO ACT KH 200GR', 'PACK', 23760);
INSERT INTO `obat` VALUES (488, 'HI-LO ACT VAN 200GR', 'PACK', 23760);
INSERT INTO `obat` VALUES (489, 'HI-LO TEEN CHO 200GR', 'PACK', 22680);
INSERT INTO `obat` VALUES (490, 'HICO GEL CR 15GR', 'TUBE', 14850);
INSERT INTO `obat` VALUES (491, 'HIGH ELASTIS B GC 10CM', 'PCS', 20700);
INSERT INTO `obat` VALUES (492, 'HIGH ELASTIS B GC 7,5CM', 'PCS', 8050);
INSERT INTO `obat` VALUES (493, 'HILO ACTIV 250GR CHO', 'PACK', 32157);
INSERT INTO `obat` VALUES (494, 'HILO KH 200 GR', 'PACK', 26799);
INSERT INTO `obat` VALUES (495, 'HILO TEEN 250GR CHO', 'PACK', 28512);
INSERT INTO `obat` VALUES (496, 'HILO VANILA 200 GR', 'PACK', 28512);

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES (1, '3218760875', 'Milzan Malik', 'L', '2020-08-03', 'jl. Wisanggeni C40', '081221407520');
INSERT INTO `pegawai` VALUES (2, '3217657659', 'qwert', 'P', '2008-10-01', 'jl.ajwhksjdbf', '1308130871');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE `penjualan`  (
  `no_struk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_pembelian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tunai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kembalian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_pegawai` int(11) NULL DEFAULT NULL,
  `id_pelanggan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`no_struk`) USING BTREE,
  INDEX `id_pegawai`(`id_pegawai`) USING BTREE,
  CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;