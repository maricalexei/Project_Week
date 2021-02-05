-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2021 at 01:40 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki-info`
--

-- --------------------------------------------------------

--
-- Table structure for table `csgowiki`
--

DROP TABLE IF EXISTS `csgowiki`;
CREATE TABLE IF NOT EXISTS `csgowiki` (
  `name` varchar(100) NOT NULL,
  `info` varchar(65000) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csgowiki`
--

INSERT INTO `csgowiki` (`name`, `info`) VALUES
('Pistols', 'There are multiple pistols in Counter-Strike. Each side has different pistols some have pistols are universal and can be used by both sides. 1 great example for a universal pistol is the desert eagle, The Desert Eagle is one of the more popular sidearms in the Counter-Strike games, its appeal mainly coming from its high power'),
('Knifes', 'The knife is a melee weapon, and thus has a very short range and makes little sound when slashed. The knife has a fast, low-damage primary attack and a slow, high-damage secondary attack. In Source and Global Offensive, the primary attack deals reduced damage on consecutive hits, reducing its spamming capability.\r\n\r\nDamage from the knife is affected by different multipliers compared to other weapons. In Counter-Strike and Condition Zero, the knife is affected by the head hitbox in addition to a special backstab multiplier. In Source and Global Offensive, the head hitbox multiplier is removed and only the backstab multiplier is present. In general, a secondary attack that strikes the head in earlier games or the back will result in a one-hit kill.\r\n'),
('Submachine guns', 'The submachine guns are a powerful weapon in the counter-strike arsenal. With a high rate of fire it is a perfect to kill your opponents at close range. But look out the submachine guns aren’t made for long range, so don’t fight a rifle with a submachine gun at long range.\r\n\r\nThe P90 is a great SMG. It is very popular among lower-level players who favor a rushing playstyle. Its high magazine size allows this SMG to be used for spraying bullets. It also has a controllable recoil even with continuous fire and acceptable accuracy (which has been further decreased in Global Offensive) that is good enough for medium range but inaccurate for long range\r\n'),
('Rifles', 'The rifles are one of the most used gun category out there. Do not forget when we are talking about rifles we are both talking about the assault rifles but also the sniper rifles. Most rifles have a great dmg but less fire rate. The most used rifles are M4A1-S for the Counter-terrorist side and the AK-47 for the Terrorist side.\r\n\r\nThe M4A1-S is equipped with a silencer, which is attached when receiving the weapon, and can be manually detached (and reattached) by pressing the secondary fire key. The time taken for detaching and reattaching the silencer is greatly increased, so it is unadvised to do it in the midst of combat.\r\n'),
('Heavy', 'The heavy category’s exist out of shotguns and heavy machine guns. Most heavy guns can be used by both sides expect for the: MAG-7 and the Sawed-off. The machine guns are an awesome weapons but they will make you slower while using it.\r\n\r\n\r\nThe M249 is currently the most expensive weapon in all games in the series, at $5750 in earlier games and reduced to $5200 in Global Offensive. It also has a high ammunition cost in GoldSrc games where ammunition needs to be bought. As the M249\'s 5.56mm ammo does not share with assault rifles that also uses 5.56mm ammo means the only way to refill the ammo without cost is pick up another M249 from dead player, which is a very rare possibility. These properties make it a rare sight in competitive games with high economy management, but is more common in public matches due to its large magazine and good damage output making it a fun weapon to use.\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
