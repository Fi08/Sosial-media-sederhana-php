<?php

class Flasher
{

    public static function setflash($alert, $data, $pesan)
    {
        $_SESSION['flash'] = ['alert' => $alert, 'data' => $data, 'pesan' => $pesan];
    }

    public static function flash()
    {
        echo '<div class="alert alert-' .  $_SESSION['flash']['alert'] . '" role="alert">
        Data ' .  $_SESSION['flash']['data'] . ' ' .  $_SESSION['flash']['pesan'] . '</div>';
        unset($_SESSION['flash']);
    }
}
