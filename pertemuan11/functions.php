<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_203040027");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $anime = htmlspecialchars($data['anime']);
  $harga = htmlspecialchars($data['harga']);
  $produksi = htmlspecialchars($data['produksi']);
  $gender = htmlspecialchars($data['gender']);

  $query = "INSERT INTO figure
                    VALUES
                    ('','$nama','$anime','$produksi','$harga','$gambar','$gender')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM figure WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $anime = htmlspecialchars($data['anime']);
  $harga = htmlspecialchars($data['harga']);
  $produksi = htmlspecialchars($data['produksi']);
  $gender = htmlspecialchars($data['gender']);

  $query = "UPDATE FIGURE SET 
  nama = '$nama',
  anime = '$anime',
  produksi = '$produksi',
  harga = '$harga',
  gambar = '$gambar',
  gender = '$gender'
  WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM figure WHERE 
          nama LIKE '%$keyword%' OR
          anime LIKE '%$keyword%' OR
          produksi LIKE '%$keyword%' ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
