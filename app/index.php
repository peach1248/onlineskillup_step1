<!DOCTYPE html>
<html>
    <head>
	    <meta charset="UTF-8" />
		<title>POSTのサンプル</title>
	</head>
	<body>
        <?php
            //commentがPOSTされているか
            if(isset($_POST["comment"])){
                $comment = htmlspecialchars($_POST["comment"]);
                $name = htmlspecialchars($_POST["name"]);
                $title = htmlspecialchars($_POST["title"]);
                print("${name}のコメントは「${title}: ${comment}」です。");
            } else {
        ?>
            <p>コメントしてください。</p>
            <form method="POST" action="index.php">
                名前<input name="name" /><br>
                表題<input name="title" /><br>
                コメント<input name="comment" /><br>
                <input type="submit" value="送信" />
            </form>
        <?php
            }
        ?>
	</body>
</html>