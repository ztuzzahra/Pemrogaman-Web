 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
 
CREATE TABLE `new_cases` (
  `idk_harian` int(17) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `totalharian` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
INSERT INTO `new_cases` ( `idk_harian`,`id_negara`, `totalharian`) VALUES
(001,1, 19522),
(002,2, 2706),
(003,3, 2091),
(004,4, 2638),
(005,5, 3996),
(006,6, 673),
(007,7, 2392),
(008,8, 6411),
(009,9, 1112),
(010,10, 6);

CREATE TABLE `total_deaths` (
  `id_tdeath` int(17) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `totaldeaths` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
INSERT INTO `total_deaths` ( `id_tdeath`,`id_negara`, `totaldeaths`) VALUES
(101,1,58640),
(202,2,23822),
(303,3,27359),
(404,4,23660),
(505,5,21678),
(606,6,6215),
(707,7,2992),
(808,8,867),
(909,9,5877),
(110,10,4633);


CREATE TABLE `new_deaths` (
  `id_death` int(17) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `newdeaths` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
INSERT INTO `new_deaths` ( `id_death`,`id_negara`, `newdeaths`) VALUES
(101,1,1843),
(202,2,301),
(303,3,382),
(404,4,367),
(505,5,586),
(606,6,89),
(707,7,92),
(808,8,73),
(909,9,71),
(110,10,0);


CREATE TABLE `Total_Recovered` (
  `id_Recovered` int(17) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `TRecovered` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
INSERT INTO `Total_Recovered` ( `id_Recovered`,`id_negara`, `TRecovered`) VALUES
(01,1,140138 ),
(02,2,123903),
(03,3,68941),
(04,4,46886),
(05,5,0),
(06,6,117400 ),
(07,7,38809 ),
(08,8,8456),
(09,9,72439),
(10,10,77555);


CREATE TABLE `Active_Cases` (
  `id_Active` int(17) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `TActive` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
INSERT INTO `Active_Cases` ( `id_Active`,`id_negara`, `TActive`) VALUES
(1101,1,831100),
(2202,2,84403),
(3303,3,105205),
(4404,4,95365),
(5505,5,139123),
(6606,6,35816),
(7707,7,72852),
(8808,8,84235),
(9909,9,14268),
(1010,10,648);



