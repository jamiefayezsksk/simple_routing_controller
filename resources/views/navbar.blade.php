<style>
    body {
        font-family: Arial, sans-serif;
    }
    .navbar {
        overflow: hidden;
        background-color: #333;
    }
    .navbar a {
        float: left;
        display: inline-block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        transition: background-color 0.3s;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-right: 5px; /* Add margin to separate buttons */
    }
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    .content {
        padding: 20px;
    }
</style>
<div class="navbar">
    <a href="{{ route('about.me') }}" class="button">About Me</a>
    <a href="{{ route('skills') }}" class="button">Skills</a>
    <a href="{{ route('hobbies') }}" class="button">Hobbies</a>
</div>
