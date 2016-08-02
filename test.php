<?php
// http: // s.music.163.com/search/get/?type=1&s={keyword}&limit=1
$str = '{"result":{"songCount":351,"songs":[{"id":203478,"name":"大哥","artists":[{"id":6832,"name":"赵俊涛","picUrl":null}],"album":{"id":20508,"name":"大哥","artist":{"id":0,"name":"","picUrl":null},"picUrl":"http://p1.music.126.net/D1wwNDr6QakUiJjt5Zaolw==/92358976749560.jpg"},"audio":"http://m2.music.126.net/CnhTtpR9p01hrKdsS0mq0w==/2802655139203347.mp3","djProgramId":0,"page":"http://music.163.com/m/song/203478"}]},"code":200}';
// 解析json格式
// $str = 'http: // s.music.163.com/search/get/?type=1&s=刚刚好&limit=1';
// print_r ( get_file_contents ( $str ) );
// print_r($str)
$music = json_decode ( $str, true );
$ulr = $music ['result'] ['songs'] ['0'] ['audio'];
echo "$ulr";
echo '<br/>';
print_r ( (json_decode ( $str, true )) );


