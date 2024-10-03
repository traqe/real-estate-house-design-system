<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Design & Construction</title>

    <style>
        tr {
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <div style="width: 90%; background-color: #f6f6f6; border-radius: 10px; padding: 20px;">
    <div style="width: 100%; background-color: #9a0000; padding: 6px; color: white; border-radius: 15px; line-height: 10px; text-align: center">
        <h2>Vakai</h2>
    </div>
    <br>
    <p>Warm Greetings! <br><br>
    My name is {{ $dataReceived['name'] }}, I am kindly requesting for a Design & Construction quotation: </p>
    <p><strong>Description:</strong> {{ $dataReceived['description'] }}</p>
    <p>You may contact me on this number: {{ $dataReceived['phone'] }}
    <br>
     Thank You</p>
    <br>
    </div>
</body>

</html>
