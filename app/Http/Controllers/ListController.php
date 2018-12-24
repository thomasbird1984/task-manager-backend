<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\ListTask;

class ListController extends Controller {

    public function lists_index() {
        $lists = ListTask::all();
        return response(json_encode($lists));
    }

    public function lists_single($id = false) {
        if(!$id) {
            return response(json_encode(['No list found']), 401);
        }

        $lists = ListTask::find($id);
        if($lists) {
            return response(json_encode($lists));
        } else {
            return response(json_encode(['No list found']), 401);
        }
    }

    public function lists_create(Request $request) {

    }

    public function lists_edit(Request $request) {

    }

    public function lists_remove($id) {

    }
}