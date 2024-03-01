<meta name="viewport" content="width=device-width, user-scalable=no">
<center>
<?php

$wallet="nano_1zsdyogzg8ctifphictts3thpubnf64m1qy74weid4mu5wiohyj94c3cffun";

$pay="0.000001";
$raw="1";

for($i=1;$i<=3;$i++)
{
$pay.=$_POST["q"][$i];
$raw.=$_POST["q"][$i];
}

$raw.="000000000000000000000";

echo "raw=".$raw."<br>";
?>

<br>You are paying to the following wallet address:-<br>
<small>nano_1zsdyogzg8ctifphictts3thpubnf64m1qy74weid4mu5wiohyj94c3cffun</small></small><br>
<img src='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chld=H&chl=nano:<?=$wallet ?>?amount=<?=$raw ?>' width=300>
<br>
Scan above QR using XNO wallet<br> - OR - <br>
Click Link below on Mobile with XNO wallet<br>
<big><b><a href="nano:<?=$wallet ?>?amount=<?=$raw ?>" target=_blank><?=$pay ?></a><br>