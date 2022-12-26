<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function getImeageSlider()
    {
        $str_slider = nova_get_setting('slider', 'default_value');
        $json_slider = json_decode($str_slider);
        return   $json_slider;
    }
    public function setImeageSlider(Request $request)
    {

        $img =  $request->file->store('images', 'public');
        $str_slider = nova_get_setting('slider', 'default_value');
        if ($str_slider != 'default_value') {

            $json_slider = json_decode($str_slider);
            $pus = array(
                'key' => $request->key,
                'value' => $img,
                'input' => $request->inputs

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->where('key', 'slider')->update(['value' => $str_json]);
            return "okk";
        } else {

            $json_slider = array();
            $pus = array(
                'key' => $request->key,
                'value' => $img,
                'input' => $request->inputs

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->insert([
                'key' => 'slider',
                'value' => $str_json,

            ]);
            return "full ok";
        }
    }
    public function getImeagesecondBanner()
    {
        $str_slider = nova_get_setting('second_Banner', 'default_value');
        $json_slider = json_decode($str_slider);
        return   $json_slider;
    }
    public function setImeagesecondBanner(Request $request)
    {

        // dd($request->all());


        $img =  $request->file->store('images', 'public');
        $str_slider = nova_get_setting('second_Banner', 'default_value');
        if ($str_slider != 'default_value') {

            $json_slider = json_decode($str_slider);
            $pus = array(
                'key' => $request->key,
                'images' => $img,
                "title" => $request->title,
                "subtitle" => $request->subtitle,
                "buttonText_" => $request->buttonText_,
                "buttonLink" => $request->buttonLink

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->where('key', 'second_Banner')->update(['value' => $str_json]);
            return "okk";
        } else {

            $json_slider = array();
            $pus = array(
                'key' => $request->key,
                'images' => $img,
                "title" => $request->title,
                "subtitle" => $request->subtitle,
                "buttonText_" => $request->buttonText_,
                "buttonLink" => $request->buttonLink
            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->insert([
                'key' => 'second_Banner',
                'value' => $str_json,
            ]);
            return "full ok";
        }
    }

    public function setaboutusslider(Request $request)
    {


        $img =  $request->file->store('images', 'public');
        $str_slider = nova_get_setting('slider', 'default_value');
        if ($str_slider != 'default_value') {

            $json_slider = json_decode($str_slider);
            $pus = array(
                'key' => $request->key,
                'value' => $img,

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->where('key', 'aboutus_slider')->update(['value' => $str_json]);
            return "okk";
        } else {

            $json_slider = array();
            $pus = array(
                'key' => $request->key,
                'value' => $img,

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->insert([
                'key' => 'aboutus_slider',
                'value' => $str_json,
            ]);
            return "full ok";
        }
    }
}
