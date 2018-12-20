<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<h1>User profile page</h1>
Content of the document......
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</body>

</html>