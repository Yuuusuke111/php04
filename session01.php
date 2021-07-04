<?php
// SESSIONスタート
session_start();

// SESSIONのidを取得
$sid = session_id();

// SESSION変数にデータ登録
$_SESSION['name'] = '中野';
$_SESSION['age'] = '27';

echo $sid;


?>