<script>
<button onclick="var jsVar = "<?php 
$nomor = array("6285697236785"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Hi kak,saya mau beli *Followers, view , Liker* Tiktoknya Atau mau tanya tanya dulu !";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>
