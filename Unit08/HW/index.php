<?php 
	require_once 'Category.php';
	require_once 'Post.php';
	require_once 'User.php';
	$post_1 = new Post();
	$post_1->title="Hiệp ước INF sụp đổ, Mỹ tuyên bố sớm triển khai tên lửa ở châu Á đối phó Trung Quốc?";
	$post_1->slug="hiep-uoc-inf-sup-do-my-tuyen-bo-som-trien-khai-ten-lua-o-chau-a-doi-pho-trung-quoc";
	$post_1->description="Ngày 3/8, một ngày sau khi Mỹ chấm dứt Hiệp ước kiểm soát tên lửa tầm trung và tầm ngắn (INF), Bộ trưởng Quốc phòng Mark Esper tuyên bố ủng hộ việc Mỹ sớm triển khai hệ thống tên lửa tầm trung mới ở châu Á.";
	$post_1->content="Reuters đưa tin, người đứng đầu Lầu Năm Góc Mark Esper ngày 3/8 tuyên bố ủng hộ việc Mỹ sớm bố trí các tên lửa tầm trung phóng từ mặt đất tại châu Á, một ngày sau khi Mỹ rút khỏi hiệp ước kiểm soát vũ khí quan trọng ký với Nga từ thời Chiến tranh Lạnh.

Tuyên bố trên được đưa ra giữa lúc Mỹ ngày càng quan ngại về những ưu thế quân sự của Trung Quốc tại khu vực châu Á- Thái Bình Dương.

Phát biểu với báo giới tại Sydney, khi được hỏi liệu Mỹ có cân nhắc triển khai các loại tên lửa tầm trung ở châu Á hay không sau khi Mỹ và Nga đã chấm dứt hiệu lực của Hiệp ước các lực lượng hạt nhân tầm trung và tầm ngắn (INF), ông Esper nói: 'Vâng, tôi muốn việc này. Tôi muốn bố trí các tên lửa trong vòng vài tháng tới... nhưng việc này sẽ mất nhiều thời gian hơn dự kiến'.

Trước đó, khi khi trả lời câu hỏi của các thành viên Ủy ban quân lực Thượng viện Mỹ hôm 11/7, Tướng Mark Milley, Tham mưu trưởng lục quân Mỹ, cũng tuyên bố Mỹ có thể triển khai tên lửa tầm trung ở châu Á.";
	$post_1->inTT();
	

	$user_1 = new User();
	$user_1->name="Trần Minh Đức";
	$user_1->email="ductm.kma@gmail.com";
	$user_1->password="123456";
	$user_1->avatar="images/Screenshot (1).png";
	$user_1->inTT();

	$category_1 = new Category();
	$category_1->name="Thời sự";
	$category_1->slug="thoi-su";
	$category_1->parent_id="";
	$category_1->thumnail="images/Screenshot (1).png";
	$category_1->description="Chuyên mục thời sự";
	$category_1->inTT();
 ?>