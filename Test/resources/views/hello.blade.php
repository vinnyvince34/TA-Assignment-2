<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form method="POST" action="/register">
    {{ csrf_field() }} 
    <br>
    <input type="text" name="name" placeholder="name" required><br />
    <input type="email" name="email" placeholder="email" required><br />
    <input type="password" name="password" placeholder="password" required><br />
    <button type="submit">Submit</button>
  </form>
</body>
</html>
