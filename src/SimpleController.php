<?php
namespace Huniel;
use App\Http\Controllers\Controller;

class SimpleController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }
    public function index()
    {
        $users = [];
        return view('simple::admin')->with('users', $users);
    }
}
