<div class="col-sm-12" style="width: 80%; margin:auto">


<?php
$url = "https://vnexpress.net/rss/tin-moi-nhat.rss";
if(isset($_GET["link"]))
{
	if($_GET["link"] != ""){
		$url = $_GET["link"];
		}
}
if(isset($_POST['submit']))
{
	if($_POST['feedurl'] != ''){
		$url = $_POST['feedurl'];
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
		$description = $item->description;
		$postDate = $item->pubDate;
		$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($postDate));
		 if($i>=12) break;
?>
	<div class="post" style="border: 0px solid gray;padding: 5px;border-radius:3px;margin-top:15px">
		<div class="post-head" style="font-size:14px; color: gray; letter-spacing:1px;">
			<h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
			<span style="font-size:14px; color: gray; letter-spacing:1px;"><?php echo $pubDate ?></span>
		</div>
		<div class="post-content" style="font-size: 18px; color:black">
			 <h4><a class="feed_description" style="font-size:8px width:small height:small"><?php echo $description; ?></a></h4>
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
