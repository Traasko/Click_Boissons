<?php
class contact {
  private $nom;
  private $email;
	private $sujet;
  private $message;

  public function __construct($nom, $email, $sujet, $message){

      $this->setnom($nom);
      $this->setemail($email);
			$this->setsujet($sujet);
      $this->setmessage($message);
}
  public function setnom($nom){
    $this->_nom = $nom;
  }
  public function setemail($email){
    $this->_email = $email;
  }

  public function setsujet($sujet){
    $this->_sujet = $sujet;
  }

  public function setmessage($message){
    $this->_message = $message;
  }

  public function getnom(){
    return $this->_nom;
  }
  public function getemail(){
    return $this->_email;
  }
  public function getsujet(){
    return $this->_sujet;
  }
  public function getmessage(){
    return $this->_message;
  }
}

?>
