<?php

namespace App\Http\Controllers;
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0);
ini_set('sqlsrv.ClientBufferMaxKBSize','1000000'); // Setting to 512M
ini_set('pdo_sqlsrv.client_buffer_max_kb_size','1000000');
use Illuminate\Http\Request;
use App\Models\Month;
use Illuminate\Support\Facades\Http;
use Auth;
class PmController extends Controller
{
    public function index(Request $request){
        $months = Month::all();
        $line_post = $request->input('line');
        if(empty($line_post)):
            $line = '1';
        else:
            $line = $line_post;
        endif;
        $api_url =  env('API_URL');
        $response = Http::get($api_url.'/Inventory/GetFGStockCodes');
        $pm_flag = '1';
        $stockcodes_resource = $response->object();
        $stock_codes[] = 'NO_STOCK_CODE';
        foreach($stockcodes_resource as $row):
            $stock_codes[] =$row->cStockCode;
        endforeach;
        $response_line = Http::get($api_url.'/Production/GetLines');
        $lines = $response_line->object();
        return view('pm.index',compact('months','line','stock_codes','pm_flag','lines'));
    }
}
