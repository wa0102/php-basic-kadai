<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($nums, $order){
          if($order === true){
            sort($nums);
            echo "昇順にソートします。<br>";
            foreach($nums as $key => $value){
              echo "{$value}<br>";
            }
          }else{
            rsort($nums);
            echo "降順にソートします。<br>";
            foreach($nums as $key => $value){
              echo "{$value}<br>";
            }
          }
        }

        echo sort_2way($nums = [15, 4, 18, 23, 10 ], true);
        echo sort_2way($nums = [15, 4, 18, 23, 10 ], false);
        ?>
    </p>
</body>

</html>