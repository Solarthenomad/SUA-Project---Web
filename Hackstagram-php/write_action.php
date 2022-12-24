<?php 
$connect = mysqli_connect("", "", "", "") or die("failed to connect");

$id = $_POST['name'];
$pw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d H:i:s');

$URL = './index.php';

$query = "insert into board (number, title, content, hit, id, password) values(null, '$title', '$content', '$date', 0, '$id', '$pw')";

$result = $connect->query($query);
if ($result ){
    ?><script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
    </script>
    <?php
}else{
    echo "게시글 등록에 실패하였습니다.";
}
mysqli_close($connect);

?>