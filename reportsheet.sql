-- Adminer 4.7.7 MySQL dump

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
  `pu_cat` int(11) NOT NULL DEFAULT '0',
  `pu_exam` int(11) NOT NULL DEFAULT '0',
  `pu_total` int(11) AS (pu_cat + pu_exam) VIRTUAL,
  `ne_cat` int(11) NOT NULL DEFAULT '0',
  `ne_exam` int(11) NOT NULL DEFAULT '0',
  `ne_total` int(11) AS (ne_cat + ne_exam) VIRTUAL,
  `ho_cat` int(11) NOT NULL DEFAULT '0',
  `ho_exam` int(11) NOT NULL DEFAULT '0',
  `ho_total` int(11) AS (ho_cat + ho_exam) VIRTUAL,
  `po_cat` int(11) NOT NULL DEFAULT '0',
  `po_exam` int(11) NOT NULL DEFAULT '0',
  `po_total` int(11) AS (po_cat + po_exam) VIRTUAL,
  `lt_cat` int(11) NOT NULL DEFAULT '0',
  `lt_exam` int(11) NOT NULL DEFAULT '0',
  `lt_total` int(11) AS (lt_cat + lt_exam) VIRTUAL,
  `sp_cat` int(11) NOT NULL DEFAULT '0',
  `sp_exam` int(11) NOT NULL DEFAULT '0',
  `sp_total` int(11) AS (sp_cat + sp_exam) VIRTUAL,
  `wr_cat` int(11) NOT NULL DEFAULT '0',
  `wr_exam` int(11) NOT NULL DEFAULT '0',
  `wr_total` int(11) AS (wr_cat + wr_exam) VIRTUAL,
  `hl_cat` int(11) NOT NULL DEFAULT '0',
  `hl_exam` int(11) NOT NULL DEFAULT '0',
  `hl_total` int(11) AS (hl_cat + hl_exam) VIRTUAL,
  `rw_cat` int(11) NOT NULL DEFAULT '0',
  `rw_exam` int(11) NOT NULL DEFAULT '0',
  `rw_total` int(11) AS (rw_cat + rw_exam) VIRTUAL,
  `at_cat` int(11) NOT NULL DEFAULT '0',
  `at_exam` int(11) NOT NULL DEFAULT '0',
  `at_total` int(11) AS (at_cat + at_exam) VIRTUAL,
  `pe_cat` int(11) NOT NULL DEFAULT '0',
  `pe_exam` int(11) NOT NULL DEFAULT '0',
  `pe_total` int(11) AS (pe_cat + pe_exam) VIRTUAL,
  `aw_cat` int(11) NOT NULL DEFAULT '0',
  `aw_exam` int(11) NOT NULL DEFAULT '0',
  `aw_total` int(11) AS (aw_cat + aw_exam) VIRTUAL,
  `cat_total` int(11) AS (en_cat + mt_cat + bt_cat + bu_cat + bs_cat + ss_cat + ag_cat  + is_cat + al_cat + qs_cat + ph_cat + fr_cat + ca_cat + yo_cat + ci_cat + he_cat + it_cat) VIRTUAL,
  `exam_total` int(11) AS (en_exam + mt_exam + bt_exam + bu_exam + bs_exam + ss_exam + ag_exam  + is_exam + al_exam + qs_exam + ph_exam + fr_exam + ca_exam + yo_exam + ci_exam + he_exam + it_exam) VIRTUAL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(6) NOT NULL,
  `numbers` int(11) NOT NULL,
  `sch_closes` int(11) NOT NULL,
  `sch_resumes` int(11) NOT NULL,
  `sch_opened` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `gen_score`;
CREATE TABLE `gen_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(5) NOT NULL,
  `value` tinytext NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `indiv_students`;
CREATE TABLE `indiv_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term` tinytext NOT NULL,
  `students_id` int(11) NOT NULL,
  `student_photo` text NOT NULL,
  `present` int(11) NOT NULL,
  `absent` int(11) NOT NULL,
  `p_comment` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `students_id` (`students_id`),
  CONSTRAINT `indiv_students_ibfk_3` FOREIGN KEY (`students_id`) REFERENCES `broadsheet` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` tinytext NOT NULL,
  `dob` varchar(50) NOT NULL,
  `class` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
(17,	'PHE',	'ph'),
(18,	'punctuality',	'pu'),
(19,	'Neatness',	'ne'),
(20,	'Honesty',	'ho'),
(21,	'Politeness',	'po'),
(22,	'Leadership Trait',	'lt'),
(23,	'Speaking Skills',	'sp'),
(24,	'Writing Skills',	'wr'),
(25,	'Health',	'hl'),
(26,	'Rel with Others',	'rw'),
(27,	'Attentiveness',	'at'),
(28,	'Perseverance',	'pe'),
(29,	'Attitude to Work',	'aw');

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

DROP TABLE IF EXISTS `variables`;
CREATE TABLE `variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `value` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `variables` (`id`, `name`, `value`) VALUES
(1,	'term',	'2019/2020 Third Term'),
(2,	'Number of times school opened',	'120'),
(3,	'Number of student in JS1',	'20'),
(4,	'Number of student in JS2',	'12'),
(5,	'Number of student in JS3',	'34'),
(6,	'Date school Closes',	''),
(7,	'Date School Resumes',	'');

-- 2020-10-22 08:50:51
