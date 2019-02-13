<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use View;
use PDF;
use Mail;
use App\Config;
use App\Jobs\SaveNewOrder;
use Queue;

class OrderController extends Controller
{
    //

     public function toPDF($order)
    {
        $order = Order::find($order);

        $today = $order->created_at->format('d-m-Y H:i');
       
        /* dd($order->getTheFuckingCity($order->city_id)); */
        $logo = Config::base64('/storage/images/app/logo.png');

        $html = View::make('pdf.Cotizacion',compact('order','today','logo'))->render();
       
        $pdf = PDF::loadHTML($html);
        
        return $pdf->stream("{$today}-Cotizacion.pdf");

    }



    public function create(Request $request)
    {
        /* {"message":"asdasd",
            "phone":"asd",
            "email":"asd@asd.com",
            "client":"client",
            "seller":"vendor",
            "list":"[{\"id\":6,\"category_id\":2,\"code\":\"2320\",\"name\":\"Sets 1\",\"description\":\"Quidem facere debitis quia quia aut est nesciunt sed. Recusandae aspernatur ipsa eveniet labore repellendus perspiciatis dicta. Velit nulla adipisci voluptates animi.\",\"slug\":\"\/sets\/sets-1\",\"price\":19,\"paused\":0,\"pck_units\":1,\"pck_price\":0,\"offer\":0,\"deleted_at\":null,\"created_at\":\"2018-08-26 18:43:33\",\"updated_at\":\"2018-08-26 18:43:33\",\"images\":[{\"id\":6,\"product_id\":6,\"order\":1,\"url\":\"\/storage\/images\/products\/2.jpg\",\"created_at\":\"2018-08-26 18:43:34\",\"updated_at\":\"2018-08-26 18:43:34\"}],\"category\":{\"id\":2,\"code\":null,\"name\":\"Sets\",\"description\":\"Reiciendis omnis blanditiis eaque eius nemo ad repudiandae id. Eligendi alias reiciendis rerum ullam.\",\"homedescription\":\"Eum voluptatibus sit accusantium fugit consequatur officiis molestias. Tempore dolores incidunt quod totam. Aspernatur ipsa animi omnis. Numquam qui accusantium dolor quae itaque labore aut.\",\"metatitle\":null,\"metadescription\":null,\"slug\":\"\/sets\",\"image\":\"\/storage\/images\/app\/no-image.png\",\"deleted_at\":null,\"created_at\":\"2018-08-26 18:43:33\",\"updated_at\":\"2018-08-26 18:43:33\"},\"units\":\"15155\"}]",
            "total":"287945"} */
    
        $data = $request->except('list');
        $list = $request->list;

        if (Auth::check())
        {
            $user = Auth::user();
        }else 
        {
            $user = User::where('email','pedidosonline@matesfabi.com')->get()->first();
        }

        $data['user_id'] = $user->id;
        
        Queue::push(new SaveNewOrder($data,$list));

        return;
        
    }

    public function edit(Request $request)
    {
        $order = Order::find($request->order);
        $field = $request->field;
        $order->$field = $request->value;
        $order->save();
        return $order;
    }


    public function getOrders()
    {
        
        if (Auth::check()){
            $user = Auth::user();
            $orders = Order::where('user_id',$user->id)
                        ->with('orderItems.product')
                        ->get();
        
           return $orders;             
                        
        }
    }
}
