<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer-Management') }}
        </h2>
    </x-slot>
 
   
<div class="relative overflow-x-auto  sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-900">
        <thead class="text-xs text-gray-900 uppercase bg-white  dark:text-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3">
                   ID
                </th>
                <th scope="col" class="px-6 py-3">
                    就職状態
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
                    採用状態
                </th>
                <th scope="col" class="px-6 py-3">
                    地域
                </th>
                <th scope="col" class="px-6 py-3">
                    エンジニアスキル
                </th>
                <th scope="col" class="px-6 py-3">
                    ヒューマンスキル
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
                    <select>
                        <option>未分類</option>
                        <option>離職中</option>
                        <option>就職中</option>
                        <option>ハコブネ就職中</option>
                    </select>
                </td>
                <td class="px-6 py-4">
                  {{$Engineer->first_name}}{{$Engineer->last_name}}
                </td>
                <td class="px-6 py-4">
                 {{$Engineer->gender}}
                </td>
                <td class="px-6 py-4">
                    {{$Engineer->birthday}}
                </td>
                <td class="px-6 py-4">
                <select>
                        <option>未分類</option>
                        <option>稼働中</option>
                        <option>研修中</option>
                        <option>営業中</option>
                </select>
                </td>
                <td class="px-6 py-4">
                   {{$Engineer->prefecture}}
                </td>
                <td class="px-6 py-4">
                <select>
                        <option>Exllent</option>
                        <option>Good</option>
                        <option>Fair</option>
                </select>
                </td>
                <td class="px-6 py-4">
                <select>
                        <option>Exllent</option>
                        <option>Good</option>
                        <option>Fair</option>
                </select>
                </td>
                <td class="px-6 py-4">
                <a href="/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <button class="text-sm shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                DL
                </button>
                </a>
                </td>
                <td class="px-6 py-4">

                <a href="/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
