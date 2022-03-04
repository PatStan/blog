<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function index()
    {
        return view('settings.index',[
            'settings' => auth()->user()->settings()->get()
        ]);

    }

    public static function create(User $user, string $key, string $value)
    {
        $user->settings()->create([
            'user_id' => $user->getKey(),
            'key' => $key,
            'value' => $value
        ]);

    }

    public function store(StoreSettingRequest $request)
    {
        $validated = $request->validated();
        $user = auth()->user();

        $user->settings()->create($validated);

        return redirect('settings')->with('success', 'Setting created :)');
    }

    public function read(string $key) //this could be used in update/destroy to read from a key, but instead I am using route/model binding
    {
        //TODO: fix else return/throw exception
        $user = auth()->user();
        $settings = $user->settings()->where('key', $key)->firstOrFail();

        if ($settings->isNotEmpty()) {
            return ($settings->first()->value);
        }

        return null;
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $validated = $request->validated();
        $setting->update($validated);
        return redirect()->back()->with('success', 'Setting updated!');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect('settings')->with('success', 'Setting deleted :(');
        //$model->delete()
        //POST route
        //laravel post and put protected csrf
    }

    public function show(Setting $setting)
    {
            return view('settings.show', [
                'setting' => $setting
            ]);
    }
}
