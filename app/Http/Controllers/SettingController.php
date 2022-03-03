<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function index()
    {
        // get Sam to consolidate this, it could be improved, maybe a different way instead of get()?
        return view('settings.index',[
            'settings' => auth()->user()->settings()->get()
        ]);

    }

    public static function create(User $user, string $key, string $value)
    {
        //creates a user setting from the parameters. use in code only. will be redundant probably.

        $user->settings()->create([
            'user_id' => $user->getKey(),
            'key' => $key,
            'value' => $value
        ]);

    }

    public function store(StoreSettingRequest $request)
    {
        //creates a user setting for the currently logged in user /w validation

        //TODO: complete authorization in StoreSettingRequest
        $validated = $request->validated();
        $user = auth()->user();

        $user->settings()->create($validated);

        return redirect('settings')->with('success', 'Setting created :)');
    }

    public function read(string $key)
    {
        //TODO: fix else return/throw exception
        $user = auth()->user();
        $settings = $user->settings()->where('key', $key)->firstOrFail();

            if ($settings->isNotEmpty()) {
                return ($settings->first()->value);
            }

            return null;
    }

    public function update(Setting $setting) //change to updateRequest, request before
    {
        //TODO: update a user's setting
        //$model->update()
    }

    public function destroy(Setting $setting)
    {
        //TODO: destroy a setting from DB
        //$model->delete()
        //POST route
        //laravel post and put protected csrf
    }

    public function show(Setting $setting)
    {
        //TODO: show only the setting that matches the key that is associated with logged in user, currently shows first matching entry
            return view('settings.show', [
                'setting' => $setting
            ]);
    }
}
