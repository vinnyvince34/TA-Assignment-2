<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use DB;

Class UserController extends Controller
{
    protected $user;

    public function __construct(UserModel $user)
    {
      $this->user =$user;
    }
    public function register(Request $request)
    {
      $user = [
        "id" => $request->id,
        "name" => $request->name,
        "email" => $request->email,
        "password" => md5($request->password)
      ];

      $user = $this->user->create($user);

      if ($user)
      {
        return "Successfully created";
      }
      else
      {
        return "Failed";
      }
    }

    public function insert($id, $name, $email, $password)
    {
      DB::table('users')->insert(
        ['id' => id,'name' => $name, 'email' => $email, 'password' => $password]
      );
    }

  public function edit($id)
	{
		$user = User::find($id);

		return View::make('user.edit', [ 'user' => $user ]);
	}

    public function update($id)
    {
      $newName = $request->input('name');
      $newEmail = $request->input('email');
      DB::update('update users set name = ?, email = ? where id = ?', [$newName, $newEmail, $id]);
    }

    public function delete($id)
    {
      $deletedUser = $this->user->find($id);
      $deletedUser->delete();
    }

    public function all()
    {
      $users = $this->user->all();
      return view("all")->with('users',$users);
    }

    public function find($id)
    {
      $user = $this->user->find($id);

      return $user;
    }


}
 ?>
