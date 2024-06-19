<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
</head>
<body>
    @include('navbar')
    <div class="content">
        <h1>My Skills</h1>
        <p><strong>Edge:</strong> {{ $data['edge'] }}</p>
        <p><strong>Description:</strong> {{ $data['description'] }}</p>
        <p><strong>Additional Skills:</strong></p>
        <ul>
            @foreach ($data['additional_skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>