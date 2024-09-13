<h1> Register</h1>
<form method="POST"action=
"{{route('register'}}">

@csrf
<label >Name:</label>
<input type="text" name="name"><br><br>
<label for="">Email:</label>
<input type="email" name="email"><br><br>
<label >Password:</label>
<input type="password"  name="password"><br><br>
<input type="submit" value="Register">


</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!—Add your CSS here 
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}”>
            @csrf

            <div>
                <label for="name”>Name:</label>
                <input id="name"type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div>
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input id="password"type="password" name="password"required>
            </div>

            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input id="password_confirmation"type="password" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>

        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </div>
</body>
</html>


