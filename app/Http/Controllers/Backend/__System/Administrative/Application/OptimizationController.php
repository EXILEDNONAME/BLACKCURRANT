<?php

namespace App\Http\Controllers\Backend\__System\Administrative\Application;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect, Response;

class OptimizationController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    return view('pages.backend.__system.administrative.application.optimization.index');
  }

  public function update() {
    \Artisan::call('optimize:clear');
    return redirect('/dashboard/administratives/applications/optimizations')->with('success', __('default.notification.success.optimization-updated'));
  }

}
