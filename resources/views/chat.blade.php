<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
    <style>
        .card-body{
            height: 240px;
            overflow-y: scroll;
        }
        body{
            background: #ccc;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5" id="app">
            <div class="card-header">
                Chat  Room
            </div>
        	<div class="card-body">
        		<message v-for="message in chat.message">
                    @{{ message }}
                </message>

            </div>
            <div class="card-footer">
                <input  type="text" class="form-control " name="text" v-model="message" @keyup.enter="send">
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>
