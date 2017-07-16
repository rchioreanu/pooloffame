<?php
require_once '../votes.class.php';

class Users extends Votes
{
    public function login($username, $passwd)
    {
        $password = hash('whirlpool', $passwd);
        $query = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password';";
        try {
            $statement = $this->DB->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll();
            foreach ($rows as $elem) {
                if ($elem['username'])
                    return TRUE;
                else
                    return FALSE;
            }
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    private function printProfile($login, $category)
    {
        switch ($category) {
        case 'sleeper':
            $title = "The sleeper";
            break;
        case 'thinker':
            $title = "The thinker";
            break;
        case 'solution':
            $title = "The solution oriented";
            break;
        case 'energy':
            $title = "Bundle of energy";
            break;
        case 'team':
            $title = "Best team player";
            break;
        case 'serious':
            $title = "He has a serious face";
            break;
        case 'beautiful':
            $title = "She has a beautiful smile";
            break;
        case 'coffee':
            $title = "The coffee drinker";
            break;
        case 'player':
            $title = "Player of the week";
            break;
        case 'hard':
            $title = "The hard worker";
            break;
        default:
            $title = "The most active";
            break;
        }
        echo '
            <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader" style="background-image: \'\'">
                <a href="https://cdn.intra.42.fr/users/medium_'.$login.'.jpg" download="'.$login.'"><img src="https://cdn.intra.42.fr/users/medium_'.$login.'.jpg" /></a>
                </div>
                <div class="info">
                    <div class="title">
                        '.$title.'
                    </div>
                    <div class="desc">'.$login.'</div>

                </div>
            </div>
        </div>
        ';
    }
    public function getRanking($category)
    {
        $query = "SELECT $category, COUNT(*) AS occurrences
            FROM votes
            GROUP BY $category
            ORDER BY occurrences DESC;";
        try {
            $statement = $this->DB->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll();
            foreach ($rows as $elem) {
                $this->printProfile($elem[$category], $category);
                return ;
            }
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
