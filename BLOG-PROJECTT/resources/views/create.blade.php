<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create.css">
    <title>BLOG CREATION</title>
</head>
<body>
    <div class="header">
        <a href="#default" class="logo">BLOG SITE</a>
        <div class="header-right">
            <a class="active" href="http://127.0.0.1:8000/home">Home</a>
            <a href="#create">Create</a>
            <a href="http://127.0.0.1:8000/home/views">Views</a>
        </div>
    </div>


 <form  action="{{ route('home.store') }}" method="post">
    {{ csrf_field() }}
    <div class="container">
   <h1>create your blog</h1>
   <label for="title"><b>Title</b></label><br>
   <input type="text" id="title" name ="Title" placeholder="Enter your Title" required><br><br>
   <label for="textarea"><b>Textarea</b></label><br>
   <textarea name="Textarea" id="content" rows="25" cols="90" placeholder="Start Writing here..." ></textarea><br>
   <input type="Submit" id ="create"value="Create" name="Create"></input>
   </div>
 </form>
</body>
</html>