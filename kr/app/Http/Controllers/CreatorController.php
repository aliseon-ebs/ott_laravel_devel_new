<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        return view('pages.creator.index');

    }

    public function creators(Request $request)
    {

        return view('pages.creator.creators');

    }

    public function collaboration(Request $request)
    {

        return view('pages.creator.collaboration');

    }

    public function success_story(Request $request)
    {

        return view('pages.creator.success_story');

    }

    public function creators_contents(Request $request)
    {

        return view('pages.creator.creators_contents');

    }

    public function creators_contents_detail(Request $request, $id)
    {

        return view('pages.creator.creators_contents_detail');

    }

    public function collaboration_contents(Request $request)
    {

        return view('pages.creator.collaboration_contents');

    }

    public function collaboration_contents_detail(Request $request, $id)
    {

        return view('pages.creator.collaboration_contents_detail', ['request' => $id]);

    }

    public function success_story_contents(Request $request)
    {

        return view('pages.creator.success_story_contents');

    }

    public function success_story_contents_detail(Request $request, $id)
    {

        return view('pages.creator.success_story_contents_detail', ['request' => $id]);

    }

    public function seller_and_creator_collaboration(Request $request)
    {

        return view('pages.creator.seller_and_creator_collaboration');

    }

}