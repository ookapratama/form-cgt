<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formulir;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function __construct()
    {
        $this->title = 'pembayaran';
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
        $data = Formulir::where('status',2)->orderBy('no_tes')->when($request->input('cari'), function ($query) use ($request) {
            $query->where('nik', 'like', "%{$request->input('cari')}%")
                ->orWhere("nama", "like", "%{$request->input('cari')}%")
                ->orWhere("no_formulir", "like", "%{$request->input('cari')}%");
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
        $data = Formulir::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Formulir::where('id',$id)->first();
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Formulir::where('id',$model['id'])->first();
        $model['user_id'] = auth()->user()->id;
        $model['status'] = 2;
        $data = $data->update($model);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Formulir::find($id)->delete();
        return response()->json($data);
    }
    public function membayar($id)
    {
        $data = Formulir::where('id',$id)->first();
        $banyak =Formulir::max('no_tes');
        if(is_null($banyak)){
            $model['no_tes']=1;
        }else{
            $model['no_tes']=$banyak+1;
        }
        $model['ruangan']=$model['no_tes']/21+1;
        $model['user_id'] = auth()->user()->id;
        $model['status'] = 2;
        $data = $data->update($model);
        return response()->json($data);
    }
}
