<?php

namespace App\Http\Controllers;

//use App\Database;
use DB;

class BlockexplorerController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

  }

  public function index() 
  {
    $block_limit = 125;

    $block_list = DB::select('select height, size, hash, timestamp, tx_count from blocks order by height desc limit ?', [$block_limit]);

    return view('explorer.home', compact("block_list"));
  }

  public function showBlock($block)
  {
    //TODO:
    //escape $block
    //check wether it is a block height or block hash
    //if hash check if valid
    $block_height = $block;
        
    $block = DB::select('select * from blocks where height = ?', [$block_height]);
    
    //ordering by coinbase desc, ensures the coinbase tx comes first.
    $transactions = DB::select('select * from transactions where bl_height = ? order by coinbase_tx desc, txid', [$block_height]);
    
    $coinbase = array_slice($transactions,0,1);
		
		//if the result has other tx besides Coinbase remove them
		$transactions = array_diff_key($transactions, $coinbase);
						
	  $previous_block = max(0,$block_height-1);
	  $next_block     = $block_height+1;
    
    return view('explorer.block_details', compact("block", "transactions", "coinbase", "previous_block", "next_block"));
  }
  
  public function showTransaction($tx_hash)
  {
    //TODO:
    //check if tx hash is valid
    
    $transaction = DB::select('select * from transactions where hash = ?', [$tx_hash]);
    
    $bl_height = $transaction[0]->bl_height;
    $tx_id = $transaction[0]->txid;
    
    $outputs = DB::select('select * from vout where bl_height = ? and txid = ?', [$bl_height, $tx_id]);
    
    $inputs = DB::select('select * from vin where bl_height = ? and txid = ?', [$bl_height, $tx_id]);

		foreach($inputs as &$input){
			$offsets = (object)[]; //DB::select('select * from vin where bl_height = ? and txid = ? and vinid = ?', [$bl_height, $tx_id, $input->vinid]);
			$input->offsets = $offsets;
		}				
    
    return view('explorer.transaction_details', compact('transaction', 'outputs', 'inputs', 'offsets'));
  }

}
