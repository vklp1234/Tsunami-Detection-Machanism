<?php
$mobile="8889867740";
$message="rohan rajput";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8889867740&Password=Rohan@266132843&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=rohanJbkS2HTw9XGWhsEU4CZtfK0e") ,true);
if ($json["status"]==="success") 
{
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>