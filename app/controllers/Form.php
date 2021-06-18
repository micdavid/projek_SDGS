<?php
class Form extends Controller
{
    public function index()
    {
        $data['title'] = 'Donasi Sekarang';
        $this->view('form/index', $data);
    }

    public function add()
    {
        $server = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $database = "donatur";

        $conn = mysqli_connect($server, $dbuser, $dbpass, $database);

        if (!$conn) {
            die("<script>alert('Connection Failed.')</script>");
        }

        if (isset($_POST['submit'])) {

            $location = "../public/photos/bukti";
            $nama = $_POST["namaLengkap"];
            $kode = $_POST["kodeDonasi"];
            $nomer = $_POST["nomerHP"];
            $nominal = $_POST["nominal"];
            $file_new_name = date("dmy") . time() . $_FILES["file"]["name"];
            $file_name = $_FILES["file"]["name"];
            $file_temp = $_FILES["file"]["tmp_name"];
            $file_size = $_FILES["file"]["size"];


            if ($file_size > 10485760) {
                echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";
            } else {
                $sql = "INSERT INTO contributor (namaLengkap, kodeDonasi, nomerHP, nominal, bukti)
				VALUES ('$nama', '$kode', '$nomer', '$nominal', '$file_name')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    move_uploaded_file($file_temp, $location . $file_new_name);
                    echo "<script>alert('Form berhasil disubmit!')</script>";
                } else {
                    echo "<script>alert('Woops! Sepertinya foto anda bermasalah.')</script>";
                }
            }
        }

        return $this->view('form/index');
    }
}
