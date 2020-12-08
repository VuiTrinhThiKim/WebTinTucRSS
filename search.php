<?php
	include 'application\views\layout\header.php'
?>
<h1>Kết quả tìm kiếm</h1>
<div class="col-sm-12" style="width: 70%; margin:auto">
<?php
$i = 0;
$links = array("https://vnexpress.net/rss/giao-duc.rss","https://vnexpress.net/rss/phap-luat.rss","https://vnexpress.net/rss/kinh-doanh.rss","https://vnexpress.net/rss/suc-khoe.rss","https://vnexpress.net/rss/du-lich.rss","https://vnexpress.net/rss/the-thao.rss","https://vnexpress.net/rss/khoa-hoc.rss");
foreach($links as $url){
//$url =
//navBar
//if(isset($_GET["link"]))
//{
	//if($_GET["link"] != ""){
		//$url = $_GET["link"];
		//}
//}
$invalidurl = false;
if(@simplexml_load_file($url)){
	$feeds = simplexml_load_file($url);
}else{
	$invalidurl = true;
	echo "<h2>Invalid RSS feed URL.</h2>";
}
if(!empty($feeds)){
	//$site = $feeds->channel->title;
	//$sitelink = $feeds->channel->link;
	//echo "<h1>".$site."</h1>";
	
	foreach($feeds->channel->item as $item){
		$title = $item->title;
		$link = $item->link;
		$description = $item->description;
		$postDate = $item->pubDate;
		$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($postDate));
		$key = $_GET['search-bar'];
		 if(isset($_GET['submit-search']))
		 {
			
			if(stripos($title,$key) !== false)//tìm thấy tất cả hoặc 1 phần của chuỗi trong tiêu đề
			{
				echo"<div class='post' style='border-top: 1px solid gray;border-bottom: 1px solid gray;padding: 5px;border-radius:3px;margin-top:15px'>
					<div class='post-head' style='font-size:14px; color: gray; letter-spacing:1px;'>
						<h2><a class='feed_title' href='$link'>$title</a></h2>
							<span style='font-size:14px; color: gray; letter-spacing:1px;'>$pubDate</span>
						</div>
							<div class='post-content' style='font-size: 18px; color:black'>
						<h4><a class='feed_description' style='font-size:8px'>$description</a></h4>
						</div>
					</div>";
					$i++;
			}
		}
	}
	
	}
}		
//tìm bằng database
			//kết nối
			$conn = mysqli_connect("localhost","root","","rssfeeditems");
			if($conn->connect_error)
			{
				die("Connect Failed: ". $conn->connect_error);
			}
			//tìm trong data base
			$search = mysqli_real_escape_string($conn,$_GET['search-bar']);
			$sqlselect = "SELECT * FROM tintuc WHERE titlerss LIKE '%$search%'";
			$exselect = mysqli_query($conn,$sqlselect);
			$cnt = mysqli_num_rows($exselect);
			echo "Kết quả tìm thấy trong database";
			//in kq
			if($cnt > 0)
			{
				while($row = mysqli_fetch_assoc($exselect)){
					$titledb = $row['titlerss'];
					$linkdb = $row['linkrss'];
					echo "<div style='border-bottom: 1px solid gray'>
						<h3>$titledb</h3>
						<p>Xem thêm:<a href='$linkdb'>$linkdb</a></p>
					</div>";
					$i++;
				}
			}
	$conn = null;
	//nếu $i = 0 nghĩa là không tìm thấy kết quả
	if($i == 0){echo "Không tìm thấy kết quả.";}
?>
</div>
<?php
include 'application\views\layout\footer.php';
?>
