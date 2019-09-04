<?php
    function pembuatan_KTP ()
    {
        $nama = "Andi";
        $umur = 20;

        if($umur >= 17)
        {
            echo "Saudara $nama sudah dapat membuat KTP";
        }
        else
        {
            echo "Saudara $nama belum dapat membuat KTP";
        }
    }

    Pembuatan_KTP ();
?>