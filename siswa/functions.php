<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","perpustakaan");



function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

function cari($keyword) {
    $query = "SELECT * FROM buku
                WHERE
            nama LIKE '%$keyword%' OR
            nis LIKE '%$keyword%' OR
            ttl LIKE '%$keyword%'
    ";
    return query($query);
}

?>