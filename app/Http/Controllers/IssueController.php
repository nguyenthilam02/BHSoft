<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::orderBy('created_at', 'desc')->get();
        return view('issue.index', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('issue.create', compact('users', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:issues,code',
            'title' => 'required',
            'classify' => 'required',
            'priority' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'user_id' => 'required',
            'project_id' => 'required',
            'description' => 'string|nullable',
        ]);
        $data = $request->all();
        $status = Issue::create($data);
        if ($status) {
            return redirect()->route('issue.index')->with('success', 'Thêm mới issue thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới issue');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $issue = Issue::findOrFail($id);
        if ($issue) {
            $status = $issue->delete();
            if ($status) {
                return redirect()->route('issue.index')->with('success', 'Xóa issue thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa issue!');
            }
        } else {
            return back()->with('error', 'Không tồn tại issue này!');
        }
    }
}
