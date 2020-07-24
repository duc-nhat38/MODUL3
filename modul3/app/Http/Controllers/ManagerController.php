<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $listManager = Manager::all();
        // dd($listManager);
        return view("manager.task_manager", compact("listManager"));
    }
    public function create()
    {
        return view("manager.createManager");
    }
    public function store(Request $request)
    {
        // $attribute = $request->validate([
        //     "name" => "required",
        //     "phone" => "required",
        //     "email" => 'email|required',
        //     "images" => "required"
        // ]);
        
       $attribute = $request->all();

        if ($request->hasFile('images')) {
            
            $fileName = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('upload'), $fileName);
            $attribute['images'] = $fileName;
        } else {
            dd($attribute['images']);
            $attribute['images'] = "none.jpg";
        }
        Manager::create($attribute);

        return redirect()->route("manager.index");
    }
    public function edit($id)
    {
        $manager = Manager::find($id);
        return view("manager.updateManager", compact("manager"));
    }
    public function update($id)
    {
        $data = request()->validate([
            "name" => "required|min:2",
            "phone" => "required|min:10|max:10",
            "email" => 'email|required'
        ]);

        $manager = Manager::find($id);
        $manager->update($data);
        // $notification = "'Cập nhật thành công";
        notify()->success('Cập nhật thành công !');
        return redirect()->route("manager.index");
    }
    public function delete($id)
    {

        Manager::destroy($id);

        return redirect()->route("manager.index");
    }
}
