<?php
require_once '../votes.class.php';
/**
* Admin class for DataBase
*/
class Admin extends Votes
{
  public function loginAdmin($username, $pasword)
  {
    $hash = hash('whirlpool', $pasword);
    $query = "SELECT * FROM admin WHERE username LIKE '$username' AND password LIKE '$hash';";
    try {
      $statement = $this->DB->prepare($query);
      $statement->execute();
      $rows = $statement->fetchAll();
      foreach ($rows as $elem) {
        if ($elem['username']) {
          return true;
        }
      }
      return false;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function addViewer($username, $pasword)
  {
    $hash = hash('whirlpool', $pasword);
    $query = "INSERT INTO viewers(username, password) VALUES('$username', '$hash');";
    try {
      $statement = $this->DB->prepare($query);
      $statement->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function addStudents($students)
  {
    $query = "INSERT INTO students(login) VALUES(:student);";
    $statement = $this->DB->prepare($query);
    try {
      foreach ($students as $elem) {
        $statement->bindParam(':student', $elem);
        $statement->execute();
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function reset()
  {
    $query = "TRUNCATE TABLE votes; TRUNCATE TABLE viewers; TRUNCATE TABLE students;";
    $statement = $this->DB->prepare($query);
    try {
      $statement->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

  }
}
?>
