function show_refer_in(){
$refer_info=$_SERVER['HTTP_REFERER'];
$ban_list=array($_SERVER["HTTP_HOST"]);
for($ii=0;$ii<count($ban_list);$ii++){
if(strpos($refer_info,$ban_list[$ii])){
return;
}
}
if($refer_info){
preg_match("/^(http:\/\/)?([^\/]+)/i",
$refer_info, $matches);
$host = $matches[2];
echo "<div id=\"welcome\">欢迎来自 <span class=\"from-url\">".$host."</span> 的小主！<br><center>今日：<iframe width=\"150\"scrolling=\"no\" height=\"18\" frameborder=\"0\" allowtransparency=\"true\" src=\"http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=1\"></iframe></center><div class=\"closebox\"><a href=\"javascript:void(0)\"onclick=\"$('#welcome'). slideUp('slow');$('.closebox').css('display','none');\" title=\"关闭\">朕知道了，退下吧</a></div></div>";
}
}