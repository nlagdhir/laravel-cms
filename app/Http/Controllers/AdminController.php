<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use App\Setting;
use App\Post;
use App\Portfolio;
use App\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{

	/**
	 * return dashboard if user is admin
	 */
    public function dashboard()
    {
        $data = [];
        $data['posts'] = Post::get()->count();
        $data['pages'] = Page::get()->count();
        $data['portfolios'] = Portfolio::get()->count();
        $data['teams'] = Team::get()->count();
        return view('admin.dashboard',compact('data'));
    }

    /**
     * return Filemanager view
     */
    public function filemanager()
    {
    	return view('admin.filemanager');
    }

    /**
     * Return Setting Homepage 
     */
    public function settings_home()
    {
        $data = Setting::where('key','home_setting')->first();
        $datat = json_decode($data->value);
        $pages = getPagesList();
        return view('admin.homeSetting',compact('pages','datat'));
    }

    /**
     * Save Setting Content
     */
    public function save_settings(Request $request)
    {
        $data = Setting::where('key','home_setting')->first();
        if(count($data) > 0){
            $setting = Setting::findOrFail($data->id);
            $setting->obj_id = $request->get('is_home');
            $setting->obj_type = $request->get('type');
            $setting->key = 'home_setting';
            $setting->value = json_encode($request->all());
            $setting->update();
            return redirect('admin/setting/homepage');    
        }else{
            $setting = new Setting;
            $setting->obj_id = $request->get('is_home');
            $setting->obj_type = $request->get('type');
            $setting->key = 'home_setting';
            $setting->value = json_encode($request->all());
            $setting->save();
            return redirect('admin/setting/homepage');    
        }
        
    }

    /**
     * Return global setting page
     */
    public function setting_global()
    {
        $data = Setting::where('key','global_settings')->first();
        $global = json_decode($data->value);
        $pages = getPagesList();
        return view('admin.global',compact('pages','global'));
    }

    /**
     * Save Global settings
     */
    public function save_global_settings(Request $request)
    {
        $data = Setting::where('key','global_settings')->first();
        if(count($data) > 0){
            $setting = Setting::findOrFail($data->id);
            $setting->obj_type = $request->get('type');
            $setting->key = 'global_settings';
            $setting->value = json_encode($request->all());
            $setting->update();
            return redirect('admin/setting/global');    
        }else{
            $setting = new Setting;
            $setting->obj_type = $request->get('type');
            $setting->key = 'global_settings';
            $setting->value = json_encode($request->all());
            $setting->save();
            return redirect('admin/setting/global');    
        }
    }

    /**
     * return view for experts settings
     */
    public function experts_settings()
    {
        $data = Setting::where('key','experts_setting')->first();
        $experts = json_decode($data->value);
        return view('admin.experts',compact('experts'));
    }

    /**
     * save experts settings
     */
    public function experts_save_settings(Request $request)
    {
        $data = Setting::where('key','experts_setting')->first();
        if(count($data) > 0){
            $settings = Setting::findOrFail($data->id);
            $settings->obj_type = $request->get('type');
            $settings->key = 'experts_setting';
            $settings->value = json_encode($request->all());
            $settings->update();
            return redirect('admin/setting/experts');
        }else{
            $settings = new Setting;
            $settings->obj_type = $request->get('type');
            $settings->key = 'experts_setting';
            $settings->value = json_encode($request->all());
            $settings->save();
            return redirect('admin/setting/experts');
        }
    }

    
}
