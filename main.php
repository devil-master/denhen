

楊燈恆的著作列表：<br><br>

<?php

$files = array();
$dir = opendir('.'); // open the cwd..also do an err check.
while(false != ($file = readdir($dir))) {
        if(($file != ".") and ($file != "..") and ($file != "index.php") and ($file != "index2.php") and ($file != "left.php") and ($file != "right.php") and ($file != "default.php") and ($file != "index.html") and ($file != "blank.html") and ($file != "head.php") and ($file != "main.php") ) {
                $files[] = $file; // put in array.
        }   
}

natsort($files); // sort.

// print.
foreach($files as $file) {

        //$file = iconv("BIG5", "UTF-8",$file); //必要,否則中文會亂碼

	$file_name = str_replace(".txt","",$file);
	$file_name2 = str_replace(".php","",$file);


       // $file_name = iconv("BIG5", "UTF-8",$file_name); //必要,否則中文會亂碼

	if( preg_match("/php/", $file) ) echo("<a href='$file'>$file_name2</a> <br />\n");
	if( preg_match("/txt/", $file) ) echo("<a href='$file'>$file_name</a> <br />\n");
}

?><br>
<a href="https://play.google.com/books/reader?printsec=frontcover&output=reader&id=4FvYAwAAQBAJ&pg=GBS.PP1" STYLE="text-decoration:none" target="_blank">心靈筆記本：由心靈監獄脫出的逃獄計畫</a><br>
<a href="https://play.google.com/books/reader?printsec=frontcover&output=reader&id=EeDFAwAAQBAJ&pg=GBS.PT18" STYLE="text-decoration:none" target="_blank">八字占星自畫像：八字靈性的自我素描</a><br>
<a href="https://play.google.com/books/reader?id=0rSlAwAAQBAJ&printsec=frontcover&output=reader&hl=zh_TW&pg=GBS.PP1" STYLE="text-decoration:none" target="_blank">五行亂舞：丁火的起始旅程</a><br>
<a href="https://play.google.com/books/reader?printsec=frontcover&output=reader&id=XwOkAwAAQBAJ&pg=GBS.PP1" STYLE="text-decoration:none" target="_blank">楊燈恆冒險集：楊燈恆短篇小說選</a><br>
<a href="https://play.google.com/books/reader?id=EPWjAwAAQBAJ&printsec=frontcover&output=reader&hl=zh_TW&pg=GBS.PP4.w.0.0.0.0.1" STYLE="text-decoration:none" target="_blank">楊燈恆詩集：甲午年靈性愛情現代詩選</a><br>
<a href="https://books.google.com.tw/books?id=IpZlCgAAQBAJ&printsec=frontcover&hl=zh-TW&source=gbs_ge_summary_r&output=reader&pg=GBS.PP2" STYLE="text-decoration:none" target="_blank">歐元交易心法：用武俠小說中的武學理論闡述交易方法</a><br>
<a href="https://play.google.com/books/reader?printsec=frontcover&output=reader&id=Gg12CgAAQBAJ&pg=GBS.PT1.w.5.0.0" STYLE="text-decoration:none" target="_blank">神聖真愛散文集：楊燈恆散文選</a><br>


<br><br>
互動式文學：<br><br>

<a href="http://online.qov.tw" target="_blank">互動者之書</a>

<br><br><br>