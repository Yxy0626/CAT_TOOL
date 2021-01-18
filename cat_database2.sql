-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-01-18 20:07:31
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `cat_database2`
--

-- --------------------------------------------------------

--
-- 表的结构 `file`
--

CREATE TABLE `file` (
  `file_name` varchar(45) DEFAULT NULL,
  `project_pm` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `file`
--

INSERT INTO `file` (`file_name`, `project_pm`, `id`, `email`) VALUES
('test1.xlsx', 'knkn@qq.com', 3, '1111@qq.com'),
('work２.xlsx', 'knkn@qq.com', 4, '456@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

CREATE TABLE `project` (
  `project_id` varchar(45) NOT NULL,
  `project_pm` varchar(45) NOT NULL,
  `project_start` varchar(45) DEFAULT NULL,
  `project_end` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`project_id`, `project_pm`, `project_start`, `project_end`) VALUES
('A20000817', 'knkn@qq.com', '2020-12-18', '2020-04-04');

-- --------------------------------------------------------

--
-- 表的结构 `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `ST` varchar(500) NOT NULL,
  `TT` varchar(500) NOT NULL,
  `project_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `terms`
--

INSERT INTO `terms` (`id`, `name`, `ST`, `TT`, `project_id`) VALUES
(6, 'knkn@qq.com', '苹果', 'Apple', 'A20000817'),
(10, 'knkn@qq.com', 'Apple', '苹果', 'A20000817'),
(11, 'knkn@qq.com', 'Banana', '香蕉', 'A20000817'),
(12, 'knkn@qq.com', 'Cat', '猫', 'A20000817'),
(50, 'knkn@qq.com', 'Apple', '苹果', 'A20000817'),
(51, 'knkn@qq.com', 'Banana', '香蕉', 'A20000817'),
(52, 'knkn@qq.com', 'Cat', '猫', 'A20000817'),
(53, '123123@qq.com', 'Computer', '电脑', 'A20000817');

-- --------------------------------------------------------

--
-- 表的结构 `translation`
--

CREATE TABLE `translation` (
  `id` int(11) NOT NULL,
  `ST` varchar(10000) NOT NULL,
  `TT` varchar(10000) NOT NULL,
  `file_name` varchar(45) NOT NULL,
  `project_id` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `translation`
--

INSERT INTO `translation` (`id`, `ST`, `TT`, `file_name`, `project_id`, `Email`) VALUES
(1, 'Apple', '苹果123\n', 'AAA', 'A20000817', 'knkn@123.com'),
(2, 'Orange', '去你妈的香蕉', 'AAA', 'A20000817', 'knkn@123.com'),
(3, 'Apple', '苹果', 'AAA', 'A20000817', 'knkn@123.com'),
(4, 'Orange', '香蕉', 'AAA', 'A20000817', 'knkn@123.com'),
(5, 'Apple', '苹果', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(6, 'Banana', '香蕉', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(7, 'Cat', '猫', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(8, 'Apple', '苹果', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(9, 'Banana', '香蕉', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(10, 'Cat', '猫', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(11, 'Removable\nWindscreen', '可拆卸\n麦罩  ', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(12, 'Audio technical U853\nCardioid\nMicrophone capsule', '音频技术U853\n心脏\n线形传声器  ', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(13, 'Spring-loaded\nFlexible center', '弹簧加载\n柔性中心  ', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(14, '3.5mm (1/8’’) connector\nmono, stereo and 4-pole available', '3.5毫米（1/8英寸）连接器\n提供3.5毫米（1/8英寸）单声道、立体声和4极接口', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(15, 'Removable\nWindscreen', '可拆卸\n麦罩  ', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(16, 'Audio technical U853\nCardioid\nMicrophone capsule', '音频技术U853\n心脏\n线形传声器  ', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(17, 'Spring-loaded\nFlexible center', '弹簧加载\n柔性中心  ', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(18, '3.5mm (1/8’’) connector\nmono, stereo and 4-pole available', '3.5毫米（1/8英寸）连接器\n提供3.5毫米（1/8英寸）单声道、立体声和4极接口', 'test1.xlsx', 'A20000817', 'knkn@qq.com'),
(19, 'Many employers hailed the shift initially as being surprisingly productive.', '起初，许多雇主称赞这一转变的成效令人惊讶。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(20, 'But as the months have passed, some of the drawbacks have emerged.', '但几个月过去了，一些缺点也浮现出来。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(21, 'As companies look beyond the pandemic, Prof Bloom said many are eyeing policies that combine two days a week at home with three days of office time, which will remain important for meetings, building company culture and loyalty and basic mental health.', '布鲁姆教授表示，随着企业将目光投向疫情之后，许多企业正着眼于每周两天在家办公、三天在办公室上班等政策，这对于举行会议、建立企业文化和忠诚度，以及基本的心理健康仍然十分重要。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(22, '\"The radical extremes - so, full-time in the office or full-time at home - are not ideal for most people,\" said Prof Bloom.', '布鲁姆教授表示：“对于大多数人来说，全职在办公室工作或全职在家办公这样的极端做法并不理想。”', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(23, 'But he said he did not expect the pre-pandemic office to return.', '不过，他说，他认为我们回不到疫情前的办公状态。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(24, 'A Willis Towers Watson survey of US employers in May found that they expected 22% of staff to continue working from home after the pandemic, up from just 7% in 2019.', '韦莱韬悦今年5月对美国雇主进行的一项调查发现，他们预计22%的员工在疫情结束后将继续在家办公，而2019年这一比例仅为7%。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(25, 'About 55% of employers said they expected staff to work from home at least one day a week after concerns about the virus passes, a PWC survey found.', '普华永道的一项调查发现，约55%的雇主表示，在对病毒的担忧消除后，他们预计员工每周至少有一天在家工作。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(26, 'And more than 80% of employees said they supported that idea.', '超过80%的员工表示支持这个想法。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(27, 'Analysts say such a shift could have widespread implications, reducing demand for office and residential properties in expensive city centres.', '分析师表示，这种转变可能产生广泛影响，降低对城市中心昂贵的写字楼和住宅的需求。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(28, 'Rents in New York and San Francisco have already dropped.', '纽约和旧金山的房租已经有所下降。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(29, '', 'total', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(30, '', 'Grand total', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(31, '', 'Passing score', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(32, '', 'result', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(33, '5', '', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(34, '10', '', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(35, 'Many employers hailed the shift initially as being surprisingly productive.', '起初，许多雇主称赞这一转变的成效令人惊讶。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(36, 'But as the months have passed, some of the drawbacks have emerged.', '但几个月过去了，一些缺点也浮现出来。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(37, 'As companies look beyond the pandemic, Prof Bloom said many are eyeing policies that combine two days a week at home with three days of office time, which will remain important for meetings, building company culture and loyalty and basic mental health.', '布鲁姆教授表示，随着企业将目光投向疫情之后，许多企业正着眼于每周两天在家办公、三天在办公室上班等政策，这对于举行会议、建立企业文化和忠诚度，以及基本的心理健康仍然十分重要。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(38, '\"The radical extremes - so, full-time in the office or full-time at home - are not ideal for most people,\" said Prof Bloom.', '布鲁姆教授表示：“对于大多数人来说，全职在办公室工作或全职在家办公这样的极端做法并不理想。”', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(39, 'But he said he did not expect the pre-pandemic office to return.', '不过，他说，他认为我们回不到疫情前的办公状态。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(40, 'A Willis Towers Watson survey of US employers in May found that they expected 22% of staff to continue working from home after the pandemic, up from just 7% in 2019.', '韦莱韬悦今年5月对美国雇主进行的一项调查发现，他们预计22%的员工在疫情结束后将继续在家办公，而2019年这一比例仅为7%。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(41, 'About 55% of employers said they expected staff to work from home at least one day a week after concerns about the virus passes, a PWC survey found.', '普华永道的一项调查发现，约55%的雇主表示，在对病毒的担忧消除后，他们预计员工每周至少有一天在家工作。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(42, 'And more than 80% of employees said they supported that idea.', '超过80%的员工表示支持这个想法。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(43, 'Analysts say such a shift could have widespread implications, reducing demand for office and residential properties in expensive city centres.', '分析师表示，这种转变可能产生广泛影响，降低对城市中心昂贵的写字楼和住宅的需求。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(44, 'Rents in New York and San Francisco have already dropped.', '纽约和旧金山的房租已经有所下降。', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(45, '', 'total', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(46, '', 'Grand total', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(47, '', 'Passing score', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(48, '', 'result', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(49, '5', '', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(50, '10', '', '1013.xlsx', 'A20000817', 'knkn@qq.com'),
(51, 'Removable\nWindscreen\n', '可拆卸的\n防喷麦套', 'work２.xlsx', 'A20000817', 'knkn@qq.com'),
(52, 'Audio technical U853\nCardioid \nMicrophone capsule\n', '音频技术U853\n心形\n话筒振膜', 'work２.xlsx', 'A20000817', 'knkn@qq.com'),
(53, 'Spring-loaded\nFlexible center\n', '弹簧负载\n韧性连接中心', 'work２.xlsx', 'A20000817', 'knkn@qq.com'),
(54, '3.5mm (1/8’’) connector\nmono, stereo and 4-pole available\n', '3.5毫米（1/8英寸）连接器\n提供单声道、立体声和4极', 'work２.xlsx', 'A20000817', 'knkn@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `translation_memory`
--

CREATE TABLE `translation_memory` (
  `id` int(11) NOT NULL,
  `ST` varchar(10000) NOT NULL,
  `TT` varchar(10000) NOT NULL,
  `project_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `translation_memory`
--

INSERT INTO `translation_memory` (`id`, `ST`, `TT`, `project_id`) VALUES
(76, '民主党人正在为他们获得众议院多数党席位后制定一个愿景，但在他们待办事项的清单上有一项明显缺少：弹劾特朗普总统。 \n', 'House Democrats are laying out a vision for their new majority, and there\'s one item that\'s noticeably missing from the to-do list: President Donald Trump\'s impeachment. \n', 'A20000817'),
(77, '他们正在为公共政策项目制定行动计划，包括降低医保成本，加强政府监督等。 ', 'They\'re putting in motion plans for spending on public works projects, lowering health care costs and increasing government oversight. ', 'A20000817'),
(79, '这是众议院民主党领袖佩洛西试图在新国会中要保持的平衡。 \n', 'It\'s the balance that Democratic leader Nancy Pelosi is trying to strike in the new Congress. \n', 'A20000817'),
(80, '一方面，民主党的左翼人士迫切希望与特朗普总统对抗，但佩洛西的本能是优先考虑民主党向选举他们上任的选民们所作的民生问题上的承诺。 \n', 'On the one hand, the Democrats\' left flank is eager to confront the president. But Pelosi\'s instinct is to prioritize the kitchen-table promises that Democrats made to voters who elected them to office. \n', 'A20000817'),
(81, '众议院各委员会的民主党领袖们将对特朗普总统和白宫的行为进行监督，但目标是一步一步来。 \n', 'Democratic leaders of House committees will be conducting oversight of the president\'s business and White House dealings. The goal is to take it one step at a time. \n\n', 'A20000817'),
(82, '新华社：北京人口20年来首次下降 \n', 'Xinhua: Beijing Population Falls for First Time in 20 Years \n', 'A20000817'),
(83, '中国官方新华社援引官方数据称，中国首都北京的人口在2017年下降，这是20年来的第一次。 \n', 'The population of China\'s capital, Beijing, fell for the first time in two decades in 2017, the official Xinhua news agency reported Thursday, citing official data.   ', 'A20000817'),
(84, '新华社称，去年北京永久居民人数达到2170.7万人，比上一年减少22,000人。 \n', 'The number of permanent residents reached 21.707 million last year, 22,000 fewer than the previous year, Xinhua said.   ', 'A20000817'),
(85, '新华社援引市人民代表大会的报告称，北京市六个城区的人数从2016年到2017年下降了3％。 \n', 'The number of people in the city\'s six urban districts fell 3 percent from 2016 to 2017, the Xinhua report said, citing the city\'s People\'s Congress.   ', 'A20000817'),
(86, '北京当局一直在努力遏制人口增长，这是缓解城市交通拥堵、资源短缺和房价飞涨的部分努力。 \n', 'Authorities in Beijing have been trying to curb population growth as part of their efforts to ease traffic congestion, resource shortages and house price inflation.   ', 'A20000817'),
(87, '自1998年以来，北京的人口增长了三分之二，而能源消耗增加了一倍以上，车辆数量增加了两倍。', 'Beijing\'s population has risen by two-thirds since 1998, while energy consumption has more than doubled and the number of vehicles tripled. ', 'A20000817'),
(88, '北京政府在2016年表示，将设法在本世纪末前将人口数量限制在2300万。 \n', 'It said in 2016 it would try to cap its population at 23 million by the end of the decade.   ', 'A20000817'),
(89, '北京市一直致力于与邻近的河北省和天津市进行经济上的整合，允许其部分大学、政府部门和工业企业迁出。 \n', 'The city has been working on integrating its economy with the neighboring province of Hebei and the city of Tianjin in a bid to allow some of its universities, government departments and industrial firms to move out.   ', 'A20000817'),
(90, '它还在河北的雄安建立了一个新的开发区，承担北京的一些“非首都”功能，同时也在交通网络上进行大量投资，为长途通勤者提供便利。 \n', 'It has also set up a new development zone at Xiongan in Hebei to take on some of Beijing\'s \"non-capital\" functions, and it is also investing heavily on transportation networks in order to make it easier for long-distance commuters.   ', 'A20000817'),
(91, '虽然北京和上海等大城市都试图控制人口增长，但中国从整体上在努力提高出生率。中国的出生率在2017年下降，预计今年将进一步下降。 \n', 'While big cities like Beijing and Shanghai have sought to control population growth, China as a whole is trying to boost its birth rate, which fell in 2017 and is expected to decline further this year.   ', 'A20000817'),
(92, '根据去年中国社会保障协会发布的数据，中国的老年人口预计到2035年底将达到4亿，高于今年的2.4亿，这将给其其医疗服务和养老基金带来巨大压力。 ', 'China\'s elderly population is expected to reach 400 million by the end of 2035, up from around 240 million this year, putting its health services and pension funds under immense strain, according to data published last year by the China Association of Social Security, a research group.\n', 'A20000817');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `Email` varchar(80) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `authority` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`Email`, `name`, `password`, `authority`) VALUES
('1111@qq.com', '1111', '123', '0'),
('123123@qq.com', '123123', '123', '0'),
('123@qq.com', 'Ada', 'ada123', '1'),
('136@qq.com', '136qq', '136', '0'),
('456@163.com', 'Echo', 'echo456', '0'),
('789@126.com', 'Jennifer', 'jennifer789', '0'),
('kanae@163.com', 'test2', 'test2', '1'),
('knkn@qq.com', 'Echo', 'knkn', '1');

-- --------------------------------------------------------

--
-- 表的结构 `user_project`
--

CREATE TABLE `user_project` (
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `project_id` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `file_name` varchar(80) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `user_project`
--

INSERT INTO `user_project` (`Email`, `project_id`, `file_name`) VALUES
('1111@qq.com', 'A20000817', 'test1.xlsx'),
('123123@qq.com', 'A20000817', NULL),
('456@163.com', 'A20000817', NULL),
('knkn@qq.com', 'A20000817', NULL);

--
-- 转储表的索引
--

--
-- 表的索引 `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- 表的索引 `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `translation_memory`
--
ALTER TABLE `translation_memory`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- 表的索引 `user_project`
--
ALTER TABLE `user_project`
  ADD PRIMARY KEY (`Email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- 使用表AUTO_INCREMENT `translation`
--
ALTER TABLE `translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- 使用表AUTO_INCREMENT `translation_memory`
--
ALTER TABLE `translation_memory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
