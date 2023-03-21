<?php
// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the user's name and email from the form data
        $name = $_POST["name"];
        $email = $_POST["email"];
   
    // Create a new instance of the Person class
    $person = new Person();

    // Set the name and email properties of the Person object
    $person->setName($name);
    $person->setEmail($email);


    // Display the name and email properties on the webpage
    echo "<p>Name: " . $person->getName() . "</p>";
    echo "<p>Email: " . $person->getEmail() . "</p>";
} 

// Define the Person class
class Person
{
    private $name;
    private $email;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
};
?>
