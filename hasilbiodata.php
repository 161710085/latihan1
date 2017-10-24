<?php 
require_once'biodata.php';

$identitas=new biodata('adit','Bandung','Kuliah','jomblo');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_lahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br>'.'<br>'.'<br>';

$identitas=new biodata('thia','jakarta','D2','jomblo');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_lahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br>'.'<br>'.'<br>';

$identitas=new biodata('janwar','bali','S1','single');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_lahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br>'.'<br>'.'<br>';



$identitas=new biodata('asep','aceh','XII RPL 4','Menikah');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_lahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br>'.'<br>'.'<br>';


 ?>