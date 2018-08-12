<?php
     if (!isset($_POST['gizli'])) {
$sayi=rand(1, 100);
}
else {
$sayi=$_POST['gizli'];
}

echo $sayi;
?>
<?php if (!isset($_POST['gizli'])) {
$tutulan_sayi=rand(1, 100);
}
else {
$tutulan_sayi=$_POST['gizli'];
}
?>
<form action="" method="post">
<input type="hidden" value="<?=$tutulan_sayi;?>" name="gizli">
<p>0-100 arasinda bir sayi tuttum. Tahmininiz:
<input size="3" type="text" name="tahmin" value=""></p>
<p><input name="dugme" type="submit" value="TAHMİN ET!"></p>
</form>
<?php
function kontrol($tahmin,$tutulan_sayi)
{
if ($tahmin>$tutulan_sayi) { return "Daha Az"; }
if ($tahmin<$tutulan_sayi) { return "Daha Fazla"; }
if ($tahmin=$tutulan_sayi) { return "TAMAM!!!"; }
}
if(isset($_POST["dugme"]))
{
$tahmin = $_POST['tahmin'];
echo "Tahmin edilen sayİ:".$tahmin."<br/>";
$tutulan_sayi = $_POST['gizli'];
echo kontrol($tahmin, $tutulan_sayi);
}
?>