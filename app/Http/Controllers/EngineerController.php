<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engineer;
use Illuminate\Support\Facades\DB;

class EngineerController extends Controller
{

    public function create(Request $request) 
    { 
       return view('create');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function show()
    {
        $Engineers=Engineer::paginate(7);

        return view('show',
        ['Engineers'=>$Engineers]
    );
    }

    public function detail($id)
    {
        $engineer = Engineer::find($id);
    
        return view('detail', [
            'engineer' => $engineer, 
        ]); 
    }
   
    public function edit($id)
    {
        $engineer = Engineer::find($id);
    
        return view('edit', [
            'engineer' => $engineer, 
        ]); 
    }

    public function update(Request $request)
   {
  try {
        DB::beginTransaction();
        $engineer = Engineer::find($request->input('id'));
        $engineer->first_name = $request->input('first_name');
        $engineer->last_name = $request->input('last_name');
        $engineer->first_name_furigana = $request->input('first_name_furigana');
        $engineer->last_name_furigana = $request->input('last_name_furigana');
        $engineer->gender = $request->input('gender');
        $engineer->birth_day = $request->input('birth_day');
        $engineer->email = $request->input('email');
        $engineer->phonenumber = $request->input('phonenumber');
        $engineer->postalcode = $request->input('postalcode');
        $engineer->address = $request->input('address');
        $engineer->station = $request->input('station');
        $engineer->background = $request->input('background');
        $engineer->save();
        DB::commit();
        return redirect('dashboard')->with('status', '新規登録をしました');
    } catch (\Exception $ex) {
        DB::rollback();
        logger($ex->getMessage());
        return redirect('dashboard')->withErrors($ex->getMessage());
    }
}
}
   

