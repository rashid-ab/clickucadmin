<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "purify";
$servername = "localhost";
$username = "u109931872_clicky";
$password = "Clickuc2021";
$dbname = "u109931872_clicky";
date_default_timezone_set("Europe/Stockholm");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$users = "SELECT * from users WHERE device_token!='' AND  silver_limit!='100' AND  golden_limit!='50' AND  platinum_limit!='30'";
// $update = "UPDATE users SET silver_limit='100',golden_limit='50',platinum_limit='30'";
$users_results = $conn->query($users);
$userss = $conn->query($update);
$users_token=array();
if ($users_results->num_rows > 0) {
 while($selected_orders = $users_results->fetch_assoc()) {
        unset($users_token);
        $users_token[]= $selected_orders['device_token'];
        $title ="Wow! Your  Crate Limit is Renew Now";
        $body =  "Go to the App and Earn your UC";
        echo   send_push($title, $body, $users_token);
    }

}
else{echo 'no';}


 function send_push($title , $body ,$tokens)
    {
        // return $tokens;

        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        //Custom data to be sent with the push
        
        $data = array
            (
                'message'      => 'here is a message. message',
                'title'        => $title,
                'body'         => $body,
                'smallIcon'    => 'small_icon',
                'some data'    => 'Some Data',
                'Another Data' => 'Another Data',
                'click_action' => 'OPEN_ACTIVITY',
                'sound'=>'default'

            );

        //This array contains, the token and the notification. The 'to' attribute stores the token.
        $arrayToSend = array(
                             'registration_ids' => $tokens,
                             'notification' => $data,
                             'data' => $data2,
                             'priority'=>'high'
                              );

        //Generating JSON encoded string form the above array.
        $json = json_encode($arrayToSend);
        //Setup headers:
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $headers[] = 'Authorization: key= AAAAuAma-80:APA91bEm160o7dHP9wsiHf67ntA9D6l6v9b--CCNnHuDR2zSC-KypYnAP-Xph1PDQFbDeFD-yPw65O4vzx2lSDUoE08YReRRu1xdU4L6jpqvJ_DhbQ7Mg-KfxS8t5xiwCNs1ymzxrSpO';


        //Setup curl, add headers and post parameters.

        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

        //Send the request
        $response = curl_exec($ch);

        //Close request
        curl_close($ch);
        return $response;

        // echo $response;

    }

?>
