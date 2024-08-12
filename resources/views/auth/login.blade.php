<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}">
            @error('username')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Sign up here</a></p>
</body>
</html>