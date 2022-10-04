<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Login</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
    <script src="jquery.md5.js"></script>

</head>

<body>
    <div class="d-flex" style="height: 100vh;">
        <div class="col-4 mx-auto my-auto">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <div class="col-12">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-12">
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-12">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <hr class="mt-4">
                    <div class="float-right">
                        <a href="javascript:void(0)" class="btn btn-primary" onclick="processLogin()">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function processLogin() {
            const username = $('#username').val();
            const password = $.md5($('#password').val());
            console.log(password);
            $.ajax({
                method: "POST",
                url: "loginProcess.php",
                data: { username: username, password: password },
                success: function(data) {
                    if(data == 'success') {
                        alert("Login Successfull!")
                    } else {
                        alert("Login Failed!");
                    }
                }
            });
        }
    </script>
</body>

</html>