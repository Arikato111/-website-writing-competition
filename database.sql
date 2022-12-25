--
-- Database: `11pdln`
--
CREATE DATABASE IF NOT EXISTS `11pdln` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `11pdln`;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(5) NOT NULL,
  `mem_name` varchar(200) NOT NULL,
  `mem_address` varchar(200) NOT NULL,
  `mem_date` date NOT NULL,
  `mem_email` varchar(100) NOT NULL,
  `mem_tel` varchar(20) NOT NULL,
  `mem_username` varchar(50) NOT NULL,
  `mem_password` varchar(50) NOT NULL,
  `mem_view` int(5) NOT NULL,
  `mem_status` varchar(10) NOT NULL,
  `mem_regis_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_name`, `mem_address`, `mem_date`, `mem_email`, `mem_tel`, `mem_username`, `mem_password`, `mem_view`, `mem_status`, `mem_regis_date`) VALUES
(1, 'ณวสัน วิศิษสิงขร', 'อุบลราชธานี', '2001-11-29', 'anonymous@email.com', '0239402394230', 'hakata', '4e1ca1d1339420c3034eeaa9358161d8', 2544, 'admin', '2022-12-21'),
(5, 'สิทธิพล ผาลา', 'อุบลราชธานี', '1955-03-03', 'toyou@gmail.com', '0987638462', 'sitthiphon', '4dc2c935883cb81f17332b91649433a5', 290, 'admin', '2022-12-21'),
(6, 'เอกราช พันศิริ', 'อุบลราชธานี คำนางรวย', '1968-11-23', 'ake@gmail.com', '0823746583', 'ake', '73e72db0d6292bbced88c762bbadee02', 64, 'user', '2022-12-21'),
(7, 'สุบรรณ เฉลิมวงศ์', 'อุบลราชธานี อำเภอ วารินชำราบ', '1980-12-31', 'subun@gmail.com', '0675453456', 'subun', 'fd73ee1fd18ebb7240afe440bb0a4c59', 291, 'admin', '2022-12-21'),
(8, 'วาสนา พันธนู', 'อุบลราชธานี บ้านท่าข้องเหล็ก', '1955-12-24', 'wansanaa@gmai.com', '0991827431', 'wansanaa', '3b265e06334050786b37ed559f7fdb23', 19, 'user', '2022-12-21'),
(10, 'ศลาวุฒิ มาลาสาย', 'อุบลราชธานี', '1940-12-31', 'sawawut@gmail.com', '987654322', 'sawawut', '3bb250f4404f227f23a3d7582162b353', 20, 'user', '2022-12-21'),
(13, 'helles moonlight', 'address', '2001-02-02', 'email@email', '0293093409', 'helles', 'd69f635f88b7441f4553a44c0d45eee7', 28, 'user', '2022-12-22'),
(14, 'name last name', 'address', '2001-02-02', 'email@email', '0930429340', 'name2', '0cc175b9c0f1b6a831c399e269772661', 0, 'user', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(5) NOT NULL,
  `new_name` varchar(200) NOT NULL,
  `new_detail` text NOT NULL,
  `new_date` date NOT NULL,
  `mem_id` int(5) NOT NULL,
  `new_view` int(10) NOT NULL,
  `new_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_name`, `new_detail`, `new_date`, `mem_id`, `new_view`, `new_img`) VALUES
