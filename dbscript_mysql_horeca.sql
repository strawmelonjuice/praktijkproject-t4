-- Naar MySQL geconverteerd.
CREATE DATABASE IF NOT EXISTS horeca;
USE horeca;
DROP TABLE IF EXISTS diner;
CREATE TABLE `diner`
(
    `dinner_id`   int(11) NOT NULL,
    `description` varchar(250) DEFAULT NULL,
    `start`       datetime     DEFAULT NULL,
    `end`         datetime     DEFAULT NULL,
    `location`    varchar(40)  DEFAULT NULL
    -- , `image` VARCHAR(150) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

INSERT INTO `diner` (`dinner_id`, `description`, `start`, `end`, `location`)
VALUES (1, 'ZomerBrunch', '2021-06-03 10:00:00', '2021-06-03 17:00:00', 'Binnenplaats Vlijmense weg'),
       (2, 'Heerboeren diner', '2021-06-04 13:00:00', '2021-06-04 16:00:00', 'Ons restaurant'),
       (3, 'All you can eat - Frikandellenbroodjes', '2021-06-05 09:00:00', '2021-06-05 17:00:00', 'Studentenkantine');


-- UPDATE `diner`
-- SET `image` = NULL
-- WHERE `image` = '';

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`
(
    `user_name`  varchar(30) NOT NULL,
    `password`   varchar(20) DEFAULT NULL,
    `student_nr` varchar(10) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

INSERT INTO `user` (`user_name`, `password`, `student_nr`)
VALUES ('ChristianKroos', 'welkom123', '86217996'),
       ('DoedeSmeulders', 'welkom123', '94192111'),
       ('ElieneHolla', 'welkom123', '44662246'),
       ('HosseinWaterman', 'welkom123', '99685607'),
       ('JoukeWalhout', 'welkom123', '44303878'),
       ('LiliaVanAntwerpen', 'welkom123', '38560634'),
       ('PhilipBoekholt', 'welkom123', '56109212'),
       ('SelamiMeulenbroeks', 'welkom123', '89084537'),
       ('SemiraTrines', 'welkom123', '28868799'),
       ('SiebrenBreukers', 'welkom123', '93561432'),
       ('Just_Mar_OK34', 'xxosihH8riEq7c', '505435');


ALTER TABLE `diner`
    ADD PRIMARY KEY (`dinner_id`);

ALTER TABLE `user`
    ADD PRIMARY KEY (`user_name`),
    ADD UNIQUE KEY `student_nr` (`student_nr`);


ALTER TABLE `diner`
    MODIFY `dinner_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;
