-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-06-25 12:43:34
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `hellohhelo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `answer`
--

INSERT INTO `answer` (`answer_id`, `id`, `body`) VALUES
(3, NULL, ''),
(4, 2, 'wakaranai'),
(5, 2, 'わからない'),
(6, 2, 'wakaranai'),
(7, 2, 'wakaranai'),
(8, 2, 'wakaranai'),
(9, 2, 'wakaranai'),
(10, 2, 'wakaranai'),
(11, 2, 'wakaranai'),
(12, 2, 'wakaranai');

-- --------------------------------------------------------

--
-- テーブルの構造 `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `question`
--

INSERT INTO `question` (`id`, `body`) VALUES
(1, ''),
(2, '分かりません');

-- --------------------------------------------------------

--
-- テーブルの構造 `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルのAUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルのAUTO_INCREMENT `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `question` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
