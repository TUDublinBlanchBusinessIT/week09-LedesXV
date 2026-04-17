<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function showAllMembers()
    {
        $members = Member::all();
        return response()->json($members);
    }

    public function showOneMember($id)
    {
        return response()->json(Member::find($id));
    }
}