<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($order){
          $nums = [15, 4, 18, 23, 10 ];

          $array = sort($nums);
          if($order === true){
            echo "昇順にソートします。<br>";
            foreach($nums as $key => $value){
              echo "{$value}<br>";
            }
          }

          $array = rsort($nums);
          if($order === ""){
            echo "降順にソートします。<br>";
            foreach($nums as $key => $value){
              echo "{$value}<br>";
            }
          }
        }

        echo sort_2way(true);
        echo sort_2way("");
        ?>
    </p>
</body>

</html>