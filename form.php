
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <title>Penyetan Depot Pak Jayus</title>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
        gap: 1rem;
        text-align: center;
        font-size: 20px;
    }
    img {
        rotate: 90deg;
        width: 40px;
        transition: all 0.3s ease-in-out;
        height: 40px;
        opacity: 0.8;
    }
    img:hover, img:active{
        opacity: 1;
    }
    a{
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    h3{
        text-align: center;
        font-size: 15px;
        color: black;
        font-weight: 400;
        text-decoration: none;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    h3:hover{
        color: purple;
        text-decoration: underline;
    }
</style>
<body>
    <a href="index.html#contact">
        <img src="scroll.png">
        <h3>Kembali</h3>
    </a>
</body>
</html>

<?php 
    




    $nama = filter_input(INPUT_POST, "nama");
    $nomor = filter_input(INPUT_POST, "nomor");
    $komentar = filter_input(INPUT_POST, "komentar");

    if(!empty($komentar) && !empty($nama) && !empty($nomor)){

        $conn = new mysqli ("localhost", "root", "", "u366544685_pak_jayus");

        if (mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errno().').mysqli_connect_error()');
        }
        else{
            $sql = "INSERT INTO komentar (nama, nomor, komentar) values ('$nama', '$nomor', '$komentar')";

            if($conn->query($sql)){
                echo "Berhasil mengirim.";
            }
            else{
                echo "Error: ". $sql ."<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo " Gagal Mengirim. ";
        die();
    }
?>