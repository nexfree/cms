<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {
        if (\Request::ajax()) {
            return Page::all();
        }
        return view('page.index');
    }

    public function create() {
        return view('page.create');
    }

    public function store(Request $request) {
        dd($request);
    }

    public function show($id) {
        return Page::find($id);
    }

    public function edit($id) {
        $data['page'] = Page::find($id);
        return view('page.update', $data);
    }

    public function update(Request $request, $id) {
        dd($request);
    }

    public function destroy($id) {
        //
    }
}
