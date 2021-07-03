<?php



class Message
{
  private $message;
  public function __construct($message)
  {
    $this->message = $message;
  }
}

class Connection
{
  public function disconnect()
  {
    echo  "Disconnection";
  }
}


class Authentication
{
  public function authenticate($authToken)
  {
    echo  "Authentication view $authToken";
  }
}


class Notification
{
  public function connect($ip)
  {
    return new Connection(); 
  }

  public function authenticate($authToken)
  {
    return new Authentication();  
  }

  public function send(Authentication $authToken,Message $message,$target)
  {
     echo "Sending Message to $target";
  }
}


class NotificationFacade
{
  public static function send($message,$target)
  {
    $obj = new Notification();
    $connection = $obj->connect("ipAddress");
    $auth = $obj->authenticate("authToken");
    $message = new Message(message);
    $obj->send($auth,$message,$target);
    echo PHP_EOL;
    $connection->disconnect();
  }
}


NotificationFacade::send("Hello","shakilfci461@gmail.com");
