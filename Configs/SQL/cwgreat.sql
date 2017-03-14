-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- โฮสต์: 127.0.0.1
-- เวลาในการสร้าง: 14 มี.ค. 2017  09:42น.
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.5.53-0ubuntu0.14.04.1
-- รุ่นของ PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `cwgreat`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `NEWS`
--

CREATE TABLE IF NOT EXISTS `NEWS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HEADER` text NOT NULL,
  `TITLE` text NOT NULL,
  `CONTENT` text NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IMG_URL` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `NEWS`
--

INSERT INTO `NEWS` (`ID`, `HEADER`, `TITLE`, `CONTENT`, `DATE`, `IMG_URL`) VALUES
(1, 'ASAP เผยนลท.สถาบันตอบรับโมเดลธุรกิจอุตสาหกรรมรถเช่า เตรียมทำ Book Building ปลายสัปดาห์นี้', 'นายธนะชัย บัณฑิตวรภูมิ หัวหน้าสายวาณิชธนกิจ บล.ทิสโก้ ที่ปรึกษาทางการเงินของ บมจ. ซินเนอร์เจติค ออโต้ เพอร์ฟอร์มานซ์ (ASAP)  เปิดเผยว่า บริษัทได้นำ ASAP ออกโรดโชว์พบปะนักลงทุนสถาบันเพื่อให้ข้อมูลทางธุรกิจก่อนที่จะนำบริษัทเข้าจดทะเบียนในตลาดหลักทรัพย์แห่งประเทศไทย', '<p>นอกจากนี้ อุตสาหกรรมรถยนต์ให้เช่ายังได้รับปัจจัยบวกจากการเดินทางโดยเครื่องบินในประเทศไทยที่ขยายตัวเพิ่มขึ้นอย่างมาก โดยเฉพาะอย่างยิ่งการเดินทางโดยสายการบินต้นทุนต่ำ (Low Cost Airlines) ส่งผลให้นักท่องเที่ยวชาวต่างชาติและคนไทย รวมทั้งผู้ที่ต้องเดินทางไปทำกิจธุระในจังหวัดต่าง ๆ ทั่วประเทศจำนวนมากมีความต้องการใช้บริการรถยนต์ให้เช่าเพื่อการเดินทางเพิ่มขึ้น ทำให้บริการรถยนต์ให้เช่าระยะสั้นของ asap มีศักยภาพและโอกาสเติบโตสูงมาก และในอนาคตยังมีโอกาสขยายตัวได้มากขึ้นจากการลงทุนโครงการศูนย์รวมให้บริการเกี่ยวกับรถยนต์ ASAP Auto Park โดยมีสาขาแรกที่ย่านบางนา-ตราด ซึ่งคาดว่าจะเปิดให้บริการได้ในช่วงปลายปีนี้ ทั้งนี้ บล.ทิสโก้ จะทำการสำรวจความต้องการซื้อ (Book Building) ของนักลงทุนสถาบันในช่วงปลายสัปดาห์นี้ซึ่งจากกระแสการตอบรับที่ดีในช่วงโรดโชว์และการให้ความสนใจจากนักลงทุนสถาบันจำนวนมากจึงคาดว่านักลงทุนสถาบันจะแสดงความต้องการจองซื้อหุ้นเกินกว่าจำนวนหุ้นที่ได้จัดสรรไว้เป็นอย่างมาก ซึ่งสอดคล้องกับปัจจัยพื้นฐานและการเติบโตในอนาคตของบริษัทฯ “โมเดลธุรกิจของ ASAP มีการให้บริการรถยนต์ให้เช่าแบบครบวงจรที่มีทั้งระยะยาว ซึ่งเป็นรูปแบบสัญญาเช่า 4-5 ปี จะช่วยสร้างความต่อเนื่องและความยั่งยืนของกระแสรายได้ ขณะที่รถยนต์ให้เช่าระยะสั้นและรถยนต์ให้เช่าพร้อมคนขับ จะให้ผลตอบแทนในรูปของค่าเช่าและบริการที่ดีกว่า ซึ่งรายได้ทั้งสองส่วนจะส่งเสริมกันและส่งผลดีต่อศักยภาพการเติบโตด้านผลการดำเนินงานที่ดีในระยะยาวของบริษัทฯ" นายธนะชัย กล่าว นายทรงวิทย์ ฐิติปุญญา ประธานเจ้าหน้าที่บริหาร ASAP กล่าวว่า บริษัทฯ มีความพร้อมด้านการให้บริการรถยนต์ให้เช่าที่ครบวงจร สามารถตอบสนองความต้องการของลูกค้าองค์กร ที่นิยมเช่ารถยนต์ระยะยาว (Operating Lease) หรือเช่ารถยนต์ระยะยาวพร้อมคนขับ (Limousine) รวมถึงบริการรถยนต์ให้เช่าระยะสั้น ซึ่งรองรับกลุ่มนักท่องเที่ยวและผู้เดินทางทั้งชาวไทยและต่างชาติที่ต้องการเช่ารถยนต์เพื่อใช้เดินทางไปยังสถานที่ต่าง ๆ ได้อย่างมีประสิทธิภาพและสร้างความประทับใจให้แก่ผู้ใช้บริการได้เป็นอย่างดี ทั้งนี้ จากการเปิดให้บริการรถยนต์ให้เช่าพร้อมคนขับในช่วงกลางปี 2559 พบว่า ลูกค้าให้การตอบรับที่ดีและสนใจใช้บริการดังกล่าวเพิ่มขึ้น เช่นเดียวกับธุรกิจรถยนต์ให้เช่าระยะสั้นที่เปิดให้บริการในช่วงปลายปี 2558 โดยมีจุดเคาน์เตอร์ให้บริการตามสนามบิน 6 แห่งทั่วประเทศ ได้แก่ สนามบินภูเก็ต เชียงใหม่ เชียงราย หาดใหญ่ ดอนเมืองและสุวรรณภูมิ ซึ่งได้รับความสนใจจากนักท่องเที่ยวต่างชาติและคนไทยมีอัตราการใช้บริการรถยนต์ให้เช่าระยะสั้นเพิ่มขึ้น เนื่องจากมีจุดเด่นด้านรถใหม่ ไมล์น้อย หลากหลายรุ่น ซึ่งสามารถตอบโจทย์ความต้องการใช้รถยนต์ให้เช่าเพื่อการท่องเที่ยวได้เป็นอย่างดี จากความสำเร็จดังกล่าว ส่งผลให้บริษัทฯ มีผลการดำเนินงานที่เติบโตอย่างต่อเนื่องทุกปี โดยในปี 59 ที่ผ่านมาบริษัทฯ มีรายได้รวม 1,459.43 ล้านบาท เติบโตเพิ่มขึ้น 34.37% จากปี 58 ซึ่งเท่ากับ 1,086.09 ล้านบาท โดย ณ วันที่ 31 ธันวาคม 59 บริษัทฯ มีจำนวนรถยนต์สำหรับให้บริการทั้งหมด 8,405 คัน เพิ่มขึ้น 58.82% จาก ณ สิ้นปี 58 ซึ่งมีจำนวน 5,292 คัน “เรายังได้เตรียมนำเทคโนโลยีสมัยใหม่เข้ามาช่วยอำนวยความสะดวกลูกค้าที่ต้องการใช้บริการรถยนต์ให้เช่าของ asap ซึ่งจะเป็นอีกก้าวสำคัญในการเพิ่มศักยภาพการแข่งขันของธุรกิจรถยนต์ให้เช่าในไทย และสร้างความแข็งแกร่งและความแตกต่างในการดำเนินธุรกิจของ asap ให้เป็นแบรนด์รถยนต์ให้เช่าของคนไทยที่อยู่ในใจของลูกค้าทุกคน สมดังสโลแกนของเราที่ว่า “นึกถึงรถเช่า นึกถึง asap" และสามารถผลักดันการเติบโตทางธุรกิจอย่างยั่งยืนต่อไป" นายทรงวิทย์ กล่าว อ่านต่อได้ที่ : <a href="http://www.ryt9.com/s/iq05/2616037">คลิ๊ก</a>\r\n  <br />\r\n</p>', '2017-03-14 04:02:24', 'http://p1.isanook.com/mn/0/rp/r/w700h420/ya0xa0m1w0/aHR0cDovL3AxLmlzYW5vb2suY29tL21uLzAvdWQvOTMvNDY5ODAxLzc2OTg3Ny0wMS5qcGc=.jpg'),
(2, 'ส.อ.ท.แนะหาผู้เชี่ยวชาญเฉพาะอุตฯก้าวสู่4.0', 'ประธาน ส.อ.ท. แนะไทยหาบุคลากรผู้เชี่ยวชาญเฉพาะอุตสากรรมแต่ละด้านจัดเก็บข้อมูลอย่างเป็นระบบนำไปสู่ยุคอุตสาหกรรม 4.0', '<p><img src="http://p2.isanook.com/mn/0/rp/r/w700h420/ya0xa0m1w0/aHR0cDovL3AyLmlzYW5vb2suY29tL21uLzAvdWQvOTMvNDY5NjI5Lzc2OTc5Ny0wMi5qcGc=.jpg" style="margin: 0px auto; display: block;" /></p>\r\n<p>\r\n  <br />\r\n</p>\r\n<p style="box-sizing: border-box; margin-top: 1.6em; margin-right: 0px; margin-bottom: 1.6em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: " helvetica="" neue="" ",=" " helvetica,=" " arial,=" " sans-serif;=" " vertical-align:=" " baseline;=" " word-wrap:=" " break-word;=" " color:=" " rgb(51,=" " 51,=" " 51);=" " background-color:=" " rgb(255,=" " 255,=" " 255);"=""><span style="background-color: rgb(255, 255, 255); color: rgb(238, 130, 238);"><strong><em>นายเจน นำชัยศิริ</em></strong></span>&nbsp; ประธานสภาอุตสาหกรรมแห่งประเทศไทย (ส.อ.ท.) กล่าวถึงปัญหาและอุปสรรคของประเทศไทยในการเข้าสู่ยุค Big Bata โดยระบุว่า สำหรับปัญหาของไทยที่ต้องเผชิญในการเข้าสู่ยุคBig Data คือเรื่องของการขาดแคลนแรงงานที่มีทักษะเฉพาะด้าน ขณะที่แรงงานที่ไม่มีทักษะไทยใช้การนำเข้าแรงงานจากประเทศเพื่อน<a class="a-default" href="http://home.sanook.com/" title="บ้าน" target="_blank" style="font-family: inherit; font-size: inherit; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; word-wrap: break-word;">บ้าน</a>มาดำเนินงานด้านอุตสาหกรรมการผลิตที่จะเริ่มเข้าสู่ยุคอุตสาหกรรม 4.0 ขณะเดียวกันมองว่าในอีก 5 ปีข้างหน้าแรงงานเหล่านี้จะกลับไปยังประเทศของตนเองเพื่อพัฒนา ซึ่งมองว่าประเทศเพื่อนบ้านเริ่มมีการขยายการเติบโตเพิ่มมากขึ้นในระดับที่น่าประทับใจหากคิดแล้วประมาณ 7% ส่วนไทยหากสามารถขยายการเติบโตได้ถึง4%ถือว่าดีมากดังนั้นจึงมองว่าในอนาคตจะมีการดึงแรงงานกลับประเทศเนื่องจากมีโอกาสด้านการทำงานมากขึ้น</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">อย่างไรก็ตาม หากไทยต้องการที่จะเข้าสู่ยุคอุตสาหกรรม 4.0 อย่างแท้จริงจะต้องมีแรงงานที่เชี่ยวชาญเฉพาะด้าน ไม่ว่าจะเป็นด้านการผลิต เครื่องจักรกลแม้กระทั้งระบบบริหารจัดการด้วยนวัตกรรทเทคโนโลยี เข้ามาจัดทำระบบข้อมูลตามขี้นตอนลดการทำงานที่ซ้ำซ้อน ขณะที่ไทยยังขาดแรงงานที่จะมาดึงข้อมูลและเชื่อมโยงอย่างเป็นระบบ ยกตัวอย่างประเทศไต้หวันซึ่งเป็นประเทศที่ใกล้เคียงกับไทย โดยไต้หวันอยู่ในวงจรการผลิตด้านอุตสาหกรรมที่ครบวงจร มีการดึงข้อมูลพื้นฐานการผลิตขึ้นมาจัดเก็บและวิเคราะห์ผลส่งข้อมูลไปยังเครื่องจักรอีกเครื่องเป็นการเชื่อมโยงที่ครบวงจร ดังนั้นเป็นโจทย์ใหญ่ของไทยว่าจะทำอย่างไรให้มีระบบพื้นฐานข้อมูลที่ครบวงจรสามารถเชื่อมโยงกันได้นำไปสู่การยกระดับเป็นไทยแลนด์ 4.0</p>\r\n<p>\r\n  <br />\r\n</p>', '2017-03-14 05:10:44', ''),
(3, 'นอนอย่างไรให้ผิวสวย', 'นอนอย่างไรให้ผิวสวย เคล็ดลับง่ายๆ ที่สาวอยากผิวสวยไม่ควรพลาด !', '<p style="text-align: justify;"><img src="http://p4.isanook.com/wo/0/rp/r/w700h420/ya0xa0m1w0/aHR0cDovL3A0LmlzYW5vb2suY29tL3dvLzAvdWQvMTEvNTg1Nzkvc2xlZXAuanBn.jpg" style="margin: 0px auto; display: block;" /></p>\r\n<p style="text-align: justify;">\r\n  <br />\r\n</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); text-align: justify;"><a class="a-default" href="http://women.sanook.com/tag/%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%A0%E0%B8%B2%E0%B8%9E/" title="สุขภาพ" target="_blank" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; word-wrap: break-word;">สุขภาพ</a>ผิวที่ดี ใครๆ ก็อยากได้ ยิ่งถ้าเป็น<a class="a-default" href="http://women.sanook.com/" title="ผู้หญิง" target="_blank" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; word-wrap: break-word;">ผู้หญิง</a>ด้วยแล้ว สุขภาพผิวที่ดี ถือเป็นสิ่งที่ปรารถนาเอามากๆ เลยก็ว่าได้ แต่ปัญหาคือ หญิง<a class="a-default" href="http://men.sanook.com/12501/" title="สาว" target="_blank" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration: none; outline: none; word-wrap: break-word;">สาว</a>หลายคนกำลังประสบกับปัญหาการมีสุขภาพผิวที่แย่ลงทุกวัน อาจด้วยสาเหตุจากการเผชิญสภาพอากาศที่เป็นมลพิษ รวมทั้งการกินอาหารที่ส่งผลเสียต่อสุขภาพผิวด้วย วันนี้เรามีเคล็ดลับที่จะช่วยให้คุณมีสุขภาพผิวที่ดีได้ด้วยขั้นตอนง่ายๆ จากการนอนหลับอย่างมีประสิทธิภาพ จะเป็นอย่างไรบ้างนั้น ไปติดตามอ่านพร้อมๆ กันเลยค่ะ</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); text-align: justify;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">นอนให้ถูกท่า</span></p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); text-align: justify;">แน่นอนว่าการนอนที่ดี ไม่เพียงแต่เป็นการเข้านอนให้ตรงเวลา หรือนอนให้ครบ 8 ชั่วโมงต่อวัน แต่ยังรวมไปถึงการนอนให้ถูกท่าด้วยเช่นกัน เพราะการนอนให้ถูกท่าจะช่วยทำให้คุณหลีกเลี่ยงจากการเกิดริ้วรอยบนใบหน้านั่นเอง สำหรับใครที่ชอบนอนในท่าหงาย บอกไว้เลยว่านั่นเป็นท่านอนที่ไม่ทำให้เกิดริ้วรอยบนใบหน้าง่ายๆ แต่สำหรับท่านอนคว่ำหรือตะแคง อาจจะส่งผลทำให้เกิดแรงกดทับได้ โดยเฉพาะในบริเวณแก้มและคาง จึงทำให้ผิวหน้าเกิดริ้วรอยก่อนวัยอย่างไม่รู้ตัว</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); text-align: center;"><img src="http://p1.isanook.com/wo/0/rp/r/w500/ya0xa0m1w0/aHR0cDovL3AxLmlzYW5vb2suY29tL3dvLzAvdWQvMTEvNTg1Nzkvc2xlZXAxLmpwZw==.jpg" />\r\n  <br />\r\n</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); text-align: justify;">\r\n  <br />\r\n</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">นอนให้ตรงเวลาและเพียงพอต่อความต้องการร่างกาย</span></p>\r\n<div id="inarticle_wrapper_div" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">\r\n  <div id="inread1_26817" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; display: inline-block; position: fixed; left: -99999px; overflow: hidden; clear: both;">\r\n    <div id="inread_26817" class="mainAdView" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; z-index: 99999999; height: 1px; overflow: hidden; position: absolute; visibility: visible;">\r\n      <table width="100%" border="0" cellpadding="0" cellspacing="0" style="box-sizing: border-box; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px; border: none; border-spacing: 0px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial;">\r\n        <tbody style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">\r\n          <tr id="zd_tr_26817" style="box-sizing: border-box; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; margin: 0px; padding: 0px; border: none; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; border-spacing: 0px;">\r\n            <td id="zd_td_26817" style="box-sizing: border-box; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; text-align: inherit; opacity: 0; margin: 0px; padding: 0px; border-width: initial; border-style: none; border-color: initial; border-spacing: 0px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial;">\r\n              <div id="mainFrame" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;">\r\n                <div id="inReadMovie_26817" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;">\r\n                  <div style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; visibility: visible; margin: 0px; padding: 0px;">\r\n                    <div id="inReadMovie_268170" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;"></div>\r\n                  </div>\r\n                </div>\r\n                <div id="passbackWrapper" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;"></div>\r\n                <div id="multipleWrapper" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;"></div>\r\n              </div>\r\n              <div id="lastFrameWrapper" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: fixed; left: -99999px; top: -99999px; margin: 0px; padding: 0px;">\r\n                <div id="lastframe" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; overflow: hidden; margin: 0px; padding: 0px;"></div>\r\n              </div>\r\n              <div id="mediaWrapper" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: fixed; left: -99999px; top: -99999px; margin: 0px; padding: 0px;">\r\n                <div id="mediaframe" style="box-sizing: border-box; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;"></div>\r\n              </div>\r\n              <br />\r\n            </td>\r\n          </tr>\r\n        </tbody>\r\n      </table>\r\n    </div>\r\n  </div>\r\n</div>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">การเข้านอนให้ตรงเวลา และช่วงเวลาในการเข้านอนที่ดีที่สุดคือ ควรเข้านอนก่อน 4 ทุ่ม เพราะเป็นสิ่งสำคัญที่ทุกคนควรทำ มันไม่เพียงแต่จะทำให้สุขภาพผิวดีขึ้นเท่านั้น แต่ยังช่วยทำให้สุขภาพร่างกายแข็งแรงขึ้นอีกด้วย เนื่องจากการทำงานของระบบภายในร่างกายในส่วนต่างๆ สามารถทำงานได้อย่างเต็มประสิทธิภาพ นอกจากนี้ยังควรนอนให้เพียงพอ โดยเฉลี่ยต่อวันแล้ว คนเราควรนอนให้ได้ประมาณ 7-8 ชั่วโมง ที่สำคัญไม่ควรนอนดึก เพราะจะทำให้ร่างกายไม่สามารถผลิตฮอร์โมนออกมาได้อย่างเต็มที่ จึงทำให้ร่างกายแย่ลง สุขภาพผิวก็ไม่ดีตามไปด้วย</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">จัดบรรยากาศห้องนอนให้มีความเหมาะสม</span></p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">บรรยากาศของห้องนอนจะต้องไม่มีเสียงรบกวนหรือมีแสงสว่างมากจนเกินไป เพราะนั่นเป็นสาเหตุที่ทำให้ไม่สามารถนอนหลับได้อย่างต่อเนื่อง แถมยังทำให้หลับๆ ตื่นๆ จนส่งผลให้ประสิทธิภาพในการซ่อมแซมส่วนที่สึกหรอภายในร่างกายลดลงตามไปด้วย สุขภาพผิวก็คงจะแย่ลงไม่ต่างกัน</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">สำหรับใครที่หวังอยากมีสุขภาพผิวที่ดีแบบธรรมชาติ โดยที่ไม่ต้องพึ่งการใช้ครีมราคาแพง แนะนำให้หันมานอนอย่างมีประสิทธิภาพตามที่เราได้แนะนำไปข้างต้นกันค่ะ เมื่อร่างกายสามารถนอนหลับได้อย่างมีประสิทธิภาพ โอกาสที่ระบบในส่วนต่างๆ ของร่างกายจะทำงานเป็นปกติก็ย่อมสูงขึ้น และแน่นอนว่ามันย่อมส่งผลทำให้ผิวของคนเรามีสุขถาพผิวที่ดีตามไปด้วยนั่นเอง</p>\r\n<p>\r\n  <br />\r\n</p>\r\n<p style="box-sizing: border-box; margin: 1.6em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.5em; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; word-wrap: break-word; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); text-align: justify;">\r\n  <br />\r\n</p>\r\n<p style="text-align: justify;">\r\n  <br />\r\n</p>', '2017-03-14 08:09:10', 'http://p4.isanook.com/wo/0/rp/r/w700h420/ya0xa0m1w0/aHR0cDovL3A0LmlzYW5vb2suY29tL3dvLzAvdWQvMTEvNTg1Nzkvc2xlZXAuanBn.jpg');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `STAFF`
--

CREATE TABLE IF NOT EXISTS `STAFF` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `USERNAME` varchar(25) NOT NULL COMMENT 'ไอดี',
  `PASSWORD` varchar(25) NOT NULL COMMENT 'พาสเวิด',
  `PERMISSION` int(11) NOT NULL COMMENT 'สิทธิการเข้าใช้งาน',
  PRIMARY KEY (`USERNAME`),
  KEY `NO` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `STAFF`
--

INSERT INTO `STAFF` (`NO`, `USERNAME`, `PASSWORD`, `PERMISSION`) VALUES
(1, 'admin', 'admin', 5),
(2, 'staff', 'staff', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `SUPPLIER`
--

CREATE TABLE IF NOT EXISTS `SUPPLIER` (
  `NO` int(11) NOT NULL AUTO_INCREMENT,
  `SUP_NAME` varchar(30) NOT NULL,
  `SUP_ADDRESS` text NOT NULL,
  `SUP_TEL` text NOT NULL,
  `SUP_EMAIL` text NOT NULL,
  `SUP_ABNAME` varchar(15) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  UNIQUE KEY `SUP_ABNAME` (`SUP_ABNAME`),
  UNIQUE KEY `SUP_ABNAME_2` (`SUP_ABNAME`),
  UNIQUE KEY `SUP_ABNAME_4` (`SUP_ABNAME`),
  KEY `NO` (`NO`),
  KEY `SUP_NAME` (`SUP_NAME`),
  KEY `SUP_ABNAME_3` (`SUP_ABNAME`),
  KEY `NO_2` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `SUPPLIER`
--

INSERT INTO `SUPPLIER` (`NO`, `SUP_NAME`, `SUP_ADDRESS`, `SUP_TEL`, `SUP_EMAIL`, `SUP_ABNAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'บริษัท ซีเอ็นซียูเนี่ยน จำกัด', 'หมู่ที่ 1 188 ถนนประชาอุทิศ 90 ตำบล บ้านคลองสวน อำเภอ พระสมุทรเจดีย์ สมุทรปราการ 10290', '0249011222', 'cnc_union@hotmail.com', 'CNCUNION', 'SUP', 'SUP');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `TASK`
--

