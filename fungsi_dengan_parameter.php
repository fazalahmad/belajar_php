<?php
    function pembuatan_KTP ($nama, $umur)
    {
        if($umur >= 17)
        {
            echo "Saudara $nama sudah dapat membuat KTP<br>";
        }
        else
        {
            echo "Saudara $nama belum dapat membuat KTP<br>";
        }
    }

    Pembuatan_KTP ("Andi", 20);
    Pembuatan_KTP ("Refi", 28);
    Pembuatan_KTP ("Cha-cha", 13);
    Pembuatan_KTP ("Rahman", 10);
?>