<?php
if(count($_POST)){
    $url = 'https://script.google.com/macros/s/AKfycbx5IZaAoXirj8ueO2pEyiIisxdmZtWbgwS2If_FnVaQOZOihaiAWimB-qwikOP1Fs8vXQ/exec';
    $data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
    );
    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
            'content' => http_build_query($data)
        )
    );
    $response_json = file_get_contents($url, false, stream_context_create($context));
    $response_data = json_decode($response_json);
    var_dump($response_data);
}
?>

<form action="./" method="post">
    <input type="text" name="name" placeholder="名前">
    <input type="text" name="age" placeholder="年齢">
    <button type="submit">送信</button>
</form>