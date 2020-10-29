<?php

// --------------------------------
// ユーザ一覧(view)
// --------------------------------

//1.  DB接続:
require_once("funcs.php");
$pdo = db_conn();

//２．SQL実行：SELECT
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<h3>';
    $view .='<a href="usr_update.php?id='.$result['id'].'">';
    $view .=$result['id'].":".$result['name'];
    $view .='</h3>';
    $view .='<div>';
    $view .="ID:".$result['lid'];
    $view .="/ PW:".$result['lpw'];
    $view .='</div>';
    $view .='<div>';
    $view .=($result['kanri_flg'] == 1)? "管理者":"一般社員";
    $view .=($result['life_flg'] == 1)? "/ 在籍":"/ 退職";
    $view .="</div>";
    $view .='</a>';
    $view .='<div>[<a href="usr_update_view.php?id='.$result['id'].'">edit</a>]';
    $view .='[<a href="usr_delete.php?id='.$result['id'].'">delete</a>]</div>';
    $view .="<p></p>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録ユーザ表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8"></script>
<style>div{padding: 10px;font-size:16px;}</style>

</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default bg_img_p">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="usr_regist.php">[登録]</a>
        <a class="navbar-brand" href="usr_list.php">ユーザ一覧</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?php echo $view;?></div>
</div>
<!-- Main[End] -->

</body>
</html>

