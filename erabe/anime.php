<?php
  class anime{
    private $id;
    private $name;
    private $synopsis;
    private $rating;
    private $picPath;
    private $resultArray;

    function __construct($id,$name,$synopsis,$rating,$picPath){
      $this->id = $id;
      $this->name = $name;
      $this->synopsis = $synopsis;
      $this->rating = $rating;
      $this->picPath = $picPath;
    }

    public function getId(){

      return $this->id;

    }
    public function getName(){

      return $this->name;

    }

    public function getSynapsis(){

      return $this->synapsis;

    }

    public function getRating(){

      return $this->rating;

    }

    public function getPic(){

      return $this->picPath;

    }
  }

  $anAnime = new anime('1','cow','words','3','pic.jpg');
  echo($anAnime->getId());
?>
