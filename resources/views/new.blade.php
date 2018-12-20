I am new controller
<h1>{{$text}}</h1>
<h2>{{$message}}</h2>
<h2>
@if (Auth::check())
{{$auth->email}}
@endif
</h2>
dd($users);
