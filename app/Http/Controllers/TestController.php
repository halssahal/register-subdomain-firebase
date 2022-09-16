<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class TestController extends Controller
{

    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    public function index()
    {
        $subdomain = Route::current()->parameter('subdomain');

        if ($subdomain) {
            $data = $this->database->getReference('test/subdomains/' . $subdomain)->getValue();
            if ($data == null) {
                return redirect()->route('test.index');
            }

            return view('subdomain', $data);
        } else {
            return view('welcome');
        }
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subdomain' => $request->subdomain,
            'password' => Hash::make($request->password),
        ];

        $this->database
            ->getReference('test/subdomains/' . $request['subdomain'])
            ->set($data);

        $http = ($request->secure()) ? 'https://' : 'http://';

        return redirect()->to($http . $request->subdomain . '.' . $request->getHttpHost());
    }

    public function setLocale($locale)
    {
        if (!in_array($locale, ['en', 'es', 'id'])) {
            abort(400);
        }

        session()->put('locale', $locale);

        return redirect()->back();
    }
}
