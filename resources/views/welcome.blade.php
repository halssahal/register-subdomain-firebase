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
                    <span class="fs-4">{{ __('test.sign_up') }}</span>
                </header>

                <div class="card">
                    <div class="card-header text-center">
                        <a href="{{ route('test.set-locale', 'en') }}" class="btn btn-primary">English</a>
                        <a href="{{ route('test.set-locale', 'id') }}" class="btn btn-primary">Indonesia</a>
                        <a href="{{ route('test.set-locale', 'es') }}" class="btn btn-primary">Spain</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('test.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">{{ __('test.full_name') }}</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('test.email') }}</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('test.subdomain') }}</label>
                                <input type="text" class="form-control" name="subdomain">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('test.password') }}</label>
                                <input type="text" class="form-control" name="password">
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">{{ __('test.save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
