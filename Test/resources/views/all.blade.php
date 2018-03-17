<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Exercise</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Actions</th>
      </tr>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="/user/{{ $user->id }}">Detail</a></td>
        <td><a href="/user/delete/{{ $user->id }}">Delete</a></td>
        <td><a href="/user/edit/{{ $user-> id }}">Edit</a></td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
