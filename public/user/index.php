<?php

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var ?string
     */
    private $email;

    /**
     * @var ?string
     */
    private $birthday;

    /**
     * @var ?string
     */
    private $password;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}



$db = new PDO('mysql:host=localhost;dbname=itc', 'root', '');
$query = 'SELECT * FROM user';
$i=0;
foreach ($db->query($query, PDO::FETCH_CLASS, 'User') as $resultRow) {
    echo "<h1>". (++$i) . ". Datensatz</h1>";
    //storeDummy($resultRow);
    echo "<ul>";
    echo "<li>" . $resultRow->getId() . "</li>";
    echo "<li>" . $resultRow->getName() . "</li>";
    echo "<li>" . $resultRow->getFirstname() . "</li>";
    echo "<li>" . $resultRow->getEmail() . "</li>";
    echo "<li>" . $resultRow->getBirthday() . "</li>";
    echo "</ul>";
}

function storeDummy(User $user)
{
    echo "Store User #" . $user->getId();
}
