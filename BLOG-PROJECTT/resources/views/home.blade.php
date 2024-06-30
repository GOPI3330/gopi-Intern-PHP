<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>HOMEPAGE</title>
</head>

<body>
<div class="header">
  <a href=" #default " class="logo">BLOG SITE</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="http://127.0.0.1:8000/home/create">Create</a>
    <a href=http://127.0.0.1:8000/home/views>Views</a>
  </div>
</div>
<div style="padding-left:20px">
  <h1>WELCOME TO OUR BLOGSITE</h1>
  <h3>Create your first Blog here!</h3>
  <!-- <a   href="{{ route('home.create') }}">Create</a> -->
  <a href="{{ route('home.create') }}"><button>Create</button></a>

</div>
</body>
</html>
