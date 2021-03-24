<html>
<body>

<form action="vücutkitle.php" method="post">
Boyunuzu giriniz  : <input type="text" name="girilenboy"><br>
Kilonuzu giriniz : <input type="text" name="girilenkilo"><br>
<input type="submit" value="hesapla"><br>
</form>
<?php

$boy=$_POST['girilenboy'];
$kilo=$_POST['girilenkilo'];

$boy=$boy/100; 
$vki = $kilo/($boy*$boy) ; 
$vki=round($vki,2);


if($vki<20){
echo "vücut kitle endeksiniz : ".$vki."<br>"."vücut durumunuz : zayıf";
}

else if($vki>=20 && $vki<=24.9){
echo "vücut kitle endeksiniz : ".$vki."<br>"."vücut durumunuz : normal";
}
else if ($vki>=25 && $vki<=29.9){
echo "vücut kitle endeksiniz : ".$vki."<br>"."vücut durumunuz : hafif sisman";
}
else if ($vki>=30 && $vki<=34.9){
echo "vücut kitle endeksiniz : ".$vki."<br>"."vücut durumunuz : sisman";
}
else if($vki>=35 && $vki<=44.9){
echo "vücut kitle endeksiniz : ".$vki."<br>"."vücut durumunuz : saglık acısından önemli sınır";
}
else if($vki>=45 && $vki<=49.9){
echo "vücut kitle endeksiniz : ".$vki."<br>"."vücut durumunuz : aşırı şişman";
}
else if ($vki>49.9){
echo "vücut kitle endeksiniz : ".$vki."<br>"."Morbid (Ölümcül şişman)";
}


?>
</body>
</html>