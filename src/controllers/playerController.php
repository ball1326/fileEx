<?php

include_once('./models/PlayerModel.php');
include_once('./conf/conf.php');

class PlayerController
{
  private $playerModel;
  private $conf;

  function __construct()
  {
    $this->conf = new Config();
    $this->playerModel = new PlayerModel($this->conf);
  }
  public function pageRedirect($url)
  {
    header("location:" . $url);
    exit(0);
  }
  public function indexView()
  {
    $json = $this->playerModel->getAllPlayer();
    $result = json_decode($json);
    // print_r($result);
    include('./views/listView.php');
  }
  public function insert()
  {
  try{
    if(isset($_POST['btnadd'])){
      $dataArrar=array();
      $dataArrar['firstname'] = $_POST['firstname']; 
      $dataArrar['lastname'] = $_POST['lastname']; 
      $dataArrar['team'] = $_POST['team'] ;
      $dataArrar['position'] = $_POST['position']; 
      $dataArrar['image_url'] = $_POST['image'];
      // upload image
      $target_dir ="./public/images/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]) ;
      $upLoadOK = 1;
      $imagefileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      //check check aLready exists
      if(file_exists($target_file)){
        echo "5555555";
        $upLoadOK = 0;
      }

      if($_FILES['image']['size'] > 100000000000000){
        echo"เขาไม่ชอบมึง";
        $upLoadOK = 0;
      }

      if(
        $imagefileType != "jpg" &&
        $imagefileType != "png" &&
        $imagefileType != "jpeg" &&
        $imagefileType != "gif" 
      ){
        echo"=v[g-kc9jg-kw,j=v[gik";
        $upLoadOK = 0;
      }
      //!check state
      if($upLoadOK == 0){
        echo"l^hq8iy[";
      }else{
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
          $dataArrar['image_url'] = htmlspecialchars(basename($_FILES['image']['name']));
        }else{
          echo"ชอบ2Dครับ";
        }
      }
      $insert = $this->playerModel->insertPlayer($dataArrar);
      if($insert == true){
        $this->pageRedirect('./index.php');
      }else{
        echo"ชอบเพลงเศร้า";
      }
    }
  }catch(Exception $error){
    echo $error;
  }
  }
  public function update()
  {
    // $this->pageRedirect("./views/updatePlayer.php");
    // include('./views/updatePlayer.php');

  }
  public function delete()
  {

  }
  public function mvcHandler()
  {
    $playerRounter = isset($_GET['playerRout']) ? $_GET['playerRout'] : NULL;

    switch ($playerRounter) {
      case 'add':
        $this->insert();
        break;
      case 'update':
        $this->update();
        break;
      case 'delete':
        break;
      default:
        $this->indexView();

    }
  }

}

?>