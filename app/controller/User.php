<?php
class User
{
  public function index()
  {
    echo "Ini Halaman User/index";
  }

  public function profile($nama = "Raja", $pekerjaan = "Siswa", $umur = 17)
  {
    echo "Salam kenal saya $nama, saya seorang $pekerjaan, dan umur saya $umur";
  }
}
