<?php
require("db.php");

$id = $_POST['ID'];
$name = $_POST['name'];
$pw = $_POST['password'];

$sql = "INSERT INTO users(id, name, password, money) VALUES (?, ?, PASSWORD(?), 0)";
$cnt = query($con, $sql, [$id, $name, $pw]);

if($cnt == 0) {
    msgAndGo("회원가입이 실패했습니다.", "/register.php");
} else {
    msgAndGo("회원가입이 성공했습니다.", "/boardMain.php");
}