<?php
$ip6=$_SERVER['SERVER_ADDR'];
$ip4=$_SERVER['REMOTE_ADDR'];
$port=$_SERVER['SERVER_PORT'];

$name=$_GET["fname"];
$subject=$_GET["subject"];
$from=$_GET["from"];
$to=$_GET["to"];
$file=$_GET["file"];
$message=$_GET["message"];

mail($to,$subject,$message,"from:$name <$from>");

$file=fopen('mails.txt','a');
fwrite($file,"\nFrom-Name : ");
fwrite($file,$name);
fwrite($file,"\nSubject : ");
fwrite($file,$subject);
fwrite($file,"\nFrom-Email : ");
fwrite($file,$from);
fwrite($file,"\nTo Email : ");
fwrite($file,$to);
fwrite($file,"\nMessage : ");
fwrite($file,$message);

fwrite($file,"\nIP4 adsress : $ip4");
fwrite($file,"\nIP6 adsress : $ip6");
fwrite($file,"\nPort : $port");
fwrite($file,"\n---------------------------------- ");
fclose();

echo "<h1>Done $i</h1>";
readfile("index.html");
echo "\n\n";
$x=1;


?>
