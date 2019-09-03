<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="ubah.css">
    <title>ubah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

include_once("sambung.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $notelpon=$_POST['no_telpon'];
    $alamat=$_POST['alamat'];
    $norekening=$_POST['no_rekening'];
    $jaminan=$_POST['jaminan'];



    $result = mysqli_query($con, "UPDATE user SET nama='$nama',no_telpon='$notelpon',alamat='$alamat',no_rekening='$norekening',jaminan='$jaminan' WHERE id=$id");

    header("Location: lihat.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $notelpon = $user_data['no_telpon'];
    $alamat = $user_data['alamat'];
    $norekening=$user_data['no_rekening'];
    $jaminan=$user_data['jaminan'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    
    <br/><br/>

    <form name="update_user" method="post" action="ubah.php" class="form">
        <table border="1" class="table table-dark">
            <tr> 
                <td>nama</td>
                <td><input type="text" class="form-control" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>no. telpon</td>
                <td><input type="text" class="form-control" name="no_telpon" value=<?php echo $notelpon;?> ></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" class="form-control" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
             <tr> 
                <td>no. rekening</td>
                <td><input type="text" class="form-control" name="no_rekening" value=<?php echo $norekening;?>></td>
            </tr>
            <tr> 
                <td>jaminan</td>
                <td><input type="radio" name="jaminan" value="BPKB">BPKB
                    <input type="radio" name="jaminan" value="KTP">KTP</td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit"  name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

