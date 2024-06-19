<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
</head>
<body>
    @include('navbar')
    <div class="content">
        <h1>My Hobbies</h1>
        <ul>
            @foreach ($data['hobbies'] as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
