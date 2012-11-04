<?php

session_start();

//session_regenerate_id(); //現在のセッションIDを新しく生成したものと置き換える

$_SESSION['username'] = 'kurotaky';

?>

<html>
<head>
<meta charset="utf-8">
<title>fixation.php</title>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>

<h1>fixation.php</h1>

<?php

if (!isset($_COOKIE["PHPSESSID"])){
  print('初回の訪問です。セッションを開始します。');
}else{
  print('セッションは開始しています。<br><br>');
  echo "現在のセッション名は ". session_name() ." です。<br>";
  print('セッションIDは '.$_COOKIE["PHPSESSID"].' です。<br><br>');
}

echo "session_id設定前:  ";
echo session_id() ."<br>";

echo "session_id設定後:  ";
session_id( "123" );
echo session_id(). "<br>";

echo "現在のセッションデータは". session_save_path() ."に保存されています。";

?>

</body>
</html>
