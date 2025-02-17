<?php


trait setMsg {
    public function alertMessage($message)
    {
        return "
            <div
                style='background-color: #f5c3c3;border: red solid 1px;color: red;border-radius: 4px;padding: 6px;margin: 4px'>
                $message
            </div>
        ";
    }
}

class login{
    use setMsg;
}


$login = new login();
echo $login->alertMessage('Hello Melorient');