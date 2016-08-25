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
      //
  }

  /**

  */
  public function index() 
  {
    $block_limit = 25;

    $block_list = DB::select('select height, size, hash, timestamp, tx_count from blocks order by height desc limit ?', [$block_limit]);

    return view('explorer.home', ['blocks' => $block_list]);
  }

  public function showBlock($block)
  {
    //TODO:
    //escape $block
    //check wether it is a block height or block hash
    //if hash check if valid
    $block_height = $block;
        
    $block = DB::select('select * from blocks where height = ?', [$block_height]);
    
    $transactions = DB::select('select * from transactions where bl_height = ?', [$block_height]);

    return view('explorer.block_details', compact('block','transactions'));
  }
  
  public function showTransaction($tx_hash)
  {
    //TODO:
    //check if tx hash is valid
    
    $transaction = DB::select('select * from transactions where hash = ?', [$tx_hash]);
    
    $bl_height = $transaction[0]->bl_height;
    $tx_id = $transaction[0]->txid;
    
    $outputs = []; //DB::select('select * from vout where bl_height = ? and txid = ?', [$bl_height, $tx_id]);
    
    $inputs = DB::select('select * from vin where bl_height = ? and txid = ?', [$bl_height, $tx_id]);
    
    return view('explorer.transaction_details', compact('transaction', 'outputs', 'inputs'));
  }

}
