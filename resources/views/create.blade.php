<!DOCTYPE html>
<html>
<body>

<h2>Text field</h2>
<p>The <strong>input type="text"</strong> defines a one-line text input field:</p>

<form action="/user/save" method="POST">
{{csrf_field()}}
Name:<br>
<input type="text" name="name">
<br><br>
Email Address:<br>
<input type="email" name="email" autocomplete="off">
<br><br>
Password:<br>
<input type="password" name="password" autocomplete="off">
<br>
<input type="submit">
</form>

<p>Note that the form itself is not visible.</p>
<p>Also note that the default width of a text field is 20 characters.</p>

</body>
</html>