<?php 
$connect = mysqli_connect() or die();

$id = $_POST['id'];
$pw = $_POST['pw'];

$date = date('Y-m-d H:i:s');

$query1 = "select * from member where id = '$id' ";
$result1 = $connect->query($query1);
$count = mysqli_num_rows($result1);

if ($count) {
?><script>
    alert('이미 존재하는 ID입니다.');
    history.back();
</script>

<?php } else {
    $query = "insert into member(id, password, date, permit) values("
}



?>