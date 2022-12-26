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
                'value' => '/storage/' . $img,

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
                'value' => '/storage/' . $img,

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

    public function removeImageSlider(Request $request)
    {
        // dd($request->all());
        $str_slider = nova_get_setting($request->type, 'default_value');
        $json_slider = json_decode($str_slider, true);

        foreach ($json_slider as $key => $value) {

            if ($value['key'] == $request->key)   unset($json_slider[$key]);
        }
        // dd($json_slider);
        $str_json = json_encode($json_slider);
        // $array = \array_diff($json_slider, ["23661ba1-5053-46df-a50a-a0cb1813a754"]);
        DB::table('nova_settings')->where('key', $request->type)->update(['value' => $str_json]);
        return "super ok";
    }

    public function setImeagesecondBanner(Request $request)
    {

        $img =  $request->file->store('images', 'public');
        $str_slider = nova_get_setting('second_Banner', 'default_value');
        if ($str_slider != 'default_value') {
            $json_slider = json_decode($str_slider);
            $pus = array(
                'key' => $request->key,
                'images' => '/storage/' . $img,
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
                'images' => '/storage/' . $img,
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
    public function getImageFourthBanner()
    {
        $str_slider = nova_get_setting('Fourth_Banner', 'default_value');
        $json_slider = json_decode($str_slider);
        return   $json_slider;
    }
    public function setImageFourthBanner(Request $request)
    {

        $img =  $request->file->store('images', 'public');
        $str_slider = nova_get_setting('Fourth_Banner', 'default_value');
        if ($str_slider != 'default_value') {

            $json_slider = json_decode($str_slider);
            $pus = array(
                'key' => $request->key,
                'images' => '/storage/' .$img,
                "title" => $request->title,
                "subtitle" => $request->subtitle,

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->where('key', 'Fourth_Banner')->update(['value' => $str_json]);
            return "okk";
        } else {

            $json_slider = array();
            $pus = array(
                'key' => $request->key,
                'images' =>'/storage/' .$img,
                "title" => $request->title,
                "subtitle" => $request->subtitle,

            );
            array_push($json_slider, $pus);
            $str_json = json_encode($json_slider);
            // dd( $str_json);
            DB::table('nova_settings')->insert([
                'key' => 'Fourth_Banner',
                'value' => $str_json,
            ]);
            return "full ok";
        }
    }
}
