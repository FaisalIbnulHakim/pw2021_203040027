<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040027");

    return $conn;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $type = htmlspecialchars($data['type']);

    $query = "INSERT INTO gaminggear
                    VALUES
                    ('','$nama','$deskripsi','$harga','$type','$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM gaminggear WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $tipe = htmlspecialchars($data['tipe']);

    $query = "UPDATE gaminggear 
                    SET
                    gambar = '$gambar',
                    nama = '$nama',
                    deskripsi = '$deskripsi',
                    harga = '$harga',
                    tipe = '$tipe'
                    WHERE 
                    id = '$id' ";
    mysqli_query($conn, $query)  or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('username sudah digunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
