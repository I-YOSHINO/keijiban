<!DOCTYPE html>
　<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
        
    <body>
        <div class="logo">
            <img src="./4eachblog_logo.jpg">
        </div>

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>

        </header>
        
        <main>
            <div class="left_column">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="mail_confirm.php">
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="送信する">
                </div>
            </form>

            </div>

            <div class="right_column">
                <h3>人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>

                <h3>オススメリンク</h3>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>

                <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>


            </div>

        </main>

        <footer>
                copyright © internous | 4each blog the which providers A to Z aboout programming.
        </footer>





    </body>

</html>