<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test App</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.2.1/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container py-md-5">
        <div class="row m-auto">
            <div class="col-12">
                <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                    <span class="fs-4">Data</span>
                </header>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" disabled value="{{ $name }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" disabled value="{{ $email }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
