<?php 
if(!isset($data)){return header('Location:index.php');} 
// print_r(isset($data)); die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
    <title>Serkom</title>
</head>
<body>
<table class="contener">
  <thead>
   <tr>
        <td>Nama Pemesan </td>
        <td><?php echo $data['nama_pemesan'];?></td>
    </tr>
    <tr>
        <td>Nomer Identitas </td>
        <td><?php echo $data['nomer_identitas'];?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $data['jenis_kelamin'];?></td>
    </tr>
    <tr>
        <td>Tanggal checkin</td>
        <td><?php echo $data['tgl_cek'];?></td>
    </tr>
    <tr>
        <td>Durasi Menginap</td>
        <td><?php echo $data['durasi_menginap'];?></td>
    </tr>
    <tr>
        <td>Tipe Kamar</td>
        <td><?php echo $data['tipe_kamar'];?></td>
    </tr>
    <tr>
        <td>Include Breakfast</td>
        <td><?php echo $data['include_breakfast'];?></td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td><?php echo $data['total_bayar'];?></td>
    </tr>
  </tbody>
</table>
</body>
</html>