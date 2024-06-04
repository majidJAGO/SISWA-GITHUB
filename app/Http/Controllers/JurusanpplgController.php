<?php

namespace App\Http\Controllers;
use App\Models\Jurusanpplg;
use App\Models\Poins;
use Illuminate\Http\Request;

class JurusanpplgController extends Controller
{
    public function index(){
        $jurusanpplg = Jurusanpplg::all();
        //dd($jurusanpplg);
        return view ('siswapplg.index', compact('jurusanpplg'));
    }
    public function create(){
        return view ('siswapplg.create');
    }
    public function store(Request $request){
        // $newName = '';

        // if($request->file('foto_siswa')){
        //     $extension = $request->file('foto_siswa')->getClientOriginalExtension();
        //     $newName = $request->nama.'.'.now()->timestamp.'.'.$extension;
        //     $request->file('foto_siswa')->storeAs('foto_siswa', $newName);
        // }
        // $request->file('foto_siswa')->store('photo');
        // $request['foto_siswa'] = $newName;

        // $request->validate([
        //     'foto_siswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
   
        // $input = $request->all();
   
        // if ($image = $request->file('foto_siswa')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['foto_siswa'] = "$profileImage";
        // }
        
        Jurusanpplg::create ($request->except(['_token','submit']));
        return redirect('/jurusanpplg');
        // dd($request->except(['_token','submit']));

    } 
    public function edit($id){
        $jurusanpplg = Jurusanpplg::find($id);
        //dd($jurusanpplg);
        return view('siswapplg.edit', compact('jurusanpplg'));
    }
    public function update($id, Request $request){
        $jurusanpplg = Jurusanpplg::find($id);
        $jurusanpplg->update($request->except(['_token','submit']));
        return redirect('/jurusanpplg');
    }
    public function destroy($id){
        $jurusanpplg = Jurusanpplg::find($id);
        $jurusanpplg->delete();
        return redirect('/jurusanpplg');
    }
    public function coba(){
        $jurusanpplg = Jurusanpplg::all();
        // dd($jurusanpplg);
        return view('coba', compact('jurusanpplg'));
    }

    public function doPoint(Request $request) {
        $validated = $request->validate([
            'riwayat' => 'required'
        ]);

        $validated['user_id'] = $request->user_id;

        Poins::create($validated);

        return redirect('biodata/' . $request->user_id);
    }

    public function aplikasi(){
        $jurusanpplg = Jurusanpplg::all();
        //dd($jurusanpplg);
        return view ('aplikasi', compact('jurusanpplg'));
    }

    public function biodata2(){
        $jurusanpplg = Jurusanpplg::all();
        //dd($jurusanpplg);
        return view ('biodata2', compact('jurusanpplg'));
    }

    public function biodata($id, Request $request)      
    {
        $jurusanpplg = Jurusanpplg::find($id);
        $points = Poins::where('user_id', $jurusanpplg->id)->get();
        return view ('biodata', compact(['jurusanpplg', 'points']));

    }
    public function cobaweb($id, Request $request)      
    {
        $jurusanpplg = Jurusanpplg::find($id);
        return view ('coba', compact(['jurusanpplg']));

    }
    public function cari(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Jurusanpplg::where('nama', 'LIKE', "%{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
            $output .= '
            <li><a href="/biodata/'.$row->id.'">'.$row->nama.'</a></li>
            ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }  
    // public function coba($id)
    // {
    //     $jurusanpplg = Jurusanpplg::where('id', $id)->get();
    //     return $jurusanpplg;
    // }
}
