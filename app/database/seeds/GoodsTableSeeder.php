<?php 
class GoodsTableSeeder extends Seeder {
 
    public function run(){

    	DB::table('goods')->insert(
    	array(
			array(
                  'user_id' => '2',
                  'goods_id' => '3',
                  'count'  => '1'
                   ),
         	array(
                  'user_id' => '2',
                  'goods_id' => '1',
                  'count'  => '5'
                   ),
           	array(
                  'user_id' => '2',
                  'goods_id' => '12',
                  'count'  => '3'
                   ),
           array(
                  'user_id' => '3',
                  'goods_id' => '2',
                  'count'  => '3'
                   ),
          array(
                  'user_id' => '3',
                  'goods_id' => '12',
                  'count'  => '3'
                   )                              
          ));
    }
}