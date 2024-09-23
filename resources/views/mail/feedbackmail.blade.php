<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Feedback</title>

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
    My name is {{ $dataReceived['first'] }} {{ $dataReceived['last'] }}, I am kindly requesting for your information in youe organisation, please contact me </p>
    <br>
    <table style="line-height: 28px;">
        <tr>
            <td><strong>Email: </strong></td>
            <td>{{ $dataReceived['email'] }}</td>
        </tr>
        <tr>
            <td><strong>Message: </strong></td>
            <td>{{ $dataReceived['message'] }}</td>
        </tr>
    </table>
    <br>
     Thank You</p>
    <br>
    </div>
</body>

</html>
