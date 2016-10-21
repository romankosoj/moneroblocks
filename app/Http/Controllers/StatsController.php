<?php

namespace App\Http\Controllers;

use DB;
use PDO;

class StatsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    //
  public function index()
  {
    
    $ring_size = [];
    $txs = [];    
    
    $number_of_days = 1; //last day
    $m = DB::select("Call get_mixin_stats(?);", [$number_of_days]);
    $tx = DB::select("Call get_tx_per_block(?);", [$number_of_days]);
    array_push($ring_size, $m[0]);
    array_push($txs, $tx[0]);
    
    $number_of_days = 7; //last week
    $m = DB::select("Call get_mixin_stats(?);", [$number_of_days]);
    $tx = DB::select("Call get_tx_per_block(?);", [$number_of_days]);
    array_push($ring_size, $m[0]);
    array_push($txs, $tx[0]);
    
    $number_of_days = 30; //last month
    $m = DB::select("Call get_mixin_stats(?);", [$number_of_days]);
    $tx = DB::select("Call get_tx_per_block(?);", [$number_of_days]);
    array_push($ring_size, $m[0]);
    array_push($txs, $tx[0]);
    
    $number_of_days = 365; //last year
    $m = DB::select("Call get_mixin_stats(?);", [$number_of_days]);
    $tx = DB::select("Call get_tx_per_block(?);", [$number_of_days]);
    array_push($ring_size, $m[0]);
    array_push($txs, $tx[0]);
    
    /* Median Stats */
    
    DB::setFetchMode(PDO::FETCH_ASSOC);
		$result = DB::select("SELECT height, size FROM blocks order by height desc limit 1000;");

		$rs = array_column($result, "size");

		$arr200 = array_slice($rs,0,200);
		$arr400 = array_slice($rs,0,400);
		$arr600 = array_slice($rs,0,600);
		$arr800 = array_slice($rs,0,800);

		$medians["median200"] = $this->calculateMedian($arr200);
		$medians["median400"] = $this->calculateMedian($arr400);
		$medians["median600"] = $this->calculateMedian($arr600);
		$medians["median800"] = $this->calculateMedian($arr800);
		$medians["median1000"] = $this->calculateMedian($rs);
    
    return view('stats.main_stats', compact('ring_size', 'txs', 'medians'));
  }
  
  public static function showTransactionStats($period = "m", $records = 12){
    if ($records > 120) {
      $records = 120;
    }

    if ($records < 1 ) {
      $records = 10;
    }

    switch ($period) {
      case "m":
        $viewname = "vwTxCountByMonth";
        break;
      case "h":
        $viewname = "vwTxCountByHour";
        break;
      default:
        $viewname = "vwTxCountByDay";
    }

    $rows = DB::select("SELECT * FROM ".$viewname." LIMIT ".$records.";");
    return view('stats.tx_details', compact('rows'));
    
  }
  
	public static function calculateMedian($arr) {

		sort($arr);
		$count = count($arr);
		$middleval = floor(($count-1)/2);

		if($count % 2) {
			$median = $arr[$middleval];
		} else {
			$low = $arr[$middleval];
			$high = $arr[$middleval+1];
			$median = (($low+$high)/2);
		}
		return $median;
	}
  
}
