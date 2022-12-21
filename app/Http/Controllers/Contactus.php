<?php

namespace App\Http\Controllers;

use App\Models\ContactUs as AppModelsContactUs;
use Illuminate\Http\Request;

class Contactus extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ContactUsForm(Request $request)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3|max:50|unique',
                'email' => 'required|email|unique',
                'location' => 'required',
            ],
            [
                'name.required' => 'الرجاء ادخال الاسم. ',
                'name.string' => 'الرجاء ادخال الاسم بشكل صحيح . ',
                'name.unique' => 'الاسم الذي قمت باختيارة مستعمل مسبقا . ',

                'name.min' => 'الاسم يجب ان يكون على الأقل 3 حروف. ',
                'name.max' => 'الاسم يجب ان لا يزيد عن 50 حرف. ',
                'location.required' => 'الرجاء اختيار الجهة المسؤولة. ',
                'email.required' => 'الرجاء ادخال البريد الالكتروني. ',
                'email.unique' => 'لقد قمت بادخال البريد الالكتروني مسبقا',
            ]
        );
        AppModelsContactUs::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'location' => $request['location'],
        ]);
        return back()->with('success', 'تم ارسال الطلب بنجاح');
    }
}
