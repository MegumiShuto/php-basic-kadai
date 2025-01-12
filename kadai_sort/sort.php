<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>

</head>

<body>
    <p>
        <?php
        //ソートする配列を宣言
        $num = [15, 4, 18, 23, 10];

        //関数の定義
        function sort_2way($array, $order) {
            if ($order){
            //TRUEの場合（昇順ソートで返す）
            echo '昇順にソートします。<br>';
            sort($array);
           } else {
            //FALSEの場合（降順ソートで返す）
            echo '降順にソートします。<br>';
            rsort($array);
           } 
        
        
           foreach ($array as $value) {
                echo $value . '<br>';
           }
        }
        sort_2way($num, TRUE);

        sort_2way($num, FALSE);
        ?>
    </p>
</body>
</html>