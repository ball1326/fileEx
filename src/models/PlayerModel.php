<?php
class PlayerModel
{
    private string $host = '';
    private string $user = '';
    private string $pass = '';
    private string $db = '';
    private $condb;

    function __construct(object $conf)
    {
        $this->host = $conf->host;
        $this->user = $conf->user;
        $this->pass = $conf->pass;
        $this->db = $conf->db;
    }
    public function checkAndInserter(): void
    {
        $this->connect();
        $sql = "SELECT 1 FROM football_player LIMIT 1";
        try {
            $this->condb->exec($sql);
        } catch (PDOException $e) {
            // create table
            $sql = "CREATE TABLE football_player (
                identifier INT(6) UNSIGNED  PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                team VARCHAR(50)  NOT NULL,
                position VARCHAR(50)  NOT NULL, 
                image_url VARCHAR(250)  NOT NULL );";
            $this->condb->exec($sql);
            // add data form json
            $json = json_decode(file_get_contents(__DIR__ . '/playerlist.json'));
            for ($i = 0; $i < count($json); $i++) {
                $_sql = "";
                $identifier = $json[$i]->identifier;
                $first_name = $json[$i]->first_name;
                $last_name = $json[$i]->last_name;
                $team = $json[$i]->team;
                $position = $json[$i]->position;
                $image = $json[$i]->image;
                $_sql = "INSERT INTO `football_player` (`identifier`, `firstname`, `lastname`, `team`, `position`, `image_url`) VALUES( ?,?,?,?,?,? );";
                $query = $this->condb->prepare($_sql);
                $query->execute([$identifier, $first_name, $last_name, $team, $position, $image]);

            }

        }
    }
    public function connect(): void
    {
        try {
            $this->condb = new PDO("mysql:host=$this->host;dbname=$this->db;", $this->user, $this->pass);
            // set the PDO error mode to exception
            $this->condb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function close_db()
    {
        $this->condb = null;
    }
    public function insertPlayer(array $dataArray): bool
    {
        $this->connect();
        $sql = " INSERT INTO `football_player` (`identifier`, `firstname`, `lastname`, `team`, `position`, `image_url`)";
        $sql .= " VALUES (null, :firstname, :lastname, :team,:position , :image_url);";
        $query = $this->condb->prepare($sql);
        if($query->execute($dataArray)){
            return true;
         }else{
            return false;
    }
        
        
        
    }
    public function updatePlayer($dataArray)
    {
        // $sql = "UPDATE `football_player` SET 
        // `firstname` = :firstname,
        // `lastname` = :lastname,
        // `team` = :team,
        // `position` = :position,
        // `image_url` = :image_url";
        // $sql .= " WHERE `football_player`.`identifier` = :identifier";
    }
    public function deletePlayer($identifier): bool
    {
        
        // $sql = "DELETE FROM football_player WHERE `football_player`.`identifier` = " . $identifier . " ;";
        return true;
    }
    public function getPlayer($identifier)
    {
        // $sql = "SELECT * FROM `football_player` WHERE `identifier` = " . $identifier;
    }
    public function getAllPlayer()
    {
        $this->connect();
        $sql = "SELECT * FROM `football_player` ORDER BY `football_player`.`identifier` DESC";
        $query = $this->condb->prepare($sql);
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }

    }
}

?>