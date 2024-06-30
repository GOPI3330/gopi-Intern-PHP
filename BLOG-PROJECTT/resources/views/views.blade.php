<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/views.css">
    <title>VIEW PAGE</title>
</head>
<body>
 <div class="header">
  <a href=" #default " class="logo">BLOG SITE</a>
  <div class="header-right">
    <a class="active" href="http://127.0.0.1:8000/home">Home</a>
    <a href="http://127.0.0.1:8000/home/create">Create</a>
    <a href="">Views</a>
  </div>
 </div>
    @if(session()->has('Blog Created Successfully!!!'))
    <div class="alert alert-success">
        {{session()->get('Blog Created Succesfully !!!')}}
    </div>
    @endif

    @foreach($blog as $key => $blog1)
    
        <h1>{{ $blog1->title }}</h1><br>
        <p>{{ $blog1->description }}</p><br>


    @endforeach
    {{$blog->links()}}

    <a href="{{ route('home.home') }}"><button>Back</button></a>
</body>
</html>