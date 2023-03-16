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
        'phonenumber' => ['required', 'regex:/^[0-9\-]+$/i', 'max:14'],
        'postalcode' => 'required',
        'prefecture' => 'required',
        'address' => 'required',
        'station' => 'required',
        'background' => 'required',
        'resume'=>'image',
        'job_history_sheet'=>'image'
    ]);
    
    if($validated->fails()) {
        return redirect()->route('create', ['id' => $request->input('id')])->withErrors($validated)->withInput();
    }


    try { 
        Engineer::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'first_name_furigana' => $request->first_name_furigana,
        'last_name_furigana' => $request->last_name_furigana,
        'birthday' => $request->birthday,
        'email' => $request->email,
        'gender' => $request->gender,
        'phonenumber' =>$request->phonenumber,
        'postalcode' => $request->postalcode,
        'prefecture' => $request->prefecture,
        'address' => $request->address,
        'station' => $request->station,
        'background' => $request->background,
        'resume'=> $request->file('resume')->store('public'),
        'job_history_sheet'=> $request->file('job_history_sheet')->store('public'),
        'comment'=>$request->comment,

        ]); 
    
        return redirect('show')->with('flash_message', '登録が完了しました'); 
    } catch (\Exception $ex) { 
        logger($ex->getMessage()); 
        return redirect('dashboard')->withErrors($ex->getMessage()); 
    } 
   
  
        
    }

    public function show(Request $request)
    {
        //検索機能の実装

        $input = $request->all();
        $Engineers=Engineer::search($input)->orderBy('id','asc')->paginate(5);
        $first_name = Engineer::select('first_name')->groupBy('first_name')->pluck('first_name');
        $last_name = Engineer::select('last_name')->groupBy('last_name')->pluck('last_name');
      

        return view('show',
        ['Engineers'=>$Engineers,
         'first_name'=>$first_name,
         'last_name'=>$last_name,

         'first_name' => $input['first_name'] ?? '',
         'last_name' => $input['last_name'] ?? '',
        
        ],


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
        'email' => ['required', 'email'],
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
        return redirect('show')->with('flash_message', '登録情報を更新しました');
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
   

