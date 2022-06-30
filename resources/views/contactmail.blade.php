<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALSI COLA</title>
    <style>
        strong {
            color: #df2228;
        }

        body {
            background-color: #e9e9e9;
        }

        p {
            color: #0d2445;
            font-weight: 700;
        }

        span {
            color: #df2228;
        }

        .d-flex {
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

       

        .msg {
            padding: 10px 10px;

        }
    </style>
</head>

<body>
    <div class="msg">
        <p>Contact User details: </p>
        <hr />
        <p class="d-flexes">Subject : <strong> {{ $data['subject'] }}</strong></p>
        <p class="d-flexes">Name :<strong> {{ $data['name'] }} </strong> </p>
        <p class="d-flexes">Phone : <strong> {{ $data['phone'] }}</strong></p>
        <p class="d-flexes">Email :<strong> {{ $data['email'] }}</strong></p>
        <p class="d-flexes">Message : <strong> {!! $data['message'] !!}</strong></p>
    </div>
    <div class="d-flex">
        <h5>Contact Us ALSI COLA <span>WebSite</span> </h5>
        <img src="{{ asset('img/alsi/logo.png') }}" width="75" alt="ALSI COLA" />
    </div>
</body>

</html>
