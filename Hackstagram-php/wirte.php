<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="write_action.php" method="post">
        <table>
            <tr>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>작성자</td>
                            <td>
                              <input type="text" name="name" size=30>
                            </td>
                        </tr>
                        <tr>
                            <td>내용</td>
                            <td><textarea name="content" id="" cols="75" rows="15"></textarea></td>
                        </tr>
                        <tr>
                            <td>비밀번호</td>
                            <td><input type="password" name ="pw" size=15 maxlength=15></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>