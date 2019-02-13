<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use PDF;
use Carbon\Carbon;
use App\Jobs\GeneratePricesList;
use Queue;

class PdfController extends Controller
{
    public function prices()
    {
        Queue::push(new GeneratePricesList());

        return redirect('/super');
    }


    public function imageEmbed($image)
    {
       

        // Read image path, convert to base64 encoding
        $imageData = base64_encode(file_get_contents($image));

        // Format the image SRC:  data:{mime};base64,{data};
        $src = 'data:'.mime_content_type($image).';base64,'.$imageData;

        // Echo out a sample image
       return $src;
    }
}
