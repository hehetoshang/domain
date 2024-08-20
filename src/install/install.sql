-- MySQL dump 10.13  Distrib 5.7.34, for Win64 (x86_64)
--
-- Host: localhost    Database: dnss_com
-- ------------------------------------------------------
-- Server version	5.7.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dnsnxy_configs`
--

DROP TABLE IF EXISTS `dnsnxy_configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_configs` (
  `k` varchar(150) NOT NULL,
  `v` text,
  PRIMARY KEY (`k`),
  UNIQUE KEY `k` (`k`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_configs`
--

LOCK TABLES `dnsnxy_configs` WRITE;
/*!40000 ALTER TABLE `dnsnxy_configs` DISABLE KEYS */;
INSERT INTO `dnsnxy_configs` VALUES ('array_mail','{\"host\":\"smtp.qq.com\",\"port\":\"465\",\"encryption\":\"ssl\",\"username\":\"dns@loxza.com\",\"password\":\"YKOOBfddTDssRCsjYVVrr\",\"test\":\"hao@biun.cn\"}'),('array_user','{\"reg\":\"1\",\"email\":\"0\",\"point\":\"100\"}'),('array_web','{\"name\":\"\\u6790\\u4e91\\u7f51\",\"title\":\"\\u6790\\u4e91\\u7f51-\\u514d\\u8d39\\u4e8c\\u7ea7\\u57df\\u540d\\u5206\\u53d1\\u7b80\\u77ed\\u5feb\\u901fDNS\\u5206\\u53d1\\u670d\\u52a1\\u63d0\\u4f9b\\u5546.\",\"keywords\":\"\\u6790\\u4e91\\u7f51,\\u514d\\u8d39\\u4e8c\\u7ea7\\u57df\\u540d\\u5206\\u53d1,\\u5907\\u6848\\u57df\\u540d,\\u514d\\u8d39\\u57df\\u540d,\\u76db\\u4e16\\u5bb9\\u989c\\u535a\\u5ba2,\\u4e5d\\u7b14\\u5bb9\\u989c,\",\"description\":\"\\u6790\\u4e91\\u7f51(dns.loxza.com)\\u4e13\\u4e3a\\u65b0\\u624b\\u7ad9\\u957f\\u63d0\\u4f9b\\u7684\\u514d\\u8d39\\u4e8c\\u7ea7\\u57df\\u540d\\u89e3\\u6790,\\u57df\\u540d\\u5747\\u514d\\u8d39\\u63d0\\u4f9b\\u4f7f\\u7528\\u4e13\\u95e8\\u63d0\\u4f9b\\u4e8c\\u7ea7\\u57df\\u540d\\u89e3\\u6790\\u7684\\u5e73\\u53f0,\\u57df\\u540d\\u5747\\u514d\\u8d39\\u63d0\\u4f9b\\u4f7f\\u7528,\\u4e0d\\u6536\\u53d6\\u4efb\\u4f55\\u8d39\\u7528,\\u63d0\\u4f9b\\u7684\\u57df\\u540d\\u5f53\\u4e2d\\u6709\\u5df2\\u5907\\u6848\\u57df\\u540d\\u548c\\u672a\\u5907\\u6848\\u57df\\u540d,\\u57df\\u540d\\u540e\\u7f00\\u591a\\u53ef\\u81ea\\u4e3b\\u9009\\u62e9\\u89e3\\u6790\"}'),('cronKey','e6b9b6681ac6cb9389d553edb04da1f0'),('html_header','<div class=\"alert alert-primary\">\r\n本站提供免费二级域名用于测试、学习等，请勿将二级域名用于一切非法用途，一切责任自负！\r\n</div>'),('html_home','<div class=\"alert alert-success\" role=\"alert\">有很多美丽的女孩！<a href=\"https://zilv.wang/\">[点击进入]</a></div>\r\n                    <div class=\"alert alert-danger\" role=\"alert\"><strong>#禁止搭建类型#</strong> 伪造、钓鱼、诈骗、外挂、VPN、毒品、赌博、博彩、棋牌、彩票、虚假打赏、黄色、贷款、色情交友、盗版影视、不正常言论、不合法的信息收集、圈币等违规违法网站！！\r\n                    </div>\r\n                    <div class=\"alert alert-warning\" role=\"alert\">  <strong>#提醒#</strong> 所解析的二级域名过多不能及时检查，如有发现将拉黑处理，触犯法律法规将所记录IP、内容提交网安.   \r\n                    </div>'),('index_urls','盛世容颜|https://www.superry.net\r\n自律先生|https://www.zilv.wang\r\n联系作者|http://wpa.qq.com/msgrd?v=3&uin=191548915&site=qq&menu=yes'),('keywords','代刷\r\n影院'),('reserve_domain_name','www,ww,q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m,3g,4g,5g,wx,vx,eq,qq,mz,dg,ds,ym,bc,miaozan,daigua,duaishua,sq,av,xideos,pron,mm,vv,pp,dsp,sp,jx,mv,music,video,superry,jbry,vvv,hs,idc,cloud,vpn,fq,fh,url,dwz');
/*!40000 ALTER TABLE `dnsnxy_configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dnsnxy_dns_configs`
--

DROP TABLE IF EXISTS `dnsnxy_dns_configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_dns_configs` (
  `dns` varchar(150) NOT NULL,
  `config` varchar(1024) DEFAULT NULL,
  `created_at` int(10) unsigned DEFAULT NULL,
  `updated_at` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`dns`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_dns_configs`
--

LOCK TABLES `dnsnxy_dns_configs` WRITE;
/*!40000 ALTER TABLE `dnsnxy_dns_configs` DISABLE KEYS */;
/*!40000 ALTER TABLE `dnsnxy_dns_configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dnsnxy_domain_records`
--

DROP TABLE IF EXISTS `dnsnxy_domain_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_domain_records` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `did` int(11) unsigned NOT NULL DEFAULT '0',
  `record_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(32) NOT NULL,
  `value` varchar(255) NOT NULL,
  `line_id` varchar(32) NOT NULL DEFAULT '0',
  `line` varchar(255) DEFAULT NULL,
  `created_at` int(10) unsigned DEFAULT NULL,
  `updated_at` int(10) unsigned DEFAULT NULL,
  `checked_at` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `record_id` (`record_id`),
  KEY `did` (`did`),
  KEY `name` (`name`,`type`),
  KEY `checked_at` (`checked_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_domain_records`
--

LOCK TABLES `dnsnxy_domain_records` WRITE;
/*!40000 ALTER TABLE `dnsnxy_domain_records` DISABLE KEYS */;
/*!40000 ALTER TABLE `dnsnxy_domain_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dnsnxy_domains`
--

DROP TABLE IF EXISTS `dnsnxy_domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_domains` (
  `did` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dns` varchar(32) NOT NULL,
  `domain_id` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `groups` varchar(1024) NOT NULL DEFAULT '0',
  `point` int(10) unsigned NOT NULL DEFAULT '0',
  `desc` text,
  `created_at` int(10) unsigned DEFAULT NULL,
  `updated_at` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`did`),
  KEY `domain` (`domain`),
  KEY `domain_id` (`domain_id`),
  KEY `dns` (`dns`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_domains`
--

LOCK TABLES `dnsnxy_domains` WRITE;
/*!40000 ALTER TABLE `dnsnxy_domains` DISABLE KEYS */;
/*!40000 ALTER TABLE `dnsnxy_domains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dnsnxy_user_groups`
--

DROP TABLE IF EXISTS `dnsnxy_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_user_groups` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` int(10) unsigned DEFAULT NULL,
  `updated_at` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_user_groups`
--

LOCK TABLES `dnsnxy_user_groups` WRITE;
/*!40000 ALTER TABLE `dnsnxy_user_groups` DISABLE KEYS */;
INSERT INTO `dnsnxy_user_groups` VALUES (99,'管理组',1555212209,1555212209),(100,'默认组',1555212209,1555235659);
/*!40000 ALTER TABLE `dnsnxy_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dnsnxy_user_point_records`
--

DROP TABLE IF EXISTS `dnsnxy_user_point_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_user_point_records` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `action` varchar(32) NOT NULL,
  `point` int(11) NOT NULL,
  `rest` int(11) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_at` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `action` (`action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_user_point_records`
--

LOCK TABLES `dnsnxy_user_point_records` WRITE;
/*!40000 ALTER TABLE `dnsnxy_user_point_records` DISABLE KEYS */;
/*!40000 ALTER TABLE `dnsnxy_user_point_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dnsnxy_users`
--

DROP TABLE IF EXISTS `dnsnxy_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dnsnxy_users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(10) unsigned NOT NULL DEFAULT '100',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '0禁用 1待认证 2已认证',
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `sid` varchar(32) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `point` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` int(10) unsigned DEFAULT NULL,
  `updated_at` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `gid` (`gid`),
  KEY `email` (`email`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dnsnxy_users`
--

LOCK TABLES `dnsnxy_users` WRITE;
/*!40000 ALTER TABLE `dnsnxy_users` DISABLE KEYS */;
INSERT INTO `dnsnxy_users` VALUES (99,99,1,'admin','$2y$10$v9PHTvnccjua/5FlAf/uFOVPprXxdWjoS54YnjmbQGGk8vDtxk9YS','Ygku6nfDQOyEL4cQha9luBlZyIB2XBkdvVpPOiNIBcuNaULnILGiUtjHfq3w','2bace05fcdb6a9351e796bba12787b2e',NULL,0,1555212209,1635314145);
/*!40000 ALTER TABLE `dnsnxy_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dnss_com'
--

--
-- Dumping routines for database 'dnss_com'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-27 14:18:33