CREATE TABLE IF NOT EXISTS `TASK` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `JOB_NO` varchar(9) NOT NULL COMMENT 'หมายเลขงาน',
  `C_NAME` varchar(15) NOT NULL COMMENT 'ชื่อลูกค้า',
  `DESCRIPTION` text NOT NULL COMMENT 'รายละเอียดงาน',
  `QUANTITY` int(11) NOT NULL COMMENT 'จำนวน',
  `TYPE` varchar(5) NOT NULL COMMENT 'หน่วยนับ',
  `START_TIME` date NOT NULL COMMENT 'วันเริ่มงาน',
  `DEADLINE_TIME` date NOT NULL COMMENT 'กำหนดส่ง',
  `STATUS` int(11) NOT NULL DEFAULT '1',
  `SUP_NO` int(11) DEFAULT NULL,
  `STAFF_NO` int(11) DEFAULT NULL,
  PRIMARY KEY (`JOB_NO`),
  KEY `NO` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- dump ตาราง `TASK`
--

INSERT INTO `TASK` (`NO`, `JOB_NO`, `C_NAME`, `DESCRIPTION`, `QUANTITY`, `TYPE`, `START_TIME`, `DEADLINE_TIME`, `STATUS`, `SUP_NO`, `STAFF_NO`) VALUES
(1, 'J-1600110', 'TOKAI', 'งานปรับปรุงพื้นทางเข้าห้องเคมี SP \r\nเพิ่มเติม ............. !@#*(@)$*!@()#@!#', 1, 'JOB', '2017-02-06', '2016-11-25', 2, 1, 2),
(2, 'J-1600282', 'TOKAI', 'PARTITION FOR SHOT BLAST Dwg. AMT160068', 1, 'SET', '2017-02-06', '2016-12-19', 3, 1, 1),
(3, 'J-1600294', 'SYS', 'ซ่อม Plate Flying Nozzle Tundish Dwg.SYS2-C00.291 Rev.00', 3, 'SET', '2017-02-06', '2017-04-20', 3, 1, 1),
(8, 'test', 'SYS', 'ROLLER M3 5', 1, 'PC', '2017-02-20', '2017-02-22', 4, 1, 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `TASK_LOG`
--

CREATE TABLE IF NOT EXISTS `TASK_LOG` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `JOB_NO` varchar(9) NOT NULL COMMENT 'หมายเลขงาน',
  `DESCRIPTION` text NOT NULL COMMENT 'รายละเอียด',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่',
  `STATUS` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`NO`),
  KEY `ID` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- dump ตาราง `TASK_LOG`
