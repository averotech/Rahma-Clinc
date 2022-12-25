<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function getImeageSlider()
    {
        return "00";
    }
    public function setImeageSlider(Request $request)
    {
        dd($request->all());
        $event = $request->file->store('images', 'public');
        DB::table('nova_settings')->insert([
            'key ' =>$request->,
            'value' => $event,

        ]);
          dd( $event   );
        $imagePath = 'storage/' . $request->inputs[0]['value'];

                // $filetype = exif_imagetype($imagePath);
                // dd( $filetype);

                // $request->inputs[0]['value']->store('images', 'public');
        // dd();
        // dd();
        // dd($request->inputs[0]['value']->extension());
        // $filename = time() . '.' . \File::extension($request->inputs[0]['value']);
// dd( $filename);

    }
}
