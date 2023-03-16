<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer-Management') }}
        </h2>
    </x-slot>

  <div class="overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6 justify-center flex">
    <h3 class="text-base font-semibold leading-6 text-gray-900">編集画面</h3>
  </div>

  <form class="w-full" action="{{ route('update') }}" method="patch" enctype='multipart/form-data'>
    @csrf
    @method('PATCH')
  <div class="border-t border-gray-200">
  <input value="{{ $engineer->id }}" name="id" type="hidden">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">ID</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->id}}</dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">苗字</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="first_name" value="{{ $engineer->first_name }}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @if($errors->has('first_name'))
          {{ $errors->first('first_name') }}
          @endif 
      </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">名前</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="last_name" value="{{$engineer->last_name}}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @error('last_name')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </dd>
      </div>


      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">苗字ふりがな</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="first_name_furigana" value="{{ $engineer->first_name_furigana }}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @error('first_name_furigana')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">名前ふりがな</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="last_name_furigana" value="{{$engineer->last_name_furigana}}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @error('last_name_furigana')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">性別</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <select name="gender" class="w-full h-full rounded-md py-0 pl-4 pr-9 text-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
        @foreach(App\Models\Engineer::ENGINEER_STATUS_OBJECT as $key => $value)
        <option value="{{ $key }}" @if($key === $engineer->gender) selected @endif>{{ $value }}</option>
        @endforeach
        </select>
      </dd>
      </div>

      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">生年月日</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="birthday" id="name" value="{{ $engineer->birthday}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @error('birthday')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
      </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">メールアドレス</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="email" value="{{ $engineer->email }}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @error('email')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
      </dd>
      </div>

      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">電話番号</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> 
          <input type="text" name="phonenumber" id="name" value="{{ $engineer->phonenumber}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
           @error('phonenumber')
           <div class="text-red-600">{{ $message }}</div>
           @enderror 
        </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">郵便番号</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="postalcode" value="{{$engineer->postalcode}}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
           @error('postalcode')
           <div class="text-red-600">{{ $message }}</div>
           @enderror 
      </dd>
      </div>

      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">住所</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> 
          <input type="text" name="address" id="name" value="{{ $engineer->prefecture}}{{$engineer->address}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
           @error('address')
           <div class="text-red-600">{{ $message }}</div>
           @enderror  
      </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">最寄駅</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <input type="text" name="station" value="{{ $engineer->station }}"id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          @error('station')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </dd>
      </div>


      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">最終学歴</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <select name="background" class="w-full h-full rounded-md py-0 pl-4 pr-9 text-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
        @foreach(App\Models\Engineer::ENGINEER_STATUS_OBJECT_2 as $key => $value)
        <option value="{{ $key }}" @if($key === $engineer->background) selected @endif>{{ $value }}</option>
        @endforeach
        </select> 
      </dd>
      </div>


      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">コメント</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <textarea name="comment" rows=3 id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$engineer->comment}}</textarea>
        </dd>
      </div>
      

    
     
    </dl>
  </div>
</div>

<div class='pt-4 justify-center flex'>

<button type='submit' class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
 更新する
</button>
</div>
</form>


</x-app-layout>

