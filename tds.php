<?php
@system('clear');

$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$blud="\033[1;34m";
$res="\033[1;35m";
$nau="\033[1;36m";
$trang="\033[1;37m";

echo $red, "   /$$    /$$$$$$   /$$$$$$    /$$          /$$$$$$  /$$   /$$ /$$$$$$$$
 /$$$$   /$$$_  $$ /$$$_  $$ /$$$$         /$$__  $$| $$  /$$/|__  $$__/
|_  $$  | $$$$\ $$| $$$$\ $$|_  $$        | $$  \__/| $$ /$$/    | $$   
  | $$  | $$ $$ $$| $$ $$ $$  | $$        | $$      | $$$$$/     | $$   
  | $$  | $$\ $$$$| $$\ $$$$  | $$        | $$      | $$  $$     | $$   
  | $$  | $$ \ $$$| $$ \ $$$  | $$        | $$    $$| $$\  $$    | $$   
 /$$$$$$|  $$$$$$/|  $$$$$$/ /$$$$$$      |  $$$$$$/| $$ \  $$   | $$   
|______/ \______/  \______/ |______/       \______/ |__/  \__/   |__/   
                                                                        
                                                                        
                                              \n";
echo $blud, "===============================================================\n";
echo $blud, "Email: xxxxxxxxxxx | SDT: 09xxxxxxxxx\n";
echo $blud, "===============================================================\n";
sleep(5);
echo "đang tiến hành chạy tool\n";

while(true){

$url = "https://ap.urcoinplus.com/a/fit/walking/card/wheel_draw";
$data = '{"auth_token":"v3:ap02:ca41f5f6-6c2e-4915-909b-a06c5a87d3ee","time_zone":"GMT+07:00","mode":"normal","wheel_type":"coin_plus_with_dice"}';

$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
"ap.urcoinplus.com",
"Mozilla/5.0 (Linux; Android 5.1.1; SM-G973N Build/PPR1.190810.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.136 Mobile Safari/537.36",
"application/json; charset=utf-8",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$vi = $json['data']['coins_balance'];
$nhan = $json['data']['prize_value'];
$luot = $json['data']['today_count'];

echo $red, "Bạn đã quay được: $nhan Kim Cương\n";
echo $green, "Số tiền trong ví: $vi Kim Cương\n";
echo $nau, "Số lượt đã quay hôm nay: $luot\n";
echo $red, "Tool phát triển bởi 1001 cách kiếm tiền\n";
echo $blud, "=================================\n";
sleep(10);




}











?>