<?php
	$this->load->view("layout/header.php");
?>
<div class="col-sm-12" style="width: 70%; margin:auto">
<?php
echo "<h1>Kết quả tìm kiếm</h1>";
$i = 0;
$j = 0;
$links = array("https://vnexpress.net/rss/giao-duc.rss","https://vnexpress.net/rss/phap-luat.rss","https://vnexpress.net/rss/kinh-doanh.rss","https://vnexpress.net/rss/suc-khoe.rss","https://vnexpress.net/rss/du-lich.rss","https://vnexpress.net/rss/the-thao.rss","https://vnexpress.net/rss/khoa-hoc.rss");
foreach($links as $url){
$invalidurl = false;//dùng để bắt lỗi nhưng đã xóa
if(@simplexml_load_file($url)){
	$feeds = simplexml_load_file($url);
}else{
	$invalidurl = true;
	echo "<h2>Invalid RSS feed URL.</h2>";
}
if(!empty($feeds)){
	foreach($feeds->channel->item as $item){
		$title = $item->title;
		$link = $item->link;
		//$description = $item->description;
		$postDate = $item->pubDate;
		$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($postDate));
		$key = $_GET['search-bar'];
		if (strpos($item->description, "src=")) {//nếu có hình ảnh trong description thì cắt chuỗi vào array bằng explode
			$str = explode('src=', $item->description);//chia chuỗi để bỏ thẻ a và img lấy chuỗi sau src
            $str1 = explode('></a></br>', $str[1]);//chia thành src của img và description 
			$srcImage = $str1[0];
			$description = $str1[1];
		}
		 if(isset($_GET['submit-search']))
		 {
			
			if(stripos($title,$key) !== false)//tìm thấy vị tr tất cả hoặc 1 phần của chuỗi trong tiêu đề
			{
				echo"<div class='post' style='border: 1px solid gray;padding: 5px;border-radius:3px;margin-top:15px'>
					<div class='post-head' style='font-size:14px; color: gray; letter-spacing:1px;'>
						<h2><a class='feed_title' href='$link'>$title</a></h2>
							<span style='font-size:14px; color: gray; letter-spacing:1px;'>$pubDate</span>
						</div>
							<div class='post-content' style='font-size: 18px; color:black'>
							<img src=$srcImage width='700' height='400'/>
						<h4><a class='feed_description' style='font-size:8px width:small height:small' >$description </a></h4>
						</div>
					</div>";
					$j++;
			}
		}
	}
	
	}
}		
			if($j == 0){echo "Không tìm thấy kết quả.  <br>";}
			//tìm trong data base
			$cnt = $result->num_rows();
			echo "Kết quả tìm thấy trong database";
			//in kq
			if($cnt > 0)
			{
				foreach($result->result_array() as $row){
					$titledb = $row['titlerss'];
					$linkdb = $row['linkrss'];
					echo "<div style='border-bottom: 1px solid gray'>
						<h3>$titledb</h3>
						<p>Xem thêm:<a href='$linkdb'>$linkdb</a></p>
					</div>";
					$i++;
				}
			}
	//nếu $i = 0 nghĩa là không tìm thấy kết quả
	if($i == 0){echo "  Không tìm thấy kết quả trong database. <br>";}
?>
</div>
<?php
	$this->load->view("layout/footer.php");
?>
