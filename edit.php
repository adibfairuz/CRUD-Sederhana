<?php
    include("config.php");
    $id = $_GET["post"];
    $result_post = mysqli_query($conn, "SELECT * FROM post WHERE id = '$id'");
    $post = mysqli_fetch_assoc($result_post);
?>

<form action ="f_edit.php" method="POST" enctype="multipart/form-data">
    <label for="">Judul</label>
    <input type="text" name="judul" id="" value="<?php echo $post["judul"]; ?>">
    <br>
    <label for="">Isi</label>
    <textarea name="isi"><?php echo $post["isi"]; ?></textarea>
    <br>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input name="ok" type="submit" value="ubah">
</form>