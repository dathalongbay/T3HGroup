<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Kiểu đối tượng ( object )
    Không thể echo được kiểu mảng và kiểu đối tượng
</pre>

<?php
class Student {

    public $name;

    public $age;

    public $location;

    public function setInfo($name, $age, $location) {

        $this->age = $age;

        $this->name = $name;

        $this->location = $location;
    }

}

$an = new Student();

var_dump($an);

echo "<pre>";
print_r($an);
echo "</pre>";


?>
</body>
</html>