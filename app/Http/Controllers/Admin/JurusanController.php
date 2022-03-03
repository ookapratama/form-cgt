<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->title = 'jurusan';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $title = $this->title;
        return view('admin.' . $title . '.index', compact('title'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $title = $this->title;
        $data = Jurusan::where('status',1)->when($request->input('cari'), function ($query) use ($request) {
            $query->where('name', 'like', "%{$request->input('cari')}%")
                ->orWhere("username", "like", "%{$request->input('cari')}%")
                ->orWhere("role", "like", "%{$request->input('cari')}%");
        })
            ->paginate($jml);
        $view = view('admin.' . $this->title . '.data', compact('data', 'title'))->with('i', ($request->input('page', 1) -
            1) * $jml)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view,
        ]);
    }

    public function store(Request $request)
    {
        $model = $request->all();
        $model['status']=1;;
        $data = Jurusan::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Jurusan::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Jurusan::find($model['id']);
        $data = $data->update($model);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Jurusan::where('id',$id)->update([
            'status'=>0,
        ]);
        return response()->json($data);
    }
}
