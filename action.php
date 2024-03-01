<?php
  $koneksi = mysqli_connect('localhost', 'root','', 'serkom');
  define('URL', 'http://localhost/serkom');

  if (isset($_POST['totalBayar'])) {
    $namaPemesan = $_POST['namaPemesan'];
    $nomerIdentitas = $_POST['nomerIdentitas'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tanggalCek = $_POST['tanggalCek'];
    $durasiMenginap = $_POST['durasiMenginap'];
    $tipeKamar = $_POST['tipeKamar'];
    $includeBreakfast = $_POST['includeBreakfast'];
    $totalBayar = $_POST['totalBayar'];

    mysqli_query($koneksi, "INSERT INTO reservation VALUES (null,'$namaPemesan', '$nomerIdentitas', '$jenisKelamin', '$tanggalCek', '$durasiMenginap', '$tipeKamar', '$includeBreakfast', '$totalBayar')");
    $data= [
        'nama_pemesan' => $namaPemesan,
        'nomer_identitas' => $nomerIdentitas,
        'jenis_kelamin' => $jenisKelamin,
        'tgl_cek' => $tanggalCek,
        'durasi_menginap' => $durasiMenginap,
        'tipe_kamar' => $tipeKamar,
        'include_breakfast' => $includeBreakfast,
        'total_bayar' => $totalBayar
    ]; 
    
    include_once ('hasil.php');
    die();
  }

  function connect()
  {
    $mysqli = new mysqli('localhost','root','','serkom');
    // Check connection
    if ($mysqli -> connect_errno) {
        throw new Exception("Database error : " . $mysqli -> connect_error); //Handle Error
    }

    // Mengembalikan nilai koneksi
    return $mysqli;



  }

  function get_reservation()
{
    // Query sql
    $sql = "SELECT * FROM `reservation`";

    // Koneksi ke database
    $mysqli = connect();
        // Eksekusi query
        $result = $mysqli -> query($sql);

        // Ambil data dari hasil query menjadi array
        $hasil = $result -> fetch_all(MYSQLI_ASSOC);
    
        // fungsi membebaskan memori yang terkait dengan hasil.
        $result -> free_result();
    
        // Tutup koneksi
        $mysqli -> close();
    
        return $hasil;
    }

function get_tipe_kamar_standard()
{
      // Query sql
      $sql = "SELECT SUM(tipeKamar) as kamar_standard FROM reservation WHERE tipekamar='standard'";

      // Koneksi ke database
      $mysqli = connect();
      
      // Eksekusi query
      $result = $mysqli -> query($sql);
  
      // Ambil data dari hasil query menjadi array
      $hasil = $result -> fetch_all(MYSQLI_ASSOC);
  
      // fungsi membebaskan memori yang terkait dengan hasil.
      $result -> free_result();
  
      // Tutup koneksi
      $mysqli -> close();
  
      return $hasil[0]['kamar_standard'];
}
function get_tipe_kamar_deluxe()
{
  // Query sql
  // $sql = "SELECT tipeKamar FROM reservation WHERE tipeKamar= 'deluxe'";
  $sql = "SELECT SUM(tipeKamar) as kamar_deluxe FROM reservation WHERE tipekamar='deluxe'";

  // Koneksi ke database
  $mysqli = connect();
  
  // Eksekusi query
  $result = $mysqli -> query($sql);

  // Ambil data dari hasil query menjadi array
  $hasil = $result -> fetch_all(MYSQLI_ASSOC);

  // fungsi membebaskan memori yang terkait dengan hasil.
  $result -> free_result();

  // Tutup koneksi
  $mysqli -> close();

  return $hasil[0]['kamar_deluxe'];
}

function get_tipe_kamar_family()
{
  // Query sql
  // $sql = "SELECT * FROM reservation WHERE tipeKamar= 'family'";
  $sql = "SELECT SUM(tipeKamar) as kamar_family FROM reservation WHERE tipekamar='family'";

  // Koneksi ke database
  $mysqli = connect();
  
  // Eksekusi query
  $result = $mysqli -> query($sql);

  // Ambil data dari hasil query menjadi array
  $hasil = $result -> fetch_all(MYSQLI_ASSOC);

  // fungsi membebaskan memori yang terkait dengan hasil.
  $result -> free_result();

  // Tutup koneksi
  $mysqli -> close();

  return $hasil[0]['kamar_family'];
}










?>
