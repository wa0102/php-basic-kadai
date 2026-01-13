<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    class Food{
      private $name;
      private $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      public function show_price(){
        echo $this->price . "<br>";
      }
    }

    $Price = new Food("カレー", 500);

    print_r($Price->show_price());
    ?>
  </p>
  <p>
    <?php
    class Animal{
      private $name;
      private $height;
      private $weight;
      
      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height(){
        echo $this->height . "<br>";
      }
    }

    $Height = new Animal("犬", 1, 1);

    print_r($Height->show_height());
    ?>
  </p>
</body>

</html>
