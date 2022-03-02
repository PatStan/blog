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
        // get Sam to consolidate this, it could be improved
        return view('settings.index',[
            'settings' => auth()->user()->settings()->get()
        ]);
    }

    public static function create(User $user, string $key, string $value)
    {
        //creates a user setting from the parameters. use in code only. will be redundant probably.

        $user->settings()->create([
            'user_id' => $user->id,
            'key' => $key,
            'value' => $value
        ]);

    }

    public function store()
    {
        //creates a user setting for the currently logged in user /w validation


        //TODO: REFACTOR to StoreSettingRequest and complete authorization
        //$validated = $request->validated();
        $attributes = request()->validate([
            'key' => ['required', 'string', 'min:2', 'max:255', Rule::unique('settings')->where(function ($query)
            {
                return $query->where('user_id', auth()->user()->id);
            })],
            'value' => ['required', 'string', 'min:2', 'max:255']
        ]);


        auth()->user()->settings()->create(
            $attributes
        );

        return redirect('settings')->with('success', 'Setting created :)');
    }

    public function read(string $key)
    {
        //TODO: read/get a user's setting
    }

    public function update(Setting $setting)
    {
        //TODO: update a user's setting
    }

    public function destroy(Setting $setting)
    {
        //TODO: destroy a setting from DB
    }

    public function show(Setting $setting)
    {

    }
}
