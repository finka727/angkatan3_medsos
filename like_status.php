<?php
require_once "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status_id = $_POST['status_id'];
    $user_id = $_POST['user_id'];

    //Cek status
    $selectCheck = mysqli_query($koneksi, "SELECT * FROM likes WHERE status_id = '$status_id' AND user_id = '$user_id'");

    if (mysqli_num_rows($selectCheck) > 0) {
        //Jika sudah like, lakukan unlike
        $qUnlike = mysqli_query($koneksi, "DELETE FROM likes WHERE status_id = '$status_id' AND user_id = '$user_id'");
        if ($qUnlike) {
            //sukses
            $response = [
                'status' => 'unliked'
            ];
        } else {
            //gagal unlike
            $response = [
                'status' => 'error',
                'message' => 'gagal mengunlike.'
            ];
        }
    } else {
        //Jika belum like, lakukan like
        $queryLike = mysqli_query($koneksi, "INSERT INTO likes (user_id, status_id) VALUES ('$user_id', '$status_id')");
        // print_r($queryLike);
        // die;

        if ($queryLike) {
            //sukses
            $response = [
                'status' => 'likes'
            ];
        } else {
            //gagal unlike
            $response = [
                'status' => 'error',
                'message' => 'gagal menyukai.'
            ];
        }
    }
    //kirim response
    header('Content-Type: application/json');
    echo json_encode($response);
}
