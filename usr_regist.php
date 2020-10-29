
<!-- ------------------------------- -->
<!-- ユーザ追加(regist/insert)：入力部  -->
<!-- ------------------------------- -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default bg_img_p">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="usr_regist.php">登録</a>
        <a class="navbar-brand" href="usr_list.php">[ユーザ一覧]</a>
    </div>
  </nav>
</header>

<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="usr_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザ登録</legend>

    <table>
        <tr><td>　[1]</td>
            <td style="text-align:center">NAME</td><td><input type="text" name="name" required></td>
        </tr>
        <tr><td>　[2]</td>
            <td style="text-align:center">ID</td><td><input type="text" name="id" required></td>
        </tr>
        <tr><td>　[3]</td>
            <td style="text-align:center">Password</td><td><input type="text" name="pw" required></td>
        </tr>
        <tr><td>　[4]</td>
            <td style="text-align:center">社員区分：</td>
            <td style="text-align:center">
                <input type="radio" name="usr_type" value=1>管理者
                <input type="radio" name="usr_type" value=0 checked>一般社員
            </td>
        </tr>
        <tr><td>　[5]</td>
            <td style="text-align:center">在籍区分：</td>
            <td style="text-align:center">
                <input type="radio" name="life_flg" value=1 checked>在籍
                <input type="radio" name="life_flg" value=0>退社
            </td>
        </tr>        
    </table>
        <p>　</p>
        <input type="submit" value="送信">
    </fieldset>
  </div>
</form>    
<!-- Main[End] -->


</body>
</html>
