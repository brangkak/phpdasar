<?php 
    $conn = mysqli_connect("localhost","root","","phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $nama = $data["nama"];
        $nrp = $data["nrp"];
        $email = $data["email"];
        $gambar = $data["gambar"];
        $jurusan = $data["jurusan"];

        mysqli_query($conn, "INSERT INTO mahasiswa VALUE ('','$nama','$nrp','$email','$gambar','$jurusan')");

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

?>