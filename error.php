<?php
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
        403 => array('403 Forbidden', 'Server menolak memenuhi permintaan anda.'),
        404 => array('404 Not Found', 'Dokumen/file yang anda cari tidak dapat ditemukan.'),
        405 => array('405 Method Not Allowed', 'Metode permintaan yang anda berikan tidak diperbolehkan.'),
        408 => array('408 Request Timeout', 'Browser gagal mengirimkan request ke server saat ini.'),
        500 => array('500 Internal Server Error', 'Permintaan anda tidak dapat dilayani dikarenakan internal error pada server.'),
        502 => array('502 Bad Gateway', 'Invalid respon dari upstream server saat melayani permintaan anda.'),
        504 => array('504 Gateway Timeout', 'Kegagalan upstream server dalam mengirim request anda.')
        );

$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $message = 'Status code tidak ditemukan.';
}
else{
// tampilkan pesan error sesuai dengan kode status
echo $title;
echo $message;
}?>