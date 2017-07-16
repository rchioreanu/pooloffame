<?php
class Votes
{
    private     $DB_DSN = "mysql:host=localhost;dbname=db_pooloffame";
    private     $DB_USER = "root";
    private     $DB_PASS = "123456";
    protected   $DB;

    function __construct ()
    {
        try {
            $this->DB = new PDO($this->DB_DSN, $this->DB_USER, $this->DB_PASS);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function setVote($voter, $login, $attr)
    {
        $query = "INSERT INTO votes(voter, `$attr`) VALUES('$voter', '$login')
            ON DUPLICATE KEY UPDATE $attr='$login';";
        try {
            $statement = $this->DB->prepare($query);
            $statement->execute();
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getVote($voter, $category)
    {
        $query = "SELECT `$category` FROM votes WHERE voter LIKE '$voter';";
        try {
            $statement = $this->DB->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll();
            foreach ($rows as $elem)
                return $elem[$category];
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
