<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class trial
{

    public $name;
    public $id;

    public function testSet($name)
    {

        $this->name = $name;
    }

    public function testGet()
    {

        return $this->name;
    }
}

$apple = new trial();
$mango = new trial();
$banana = new trial();
$orange = new trial();
$watermelon = new trial();
$dragonFruit = new trial();
$Pear = new trial();
$Peach = new trial();

$apple->testSet('apple');
$mango->testSet('mango');
$banana->testSet('banana');
$orange->testSet('orange');
$watermelon->testSet('watermelon');
$dragonFruit->testSet('dragonFruit');
$Pear->testSet('Pear');
$Peach->testSet('Peach');

echo $apple->testGet();
echo '<br>';
echo $mango->testGet();
echo '<br>';
echo $banana->testGet();
echo '<br>';
echo $orange->testGet();
echo '<br>';
echo $watermelon->testGet();
echo '<br>';
echo $dragonFruit->testGet();
echo '<br>';
echo $Pear->testGet();
echo '<br>';
echo $Peach->testGet();
echo '<br>';

?>

</body>
</html>