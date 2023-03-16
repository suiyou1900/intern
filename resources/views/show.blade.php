<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer-Management') }}
        </h2>
    </x-slot>
   
   
<div class="relative overflow-x-auto  sm:rounded-lg">
<div class="pt-8">
<div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-10">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<div class="m-5">

<form action="{{ route('show') }}">
<div class="flex flex-row">



<div class="col-span-6 sm:col-span-3 p-2 w-48">
<label for="name" class="block text-sm font-medium text-gray-700">苗字</label>
<input type="text" name="first_name" id="name" value="{{ $first_name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>
<div class="col-span-6 sm:col-span-3 p-2 w-48">
<label for="name" class="block text-sm font-medium text-gray-700">名前</label>
<input type="text" name="last_name" id="name" value="{{ $last_name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>

<div class="col-span-6 sm:col-span-3 p-2 w-48 relative">
<button type="submit" class="absolute inset-x-0 bottom-2 mr-2 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">検索</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>



    <table class="w-full text-sm text-left text-gray-900">
        <thead class="text-xs text-gray-900 uppercase bg-white  dark:text-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3">
                   ID
                </th>
                <th scope="col" class="px-6 py-3">
                    名前
                </th>
                <th scope="col" class="px-6 py-3">
                    性別
                </th>
                <th scope="col" class="px-6 py-3">
                    誕生日
                </th>
                <th scope="col" class="px-6 py-3">
                    地域
                </th>
                <th scope="col" class="px-6 py-3">
                    履歴書
                </th>
                <th scope="col" class="px-6 py-3">
                    職務経歴書
                </th>
                <th scope="col" class="px-6 py-3">
                    メモ
                </th>
                
                <th scope="col" class="px-6 py-3">
                 詳細
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach ( $Engineers as  $Engineer)
          
            <tr class="bg-white border-b dark:border-gray-700 hover:bg-gray-700 ">
                <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-black">
                   {{$Engineer->id}}
                </th>
                <td class="px-6 py-4">
                  {{$Engineer->first_name}}{{$Engineer->last_name}}
                </td>
                <td class="px-6 py-4">
                 @if($Engineer->gender==1)
                 男
                 @else
                 女
                 @endif
                </td>
                <td class="px-6 py-4">
                    {{$Engineer->birthday}}
                </td>
                <td class="px-6 py-4">
                   {{$Engineer->prefecture}}
                </td>
                <td class="px-6 py-4">
                <a href="{{$Engineer->resume}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <button class="text-sm shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                DL
                </button>
                </a>
                </td>
                <td class="px-6 py-4">

                <a href="{{$Engineer->job_history_}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <button class="text-sm shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                DL
                </button>
                </a>
                    
                </td>
                <td class="px-6 py-4">
                   {{$Engineer->comment}}
                </td>

                <td class="px-6 py-4 text-right">
                <button onclick="location.href='/detail/{{$Engineer->id }}'" class="text-sm shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">詳細</button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{$Engineers->links()}}
</div>

</x-app-layout>
