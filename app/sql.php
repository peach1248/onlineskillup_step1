<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try {
    // DB に接続
    $dbh = new PDO($dsn, $user, $pass);

    //クエリ実行
    $query_result = $dbh->query('SELECT * FROM test_comments');
    $sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');

    //DB 切断
    $dbh = null;
} catch (PDOException $e) {
    // 接続エラー
    print "DB ERROR: ". $e->getMessage(). "<br/>";
    die();
}
?>

<?php
    $name = "John";
    $text = "power to the people";
    $sth->execute(array($name, $text));
?>

<?php
    foreach($query_result as $row) {
        print $row["name"].": ".$row["text"]."<br/>";
    }
?>