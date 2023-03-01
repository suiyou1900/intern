<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Engineer;

class EngineerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Engineer::create([
            'first_name'=>'山田',
            'last_name'=>'花子',
            'first_name_furigana'=>'やまだ',
            'last_name_furigana'=>'はなこ',
            'gender'=>'2',
            'birthday'=>'2020/02/28',
            'email'=>'yamadahanako@gmail.com',
            'phonenumber'=>'09010002000',
            'prefecture'=>'福岡県',
            'address'=>'福岡市博多区2-2-2',
            'postalcode'=>'8198199',
            'station'=>'博多駅',
            'background'=>'2',
            'resume'=>'',
            'job_history_sheet'=>'',
            'comment'=>'テキストテキストテキストテキストテキストテキストテキスト',
            'employment_status_id'=>'2',
            'in_house_status_id'=>'2',
            'engineer_skill_id'=>'2',
            'human_skill_id'=>'2',        

        ]);

        Engineer::create([
            'first_name'=>'田中',
            'last_name'=>'哲也',
            'first_name_furigana'=>'たなか',
            'last_name_furigana'=>'てつや',
            'gender'=>'1',
            'birthday'=>'2010/04/08',
            'email'=>'tanakatetuya@gmail.com',
            'phonenumber'=>'09010003000',
            'prefecture'=>'東京都',
            'address'=>'中央区銀座2-2-2',
            'postalcode'=>'1890002',
            'station'=>'銀座駅',
            'background'=>'1',
            'resume'=>'',
            'job_history_sheet'=>'',
            'comment'=>'テキストテキストテキストテキストテキストテキストテキスト',
            'employment_status_id'=>'3',
            'in_house_status_id'=>'1',
            'engineer_skill_id'=>'2',
            'human_skill_id'=>'1',        

        ]);

        Engineer::create([
            'first_name'=>'佐藤',
            'last_name'=>'太郎',
            'first_name_furigana'=>'さとう',
            'last_name_furigana'=>'たろう',
            'gender'=>'1',
            'birthday'=>'2000/04/08',
            'email'=>'satoutarou@gmail.com',
            'phonenumber'=>'05010002000',
            'prefecture'=>'大阪府',
            'address'=>'堺市2-2-2',
            'postalcode'=>'1690002',
            'station'=>'新大阪駅',
            'background'=>'2',
            'resume'=>'',
            'job_history_sheet'=>'',
            'comment'=>'テキストテキストテキストテキストテキストテキストテキスト',
            'employment_status_id'=>'2',
            'in_house_status_id'=>'2',
            'engineer_skill_id'=>'1',
            'human_skill_id'=>'3',        

        ]);

        Engineer::create([
            'first_name'=>'安藤',
            'last_name'=>'明子',
            'first_name_furigana'=>'あんどう',
            'last_name_furigana'=>'あきこ',
            'gender'=>'2',
            'birthday'=>'1999/03/02',
            'email'=>'andouakiko@gmail.com',
            'phonenumber'=>'07020004000',
            'prefecture'=>'佐賀県',
            'address'=>'佐賀市佐賀2-2-2',
            'postalcode'=>'1602002',
            'station'=>'佐賀駅',
            'background'=>'2',
            'resume'=>'',
            'job_history_sheet'=>'',
            'comment'=>'テキストテキストテキストテキストテキストテキストテキスト',
            'employment_status_id'=>'1',
            'in_house_status_id'=>'3',
            'engineer_skill_id'=>'3',
            'human_skill_id'=>'3',        

        ]);

        Engineer::create([
            'first_name'=>'坂本',
            'last_name'=>'芳雄',
            'first_name_furigana'=>'さかもと',
            'last_name_furigana'=>'よしお',
            'gender'=>'1',
            'birthday'=>'1950/03/04',
            'email'=>'sakamotoyosio@gmail.com',
            'phonenumber'=>'09020004000',
            'prefecture'=>'岡山県',
            'address'=>'岡山市岡山2-2-2',
            'postalcode'=>'1002002',
            'station'=>'岡山駅',
            'background'=>'1',
            'resume'=>'',
            'job_history_sheet'=>'',
            'comment'=>'テキストテキストテキストテキストテキストテキストテキスト',
            'employment_status_id'=>'3',
            'in_house_status_id'=>'2',
            'engineer_skill_id'=>'1',
            'human_skill_id'=>'2',        

        ]);
    }
}
