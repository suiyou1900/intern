<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer-Management') }}
        </h2>
    </x-slot>

    <div class="isolate bg-white py-20 px-4 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
    <svg class="relative left-1/2 -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-40rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678">
      <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
      <defs>
        <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
          <stop stop-color="#9089FC" />
          <stop offset="1" stop-color="#FF80B5" />
        </linearGradient>
      </defs>
    </svg>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">登録画面</h2>
  </div>
 
  <form action="/new" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20" enctype='multipart/form-data'>
    @csrf

    <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2">

      <div>
        <label for="first_name" class="block text-sm font-semibold leading-6 text-gray-900">苗字</label>
        <div class="mt-2.5">
          <input type="text" name="first_name" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('first_name')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>
      
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">名前</label>
        <div class="mt-2.5">
          <input type="text" name="last_name" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('last_name')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>

     
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">苗字（ふりがな）</label>
        <div class="mt-2.5">
          <input type="text" name="first_name_furigana" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('first_name_furigana')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">名前（ふりがな）</label>
        <div class="mt-2.5">
          <input type="text" name="last_name_furigana" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('last_name_furigana')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>

      
        <div class="mt-2.5">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">性別</label>
        <select name="gender" class="w-full h-full rounded-md py-0 pl-4 pr-9 text-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
        @foreach(App\Models\Engineer::ENGINEER_STATUS_OBJECT as $key => $value)
        <option value="{{ $key }}" >{{ $value }}</option>
        @endforeach
            </select>
            @error('gender')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
      
    
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">誕生日</label>
        <div class="mt-2.5">
          <input type="date" name="birthday" id="company" autocomplete="organization" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('birthday')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>


      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">メールアドレス</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('email')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">電話番号</label>
        <div class="mt-2.5">
          <input type="phonenumber" name="phonenumber" id="phone" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('phonenumber')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="postalcode" class="block text-sm font-semibold leading-6 text-gray-900">郵便番号</label>
        <div class="mt-2.5">
          <input type="text" name="postalcode" id="postalcode" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('postalcode')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="address" class="block text-sm font-semibold leading-6 text-gray-900">都道府県</label>
        <div class="mt-2.5">
          <input type="text" name="prefecture" id="address" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('prefecture')
          <div class="text-red-600">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="address" class="block text-sm font-semibold leading-6 text-gray-900">住所</label>
        <div class="mt-2.5">
          <input type="text" name="address" id="address" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('prefecture')
          <div class="text-red-600">{{ $message }}</div>
          @enderror    
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="station" class="block text-sm font-semibold leading-6 text-gray-900">最寄駅</label>
        <div class="mt-2.5">
          <input type="text" name="station" id="station" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('station')
          <div class="text-red-600">{{ $message }}</div>
          @enderror    
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">最終学歴</label>
        <div class="mt-2.5">
          <input type="phonenumber" name="background" id="phone" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          @error('background')
          <div class="text-red-600">{{ $message }}</div>
          @enderror    
        </div>
      </div>

      
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">履歴書</label>
        <div class="mt-2.5">
          <input type='file' name="resume" rows="4" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600"></input>
          @error('resume')
          <div class="text-red-600">{{ $message }}</div>
          @enderror   
        </div>
      </div>
     
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">職務経歴書</label>
        <div class="mt-2.5">
          <input type='file' name="job_history_sheet" rows="4" class="form-control block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600"></input>
          @error('job_history_sheet')
          <div class="text-red-600">{{ $message }}</div>
          @enderror   
        </div>
      </div>

      <div class="sm:col-span-2">
        <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">コメント</label>
        <div class="mt-2.5">
          <textarea type="text" name="comment" id="phone" class="block w-full rounded-md border-0 py-2 px-3.5 text-sm leading-6 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600"></textarea>
        </div>
      </div>

     
    <div class="justify-center mt-4 o-20">
    <button type='submit' class="bg-gradient-to-br from-blue-300 to-blue-800 hover:bg-gradient-to-tl text-white rounded px-4 py-2">確認画面へ</button>
    </div>
  </form>
</div>
</x-app-layout>



