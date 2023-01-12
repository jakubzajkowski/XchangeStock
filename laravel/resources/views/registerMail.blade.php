<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8"><title>xd</title>
        <style>
            div{
                text-align: center;
                margin: auto;
                width: 50%;
                padding: 1rem;
                background-color: white;
            }
            button{
                border-radius: 10px;
                background-color: orange;
                padding: 0.5rem;
                margin: auto;
                border: none;
            }
            body{
                background-color: aliceblue
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Welcome {{$name}}</h1>
            <p>Thank you for signing up for XchangeStock!</p>
            <p>Please verify your email address by clicking the button below.</p>
            <form class="form-horizontal w-100" action="http://127.0.0.1:8000/verify" method="POST">
                @csrf
                <input type="hidden" id="email" name="email" value="{{$email}}">
                <input type="hidden" id="verified_email" name="verified_email" value="yes">
                <button>Verify Account</button>
              </form>
            <p>Please note that unverified accounts are automatically deleted in 30 days after sign up.</p>
            <p>If you didn't request this, please ignore this email.</p>
            <hr>
            <p>Yours, XchangeStock Team</p>
        </div>    
    </body>
</html>