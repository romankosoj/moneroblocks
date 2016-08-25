<?php

namespace App;

use DB;

class Database {
	
	public function getBlock($block)
	{
		$
		
	}
	

  public function getHeight(){
      $block = DB::select('select * from blocks order by height desc limit 1;');
      
      return $block;
  }
  
  public function getBlockByHeight($height) {
      $block = DB::select('select * from blocks where height = ?', [1]);
		
			return $block;
  }
	
	public function getBlockByHash($height) {
		
		
	}
	
	public function getBlockRangeByHeight($start,$end) 
	{
  	$blocks = DB::select('select * from blocks where height >= ? and height <= ?', [$start], [$end]);
	
		return $block_list;
	}
	
	public function getTopNBlocks($block_limit)
	{
		//$block_list = DB::select('select * from blocks order by height desc limit ? ', [$block_limit]);
		
			//return $block_list;
		return "Hello world";
	}
}