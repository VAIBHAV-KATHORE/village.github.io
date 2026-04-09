<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center" style="height:100vh">

    <div class="card p-4 col-md-4">
        <h5 class="text-center">Forgot Password</h5>

        <form method="POST" action="forgot_process.php">
            <input type="email" name="email" class="form-control mb-3" placeholder="Registered Email" required>
            <button class="btn btn-warning w-100">Send OTP</button>
        </form>
    </div>

</body>

</html>