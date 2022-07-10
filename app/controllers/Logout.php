<?php
class Logout extends Controller
{
    public function me()
    {
        Flasher::setflash('success', 'Berhasil', 'Dikeluarkan');
        header('Location: ' . BASE);
        session_unset();
    }
}
