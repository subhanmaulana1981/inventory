-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema inventory
--

CREATE DATABASE IF NOT EXISTS inventory;
USE inventory;

--
-- Definition of table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id_kategori` int(11) DEFAULT NULL,
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` text DEFAULT NULL,
  `stok_akhir` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id_kategori`,`id_barang`,`nama_barang`,`stok_akhir`,`keterangan`) VALUES 
 (1,1,'genteng','100','bapak mahmud'),
 (1,2,'plafon','55',NULL),
 (2,3,'kusen','15',NULL),
 (2,4,'bata','500',NULL),
 (2,5,'semen','20',NULL),
 (3,6,'ubin','20',NULL),
 (4,7,'tanaman hias','5',NULL),
 (3,10,'Karpet','10','Material baru'),
 (5,11,'Pot Bunga','0','Tes');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;


--
-- Definition of table `gudang`
--

DROP TABLE IF EXISTS `gudang`;
CREATE TABLE `gudang` (
  `id_gudang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gudang` text DEFAULT NULL,
  PRIMARY KEY (`id_gudang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

/*!40000 ALTER TABLE `gudang` DISABLE KEYS */;
INSERT INTO `gudang` (`id_gudang`,`nama_gudang`) VALUES 
 (1,'Gudang 1'),
 (3,'Gudang 3'),
 (4,'Gudang 4'),
 (5,'Gudang 5'),
 (7,'Gudang 6');
/*!40000 ALTER TABLE `gudang` ENABLE KEYS */;


--
-- Definition of table `kategori_barang`
--

DROP TABLE IF EXISTS `kategori_barang`;
CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` text DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_barang`
--

/*!40000 ALTER TABLE `kategori_barang` DISABLE KEYS */;
INSERT INTO `kategori_barang` (`id_kategori`,`nama_kategori`) VALUES 
 (1,'Atap'),
 (2,'Dinding'),
 (3,'Lantai'),
 (4,'Dekorasi'),
 (5,'Exterior');
/*!40000 ALTER TABLE `kategori_barang` ENABLE KEYS */;


--
-- Definition of table `keluar_masuk_barang`
--

DROP TABLE IF EXISTS `keluar_masuk_barang`;
CREATE TABLE `keluar_masuk_barang` (
  `id_keluar_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_keluar_masuk` datetime NOT NULL DEFAULT current_timestamp(),
  `id_barang` int(11) DEFAULT NULL,
  `masuk` int(11) DEFAULT 0,
  `keluar` int(11) DEFAULT 0,
  PRIMARY KEY (`id_keluar_masuk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluar_masuk_barang`
--

/*!40000 ALTER TABLE `keluar_masuk_barang` DISABLE KEYS */;
INSERT INTO `keluar_masuk_barang` (`id_keluar_masuk`,`tanggal_keluar_masuk`,`id_barang`,`masuk`,`keluar`) VALUES 
 (1,'2022-07-01 00:00:00',2,5,0),
 (2,'2022-07-01 00:00:00',5,0,5),
 (3,'2022-07-02 00:00:00',1,25,0),
 (4,'2022-07-03 12:11:00',3,5,0),
 (5,'2022-07-04 12:20:00',5,10,0),
 (6,'2022-07-05 13:57:00',10,10,0);
/*!40000 ALTER TABLE `keluar_masuk_barang` ENABLE KEYS */;


--
-- Definition of table `rak_barang`
--

DROP TABLE IF EXISTS `rak_barang`;
CREATE TABLE `rak_barang` (
  `id_rak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rak` text DEFAULT NULL,
  PRIMARY KEY (`id_rak`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak_barang`
--

/*!40000 ALTER TABLE `rak_barang` DISABLE KEYS */;
INSERT INTO `rak_barang` (`id_rak`,`nama_rak`) VALUES 
 (1,'Rak 1'),
 (2,'Rak 2'),
 (3,'Rak 3'),
 (4,'Rak 4'),
 (7,'Rak 5');
/*!40000 ALTER TABLE `rak_barang` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
