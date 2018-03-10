<?php 
	header("Content-type:image/png");
	session_start();
	//1、创建画布
	$image_handle1 = imagecreate(100,22);//创建一个新的空白画布
	
	
	//$image_handle2 = imagecreatefrompng("./images/waitaikong.png");
	//用已有的png图像来创建一个画布
	
	//2、处理图片
	//颜色管理
	imagecolorallocate($image_handle1,255,255,255);
	$red = imagecolorallocate($image_handle1,255,0,0);
	$blue = imagecolorallocate($image_handle1,0,0,255);
	$black = imagecolorallocate($image_handle1,0,0,0);
	$prxel = imagecolorallocate($image_handle1,0,0,0);
	//绘制图像
	//$arr = array(100,100,50,150,150,150);
	//imagefilledellipse($image_handle1,200,150,80,80,$red);//画填充圆
	//imagefilledrectangle($image_handle1,50,50,250,250,$red);//画矩形
	//imagepolygon($image_handle1,$arr,3,$red);//画圆
	for($i=0;$i<100;$i++) {
		imagesetpixel($image_handle1,rand(0,100),rand(0,30),$prxel);
	}
	//绘制文字
	$arr = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
	'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4',
	'5','6','7','8','9',);
	
	//$str1 = rand(0,100)."+".rand(0,100)."="."?";
	$str = $arr[rand(0,count($arr)-1)].$arr[rand(0,count($arr)-1)]
	.$arr[rand(0,count($arr)-1)].$arr[rand(0,count($arr)-1)];
	
	$_SESSION["code"] = $str;//把验证码写入session
	//imagestring($image_handle1,5,10,5,"X4YZ",$red);
	imagettftext($image_handle1,18,0,10,20,$black,"../Font/maozedong.ttf","$str");
	//3、输出图像
	//imagepng($image_handle2);
	//imagepng($image_handle1,"./images/01.png");//输出到浏览器显示
	imagepng($image_handle1);
	
	//4、释放资源
	imagedestroy($image_handle1);
?>