-- Naar MySQL geconverteerd.
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `student_nr` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`user_name`, `password`, `student_nr`) VALUES
('ChristianKroos', 'welkom123', '86217996'),
('DoedeSmeulders', 'welkom123', '94192111'),
('ElieneHolla', 'welkom123', '44662246'),
('HosseinWaterman', 'welkom123', '99685607'),
('JoukeWalhout', 'welkom123', '44303878'),
('LiliaVanAntwerpen', 'welkom123', '38560634'),
('PhilipBoekholt', 'welkom123', '56109212'),
('SelamiMeulenbroeks', 'welkom123', '89084537'),
('SemiraTrines', 'welkom123', '28868799'),
('SiebrenBreukers', 'welkom123', '93561432');


ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `student_nr` (`student_nr`);
COMMIT;