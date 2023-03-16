<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engineer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;



class EngineerController extends Controller
{

    public function create() 
    { 
        return view('create'); 
      
    }

    public function new(Request $request)
   {
    
    //バリデーション処理
    $validated = Validator::make($request->all(), [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'first_name_furigana' => 'required|max:255',
        'last_name_furigana' => 'required|max:255',
        'birthday' => 'required|date',
        'email' => 'required|max:255',
        'gender' => 'required',
        'phonenumber' => 'required',
        'postalcode' => 'required',
        'prefecture' => 'required',
        'address' => 'required',
        'station' => 'required',
        'background' => 'required',
    ]);
    
    if($validated->fails()) {
        return redirect()->route('create', ['id' => $request->input('id')])->withErrors($validated)->withInput();
    }

    if (is_null($request->input('resume'))) {
        return response()->json('base64の画像テキストが指定されていません。');
        $image = base64_decode($request->image_base64_text);
        Storage::put('resume.png', $image);
    }
    if (is_null($request->input('job_historysheet'))) {
        return response()->json('base64の画像テキストが指定されていません。');
        $image = base64_decode($request->image_base64_text);
        Storage::put('resume.png', $image);
    }
    
    
   
   

    try { 
        Engineer::create($request->all()); 
    
        return redirect('show'); 
    } catch (\Exception $ex) { 
        logger($ex->getMessage()); 
        return redirect('dashboard')->withErrors($ex->getMessage()); 
    } 
  
        
    }

    public function confirm(Request $request)
    {
        return view('confirm');
    }

    public function show()
    {
        $Engineers=Engineer::paginate(5);

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

    //更新処理

    public function update(Request $request){

  try {
    //バリデーション処理

    $validated = Validator::make($request->all(), [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'first_name_furigana' => 'required|max:255',
        'last_name_furigana' => 'required|max:255',
        'birthday' => 'required|date',
        'email' => 'required|max:255',
        'phonenumber' => 'required',
        'postalcode' => 'required',
        'address' => 'required',
        'station' => 'required',
    ]);

    
    if($validated->fails()) {
        return redirect()->route('edit', ['id' => $request->input('id')])->withErrors($validated)->withInput();
    }

        DB::beginTransaction();
        
        $engineer = Engineer::find($request->input('id'));
        $engineer->first_name = $request->input('first_name');
        $engineer->last_name = $request->input('last_name');
        $engineer->first_name_furigana = $request->input('first_name_furigana');
        $engineer->last_name_furigana = $request->input('last_name_furigana');
        $engineer->gender = $request->input('gender');
        $engineer->birthday = $request->input('birthday');
        $engineer->email = $request->input('email');
        $engineer->phonenumber = $request->input('phonenumber');
        $engineer->postalcode = $request->input('postalcode');
        $engineer->address = $request->input('address');
        $engineer->station = $request->input('station');
        $engineer->background = $request->input('background');
        $engineer->comment = $request->input('comment');
        $engineer->save();

        DB::commit();
        return redirect('show');
    } catch (\Exception $ex) {
        DB::rollback();
        logger($ex->getMessage());
        return redirect('dashboard');
    }
    }

    public function delete($id) 
    { 
        try { 
           Engineer::find($id)->delete(); 
           return redirect('show')->with('status', '本を削除しました。'); 
         } catch (\Exception $ex) { 
           logger($ex->getMessage()); 
           return redirect('dashboard')->withErrors($ex->getMessage()); 
         } 
    }  
   
}
   

