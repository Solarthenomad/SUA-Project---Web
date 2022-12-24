<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

<table>
    <tr>
        <td colspan = "4" class="read_title"><?php echo $rows['title'] ?></td>
    </tr>
    <tr>
        <td class="read_id">작성자</td>
        <td class="read_id2"><?php echo $rows['id'] ?></td>
        <td>조회수</td>
        <td><?php echo $rows['hit'] ?></td>
    </tr>
    <tr>
        <td colspan="4" class="read_content" valign="top">
                <?php echo $rows['content'] ?>
        </td>
    </tr>
</table>
<div class="read_btn">
        <button class="read_btn1" onclick="location.href='./index.php'">목록</button>&nbsp;&nbsp;
        <button class="read_btn1" onclick="location.href='./modify.php?number=<?= $number ?>&id=<?= $_SESSION['userid'] ?>'">수정</button>&nbsp;&nbsp;
        <button class="read_btn1" onclick="location.href='./delete.php?number=<?= $number ?>&id=<?= $_SESSION['userid'] ?>'">삭제</button>
</div>
    
</body>
</html>