--

INSERT INTO `TASK_LOG` (`NO`, `JOB_NO`, `DESCRIPTION`, `DATE`, `STATUS`) VALUES
(1, 'J-1600110', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:37:38', 1),
(3, 'J-1600282', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:54:26', 1),
(4, 'J-1600294', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:55:06', 1),
(8, 'J-1600294', 'กำลังดำเนินการผลิต', '2017-02-08 06:22:38', 2),
(9, 'J-1600282', 'กำลังดำเนินการผลิต', '2017-02-08 06:30:20', 2),
(10, 'J-1600294', 'กำลังดำเนินการผลิต 20%', '2017-02-08 16:33:41', 2),
(13, 'J-1600294', 'กำลังจัดส่ง', '2017-02-15 07:41:38', 3),
(50, 'test', 'ได้รับคำสั่งซื้อเรียบร้อยแล้วค่ะ', '2017-02-20 03:15:52', 1),
(51, 'test', 'กำลังดำเนินการผลิต', '2017-02-20 03:16:16', 2),
(52, 'test', 'กำลังดำเนินการผลิต 50%', '2017-02-20 03:16:20', 2),
(53, 'test', 'กำลังดำเนินการผลิต 90%', '2017-02-20 03:16:23', 2),
(54, 'test', 'ผลิตสิ้นค้าเรียบร้อยแล้ว', '2017-02-20 03:16:27', 2),
(55, 'test', 'กำลังจัดส่งสินค้า', '2017-02-20 03:16:32', 3),
(56, 'test', 'จัดส่งสินค้าเรียบร้อยแล้ว ขอบคุณที่ใช้บริการค่ะ', '2017-02-20 03:16:33', 4),
(57, 'J-1600282', 'กำลังจัดส่งสินค้า', '2017-02-27 04:49:08', 3),
(58, 'J-1600110', 'กำลังดำเนินการผลิต', '2017-03-10 03:04:33', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
