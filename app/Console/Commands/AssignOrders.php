<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Models\DelhiveryBoy;

class AssignOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:assign-orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign order to available delhivery boys';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $dboys = DelhiveryBoy::withCount([
        'orders as assigned_orders_count'=> function($query){
            $query->where('status','assigned');
        }
       ])->orderBy('name')->get();
       foreach($dboys as $checkOrders){
            $limit = $checkOrders->delhivery_limit;
            $avail = $limit - $checkOrders->assigned_orders_count;
            if($avail>0){
              $order = Order::create([
                    'delhivery_boy_id'=>$checkOrders->id,
                    'assigned_at'=>now(),
                    'status'=>'assigned'
                ]);
            }
       }
    }
}
