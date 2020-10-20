$imglist='';
$img_folder = "images/"; 

mt_srand((double)microtime()*1000);
$imgs = dir($img_folder); 

while ($file = $imgs->read()) {
	if (eregi("gif", $file) || eregi("jpg", $file) || eregi("png", $file)) 
		$imglist .= "$file ";
} 
closedir($imgs->handle); 
$imglist = explode(" ", $imglist); 
$no = sizeof($imglist)-1;
$random = mt_rand(0, $no); 
$image = $imglist[$random];
echo '<img src="'.$img_folder.$image.'" border="0/" alt="" />';