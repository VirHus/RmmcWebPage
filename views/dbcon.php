<?php
    $database = 'rmmcdatabase';
    $connection = mysqli_connect('localhost','root','',$database) or die(mysqli_error($connection));

    if ($connection -> connect_error) {
        $response = [
            'status' => 'error',
            'message' => 'Failed to connect to the database'
        ];
        echo json_encode($response);
        exit;
    }
