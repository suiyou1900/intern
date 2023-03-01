<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer-Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <a href='/show'>     
            <button class="bg-gradient-to-b from-gray-300 to-gray-800 hover:bg-gradient-to-l text-white rounded px-4 py-2">エンジニア一覧を見る</button>
            </a> 
        </div>
    </div>

    <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <a href='/create'>            
        <button class="bg-gradient-to-b from-gray-300 to-gray-800 hover:bg-gradient-to-l text-white rounded px-4 py-2">エンジニアの新規登録をする</button>
       </a>
     </div>
    </div>
</x-app-layout>
