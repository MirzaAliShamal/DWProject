<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ProducerRegisterNotification;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Controller;
use App\Models\ProducerProfile;
use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use Hash;
use Str;

class ProducerController extends Controller
{
    public function list()
    {
        $list = ProducerProfile::orderBy("id", "DESC")->get();
        return view('admin.producer.list', get_defined_vars());
    }

    public function add()
    {
        return view('admin.producer.add', get_defined_vars());
    }

    public function edit($id = null)
    {
        $prod = ProducerProfile::find($id);
        return view('admin.producer.edit', get_defined_vars());
    }

    public function save(Request $req, $id = null)
    {
        $req->validate([
            'company_name' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
        ]);

        if (is_null($id)) {

            $password = Str::random(8);

            $user = User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($password),
                'role' => 'producer',
            ]);

            $prod = new ProducerProfile();
            $prod->user_id = $user->id;
            $prod->company_name = $req->company_name;
            $prod->phone = $req->phone;
            $prod->address = $req->address;
            $prod->save();

            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['password'] = $password;

            $user->notify(new ProducerRegisterNotification((object)$data));

            $msg = "Producer created successfully";
        } else {

            $prod = ProducerProfile::find($id);
            $prod->company_name = $req->company_name;
            $prod->phone = $req->phone;
            $prod->address = $req->address;
            $prod->save();

            $user = $prod->user;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->save();

            $msg = "Producer details updated successfully";
        }

        return redirect()->route('admin.producer.list')->with('success', $msg);
    }

    public function delete($id = null)
    {
        ProducerProfile::find($id)->delete();
        return redirect()->route('admin.producer.list')->with('success', 'Producer Deleted Successfully!');
    }
}
