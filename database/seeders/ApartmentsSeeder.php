<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('Apartments')->truncate();
        DB::table('Apartments')->insert([
            [
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai loi',
                'address'=>'so8 hoang',
                'price'=>'200002',
                'General information'=>'phong4 tang2',
                'Details'=>'phòng có gái',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai dung',
                'address'=>'so8 hanoi',
                'price'=>'200003',
                'General information'=>'phong2 tang2',
                'Details'=>'phòng dep',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai quyen',
                'address'=>'so8',
                'price'=>'20004',
                'General information'=>'phong1 tang2',
                'Details'=>'g có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai vui',
                'address'=>'so9 hanoi',
                'price'=>'300000',
                'General information'=>'phong1 tang3',
                'Details'=>'phòng có gái',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai ',
                'address'=>'so1 hanoi',
                'price'=>'400000',
                'General information'=>'phong6 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'chưa bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'dung thuy',
                'address'=>'so7 hai dung',
                'price'=>'200000',
                'General information'=>'phong1 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ],[
                'name'=>'mai thuy',
                'address'=>'so8 hanoi',
                'price'=>'200000',
                'General information'=>'phong3 tang2',
                'Details'=>'phòng có gái xinh',
                'Selling status'=>'đang bán',
                'avatar'=>'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'create_at'=>Carbon::now()
            ]

        ]);
    }
}
