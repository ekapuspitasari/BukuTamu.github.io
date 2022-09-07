<?php
    //ini merupakan coding untuk save record dari inputan di form buku-tamu.php ke db.html
    //db.html merupakan kita anggap database untuk save record yang kita inputkan
    if(!empty($_POST['nama']) AND !empty($_POST['keperluan'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $keperluan = $_POST['keperluan'];
        $tgl = date('D, d M Y - H:i:s');
        $text = stripslashes(htmlspecialchars($keperluan));
       
        $l = rand(1,2);

        $fp = fopen("db.html", 'a');
        fwrite($fp, "<div class='list$l'><div class='hr'><div align='right'>$tgl</div></div> <b>Nama</b> : $nama <br> <b>Email</b> : $email <br> <b>Alamat</b> : $alamat <br> <b>Kota/Kabupaten</b> : $kota <br> <b>Keperluan</b> : $text </div>");
        fclose($fp);
    }
   
    header('location:buku-tamu.php');
   
?>