<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "","phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
        global $conn;
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // upload gambar
        $gambar = upload();
        if (!$gambar){
            return false;
        }

        // query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nrp' , '$nama' , '$email' , '$jurusan', '$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
}


function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yg diupload
    if ($error === 4){
        echo "
        <script>
        alert('pilih gambar terlebih dahulu');
        </script>
        ";
        return false;
    }

    // cek apakah yang diupoad adalah gambar
    $eksensiGambarValid = ['jpg', 'jpeg', 'png', 'gif' , 'jfif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar =  strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $eksensiGambarValid)){
        echo "
        <script>
        alert('File yang di upload bukan gambar');
        </script>
        ";
    }
    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 2000000 ){
        echo "
        <script>
        alert('Ukuran gambar melebihi 2mb');
        </script>
        ";
    }
    //jika lolos pegecekan, gambar siap di upload
    move_uploaded_file($tmpName, 'img/' . $namaFile);
    return $namaFile;


}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE mahasiswa SET 
        nrp='$nrp' ,
        nama = '$nama' ,
        email = '$email' ,
        jurusan = '$jurusan' ,
        gambar = '$gambar'
        WHERE id= $id
        ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}


function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
    WHERE nama LIKE '%$keyword%'
    OR nrp LIKE '%$keyword%'
    OR email LIKE '%$keyword%'
    OR jurusan LIKE '%$keyword%'
    ";

    return query($query);
}

?>