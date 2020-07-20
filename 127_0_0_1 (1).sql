-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-07-20 03:23:28
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
CREATE DATABASE IF NOT EXISTS `hellohhelo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hellohhelo`;

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
(12, 2, 'wakaranai'),
(13, 2, 'wakaranai'),
(14, 2, '分かりません'),
(15, 2, '分かりません'),
(16, 4, 'あいう'),
(17, 4, 'あいう'),
(18, 6, 'aiueo'),
(19, 6, 'aiueo'),
(20, 5, 'iii'),
(21, 5, 'iii'),
(22, 5, 'こんにちは'),
(23, 5, 'こんにちは'),
(24, 5, 'こんにちは'),
(25, 5, 'こんにちは'),
(26, 5, 'こんにちは'),
(27, 5, 'こんにちは'),
(28, 5, 'こんにちは'),
(29, 6, 'こうだと思う'),
(30, 6, 'こうだと思う');

-- --------------------------------------------------------

--
-- テーブルの構造 `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, '分かりません'),
(3, 'konnichiwa'),
(4, 'aaa'),
(5, 'aaa'),
(6, 'aaa');

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
-- テーブルのデータのダンプ `site`
--

INSERT INTO `site` (`id`, `name`, `title`, `body`) VALUES
(12, 'あいうえお', NULL, 'いいい');

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
-- テーブルのインデックス `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- テーブルのAUTO_INCREMENT `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルのAUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルのAUTO_INCREMENT `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `question` (`id`);
--
-- データベース: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__bookmark`
--
-- テーブル phpmyadmin.pma__bookmark の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__bookmark' doesn't exist in engine
-- テーブル phpmyadmin.pma__bookmark のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__bookmark`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__central_columns`
--
-- テーブル phpmyadmin.pma__central_columns の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__central_columns' doesn't exist in engine
-- テーブル phpmyadmin.pma__central_columns のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__central_columns`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__column_info`
--
-- テーブル phpmyadmin.pma__column_info の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__column_info' doesn't exist in engine
-- テーブル phpmyadmin.pma__column_info のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__column_info`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__designer_settings`
--
-- テーブル phpmyadmin.pma__designer_settings の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__designer_settings' doesn't exist in engine
-- テーブル phpmyadmin.pma__designer_settings のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__designer_settings`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__export_templates`
--
-- テーブル phpmyadmin.pma__export_templates の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__export_templates' doesn't exist in engine
-- テーブル phpmyadmin.pma__export_templates のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__export_templates`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__favorite`
--
-- テーブル phpmyadmin.pma__favorite の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__favorite' doesn't exist in engine
-- テーブル phpmyadmin.pma__favorite のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__favorite`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__history`
--
-- テーブル phpmyadmin.pma__history の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__history' doesn't exist in engine
-- テーブル phpmyadmin.pma__history のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__history`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__navigationhiding`
--
-- テーブル phpmyadmin.pma__navigationhiding の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__navigationhiding' doesn't exist in engine
-- テーブル phpmyadmin.pma__navigationhiding のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__navigationhiding`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__pdf_pages`
--
-- テーブル phpmyadmin.pma__pdf_pages の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__pdf_pages' doesn't exist in engine
-- テーブル phpmyadmin.pma__pdf_pages のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__pdf_pages`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__recent`
--
-- テーブル phpmyadmin.pma__recent の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__recent' doesn't exist in engine
-- テーブル phpmyadmin.pma__recent のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__recent`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__relation`
--
-- テーブル phpmyadmin.pma__relation の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__relation' doesn't exist in engine
-- テーブル phpmyadmin.pma__relation のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__relation`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__savedsearches`
--
-- テーブル phpmyadmin.pma__savedsearches の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__savedsearches' doesn't exist in engine
-- テーブル phpmyadmin.pma__savedsearches のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__savedsearches`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__table_coords`
--
-- テーブル phpmyadmin.pma__table_coords の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__table_coords' doesn't exist in engine
-- テーブル phpmyadmin.pma__table_coords のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__table_coords`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__table_info`
--
-- テーブル phpmyadmin.pma__table_info の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__table_info' doesn't exist in engine
-- テーブル phpmyadmin.pma__table_info のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__table_info`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__table_uiprefs`
--
-- テーブル phpmyadmin.pma__table_uiprefs の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__table_uiprefs' doesn't exist in engine
-- テーブル phpmyadmin.pma__table_uiprefs のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__table_uiprefs`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__tracking`
--
-- テーブル phpmyadmin.pma__tracking の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__tracking' doesn't exist in engine
-- テーブル phpmyadmin.pma__tracking のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__tracking`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__userconfig`
--
-- テーブル phpmyadmin.pma__userconfig の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__userconfig' doesn't exist in engine
-- テーブル phpmyadmin.pma__userconfig のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__userconfig`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__usergroups`
--
-- テーブル phpmyadmin.pma__usergroups の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__usergroups' doesn't exist in engine
-- テーブル phpmyadmin.pma__usergroups のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__usergroups`' 付近 1 行目

-- --------------------------------------------------------

--
-- テーブルの構造 `pma__users`
--
-- テーブル phpmyadmin.pma__users の構造の読み取りエラー: #1932 - Table 'phpmyadmin.pma__users' doesn't exist in engine
-- テーブル phpmyadmin.pma__users のデータ読み取りエラー: #1064 - SQL構文エラーです。バージョンに対応するマニュアルを参照して正しい構文を確認してください。 : 'FROM `phpmyadmin`.`pma__users`' 付近 1 行目
--
-- データベース: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
