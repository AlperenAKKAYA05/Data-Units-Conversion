<script src="select.js"></script>

<!-- Post -->
<form action="" method="post">
    <p>
<select id='SeciliCombo' name="BirimDönüştür" onchange='UstSecimComboChange();'>
<option value='-1' title='- Birim Seçin -'>- Birim Seçin -</option>
<option value='0' title='Bytes'>Bytes</option>
<option value='1' title='KB'>KB</option>
<option value='2' title='MB'>MB</option>
<option value='3' title='GB'>GB</option>
</select>
</p>
<p>Çevir</p>
<p>
<select id='SecimCombo' name="BirimSecim" onchange='SecimComboChange();'>
<option value='-1' title='- Önce Birim Seçin -'>- Önce Birim Seçin -</option>
</select>
</p>
 <p><input type="text" name="deger" /></p>
 <p><input type="submit" value="Hesapla" /></p>
</form>
<!-- Post Son -->

<?php 
error_reporting(0);
/*
/‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾\
|                         BirimDönüştür                         |
\_______________________________________________________________/
|   0 => Bytes      1 => KB         2 => MB         3 => GB     |
|   BirimSecim      BirimSecim      BirimSecim      BirimSecim  |
|   ╠► 0 KB         ╠► 0 Bytes      ╠► 0 Bytes      ╠► 0 Bytes  |
|   ╠► 1 MB         ╠► 1 MB         ╠► 1 KB         ╠► 1 KB     |
|   ╚► 2 GB         ╚► 2 GB         ╚► 2 GB         ╚► 2 MB     |
 ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
*/
function Hesaplayıcı($deger1,$deger2){
        echo $deger = number_format($deger1 / $deger2, 2);
}
function byte_Hesaplayıcı($deger1,$deger2){
        echo $deger = number_format($deger1 * $deger2);
}

if ($_POST['BirimDönüştür'] == 0 and $_POST['BirimSecim'] == 0){
echo Hesaplayıcı($_POST['deger'], 1024) . ' KB';
}
elseif ($_POST['BirimDönüştür'] == 0 and $_POST['BirimSecim'] == 1) {
echo Hesaplayıcı($_POST['deger'], 1048576) . ' MB';
}
elseif ($_POST['BirimDönüştür'] == 0 and $_POST['BirimSecim'] == 2) {
echo Hesaplayıcı($_POST['deger'], 1073741824) . ' GB';
}

elseif ($_POST['BirimDönüştür'] == 1 and $_POST['BirimSecim'] == 0){
echo byte_Hesaplayıcı($_POST['deger'], 1024) . ' Bytes';
}
elseif ($_POST['BirimDönüştür'] == 1 and $_POST['BirimSecim'] == 1) {
$bytedeger = byte_Hesaplayıcı($_POST['deger'], 1024);
echo Hesaplayıcı($bytedeger, 1048576) . 'MB';
}
elseif ($_POST['BirimDönüştür'] == 1 and $_POST['BirimSecim'] == 2) {
$bytedeger = byte_Hesaplayıcı($_POST['deger'], 1024);
echo Hesaplayıcı($bytedeger, 1073741824) . 'GB';
}

elseif ($_POST['BirimDönüştür'] == 2 and $_POST['BirimSecim'] == 0){
echo byte_Hesaplayıcı($_POST['deger'], 1048576) . ' Bytes';
}
elseif ($_POST['BirimDönüştür'] == 2 and $_POST['BirimSecim'] == 1) {
$bytedeger = byte_Hesaplayıcı($_POST['deger'], 1048576);
echo Hesaplayıcı($bytedeger, 1024) . 'KB';
}
elseif ($_POST['BirimDönüştür'] == 2 and $_POST['BirimSecim'] == 2) {
$bytedeger = byte_Hesaplayıcı($_POST['deger'], 1048576);
echo Hesaplayıcı($bytedeger, 1073741824) . 'GB';
}

elseif ($_POST['BirimDönüştür'] == 3 and $_POST['BirimSecim'] == 0){
echo byte_Hesaplayıcı($_POST['deger'], 1073741824) . ' Bytes';
}
elseif ($_POST['BirimDönüştür'] == 3 and $_POST['BirimSecim'] == 1) {
$bytedeger = byte_Hesaplayıcı($_POST['deger'], 1073741824);
echo Hesaplayıcı($bytedeger, 1024) . 'KB';
}
elseif ($_POST['BirimDönüştür'] == 3 and $_POST['BirimSecim'] == 2) {
$bytedeger = byte_Hesaplayıcı($_POST['deger'], 1073741824);
echo Hesaplayıcı($bytedeger, 1048576) . 'MB';
}
else{
    echo "Hata";
}
 ?>