<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Plan Quotation</title>

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
    My name is {{ $dataReceived['name'] }}, I am kindly requesting for a {{ $dataReceived[1]->name }} quotation: </p>
    <br>
    <table style="line-height: 28px; padding: 15px;">
        <tr>
            <td><strong>House Area (square metres): </strong></td>
            <td>{{ $dataReceived[0]->area }} -  square metres</td>
        </tr>
        <tr>
            <td><strong>Number of Bedrooms: </strong></td>
            <td>{{ $dataReceived[0]->bedrooms }} - bedrooms</td>
        </tr>
        <tr>
            <td><strong>Number of bathrooms: </strong></td>
            <td>{{ $dataReceived[0]->bathrooms }} - bathrooms</td>
        </tr>
        <tr>
            <td><strong>Number of garages: </strong></td>
            <td>{{ $dataReceived[0]->garages }} - garages</td>
        </tr>
    </table>
    <p><strong>Description:</strong> {{ $dataReceived['description'] }}</p>
    <br>
    <p>You may contact me on this number: {{ $dataReceived['phone'] }}
    <br>
     Thank You</p>
    <br>
    </div>
</body>

</html>
