
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!—Add your CSS here 
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email:</label>
                <input id="email" type="email" name="email"value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div>
                <button type=  "submit ">Login</button>
            </div>
        </form>

        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</body>
</html>
 
