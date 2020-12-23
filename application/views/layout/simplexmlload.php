<div class="col-sm-8" style="width: 70%; margin:auto">


<?php
$url = "https://vnexpress.net/rss/tin-moi-nhat.rss";
if(isset($_GET["link"]))
{
	if($_GET["link"] != ""){
		$url = $_GET["link"];
		}
}
$invalidurl = false;
if(@simplexml_load_file($url)){
	$feeds = simplexml_load_file($url);
}else{
	$invalidurl = true;
	echo "<h2>Invalid RSS feed URL.</h2>";
}
$i = 0;
if(!empty($feeds)){
	$site = $feeds->channel->title;
	$sitelink = $feeds->channel->link;
	echo "<h1>".$site."</h1>";
	foreach($feeds->channel->item as $item){
		$title = $item->title;
		$link = $item->link;
		$postDate = $item->pubDate;
		$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($postDate));
		if (strpos($item->description, "src=")) {//nếu có hình ảnh trong description thì cắt chuỗi vào array bằng explode
			$str = explode('src=', $item->description);//chia chuỗi để bỏ thẻ a và img lấy chuỗi sau src
            $str1 = explode('></a></br>', $str[1]);//chia thành src của img và description 
		}
		else
		{
			$str1[0] = "./images/nopic.png";
			$str1[1] = $item->description;
		}
		 if($i>=15) break;
?>
	<div class="post" style="border: 1px solid gray;padding: 5px;border-radius:3px;margin-top:15px">
		<div class="post-head" style="font-size:14px; color: gray; letter-spacing:1px;">
			<h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
			<span style="font-size:14px; color: gray; letter-spacing:1px;"><?php echo $pubDate ?></span>
		</div>
		<div class="post-content" style="font-size: 18px; color:black">
			<img src=<?php echo $str1[0]; ?> width="700" height="400">
			 <h4><a class="feed_description" style="font-size:8px width:small height:small"><?php echo $str1[1]; ?></a></h4> 
		</div>
	</div>
<?php
		$i++;
	}
}else{
	if(!$invalidurl){
		echo "<h2>No item found.</h2>";
	}
}
?>
</div>
