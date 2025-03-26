<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        $data = [];

        foreach ($settings as $setting) {
            $data[$setting->name] = $setting->value;
        }

        return view('admin.settings.index', compact('data'));
    }

    public function save(Request $request)
    {
        $uploadPath = public_path('assets/admin/assets/build/assets/images/uploads');

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        foreach ($request->except('_token') as $key => $value) {

            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $folderName = ($key === 'logo') ? 'logo' : 'icons';
                $destinationPath = $uploadPath . '/' . $folderName;


                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }

                $existingSetting = Settings::where('name', $key)->first();

                if ($existingSetting) {
                    $oldFile = $destinationPath . '/' . $existingSetting->value;

                    if (file_exists($oldFile) && is_file($oldFile)) {
                        unlink($oldFile);
                    }
                }

                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($destinationPath, $fileName);

                $value = $fileName;
            }

            Settings::updateOrCreate(
                ['name' => $key],
                ['value' => $value]
            );
        }

        return response()->json(['success' => true, 'message' => 'Data inserted successfully.']);
    }

    public function fetch()
    {
        $settings = Settings::all();

        $data = [];

        foreach ($settings as $setting) {
            $data[$setting->name] = $setting->value;
        }

        return response()->json($data);
    }
}
