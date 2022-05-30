<?php
 require_once(__DIR__.'/vendor/autoload.php');
   use\Mailjet\Resources;
   define('API_USER', 'fad8b18c48815b0846fc088ae2787187');
   define('API_LOGIN', '7960a6d221c12be292dbcf0a255d9863');
   $mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);

  if(empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['number'])&& !empty($_POST['message'])&& !empty($_POST['date'])&& !empty($_POST['time'])){
      $name = htmlspecialchars($_POST['surname']);
      $email = htmlspecialchars($_POST['email']); 
      $number = htmlspecialchars($_POST['number']);
      $message = htmlspecialchars($_POST['message']);
      $date = htmlspecialchars($_POST['date']);
      $time = htmlspecialchars($_POST['time']);

      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
          'Messages' => [
              [
                  'From' => [
                      'Email' => "tlatoani.moctezuma11@gmail.com",
                      'Name' => "Nosignal"
                  ],
                  'To' => [
                      [
                          'Email' => "tlatoani.moctezuma11@gmail.com",
                          'Name' => "Nosignal"
                      ]
                  ],
                  'Subject' => "Prise de rendez-vous",
                  'TextPart' => "$email, $message",
                 // 'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href=\"https://www.mailjet.com/\">Mailjet</a>!</h3><br />May the delivery force be with you!"//
              ]
          ]
      ];
      $response = $mj->post(Resources::$Email, ['body' => $body]);
      $response->success();
      echo "Email envoyé avec succès!";

      }else{
        echo "Email non valide";
      }

  }else{
     heade('Location:index.php');
     die();
  }
?>

