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
    public function setVote($voter1, $login1, $attr1)
    {
      $voter = trim($voter1);
      $login = trim($login1);
      $attr = trim($attr1);
      $query  = "INSERT INTO votes(voter, `$attr`) VALUES('$voter', '$login')
      ON DUPLICATE KEY UPDATE `$attr`='$login';";
      $statement = $this->DB->prepare($query);
      try {
        $statement->execute();
      } catch (PDOException $e) {
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
    public function getCandidates()
    {
      $query = "SELECT * FROM students WHERE 1;";
      foreach ($this->DB->query($query) as $elem) {
        echo '<option value="'.$elem['login'].'">'.$elem['login'].'</option>';
      }
    }
    public function getPhotos()
    {
      $query = "SELECT * FROM students WHERE 1;";
      try {
      foreach ($this->DB->query($query) as $elem) {
        echo '
        <div class="col-lg-3 col-sm-6">
        <div class="card hovercard">
        <div class="cardheader" style="background-image: \'\'">
        <a href="https://cdn.intra.42.fr/users/medium_'.$elem['login'].'.JPG" download="'.$elem['login'].'"><img src="https://cdn.intra.42.fr/users/medium_'.$elem['login'].'.JPG" /></a>
        </div>
        <div class="info">
        <div class="title">
        '.$elem['login'].'
        </div>

        </div>
        </div>
        </div>
        ';
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    }
}
?>
