<?php
class Model_latihan1 extends CI_Model
{
 //membuat variable untuk menampung nilai
 public $nilai1, $nilai2, $hasil;

 //method penjumlahan
 public function jumlah($n1 = null, $n2 = null)
 {
 $nilai1 = $n1;
 $nilai2 = $n2;
 $hasil = $nilai1 + $nilai2;
 return $hasil;
 }
}