(5, 'การป้องกันการติดเชื้อโควิด 19 ของผู้สูงอายุภายในชุมชน', '1. พักผ่อนให้เพียงพอ\r\n2.ออกกำลังกายอย่างสม่ำเสมอ เพื่อให้ร่างกายแข็งแรง\r\n3. ไม่ควรออกจากบ้านไปพบปะผู้คนมากเกินไป\r\n4. หมั่นดูแลสุขภาพจิตใจและอารมณ์ไม่ให้วิตกกังวลมากเกินไป\r\n5. ทานอาหารให้ครบ 5 หมู่', '2022-12-21', 5, 4, '5f745a64ce380690f60587002c75938e.jpg'),
(6, 'ผลไม้ที่เหมาะสมกับผู้สูงอายุ', '1. มะละกอสุก เป็นยาระบายอ่อน ๆ เหมาะกับผู้สูงอายุ\r\n2. มะม่วงสุก ช่วยบำรุงสายตา ป้องกันตาพร่ามัว ช่วยในการมองเห็นในตอนกลางคืน\r\n3.แก้วมังกร ช่วยคลายร้อน ทำให้ผิวเปล่งปลั่ง สดใส และยังช่วยลดระดับน้ำตาลในเลือด\r\n4. สัปปะรด ช่วยทำให้ระบบภูมิคุ้มกันภายในร่างกายแข็งแรง', '2022-12-21', 5, 4, 'aa89d31e8082bdd3622fac0225823f2a.jpg'),
(7, 'เทคโนโลยีที่ทันสมัยสำหรับความปลอดภัยของผู้สูงอายุ', '1. มือถือปุ่มกดใหญ่ใช้งานง่าย\r\n2. หุ่นยนต์ดูดฝุ่นเพื่อความสะดวกสบาย\r\n3. สายรัดข้อมือขอความช่วยเหลือเมื่อหกล้ม\r\n4. สัญญาณไฟแจ้งเตือนแทนเสียงกระดิ่ง\r\n5. เครื่องปิดใช้งานไฟอัตโนมัติเมื่อลืมปิดการใช้งาน', '2022-12-21', 5, 3, '990eb83da6c7cecd4eeb17e473a52276.jpg'),
(8, 'อาหารลดไขมันพอกตับ', 'ผู้สูงอายุเป็นวัยที่ร่างกายมีความต้องการต่อการใช้พลังงานลดน้อยลง เนื่องจากมีกิจกรรมที่ทำได้ไม่มากส่งผลให้แต่ละวันใช้พลังงานลดน้อยลง ดังนั้นจำเป็นอย่างยิ่งที่จะต้องควรลดการบริโภคในกลุ่มของแป้ง น้ำตาล และไขมันลง รวมถึงอาหารประเภทของผัด ของทอดที่ใช้น้ำมัน เพื่อลดการสะสมเนื่องจากไม่ถูกดึงนำไปใช้ ให้เน้นอาหารจำพวกโปรตีนจากเนื้อปลามากขึ้น และเปลี่ยนมาใช้อาหารประเภทต้ม นึ่ง ย่าง อบ เป็นหลัก\r\n 	1. คาโบไฮเดรตเชิงซ้อน เช่น ข้าวกล้อง ขนมปัง ธัญพืชชนิดต่าง ๆ\r\n 	2.ผัก ผลไม้ ที่มีกากใยอาหารสูง และไม่หวานเกินไป\r\n 	3.โปรตีน เช่น ปลาทะเลน้ำลึก ถั่วชนิดต่าง ๆ', '2022-12-21', 5, 48, 'efe9b0f94f18680918626619ca137944.jpg'),
(9, 'กิจกรรมสำหรับผู้สูงอายุ', '1. อ่านหนังสือ เป็นการใช้เวลาว่างให้มีประโยชน์ และยังช่วยในการฝึกสมอง\r\n2. ออกกำลังกาย เพื่อให้ได้ขยับร่างกาย ทำให้ร่างกายแข็งแรง\r\n3. ทำงานอดิเรก เช่น การทำสวน วาดรูป\r\n4. เพลิดเพลินกับสื่อบันเทิง เช่น การดูหนัง ดูละคร ฟังเพลง\r\n6. การทำบุญ เป็นการออกไปพบปะกับผู้คนทางอ้อม', '2022-12-21', 5, 5, 'ea44a79fe38428630a9ca566e2d91b24.jpg'),
(10, 'งานปฏิบัติธรรมอาจาริยบูชา ณ วัดหนองป่าพง', ' ขอเรียนเชิญทุกท่านปฏิบัติธรรมร่วมกัน ระหว่างวันที่ 15-16 มกราคม 2566 ณ วัดหนองป่า ตำบล โนนผึ้ง อำเภอ วารินชำราบ จังหวัด อุบลราชธาณี แต่เนื่องจากสถานการณ์เชื้อโควิด 19 ในปัจจุบันทำให้ต้องปฏิบัติธรรมอาจาริยบูชาแบบปิด ดังต่อไปนี้ 1. ให้สวมใส่แมสตลอดเวลา 2. ต้องมีผลตรวจ ATK อย่างน้อย 24 ชม. 3. ต้องมีผลรับรองการฉัดวัคซีนมาแล้ว 4.ต้องเว้นระยะห่างอย่างน้อง 1 เมตร 5.ไม่ทานอาหารร่วมกัน (แยกกันทานอาหาร) 6. หากมีอาการปวดหัวตัวร้อนให้รีบแจ้งเจ้าหน้าที่วัดทันที ', '2022-12-21', 5, 23, 'b7ed2639502f7974c1a340e74f386d57.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_detail`
--

CREATE TABLE `news_detail` (
  `new_detail_id` int(5) NOT NULL,
  `new_id` int(5) NOT NULL,
  `new_detail_name` varchar(200) NOT NULL,
  `new_detail_date` date NOT NULL,
  `mem_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_detail`
--

INSERT INTO `news_detail` (`new_detail_id`, `new_id`, `new_detail_name`, `new_detail_date`, `mem_id`) VALUES
(7, 9, 'เวลาว่างผมก็อ่านหนังสือนี่แหละครับ', '2022-12-21', 1),
(8, 8, 'ขอบคุณแนะนำครับ ผมว่าจะเริ่มลองกินอาหารแบบนี้พอดี', '2022-12-21', 1),
(22, 10, 'ขอบคุณครับ', '2022-12-21', 6),
(23, 6, 'ส้มกับทุเรืยน ผมจะเอาตังที่ไหนซื้อครับ', '2022-12-21', 1),
(24, 7, 'ไอโฟนเหมาะกับผู้สูงอายุไหมครับ พอดีจะซื้อให้คุณย่า', '2022-12-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_like`
--

CREATE TABLE `news_like` (
  `new_like_id` int(5) NOT NULL,
  `new_id` int(5) NOT NULL,
  `mem_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_like`
--

INSERT INTO `news_like` (`new_like_id`, `new_id`, `mem_id`) VALUES
(1, 3, 1),
(2, 1, 1),
(3, 4, 5),
(4, 9, 8),
(5, 8, 8),
(6, 7, 8),
(7, 6, 8),
(8, 5, 8),
(9, 4, 8),
(10, 10, 5),
(11, 9, 5),
(12, 8, 5),
(13, 7, 5),
(14, 6, 5),
(15, 5, 5),
(16, 10, 6),
(17, 6, 6),
(18, 7, 6),
(19, 9, 6),
(20, 9, 1),
(21, 5, 1),
(22, 8, 1),
(23, 8, 6),
(24, 10, 1),
(25, 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `poll_id` int(5) NOT NULL,
  `poll_name` varchar(200) NOT NULL,
  `poll_date` date NOT NULL,
  `mem_id` int(5) NOT NULL,
  `poll_view` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`poll_id`, `poll_name`, `poll_date`, `mem_id`, `poll_view`) VALUES
(13, 'กิจกรรมไหนที่เหมาะสมกับผู้สูงอายุมากที่สุด', '2022-12-21', 5, 14),
(14, 'ควรมีการจัดกิจกรรมต่าง ๆ ภายในชุมชนเพิ่มขึ้นไหม', '2022-12-21', 5, 13),
(17, 'ควรจัดเทศกาลวันปีใหม่ในชุมชนไหม ?', '2022-12-21', 1, 8),
(18, 'ทำความสะอาดชุมชนประจำเดือน วันไหนดี ?', '2022-12-21', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `pollpost`
--

CREATE TABLE `pollpost` (
  `pp_id` int(5) NOT NULL,
  `poll_id` int(5) NOT NULL,
  `mem_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pollpost`
--

INSERT INTO `pollpost` (`pp_id`, `poll_id`, `mem_id`) VALUES
(1, 7, 1),
(2, 10, 1),
(3, 14, 6),
(4, 13, 6),
(5, 13, 10),
(6, 13, 1),
(7, 14, 1),
(8, 14, 7),
(9, 13, 7),
(10, 17, 12),
(11, 17, 1),
(12, 18, 1),
(13, 18, 13);

-- --------------------------------------------------------

--
-- Table structure for table `poll_detail`
--

CREATE TABLE `poll_detail` (
  `poll_detail_id` int(5) NOT NULL,
  `poll_id` int(5) NOT NULL,
  `poll_detail_name` varchar(200) NOT NULL,
  `poll_detail_count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `poll_detail`
--

INSERT INTO `poll_detail` (`poll_detail_id`, `poll_id`, `poll_detail_name`, `poll_detail_count`) VALUES
(14, 13, 'ออกกำลัง', 2),
(15, 13, 'ทำงานอดิเรกต่าง ๆ', 1),
(16, 13, 'การทำบุญ', 0),
(17, 13, 'ดูละครทีวีที่บ้าน', 1),
(18, 14, 'ควรมากที่สุด', 2),
(19, 14, 'ไม่ควร', 0),
(20, 14, 'ไม่เลือก', 1),
(23, 17, 'ควรจัด', 1),
(24, 17, 'ไม่ควร', 1),
(25, 17, 'เลื่อนไปก่อน', 0),
(26, 18, 'วันที่ 10', 1),
(27, 18, 'วันที่ 13', 1),
(28, 18, 'วันที่ 17', 0),
(29, 18, 'วันที่ 19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `web_id` int(5) NOT NULL,
  `web_name` varchar(200) NOT NULL,
  `web_date` date NOT NULL,
  `mem_id` int(5) NOT NULL,
  `web_view` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `webboard`
--

INSERT INTO `webboard` (`web_id`, `web_name`, `web_date`, `mem_id`, `web_view`) VALUES
(15, 'สถานที่ในความทรงจำของทุกคนมีที่ไหนบ้าง ?', '2022-12-21', 5, 5),
(16, 'สถานณการณ์ในตอนนี้ผู้สูงอายุอย่างเราควรออกไปข้างนอกไหม ?', '2022-12-21', 5, 6),
(17, 'มีผู้สูงอายุคนไหนอยู่ตัวคนเดียวบ้างในตอนนี้', '2022-12-21', 5, 45),
(18, 'เวลาว่าง ๆ ทุกคนชอบทำอะไรกัน', '2022-12-21', 5, 102),
(19, 'มีที่ไหนบ้างใน จังหวัด อุบลฯ ที่เงียบ ๆ', '2022-12-21', 5, 48);

-- --------------------------------------------------------

--
-- Table structure for table `webboard_detail`
--

CREATE TABLE `webboard_detail` (
  `web_detail_id` int(5) NOT NULL,
  `web_id` int(5) NOT NULL,
  `web_detail_name` varchar(200) NOT NULL,
  `web_detail_date` date NOT NULL,
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `webboard_detail`
--

INSERT INTO `webboard_detail` (`web_detail_id`, `web_id`, `web_detail_name`, `web_detail_date`, `mem_id`) VALUES
(9, 18, 'อ่านหนังสือ เพื่อใช้เวลาว่างให้มีประโยชน์ แล้วยังเป็นการฝึกสมองด้วย', '2022-12-21', 7),
(11, 15, 'โรงเรียนเก่าที่เคยเรียน', '2022-12-21', 7),
(12, 16, 'ไม่ควรอย่างยิ่ง', '2022-12-21', 7),
(13, 19, 'วัดป่านานาชาติ', '2022-12-21', 6),
(14, 16, 'แล้วแต่ความจำเป็นนะครับผมว่า', '2022-12-21', 6),
(15, 19, 'ร้านค่าเฟ่แถวหน้าตลาดวารินชำราบ', '2022-12-21', 10),
(16, 15, 'สนามเด็กเล่นในหมู่บ้าน', '2022-12-21', 10),
(18, 18, 'เข้าวัดทำบุญตักบาตร', '2022-12-21', 6),
(19, 19, 'วัดหนองป่าพง', '2022-12-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `news_detail`
--
ALTER TABLE `news_detail`
  ADD PRIMARY KEY (`new_detail_id`);

--
-- Indexes for table `news_like`
--
ALTER TABLE `news_like`
  ADD PRIMARY KEY (`new_like_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `pollpost`
--
ALTER TABLE `pollpost`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `poll_detail`
--
ALTER TABLE `poll_detail`
  ADD PRIMARY KEY (`poll_detail_id`);

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`web_id`);

--
-- Indexes for table `webboard_detail`
--
ALTER TABLE `webboard_detail`
  ADD PRIMARY KEY (`web_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_detail`
--
ALTER TABLE `news_detail`
  MODIFY `new_detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news_like`
--
ALTER TABLE `news_like`
  MODIFY `new_like_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `poll_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pollpost`
--
ALTER TABLE `pollpost`
  MODIFY `pp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `poll_detail`
--
ALTER TABLE `poll_detail`
  MODIFY `poll_detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `webboard`
--
ALTER TABLE `webboard`
  MODIFY `web_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `webboard_detail`
--
ALTER TABLE `webboard_detail`
  MODIFY `web_detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
