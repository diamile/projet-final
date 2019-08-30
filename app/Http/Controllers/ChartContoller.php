<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;
use App\User;
use DB;

class ChartController extends Controller
{
    //
    public function index()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        // $chart = Charts::database($users, 'bar', 'chartjs')
		// 	      ->title("Monthly new Register Users")
		// 	      ->elementLabel("Total Users")
        //           ->dimensions(1000, 500)
        //           ->setColor(['green','yellow','red'])
		// 	      ->responsive(false)
        //           ->groupByMonth(date('Y'), true);
        $chart=	 Charts::create('line', 'chartjs')
                ->title('My nice chart')
                ->labels(['First', 'Second', 'Third'])
                ->values([5,10,20])
                ->dimensions(1000,500)
                ->responsive(false);

		$pie  =	 Charts::create('pie', 'highcharts')
				    ->title('My nice chart')
				    ->labels(['First', 'Second', 'Third'])
				    ->values([5,10,20])
				    ->dimensions(1000,500)
				    ->responsive(false);
        return view('admin.accueil',compact('chart','pie'));
    }


    

}