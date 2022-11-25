<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Person
    {
        public $name;
        public $edad;
        public $email;
        public $cp;
        public $password;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }
    $persona1 = new Person();
    $persona1->set_name('Juan');
    // $persona2 = new Person();
    // $persona2->set_name('Pedro');

    // $lista = array($persona1, $persona2);
    var_dump($persona1);
    echo '<br>';
    var_dump('ASD');


    ?>

    <br>
    <hr>
    <div style="background-color: red;">
        <p id="js"></p>
    </div>
    <script>
        var x = "5";
        var y = 6;
        var z = x + y;
        document.getElementById('js').innerHTML = z;
        var x = "5";
        var y = 6;
        var z = x + y;
        document.write("The value of z is: " + z);
    </script>




</body>

</html>