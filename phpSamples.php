// A simple example of a class
class User {
    public $name;
    public $age;


public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
}

}


// An example of an if-else statement
if ($user->age > 18) {
    echo "Welcome!";
} else {
    echo "Sorry, you must be 18 or older to enter.";
}


// An example of a switch statement
switch ($user->name) {
    case "John":
        echo "Hello, John!";
        break;
    case "Bob":
        echo "Hello, Bob!";
        break;
    default:
        echo "Hello, stranger!";
        break;
}