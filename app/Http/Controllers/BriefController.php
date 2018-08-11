<?php

namespace App\Http\Controllers;

use App\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    public function brief()
    {
        return view('brief');
    }

    public function addBrief(Request $request)
    {



        $newBrief = New Brief;
        $newBrief->create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'company_name' => $request->input('company_name'),
            'activity' => $request->input('activity'),
            'service' => $request->input('service'),
            'price' => $request->input('price'),
            'credit' => $request->input('credit'),
            'company_site' => $request->input('company_site'),
            'term' => $request->input('term'),
            'structure' => $request->input('structure'),
            'blog' => $request->input('blog'),
            'mobile_version' => $request->input('mobile_version'),
            'multi_languages' => $request->input('multi_languages'),
            'online_pay' => $request->input('online_pay'),
            'google_analytics' => $request->input('google_analytics'),
            'gallery' => $request->input('gallery'),
            'search' => $request->input('search'),
            'registration' => $request->input('registration'),
            'online_consultant' => $request->input('online_consultant'),
            'maps' => $request->input('maps'),
            'sites_like' => $request->input('sites_like'),
            'sites_dislike' => $request->input('sites_dislike'),
            'statistic' => $request->input('statistic'),
            'design' => $request->input('design'),
            'logo' => $request->input('logo'),
            'color' => $request->input('color'),
            'basic_site' => $request->input('basic_site'),
            'photosession' => $request->input('photosession'),
            'copywriter' => $request->input('copywriter'),
            'add_content' => $request->input('add_content'),
            'support' => $request->input('support'),
            'update_content' => $request->input('update_content'),
            'details' => $request->input('details'),
            'document' => $request->input('document'),


        ]);


        if($newBrief) {
            return redirect()->route('home');
        }

        return redirect()->route('brief');
    }
}
