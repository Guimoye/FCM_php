<?php



    $conn   = new mysqli("localhost", "root", "", "notifications");
    $dni    = $_REQUEST['dni'];
    $titulo = $_REQUEST['titulo'];
    $cuerpo = $_REQUEST['cuerpo'];
    $sql = "SELECT token FROM tabla where dni = '$dni'";
    $result = $conn->query($sql);
    $tokens = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tokens[] = $row["token"];
        }

        $conn->close();
        send_notification ($tokens[0],$titulo,$cuerpo);
    }else{
        echo 'dni no existe';
    }



function send_notification($token,$titulo,$cuerpo)
{
  //  echo 'Hello';
    define( 'API_ACCESS_KEY', 'AAAAIvrxoww:APA91bGcoNsQVfSuCeWubYmBU_NjV0Cy5h05Trjr_6XDvQZqpd_2mQZrtqPL_TkhBo2K_VXoSpNJxdP-aytb70DsyZauq-51vdC5j-BlbYbaBL18D---ZizxUDJS-zGxMAbG2q8qWIjn');
    //   $registrationIds = ;
#prep the bundle
    $msg = array
    (
        'body' 	=> $cuerpo,
        'title'	=> $titulo,

    );


    $fields = array
    (
        'to'		=> $token,
        'notification'	=> $msg
    );


    $headers = array
    (
        'Authorization: key=' . API_ACCESS_KEY,
        'Content-Type: application/json'
    );
#Send Reponse To FireBase Server
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
    $result = curl_exec($ch );
   // echo $result;
    echo 'notificacion enviada con exito';
    curl_close( $ch );
}
?>