-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `broadsheet`;
CREATE TABLE `broadsheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `class` varchar(5) DEFAULT NULL,
  `en_cat` int(11) NOT NULL DEFAULT '0',
  `en_exam` int(11) NOT NULL DEFAULT '0',
  `en_total` int(11) AS (en_cat + en_exam) VIRTUAL,
  `mt_cat` int(11) NOT NULL DEFAULT '0',
  `mt_exam` int(11) NOT NULL DEFAULT '0',
  `mt_total` int(11) AS (mt_cat + mt_exam) VIRTUAL,
  `bt_cat` int(11) NOT NULL DEFAULT '0',
  `bt_exam` int(11) NOT NULL DEFAULT '0',
  `bt_total` int(11) AS (bt_cat + bt_exam) VIRTUAL,
  `bu_cat` int(11) NOT NULL DEFAULT '0',
  `bu_exam` int(11) NOT NULL DEFAULT '0',
  `bu_total` int(11) AS (bu_cat + bu_exam) VIRTUAL,
  `bs_cat` int(11) NOT NULL DEFAULT '0',
  `bs_exam` int(11) NOT NULL DEFAULT '0',
  `bs_total` int(11) AS (bs_cat + bs_exam) VIRTUAL,
  `ss_cat` int(11) NOT NULL DEFAULT '0',
  `ss_exam` int(11) NOT NULL DEFAULT '0',
  `ss_total` int(11) AS (ss_cat + ss_exam) VIRTUAL,
  `ag_cat` int(11) NOT NULL DEFAULT '0',
  `ag_exam` int(11) NOT NULL DEFAULT '0',
  `ag_total` int(11) AS (ag_cat + ag_exam) VIRTUAL,
  `is_cat` int(11) NOT NULL DEFAULT '0',
  `is_exam` int(11) NOT NULL DEFAULT '0',
  `is_total` int(11) AS (is_cat + is_exam) VIRTUAL,
  `al_cat` int(11) NOT NULL DEFAULT '0',
  `al_exam` int(11) NOT NULL DEFAULT '0',
  `al_total` int(11) AS (al_cat + al_exam) VIRTUAL,
  `qs_cat` int(11) NOT NULL DEFAULT '0',
  `qs_exam` int(11) NOT NULL DEFAULT '0',
  `qs_total` int(11) AS (qs_cat + qs_exam) VIRTUAL,
  `ph_cat` int(11) NOT NULL DEFAULT '0',
  `ph_exam` int(11) NOT NULL DEFAULT '0',
  `ph_total` int(11) AS (ph_cat + ph_exam) VIRTUAL,
  `fr_cat` int(11) NOT NULL DEFAULT '0',
  `fr_exam` int(11) NOT NULL DEFAULT '0',
  `fr_total` int(11) AS (fr_cat + fr_exam) VIRTUAL,
  `ca_cat` int(11) NOT NULL DEFAULT '0',
  `ca_exam` int(11) NOT NULL DEFAULT '0',
  `ca_total` int(11) AS (ca_cat + ca_exam) VIRTUAL,
  `yo_cat` int(11) NOT NULL DEFAULT '0',
  `yo_exam` int(11) NOT NULL DEFAULT '0',
  `yo_total` int(11) AS (yo_cat + yo_exam) VIRTUAL,
  `ci_cat` int(11) NOT NULL DEFAULT '0',
  `ci_exam` int(11) NOT NULL DEFAULT '0',
  `ci_total` int(11) AS (ci_cat + ci_exam) VIRTUAL,
  `he_cat` int(11) NOT NULL DEFAULT '0',
  `he_exam` int(11) NOT NULL DEFAULT '0',
  `he_total` int(11) AS (he_cat + he_exam) VIRTUAL,
  `it_cat` int(11) NOT NULL DEFAULT '0',
  `it_exam` int(11) NOT NULL DEFAULT '0',
  `it_total` int(11) AS (it_cat + it_exam) VIRTUAL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `broadsheet` (`id`, `name`, `class`, `en_cat`, `en_exam`, `en_total`, `mt_cat`, `mt_exam`, `mt_total`, `bt_cat`, `bt_exam`, `bt_total`, `bu_cat`, `bu_exam`, `bu_total`, `bs_cat`, `bs_exam`, `bs_total`, `ss_cat`, `ss_exam`, `ss_total`, `ag_cat`, `ag_exam`, `ag_total`, `is_cat`, `is_exam`, `is_total`, `al_cat`, `al_exam`, `al_total`, `qs_cat`, `qs_exam`, `qs_total`, `ph_cat`, `ph_exam`, `ph_total`, `fr_cat`, `fr_exam`, `fr_total`, `ca_cat`, `ca_exam`, `ca_total`, `yo_cat`, `yo_exam`, `yo_total`, `ci_cat`, `ci_exam`, `ci_total`, `he_cat`, `he_exam`, `he_total`, `it_cat`, `it_exam`, `it_total`) VALUES
(1,	'Yusuf Rodiyyah',	'JS1',	28,	51,	79,	38,	55,	93,	40,	60,	100,	40,	60,	100,	39,	52,	91,	37,	49,	86,	37,	56,	93,	37,	56,	93,	40,	60,	100,	39,	58,	97,	35,	60,	95,	39,	58,	97,	37,	50,	87,	35,	65,	100,	55,	39,	94,	55,	37,	92,	55,	39,	94),
(2,	'Akako Sultan',	'JS2',	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0,	0);

DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `teacher` tinytext NOT NULL,
  `total` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `classes` (`id`, `name`, `teacher`, `total`, `phone`) VALUES
(1,	'JS1',	'Mr Adams',	19,	'09032139456');

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` tinytext NOT NULL,
  `dob` varchar(50) NOT NULL,
  `class` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `students` (`id`, `fname`, `dob`, `class`, `phone`) VALUES
(4,	'Fawaz bin Ishaq',	'27/03/2020',	'JS1',	'07061811568'),
(5,	'Akako Sultan',	'10/04/2006',	'JS2',	'08108097322');

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` tinytext NOT NULL,
  `sub_code` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `subjects` (`id`, `subject`, `sub_code`) VALUES
(1,	'English Language',	'en'),
(2,	'Mathematics',	'mt'),
(3,	'Basic Science',	'bs'),
(4,	'Social Studies',	'ss'),
(5,	'Computer Studies',	'it'),
(6,	'Agricultural Science',	'ag'),
(7,	'I.R.K',	'is'),
(8,	'Civic Education',	'ci'),
(9,	'Quran Studies',	'qs'),
(10,	'Basic Technology',	'bt'),
(11,	'Home Economics',	'he'),
(12,	'Business Studies',	'bu'),
(13,	'Yoruba',	'yo'),
(14,	'CCA',	'ca'),
(15,	'Arabic',	'al'),
(16,	'French',	'fr'),
(17,	'PHE',	'ph');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pword` tinytext NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `uname`, `pword`, `level`) VALUES
(1,	'superadmin',	'e78a173eb9cb6f687d895182cb21bb42',	1),
(2,	'admin',	'21232f297a57a5a743894a0e4a801fc3',	2);

-- 2020-03-14 07:24:34
