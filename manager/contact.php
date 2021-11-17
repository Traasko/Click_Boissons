<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';


class Manager{
    public function contact($donnee){
      $bdd = new PDO ('mysql:host=localhost;dbname=click_boissons; charset=utf8','root', '');
      $req = $bdd->prepare('INSERT into contact (nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)');
      $req -> execute(array(
        'nom'=>$donnee->getnom(),
        'email'=>$donnee->getemail(),
        'sujet'=>$donnee->getsujet(),
        'message'=>$donnee->getmessage()));
        $a = $req->fetchall();

      if (isset($_POST['nom']) && isset($_POST['email'])) {
        $nom     = $_POST['nom'];
        $email   = $_POST['email'];
        $sujet   = $_POST['sujet'];
        $message = $_POST['message'];

      $mail = new PHPMailer();
      $mail->SMTPDebug  = 2 ; //SMTP::DEBUG_SERVER
      $mail->isSMTP();
      $mail->Host       ='mail.gandi.net';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'contact@click-boissons.fr';
      $mail->Password   = 'Clickboissons@95';
      $mail->SMTPSecure = 'ssl';
      $mail->Port       = 465;

      $mail->CharSet = "utf-8";
      $mail->setFrom($email, $nom);
      $mail->addAddress('contact@click-boissons.fr');
      $mail->addReplyTo($donnee->getemail());

      $mail->isHTML(true);
      $mail->Subject = $sujet;
      $mail->Body    = $message;

      if(!$mail->Send()) {
        header("location: ../view/contact.php?msg=2'");;
      } else {
       header("location: ../view/contact.php?msg=1");;
      }
    }
  }
}


?>
