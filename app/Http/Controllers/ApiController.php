<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function myuser()
    {
        $myuser_data = MyUser::get();
        return response([
            'status' => true,
            'message' => 'Data fetched successfully',
            'data' => $myuser_data
        ], 200);

    }

    public function myuser_insert(Request $request)
    {
        $data = new MyUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();

        return response([
            'status' => true,
            'message' => 'My User data inserted succesfully',
            'data' => $data
        ], 201);
    }

    public function myuser_update(Request $request, $id)
    {
        $data = MyUser::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->update();

        return response([
            'status' => true,
            'message' => 'My User data updated successfully',
            'data' => $data
        ], 200);
    }
}
