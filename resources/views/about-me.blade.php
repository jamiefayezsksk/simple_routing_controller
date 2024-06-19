<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>
<body>
    @include('navbar')
    <div class="content">
        <h1>About Me</h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Birthdate:</strong> {{ $data['birthdate'] }}</p>
        <p><strong>Age:</strong> {{ $data['age'] }}</p>
    </div>
</body>
</html>