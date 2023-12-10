<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Classes\AppSetting;
use App\Http\Requests\InvitationImageRequest;

class SettingController extends Controller
{
    public function invitationSetting()
    {
        return view('setting');
    }

    public function storeInvitationSetting(InvitationImageRequest $request)
    {
        $setting = new AppSetting();
        $invitation_image = $this->uploadImageToDirectory($request->invitation_image,'Settings');
        $setting->set( 'invitation_image' , $invitation_image);
        return redirect()->back();
    }

    public function uploadImageToDirectory($imageFile, $model = '' ){
        $model        = Str::plural($model);
        $model        = Str::ucfirst($model);
        $path         = "/Images/$model";
        $imageName    = str_replace(' ','', time() . $imageFile->getClientOriginalName());  // Set Image name
        $imageFile->storeAs($path, $imageName, 'public');
        return $imageName;
    }
}
