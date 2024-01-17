<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../styleLogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form Using HTML And CSS Only</title>
</head>
<body>
	<div class="container" id="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
		<div class="form-container log-in-container">
			<form action="{{ route('user.login') }}" method="POST">
                @csrf
				<h1 style="margin-bottom: 4%">Login Staff</h1>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                placeholder="Email">
				<input type="password" class="form-control" name="password" id="password"
                            placeholder="password">
				<button type="submit">Log In</button>
                <a href="" style="color: blue">kembali</a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
				</div>
			</div>
		</div>
	</div>
</body>
</html>