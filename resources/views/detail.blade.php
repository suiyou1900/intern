

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer-Management') }}
        </h2>
    </x-slot>

  <div class="overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6 justify-center flex">
    <h3 class="text-base font-semibold leading-6 text-gray-900">詳細画面</h3>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">名前</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->first_name}}{{$engineer->last_name}}</dd>
      </div>
      <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">ふりがな</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->first_name_furigana}}{{$engineer->last_name_furigana}}</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">生年月日</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->birthday}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">電話番号</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->phonenumber}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">メールアドレス</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->email}}</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">郵便番号</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->postalcode}}</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">住所</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->prefecture}}{{$engineer->address}}</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">履歴書</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <a href="{{ \Storage::url($engineer->resume) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        <button class="text-sm shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                表示する
        </button>
        </a>
      </dd>
      </div>

      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">職務経歴書</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <a href="{{ \Storage::url($engineer->job_history_sheet) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        <button class="text-sm shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                表示する
        </button>
        </a>
      </dd>
      </div>


      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">コメント</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$engineer->comment}}</dd>
      </div>
  </div>
</div>

<div class='pt-4 justify-center flex'>

<button onclick="location.href='/edit/{{$engineer->id }}'" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
  編集する
</button>
</div>

<div class='pt-4 justify-center flex'>
<form action="/delete/{{ $engineer->id }}" method="POST"> 
  @csrf
  @method('delete') 
<button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
  削除する
</button>
</form>
</div>

</x-app-layout>

