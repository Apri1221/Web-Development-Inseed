<?php
include_once("c_iklanq.php");

if(isset($_POST['submit1'])){ 
	$main = new c_iklanq();
	$id_u = $_POST['id_u'];
	$judul = $_POST["judul_iklan"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $kategori = $_POST["kategori"];
	$main->addIklan($id_u, $judul, $harga, $deskripsi, $kategori);
}

else if(isset($_POST['submit2'])){ 
	$main = new c_iklanq();
	$email = $_POST['email'];
	$password = $_POST["password"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    // $year = null;
    function calculate_age($birthday){
        $today = new DateTime();
        $diff = $today->diff(new DateTime($birthday));
        return printf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
    }
    function calculate_Year($birthday){
        $today = new DateTime();
        $diff = $today->diff(new DateTime($birthday));
        return  $diff->y;
    }
    if(isset($_POST['birthday'])){
        $dob = $_POST['birthday'];
        calculate_age($dob);
        $year = calculate_Year($dob);
        $main->addMember($email, $password, $nama, $gender, $year, $alamat);
    }
}

else if(isset($_POST['submit3'])){ 
    $main = new c_iklanq();
    $id_u = $_POST['id_u'];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $password = $_POST["password"];
    $main->updateMember($id_u, $nama, $email, $alamat, $password);
}

else if(isset($_POST['email'])){
    $con = mysqli_connect('localhost', 'root', 'apriyanto12', 'iklanq');
    if (!empty($email)) {
        $sql = "SELECT * FROM user where `email` = '%$email%'";
        $rs = mysqli_query($con, $sql);
        $email_result = mysqli_num_rows($rs);
        if ($email_result == 0) {
            echo '<span class="text-success">Email bisa dipakai</span>';
        } else if($email_result > 0){
            echo '<span class="text-danger">Email sudah ada</span>';
        }
    }
}

?>