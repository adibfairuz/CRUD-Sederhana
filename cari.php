<?php 
include("config.php");

if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $result_post = mysqli_query($conn, "SELECT * FROM post WHERE judul LIKE '%$keyword%' OR isi LIKE '%$keyword%'");
}else{
    $result_post = mysqli_query($conn, "SELECT * FROM post");
}
?>
<table id="table" border=1>
    <tr>
        <th>judul</th>
        <th>isi</th>
        <th>action</th>
    </tr>
    <?php while($post = mysqli_fetch_assoc($result_post)): ?>
    <tr>
        <td><?php echo $post['judul']; ?></td>
        <td><?php echo $post['isi']; ?></td>
        <td><a href="edit.php?post=<?php echo $post["id"]; ?>">edit</a> | <a href="hapus.php?id=<?php echo $post["id"]; ?>">hapus</a></td>
    </tr>
<?php endwhile; ?>
</table>