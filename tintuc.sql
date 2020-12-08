-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 03:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rssfeeditems`
--

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `titlerss` varchar(500) NOT NULL,
  `linkrss` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`titlerss`, `linkrss`) VALUES
('1,2 triệu liều vaccine Covid-19 Trung Quốc đến Indonesia', 'https://vnexpress.net/1-2-trieu-lieu-vaccine-covid-19-trung-quoc-den-indonesia-4202702.html'),
('10 sai lầm ăn uống của người bệnh tiểu đường', 'https://vnexpress.net/10-sai-lam-an-uong-cua-nguoi-benh-tieu-duong-4202611.html'),
('10 thành ngữ tiếng Anh về đồ ăn', 'https://vnexpress.net/10-thanh-ngu-tieng-anh-ve-do-an-4201986.html'),
('10 đại học có nhiều sinh viên nhất nước Mỹ', 'https://vnexpress.net/10-dai-hoc-co-nhieu-sinh-vien-nhat-nuoc-my-4203284.html'),
('15 tuổi có quyền tự nguyện xét nghiệm HIV', 'https://vnexpress.net/15-tuoi-co-quyen-tu-nguyen-xet-nghiem-hiv-4200977.html'),
('25 cảnh sát ở TP HCM bị đình chỉ công tác', 'https://vnexpress.net/25-canh-sat-o-tp-hcm-bi-dinh-chi-cong-tac-4202906.html'),
('25 công an phường Phú Thọ Hoà bị đình chỉ công tác', 'https://vnexpress.net/25-cong-an-phuong-phu-tho-hoa-bi-dinh-chi-cong-tac-4202906.html'),
('339 ứng viên đạt tiêu chuẩn giáo sư, phó giáo sư', 'https://vnexpress.net/339-ung-vien-dat-tieu-chuan-giao-su-pho-giao-su-4202192.html'),
('7 nhà thờ hồng hút khách tại Việt Nam và trên thế giới', 'https://vnexpress.net/7-nha-tho-hong-hut-khach-tai-viet-nam-va-tren-the-gioi-4199405.html'),
('ACV có thể tăng 24% lợi nhuận nhờ dự án Long Thành', 'https://vnexpress.net/acv-co-the-tang-24-loi-nhuan-nho-du-an-long-thanh-4202426.html'),
('ACV được quản lý 22 sân bay đến hết năm 2025', 'https://vnexpress.net/acv-duoc-quan-ly-22-san-bay-den-het-nam-2025-4203408.html'),
('ADB đào tạo miễn phí cho 500 doanh nghiệp Việt do nữ làm chủ', 'https://vnexpress.net/adb-dao-tao-mien-phi-cho-500-doanh-nghiep-viet-do-nu-lam-chu-4203377.html'),
('AFF Cup lại lùi lịch', 'https://vnexpress.net/aff-cup-lai-lui-lich-4202867.html'),
('Amazon đang có hơn 100.000 nhà bán hàng Việt Nam', 'https://vnexpress.net/amazon-dang-co-hon-100-000-nha-ban-hang-viet-nam-4203290.html'),
('Ăn uống dưỡng tim khỏe', 'https://vnexpress.net/an-uong-duong-tim-khoe-4200885.html'),
('Anh bắt đầu tiêm vaccine Pfizer', 'https://vnexpress.net/anh-bat-dau-tiem-vaccine-pfizer-4202953.html'),
('Anh bắt đầu tiêm vaccine Pfizer từ ngày 8/12', 'https://vnexpress.net/anh-bat-dau-tiem-vaccine-pfizer-tu-ngay-8-12-4202361.html'),
('Ba giai đoạn thử nghiệm trên người vaccine Covid-19 Việt Nam', 'https://vnexpress.net/ba-giai-doan-thu-nghiem-tren-nguoi-vaccine-covid-19-viet-nam-4202618.html'),
('Ba lãnh đạo xã bị bắt vì gây thất thoát tiền xây đường', 'https://vnexpress.net/ba-lanh-dao-xa-bi-bat-vi-gay-that-thoat-tien-xay-duong-4202188.html'),
('Bà mẹ lấy bằng đại học sau gần 30 năm', 'https://vnexpress.net/ba-me-lay-bang-dai-hoc-sau-gan-30-nam-4202607.html'),
('Bà nội dúi tiền vào tay cháu bằng được', 'https://vnexpress.net/ba-noi-dui-tien-vao-tay-chau-bang-duoc-4202792.html'),
('Bắc Giang có tân Chủ tịch tỉnh', 'https://vnexpress.net/bac-giang-co-tan-chu-tich-tinh-4203485.html'),
('Bài tập hai tuần tiêu mỡ bắp tay', 'https://vnexpress.net/bai-tap-hai-tuan-tieu-mo-bap-tay-4202302.html'),
('Bàng quang đi `lạc` hiếm gặp', 'https://vnexpress.net/bang-quang-di-lac-hiem-gap-4203060.html'),
('Bánh mướt ram Hà Tĩnh', 'https://vnexpress.net/banh-muot-ram-ha-tinh-4199684.html'),
('Barca - Juventus: Ngày Messi gặp lại Ronaldo', 'https://vnexpress.net/barca-juventus-ngay-messi-gap-lai-ronaldo-4203425.html'),
('Bảy thành ngữ tiếng Anh có động từ phổ biến', 'https://vnexpress.net/bay-thanh-ngu-tieng-anh-co-dong-tu-pho-bien-4202770.html'),
('Bé trai 3 tuổi mất hai chân vì vi khuẩn hiếm gặp', 'https://vnexpress.net/be-trai-3-tuoi-mat-hai-chan-vi-vi-khuan-hiem-gap-4202602.html'),
('Bé trai trổ tài nhảy điêu luyện trước gương', 'https://vnexpress.net/be-trai-tro-tai-nhay-dieu-luyen-truoc-guong-4203153.html'),
('Bị khởi tố vì đưa người vượt biên', 'https://vnexpress.net/bi-khoi-to-vi-dua-nguoi-vuot-bien-4202921.html'),
('Bị phạt hơn 420 triệu đồng vì vi phạm an toàn thực phẩm', 'https://vnexpress.net/bi-phat-hon-420-trieu-dong-vi-vi-pham-an-toan-thuc-pham-4203452.html'),
('Bí quyết ngăn Messi sút phạt trực tiếp', 'https://vnexpress.net/bi-quyet-ngan-messi-sut-phat-truc-tiep-4202840.html'),
('Bình Dương dành gần 5.000 tỷ bình ổn hàng Tết', 'https://vnexpress.net/binh-duong-danh-gan-5-000-ty-binh-on-hang-tet-4202859.html'),
('Cách chuẩn bị cho cuộc phỏng vấn online vào đại học', 'https://vnexpress.net/cach-chuan-bi-cho-cuoc-phong-van-online-vao-dai-hoc-4202212.html'),
('Cách nào thành công chức mà không qua thi tuyển?', 'https://vnexpress.net/cach-nao-thanh-cong-chuc-ma-khong-qua-thi-tuyen-4202919.html'),
('Cảnh sắc chùa Tam Chúc', 'https://vnexpress.net/canh-sac-chua-tam-chuc-4180160.html'),
('Cảnh sát Mỹ bắt đầu dùng drone có trí tuệ nhân tạo', 'https://vnexpress.net/canh-sat-my-bat-dau-dung-drone-co-tri-tue-nhan-tao-4202214.html'),
('Cặp vợ chồng nghèo cho đi hơn nửa giải độc đắc', 'https://vnexpress.net/cap-vo-chong-ngheo-cho-di-hon-nua-giai-doc-dac-4203319.html'),
('Carragher: `Pogba được đề cao quá mức`', 'https://vnexpress.net/carragher-pogba-duoc-de-cao-qua-muc-4203360.html'),
('Câu hỏi của tiến sĩ về bài toán lớp 6', 'https://vnexpress.net/cau-hoi-cua-tien-si-ve-bai-toan-lop-6-4202257.html'),
('Check-in `Maldives Việt Nam`', 'https://vnexpress.net/check-in-maldives-viet-nam-4201144.html'),
('Chiến lược tìm việc làm của du học sinh Việt ở Australia', 'https://vnexpress.net/chien-luoc-tim-viec-lam-cua-du-hoc-sinh-viet-o-australia-4202570.html'),
('Chồn possum nhỏ nhất tái xuất sau thảm họa cháy rừng', 'https://vnexpress.net/chon-possum-nho-nhat-tai-xuat-sau-tham-hoa-chay-rung-4203001.html'),
('Chồng khiến tôi tin đàn ông tốt còn nhiều', 'https://vnexpress.net/chong-khien-toi-tin-dan-ong-tot-con-nhieu-4201576.html'),
('Chủ vườn bị bắt cóc, tống tiền 4,5 tỷ đồng', 'https://vnexpress.net/chu-vuon-bi-bat-coc-tong-tien-4-5-ty-dong-4203262.html'),
('Chứng khoán Mỹ lập đỉnh', 'https://vnexpress.net/chung-khoan-my-lap-dinh-4202981.html'),
('Có bắt buộc nhắc nhở trước khi phạt không đeo khẩu trang?', 'https://vnexpress.net/co-bat-buoc-nhac-nho-truoc-khi-phat-khong-deo-khau-trang-4202569.html'),
('Cổ phiếu chứng khoán nổi sóng', 'https://vnexpress.net/co-phieu-chung-khoan-noi-song-4203342.html'),
('Cổ phiếu thép và tài chính đưa VN-Index lên gần 1.030 điểm', 'https://vnexpress.net/co-phieu-thep-va-tai-chinh-dua-vn-index-len-gan-1-030-diem-4202793.html'),
('Con gái 16 tuổi của Heidi Klum', 'https://vnexpress.net/con-gai-16-tuoi-cua-heidi-klum-4202636.html'),
('Công Phượng tập buổi đầu cùng tuyển Việt Nam', 'https://vnexpress.net/cong-phuong-tap-buoi-dau-cung-tuyen-viet-nam-4202892.html'),
('Covid-19 bùng phát tại trang trại chồn', 'https://vnexpress.net/covid-19-bung-phat-tai-trang-trai-chon-4202925.html'),
('Covid-19: Số ca nhiễm lên 1.367', 'https://vnexpress.net/tin-tuc-covid-19-moi-nhat-hom-nay-4071803.html'),
('Covid-19: Số ca nhiễm lên 1.377', 'https://vnexpress.net/tin-tuc-covid-19-moi-nhat-hom-nay-4071803.html'),
('Cụ bà 90 tuổi tiêm vaccine Pfizer', 'https://vnexpress.net/cu-ba-90-tuoi-tiem-vaccine-pfizer-4203338.html'),
('Cựu công an lừa thuê ôtô bằng thẻ ngành giả', 'https://vnexpress.net/cuu-cong-an-lua-thue-oto-bang-the-nganh-gia-4202679.html'),
('Cựu phó chánh án quận 4 sắp hầu toà', 'https://vnexpress.net/cuu-pho-chanh-an-quan-4-sap-hau-toa-4202526.html'),
('Cựu phó chủ tịch quận ở Cần Thơ bị khởi tố', 'https://vnexpress.net/cuu-pho-chu-tich-quan-o-can-tho-bi-khoi-to-4202891.html'),
('Dạy kỹ năng mềm cho học sinh cá biệt', 'https://vnexpress.net/day-ky-nang-mem-cho-hoc-sinh-ca-biet-4202672.html'),
('Dư 1 tỷ và thu nhập 25 triệu có nên vay tiền mua đất?', 'https://vnexpress.net/du-1-ty-va-thu-nhap-25-trieu-co-nen-vay-tien-mua-dat-4202420.html'),
('Du học sinh chia sẻ kinh nghiệm xin học bổng chính phủ Anh', 'https://vnexpress.net/du-hoc-sinh-chia-se-kinh-nghiem-xin-hoc-bong-chinh-phu-anh-4202675.html'),
('EVN mua thêm điện từ Lào', 'https://vnexpress.net/evn-mua-them-dien-tu-lao-4202494.html'),
('FDA công nhận vaccine Pfizer tạo miễn dịch mạnh sau mũi đầu tiên', 'https://vnexpress.net/fda-cong-nhan-vaccine-pfizer-tao-mien-dich-manh-sau-mui-dau-tien-4203511.html'),
('FPT Software trao 20 suất học bổng công nghệ', 'https://vnexpress.net/fpt-software-trao-20-suat-hoc-bong-cong-nghe-4203137.html'),
('Ghé chợ đêm San Thàng thưởng thức phở nhắng', 'https://vnexpress.net/ghe-cho-dem-san-thang-thuong-thuc-pho-nhang-4203063.html'),
('Giá vàng miếng giảm nhẹ', 'https://vnexpress.net/gia-vang-mieng-giam-nhe-4202497.html'),
('Giá vàng thế giới tăng vọt', 'https://vnexpress.net/gia-vang-the-gioi-tang-vot-4202976.html'),
('Gia đình dồn tài sản mua Bitcoin sống bằng cách nào 4 năm qua?', 'https://vnexpress.net/gia-dinh-don-tai-san-mua-bitcoin-song-bang-cach-nao-4-nam-qua-4202434.html'),
('Giáo viên bị sa thải vì làm sai lệch dữ liệu', 'https://vnexpress.net/giao-vien-bi-sa-thai-vi-lam-sai-lech-du-lieu-4203252.html'),
('Giới chức Mỹ thúc giục người dân đeo khẩu trang', 'https://vnexpress.net/gioi-chuc-my-thuc-giuc-nguoi-dan-deo-khau-trang-4202637.html'),
('Grab tăng giá cước bù thuế VAT', 'https://vnexpress.net/grab-tang-gia-cuoc-bu-thue-vat-4202312.html'),
('Hàn Quốc cân nhắc tham gia CPTPP', 'https://vnexpress.net/han-quoc-can-nhac-tham-gia-cptpp-4203465.html'),
('Hàng chục thanh niên đi xe máy bốc đầu', 'https://vnexpress.net/hang-chuc-thanh-nien-di-xe-may-boc-dau-4203412.html'),
('Hành khách vỗ tay khi có người bị đuổi khỏi máy bay', 'https://vnexpress.net/hanh-khach-vo-tay-khi-co-nguoi-bi-duoi-khoi-may-bay-4202769.html'),
('Hình mẫu chống Covid-19 của Đức sụp đổ', 'https://vnexpress.net/hinh-mau-chong-covid-19-cua-duc-sup-do-4203003.html'),
('Hoãn lễ vinh danh Tiger Woods', 'https://vnexpress.net/hoan-le-vinh-danh-tiger-woods-4203357.html'),
('Học sinh hóa `Ninja` khi đến lớp vì trời lạnh', 'https://vnexpress.net/hoc-sinh-hoa-ninja-khi-den-lop-vi-troi-lanh-4203094.html'),
('Học sinh trở lại trường sau một tuần nghỉ phòng Covid-19', 'https://vnexpress.net/hoc-sinh-tro-lai-truong-sau-mot-tuan-nghi-phong-covid-19-4202737.html'),
('Học trò đàn hát động viên nhạc sư Vĩnh Bảo vượt bạo bệnh', 'https://vnexpress.net/hoc-tro-dan-hat-dong-vien-nhac-su-vinh-bao-vuot-bao-benh-4203398.html'),
('Hơn 100 xe ;bão; ở Sài Gòn', 'https://vnexpress.net/hon-100-xe-bao-o-sai-gon-4202318.html'),
('Hơn 800 sinh viên có thể bị buộc thôi học', 'https://vnexpress.net/hon-800-sinh-vien-co-the-bi-buoc-thoi-hoc-4203379.html'),
('Hovland thắng Mayakoba Classic', 'https://vnexpress.net/hovland-thang-mayakoba-classic-4202589.html'),
('Iran muốn tăng tốc làm giàu uranium, châu Âu lo ngại', 'https://vnexpress.net/iran-muon-tang-toc-lam-giau-uranium-chau-au-lo-ngai-4202916.html'),
('Ivanka chia sẻ ảnh Trump trên Núi Rushmore', 'https://vnexpress.net/ivanka-chia-se-anh-trump-tren-nui-rushmore-4203273.html'),
('JD.com là nền tảng online đầu tiên chấp nhận tiền điện tử của Trung Quốc', 'https://vnexpress.net/jd-com-la-nen-tang-online-dau-tien-chap-nhan-tien-dien-tu-cua-trung-quoc-4202329.html'),
('Kẻ gian lừa người dùng cài phần mềm gián điệp ngụy trang', 'https://vnexpress.net/ke-gian-lua-nguoi-dung-cai-phan-mem-gian-diep-nguy-trang-4203448.html'),
('Khách nữ gây tranh cãi vì khỏa thân bơi cùng cá mập', 'https://vnexpress.net/khach-nu-gay-tranh-cai-vi-khoa-than-boi-cung-ca-map-4202431.html'),
('Khách sạn Paris đón người vô gia cư', 'https://vnexpress.net/khach-san-paris-don-nguoi-vo-gia-cu-4202234.html'),
('Khám đau bụng, bất ngờ phát hiện u tuyến cận giáp', 'https://vnexpress.net/kham-dau-bung-bat-ngo-phat-hien-u-tuyen-can-giap-4202542.html'),
('Khởi kiện vì bị hoán đổi thân phận', 'https://vnexpress.net/khoi-kien-vi-bi-hoan-doi-than-phan-4203181.html'),
('Khởi tố 13 người liên quan dự án cao tốc Đà Nẵng - Quảng Ngãi', 'https://vnexpress.net/khoi-to-13-nguoi-lien-quan-du-an-cao-toc-da-nang-quang-ngai-4202895.html'),
('Không gian cà phê đưa khách về quá khứ', 'https://vnexpress.net/khong-gian-ca-phe-dua-khach-ve-qua-khu-4199049.html'),
('Kinh tế Đà Nẵng lần đầu tăng trưởng âm', 'https://vnexpress.net/kinh-te-da-nang-lan-dau-tang-truong-am-4202610.html'),
('Làm chưa hết năm, tôi có được thưởng tết?', 'https://vnexpress.net/lam-chua-het-nam-toi-co-duoc-thuong-tet-4202471.html'),
('Lạm dụng vitamin C có hại cơ thể', 'https://vnexpress.net/lam-dung-vitamin-c-co-hai-co-the-4202430.html'),
('Làm gì nếu không thể tìm được việc', 'https://vnexpress.net/lam-gi-neu-khong-the-tim-duoc-viec-4202958.html'),
('Làm sao ăn buffet được lợi nhất?', 'https://vnexpress.net/lam-sao-an-buffet-duoc-loi-nhat-4201297.html'),
('Lapland cứu Giáng sinh như thế nào?', 'https://vnexpress.net/lapland-cuu-giang-sinh-nhu-the-nao-4201342.html'),
('Lo ngại việc cách ly y tế với nhà ngoại giao', 'https://vnexpress.net/lo-ngai-viec-cach-ly-y-te-voi-nha-ngoai-giao-4202934.html'),
('Lợi nhuận Vietcombank có thể tăng trưởng âm năm nay', 'https://vnexpress.net/loi-nhuan-vietcombank-co-the-tang-truong-am-nam-nay-4202613.html'),
('Lý do bà mẹ khuyến khích con chơi với bạn xấu tính', 'https://vnexpress.net/ly-do-ba-me-khuyen-khich-con-choi-voi-ban-xau-tinh-4202417.html'),
('Lý do rau sống thái sợi ở quán ăn Đà Lạt', 'https://vnexpress.net/ly-do-rau-song-thai-soi-o-quan-an-da-lat-4201526.html'),
('Manh mối tố cáo y tá giết vợ', 'https://vnexpress.net/manh-moi-to-cao-y-ta-giet-vo-4202144.html'),
('Mặt tối trong sự phát triển của thần đồng', 'https://vnexpress.net/mat-toi-trong-su-phat-trien-cua-than-dong-4202940.html'),
('Miền đá xám nở hoa', 'https://vnexpress.net/mien-da-xam-no-hoa-4200439.html'),
('Minh Tú biến hóa phong cách ở Tuần thời trang', 'https://vnexpress.net/minh-tu-bien-hoa-phong-cach-o-tuan-thoi-trang-4203202.html'),
('Món ngon mùa đông tại Sushi Hokkaido Sachi', 'https://vnexpress.net/mon-ngon-mua-dong-tai-sushi-hokkaido-sachi-4202597.html'),
('Một ngày dạo chơi ở Vĩnh Long', 'https://vnexpress.net/mot-ngay-dao-choi-o-vinh-long-4200442.html'),
('Một người về từ Nga nhiễm nCoV', 'https://vnexpress.net/mot-nguoi-ve-tu-nga-nhiem-ncov-4202885.html'),
('Mùa đông ngủ trong khách sạn băng tuyết', 'https://vnexpress.net/mua-dong-ngu-trong-khach-san-bang-tuyet-4203178.html'),
('Mỹ thiếu vaccine Covid-19 cho nhóm ưu tiên', 'https://vnexpress.net/my-thieu-vaccine-covid-19-cho-nhom-uu-tien-4203077.html'),
('Mỹ trải qua tuần chết chóc nhất vì Covid-19 kể từ tháng 4', 'https://vnexpress.net/my-trai-qua-tuan-chet-choc-nhat-vi-covid-19-ke-tu-thang-4-4203491.html'),
('Năm câu đố thử tài suy luận nhanh', 'https://vnexpress.net/nam-cau-do-thu-tai-suy-luan-nhanh-4202255.html'),
('Nam sinh 5 năm đẩy xe lăn, cõng bạn đến trường', 'https://vnexpress.net/nam-sinh-5-nam-day-xe-lan-cong-ban-den-truong-4203457.html'),
('Nam sinh mặc áo dài dự lễ tuyên dương ở Quốc Tử Giám', 'https://vnexpress.net/nam-sinh-mac-ao-dai-du-le-tuyen-duong-o-quoc-tu-giam-4202262.html'),
('Nga điều thêm quân đến sát sườn NATO', 'https://vnexpress.net/nga-dieu-them-quan-den-sat-suon-nato-4202903.html'),
('Nghị sĩ ba bang Mỹ nháo nhác vì Giuliani nhiễm nCoV', 'https://vnexpress.net/nghi-si-ba-bang-my-nhao-nhac-vi-giuliani-nhiem-ncov-4203484.html'),
('Người đánh nữ sinh sau va chạm xe máy bị tạm giữ', 'https://vnexpress.net/nguoi-danh-nu-sinh-sau-va-cham-xe-may-bi-tam-giu-4203488.html'),
('Người đầu tiên tiêm vaccine Pfizer: `Tôi làm nên lịch sử y học`', 'https://vnexpress.net/nguoi-dau-tien-tiem-vaccine-pfizer-toi-lam-nen-lich-su-y-hoc-4203069.html'),
('Nhật Bản tung thêm 708 tỷ USD kích thích kinh tế', 'https://vnexpress.net/nhat-ban-tung-them-708-ty-usd-kich-thich-kinh-te-4203026.html'),
('Nhật Kim Anh diện đồ thu đông', 'https://vnexpress.net/nhat-kim-anh-dien-do-thu-dong-4203143.html'),
('Nhiều cây sưa đỏ chết khô', 'https://vnexpress.net/nhieu-cay-sua-do-chet-kho-4203294.html'),
('Những bí mật trong khách sạn sang trọng bậc nhất London', 'https://vnexpress.net/nhung-bi-mat-trong-khach-san-sang-trong-bac-nhat-london-4202583.html'),
('Những nghiên cứu của Isaac Newton về kim tự tháp', 'https://vnexpress.net/nhung-nghien-cuu-cua-isaac-newton-ve-kim-tu-thap-4202979.html'),
('Những trào lưu du lịch chỉ xuất hiện trong năm 2020', 'https://vnexpress.net/nhung-trao-luu-du-lich-chi-xuat-hien-trong-nam-2020-4201554.html'),
('Ninh Bình tạm dừng đón khách từ TP HCM', 'https://vnexpress.net/ninh-binh-tam-dung-don-khach-tu-tp-hcm-4202649.html'),
('Nỗ lực chinh phục nghề luật của chàng trai khiếm thị', 'https://vnexpress.net/no-luc-chinh-phuc-nghe-luat-cua-chang-trai-khiem-thi-4200884.html'),
('Ông Nguyễn Thành Phong: `Kinh tế TP HCM sẽ bật lên mạnh mẽ`', 'https://vnexpress.net/ong-nguyen-thanh-phong-kinh-te-tp-hcm-se-bat-len-manh-me-4203078.html'),
('Ôtô tông 5 xe máy ở Sài Gòn', 'https://vnexpress.net/oto-tong-5-xe-may-o-sai-gon-4202920.html'),
('Perez thắng chặng đua vắng Hamilton', 'https://vnexpress.net/perez-thang-chang-dua-vang-hamilton-4202449.html'),
('Phao tin bị cướp hơn 100 triệu đồng', 'https://vnexpress.net/phao-tin-bi-cuop-hon-100-trieu-dong-4202909.html'),
('Phát hiện mũ giáp trong mộ chiến binh 2.400 năm tuổi', 'https://vnexpress.net/phat-hien-mu-giap-trong-mo-chien-binh-2-400-nam-tuoi-4202765.html'),
('Phạt tử hình người vận chuyển bao tải gạo chứa ma túy', 'https://vnexpress.net/phat-tu-hinh-nguoi-van-chuyen-bao-tai-gao-chua-ma-tuy-4203443.html'),
('Phó tổng giám đốc Công ty Tân Thuận bị bắt', 'https://vnexpress.net/pho-tong-giam-doc-cong-ty-tan-thuan-bi-bat-4203133.html'),
('Phủ cát lên xe chở gỗ lậu', 'https://vnexpress.net/phu-cat-len-xe-cho-go-lau-4202796.html'),
('Phú Quốc có tân chủ tịch', 'https://vnexpress.net/phu-quoc-co-tan-chu-tich-4203490.html'),
('PSG dự phòng cho thương vụ Messi', 'https://vnexpress.net/psg-du-phong-cho-thuong-vu-messi-4202568.html'),
('PSG hủy hợp đồng với cầu thủ ngoại tình', 'https://vnexpress.net/psg-huy-hop-dong-voi-cau-thu-ngoai-tinh-4202857.html'),
('Quán cháo nào ngon nhất Hà Nội?', 'https://vnexpress.net/quan-chao-nao-ngon-nhat-ha-noi-4201307.html'),
('Quảng Bình có 3 tân Phó chủ tịch tỉnh', 'https://vnexpress.net/quang-binh-co-3-tan-pho-chu-tich-tinh-4203470.html'),
('Quảng Bình tìm người đi chung xe với ca nghi tái dương tính', 'https://vnexpress.net/quang-binh-tim-nguoi-di-chung-xe-voi-ca-nghi-tai-duong-tinh-4203093.html'),
('Rắn nâu kịch độc mò vào phòng ngủ trẻ em', 'https://vnexpress.net/ran-nau-kich-doc-mo-vao-phong-ngu-tre-em-4202392.html'),
('RB Leipzig - Man Utd: Trận chiến sống còn', 'https://vnexpress.net/rb-leipzig-man-utd-tran-chien-song-con-4203442.html'),
('Sacombank đồng hành cùng các dự án điện mặt trời', 'https://vnexpress.net/sacombank-dong-hanh-cung-cac-du-an-dien-mat-troi-4203394.html'),
('Sần sùi da mặt do trị nám sai cách', 'https://vnexpress.net/san-sui-da-mat-do-tri-nam-sai-cach-4200130.html'),
('Sao Việt làm điệu với khẩu trang trong suốt', 'https://vnexpress.net/sao-viet-lam-dieu-voi-khau-trang-trong-suot-4202890.html'),
('Sát nhân lộng hành khi cảnh sát thờ ơ', 'https://vnexpress.net/sat-nhan-long-hanh-khi-canh-sat-tho-o-4202902.html'),
('Seoul trong ‘thời chiến’', 'https://vnexpress.net/seoul-trong-thoi-chien-4202959.html'),
('Sốc phản vệ sau 10 phút bị ong đốt', 'https://vnexpress.net/soc-phan-ve-sau-10-phut-bi-ong-dot-4202594.html'),
('Sòng bạc của 2 nữ đại ca', 'https://vnexpress.net/song-bac-cua-2-nu-dai-ca-4202952.html'),
('SSI Research: Triển vọng ngành ngân hàng tốt hơn dự báo', 'https://vnexpress.net/ssi-research-trien-vong-nganh-ngan-hang-tot-hon-du-bao-4202419.html'),
('Startup Việt giành Quán quân thi quốc tế về smart city', 'https://vnexpress.net/startup-viet-gianh-quan-quan-thi-quoc-te-ve-smart-city-4203325.html'),
('Sư tử cái giết chết khỉ đầu chó con', 'https://vnexpress.net/su-tu-cai-giet-chet-khi-dau-cho-con-4201787.html'),
('Sudico lại `khất` cổ tức năm 2016 và 2017', 'https://vnexpress.net/sudico-lai-khat-co-tuc-nam-2016-va-2017-4203420.html'),
('Suýt chết vì uống gấp 60 liều thuốc hạ huyết áp', 'https://vnexpress.net/suyt-chet-vi-uong-gap-60-lieu-thuoc-ha-huyet-ap-4203057.html'),
('Tài sản thừa kế khiến nhiều gia đình bất hòa', 'https://vnexpress.net/tai-san-thua-ke-khien-nhieu-gia-dinh-bat-hoa-4202731.html'),
('Tài xế GrabBike đình công', 'https://vnexpress.net/tai-xe-grabbike-dinh-cong-4202572.html'),
('Tân binh giải hạng Nhất xin rút lui', 'https://vnexpress.net/tan-binh-giai-hang-nhat-xin-rut-lui-4202783.html'),
('Tất cả người liên quan 4 bệnh nhân Covid-19 đều âm tính', 'https://vnexpress.net/tat-ca-nguoi-lien-quan-4-benh-nhan-covid-19-deu-am-tinh-4202481.html'),
('Thanh niên khóc nức nở khi chị gái lấy chồng', 'https://vnexpress.net/thanh-nien-khoc-nuc-no-khi-chi-gai-lay-chong-4203392.html'),
('Thành phố Trung Quốc phát 3 triệu USD tiền ảo cho dân', 'https://vnexpress.net/thanh-pho-trung-quoc-phat-3-trieu-usd-tien-ao-cho-dan-4202930.html'),
('Thêm 10 người nhập cảnh nhiễm nCoV', 'https://vnexpress.net/them-10-nguoi-nhap-canh-nhiem-ncov-4203469.html'),
('Thử thách ghép tranh', 'https://vnexpress.net/thu-thach-ghep-tranh-4202869.html'),
('Thủy điện Đăk Mi 4 xả lũ khiến 560 hộ dân bị ảnh hưởng', 'https://vnexpress.net/thuy-dien-dak-mi-4-xa-lu-khien-560-ho-dan-bi-anh-huong-4203243.html'),
('Tiệm cà phê ;bức tường thủng; gây sốt tại Trung Quốc', 'https://vnexpress.net/tiem-ca-phe-buc-tuong-thung-gay-sot-tai-trung-quoc-4202763.html'),
('Tiệm cà phê `bức tường thủng` gây sốt tại Trung Quốc', 'https://vnexpress.net/tiem-ca-phe-buc-tuong-thung-gay-sot-tai-trung-quoc-4202763.html'),
('Tiềm năng phát triển du lịch Mũi Né', 'https://vnexpress.net/tiem-nang-phat-trien-du-lich-mui-ne-4194316.html'),
('Tiệm sách như toà lâu đài hiện ra từ cổ tích', 'https://vnexpress.net/tiem-sach-nhu-toa-lau-dai-hien-ra-tu-co-tich-4202227.html'),
('Tiền sản giật - bệnh lý sản khoa đe dọa tính mạng', 'https://vnexpress.net/tien-san-giat-benh-ly-san-khoa-de-doa-tinh-mang-4202656.html'),
('Tiếp thị đa cấp hỗn chiến với bảo vệ trung tâm thương mại', 'https://vnexpress.net/tiep-thi-da-cap-hon-chien-voi-bao-ve-trung-tam-thuong-mai-4202644.html'),
('Tìm hình ẩn trong tranh', 'https://vnexpress.net/tim-hinh-an-trong-tranh-4203433.html'),
('TNG Holdings Vietnam ra mắt chuỗi khách sạn Sojo Hotels', 'https://vnexpress.net/tng-holdings-vietnam-ra-mat-chuoi-khach-san-sojo-hotels-4201579.html'),
('TP HCM có 2 tân Phó chủ tịch UBND', 'https://vnexpress.net/tp-hcm-co-2-tan-pho-chu-tich-ubnd-4203117.html'),
('TP HCM sẽ có gói tín dụng 4.000 tỷ lãi suất 0%', 'https://vnexpress.net/tp-hcm-se-co-goi-tin-dung-4-000-ty-lai-suat-0-4203230.html'),
('TP HCM tổ chức cách ly ở khách sạn thế nào', 'https://vnexpress.net/tp-hcm-to-chuc-cach-ly-o-khach-san-the-nao-4201846.html'),
('TP HCM xét nghiệm nCoV có thu phí cho người xuất cảnh', 'https://vnexpress.net/tp-hcm-xet-nghiem-ncov-co-thu-phi-cho-nguoi-xuat-canh-4202715.html'),
('Trả thù khi bị hủy kết bạn trên Facebook', 'https://vnexpress.net/tra-thu-khi-bi-huy-ket-ban-tren-facebook-4202062.html'),
('Trái tim hóa đá khi em có người mới', 'https://vnexpress.net/trai-tim-hoa-da-khi-em-co-nguoi-moi-4202805.html'),
('Trốn truy nã, giả là kiểm sát viên cao cấp', 'https://vnexpress.net/tron-truy-na-gia-la-kiem-sat-vien-cao-cap-4202907.html'),
('Trung Quốc chuẩn bị tiêm chủng Covid-19 quy mô lớn', 'https://vnexpress.net/trung-quoc-chuan-bi-tiem-chung-covid-19-quy-mo-lon-4202486.html'),
('Tử thần ở viện dưỡng lão châu Âu', 'https://vnexpress.net/tu-than-o-vien-duong-lao-chau-au-4202659.html'),
('Tuổi thơ bất lợi ảnh hưởng thế nào đến trẻ?', 'https://vnexpress.net/tuoi-tho-bat-loi-anh-huong-the-nao-den-tre-4202862.html'),
('Tướng Iran nói `sát thủ AI` ám sát chuyên gia hạt nhân', 'https://vnexpress.net/tuong-iran-noi-sat-thu-ai-am-sat-chuyen-gia-hat-nhan-4203200.html'),
('Ùn tắc triền miên ở đường vành đai 3 trên cao', 'https://vnexpress.net/un-tac-trien-mien-o-duong-vanh-dai-3-tren-cao-4202751.html'),
('Vaccine Covid-19 thứ hai Việt Nam thử trên người tháng 3/2021', 'https://vnexpress.net/vaccine-covid-19-thu-hai-viet-nam-thu-tren-nguoi-thang-3-2021-4202663.html'),
('Vaccine Covid-19 Trung Quốc thử nghiệm hiệu quả 97%', 'https://vnexpress.net/vaccine-covid-19-trung-quoc-thu-nghiem-hieu-qua-97-4203460.html'),
('Vaccine Covid-19 Việt Nam dưới 500.000 đồng một liều', 'https://vnexpress.net/vaccine-covid-19-viet-nam-duoi-500-000-dong-mot-lieu-4203268.html'),
('Vận mệnh người tuổi Dần năm Tân Sửu 2021', 'https://vnexpress.net/van-menh-nguoi-tuoi-dan-nam-tan-suu-2021-4202736.html'),
('Vận mệnh người tuổi Mão năm Tân Sửu 2021', 'https://vnexpress.net/van-menh-nguoi-tuoi-mao-nam-tan-suu-2021-4202746.html'),
('Vì sao trẻ em dùng tất để đựng quà Giáng sinh?', 'https://vnexpress.net/vi-sao-tre-em-dung-tat-de-dung-qua-giang-sinh-4203038.html'),
('Vi vu Hà Giang mùa tam giác mạch với 1,5 triệu đồng', 'https://vnexpress.net/vi-vu-ha-giang-mua-tam-giac-mach-voi-1-5-trieu-dong-4197418.html'),
('Vietjet, IPP, Vietstar Airlines muốn tài trợ lập quy hoạch sân bay Tuy Hòa', 'https://vnexpress.net/vietjet-ipp-vietstar-airlines-muon-tai-tro-lap-quy-hoach-san-bay-tuy-hoa-4203122.html'),
('Vinamilk sẽ chi hơn 2.000 tỷ đồng tạm ứng cổ tức 2020', 'https://vnexpress.net/vinamilk-se-chi-hon-2-000-ty-dong-tam-ung-co-tuc-2020-4203380.html'),
('Vợ của hai liệt sĩ được nhận vào quân đội', 'https://vnexpress.net/vo-cua-hai-liet-si-duoc-nhan-vao-quan-doi-4203109.html'),
('VOA Classic - danh hiệu đáng nhớ của Angela Stanford', 'https://vnexpress.net/voa-classic-danh-hieu-dang-nho-cua-angela-stanford-4202678.html'),
('Vừa mổ bắt con, vừa bóc u xơ tử cung cho sản phụ', 'https://vnexpress.net/vua-mo-bat-con-vua-boc-u-xo-tu-cung-cho-san-phu-4202582.html'),
('WHO phản đối tiêm vaccine Covid-19 bắt buộc', 'https://vnexpress.net/who-phan-doi-tiem-vaccine-covid-19-bat-buoc-4203175.html'),
('Xác thực bảo mật của Việt Nam được Microsoft khuyên dùng', 'https://vnexpress.net/xac-thuc-bao-mat-cua-viet-nam-duoc-microsoft-khuyen-dung-4202817.html'),
('Xe biển vàng có đăng ký lại thàng biển trắng?', 'https://vnexpress.net/xe-bien-vang-co-dang-ky-lai-thang-bien-trang-4203318.html'),
('Xe biển vàng có đăng ký lại thành biển trắng?', 'https://vnexpress.net/xe-bien-vang-co-dang-ky-lai-thanh-bien-trang-4203318.html'),
('Xe công nghệ có lợi thế gì khi không còn rẻ?', 'https://vnexpress.net/xe-cong-nghe-co-loi-the-gi-khi-khong-con-re-4202712.html'),
('Xử phạt người vứt hơn 80 con lợn bệnh ra đường', 'https://vnexpress.net/xu-phat-nguoi-vut-hon-80-con-lon-benh-ra-duong-4203355.html'),
('Xuất khẩu Trung Quốc đạt kỷ lục', 'https://vnexpress.net/xuat-khau-trung-quoc-dat-ky-luc-4202864.html'),
('Zoë Kravitz chuộng mặc hở trên thảm đỏ', 'https://vnexpress.net/zo-kravitz-chuong-mac-ho-tren-tham-do-4203222.html'),
('`Béo vì ăn cà pháo, canh rau`', 'https://vnexpress.net/beo-vi-an-ca-phao-canh-rau-4203345.html'),
('`Còn đâu nữa Đà Lạt mộng mơ`', 'https://vnexpress.net/con-dau-nua-da-lat-mong-mo-4203316.html'),
('`Tự sướng` vỡ vật hang dương vật', 'https://vnexpress.net/tu-suong-vo-vat-hang-duong-vat-4203244.html'),
('`Tướng vô hình` có thể trở thành Bộ trưởng Quốc phòng Mỹ', 'https://vnexpress.net/tuong-vo-hinh-co-the-tro-thanh-bo-truong-quoc-phong-my-4203190.html'),
('Đà Nẵng lo nguy cơ lây nhiễm Covid-19 từ người nhập cảnh', 'https://vnexpress.net/da-nang-lo-nguy-co-lay-nhiem-covid-19-tu-nguoi-nhap-canh-4203463.html'),
('Đà Nẵng miễn, giảm vé tham quan trong năm 2021', 'https://vnexpress.net/da-nang-mien-giam-ve-tham-quan-trong-nam-2021-4190408.html'),
('Đại gia địa ốc muốn thoái vốn nghìn tỷ khỏi dự án vùng ven', 'https://vnexpress.net/dai-gia-dia-oc-muon-thoai-von-nghin-ty-khoi-du-an-vung-ven-4203228.html'),
('Đại học Ajou Hàn Quốc trao học bổng cho du học sinh', 'https://vnexpress.net/dai-hoc-ajou-han-quoc-trao-hoc-bong-cho-du-hoc-sinh-4202685.html'),
('Đâm trọng thương bảo vệ, cướp điện thoại', 'https://vnexpress.net/dam-trong-thuong-bao-ve-cuop-dien-thoai-4203390.html'),
('Đăng ký thi THPT trên Cổng dịch vụ công quốc gia', 'https://vnexpress.net/dang-ky-thi-thpt-tren-cong-dich-vu-cong-quoc-gia-4203327.html'),
('Đặt camera trong laptop quay lén hàng trăm phụ nữ', 'https://vnexpress.net/dat-camera-trong-laptop-quay-len-hang-tram-phu-nu-4203255.html'),
('Đặt camera trong túi laptop để quay lén', 'https://vnexpress.net/dat-camera-trong-tui-laptop-de-quay-len-4203255.html'),
('Đầu tư 840 tỷ đồng đại tu Quốc lộ 5', 'https://vnexpress.net/dau-tu-840-ty-dong-dai-tu-quoc-lo-5-4203088.html'),
('Đề xuất 553 tỷ đồng kiểm soát khí thải xe máy ở TP HCM', 'https://vnexpress.net/de-xuat-553-ty-dong-kiem-soat-khi-thai-xe-may-o-tp-hcm-4203310.html'),
('Đề xuất bắn pháo hoa tại ba điểm dịp Tết Dương lịch', 'https://vnexpress.net/de-xuat-ban-phao-hoa-tai-ba-diem-dip-tet-duong-lich-4203242.html'),
('Điểm hút khách của Kia Morning phiên bản mới', 'https://vnexpress.net/diem-hut-khach-cua-kia-morning-phien-ban-moi-4203320.html'),
('Đỗ Thị Hà khóc khi về thăm trường', 'https://vnexpress.net/do-thi-ha-khoc-khi-ve-tham-truong-4203285.html'),
('Đôla Mỹ có thể mất giá mạnh năm tới', 'https://vnexpress.net/dola-my-co-the-mat-gia-manh-nam-toi-4202851.html'),
('Đồng Tháp có tân Chủ tịch tỉnh', 'https://vnexpress.net/dong-thap-co-tan-chu-tich-tinh-4203263.html'),
('Đột quỵ khó ngờ ở người trẻ', 'https://vnexpress.net/dot-quy-kho-ngo-o-nguoi-tre-4203404.html'),
('Được ở miễn phí 18 năm vì có bầu sau khi vào khách sạn', 'https://vnexpress.net/duoc-o-mien-phi-18-nam-vi-co-bau-sau-khi-vao-khach-san-4202855.html'),
('‘Giảm giá FIT sẽ gây tổn hại đến ngành điện gió Việt Nam’', 'https://vnexpress.net/giam-gia-fit-se-gay-ton-hai-den-nganh-dien-gio-viet-nam-4202950.html'),
('‘Phép màu khoa học’ trong cuộc đua vaccine', 'https://vnexpress.net/phep-mau-khoa-hoc-trong-cuoc-dua-vaccine-4202872.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`titlerss`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
