<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP第11章課題</title>
</head>

<body>
    <p>
        <?php
        $vegitable_datas = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach ($vegitable_datas as $key => $value) {
            echo "{$key} : {$value}<br>";

        }
        ?>
    </p>
</body>
