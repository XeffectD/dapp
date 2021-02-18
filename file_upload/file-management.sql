-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 02:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1


--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `files` (`id`, `name`, `size`) VALUES
(3, 'vlcsnap-error584.png', 2978947),
(4, '1007550.jpg', 515574),
(5, '1005830.jpg', 1470153),
(6, '1005830.jpg', 1470153),
(7, '1005830.jpg', 1470153),
(8, '1005830.jpg', 1470153),
(9, '1005830.jpg', 1470153),
(10, '1005830.jpg', 1470153),
(11, '1005830.jpg', 1470153),
(12, '1014466.jpg', 789181),
(13, '1014466.jpg', 789181),
(14, '1014466.jpg', 789181),
(15, '1014466.jpg', 789181),
(16, '1044544.jpg', 532075),
(17, '1054250.png', 1342624),
(18, '1054250.png', 1342624),
(19, '1020745.png', 1712802);


ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;
