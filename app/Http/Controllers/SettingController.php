<?php

namespace App\Http\Controllers;

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

        //TODO: refactor and extract to request class
        $attributes = request()->validate([
            'key' => ['required', 'string', 'min:1', 'max:255', 'unique:user_id'],
            'value' => ['required', 'string', 'min:1', 'max:255']
        ]);

        auth()->user()->settings()->create([
            'user_id' => auth()->user()->id,
            $attributes
        ]);

        return redirect('/')->with('success', 'Setting created :)');
    }

    public function read()
    {
        //TODO: read/get a user's setting
    }

    public function update()
    {
        //TODO: update a user's setting
    }

    public function destroy()
    {
        //TODO: destroy a setting from DB
    }

    public function show()
    {

    }
}
