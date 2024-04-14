<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $issues = Issue::orderBy('created_at', 'desc')->get();
//
//        if ($request->has('project_id')) {
//            $issues = Issue::where('project_id', $request->project_id)->orderBy('created_at', 'desc')->get();
//        }
//        if ($request->has('user_id')) {
//            $issues = Issue::where('user_id', $request->user_id)->orderBy('created_at', 'desc')->get();
//        }
        $query = Issue::query();
        $project_id = $request->project_id;
        $user_id = $request->user_id;
        $status = $request->status;
        if ($request->filled('project_id')) {
            $query->where('project_id', $request->project_id);
        }

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $issues = $query->orderBy('created_at', 'desc')->get();

        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('issue.index', compact(['issues', 'users', 'projects', 'project_id', 'user_id', 'status']));
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
            'title' => 'required',
            'classify' => 'required',
            'priority' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'user_id' => 'required',
            'status' => 'required',
            'project_id' => 'required',
            'description' => 'string|nullable',
        ]);
        $data = $request->all();
        $data['code'] = 'IS-' . time();
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
        $item = Issue::findOrFail($id);
        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('issue.edit', compact(['item', 'users', 'projects']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $issue = Issue::findOrFail($id);
        if ($issue) {
            $this->validate($request, rules: [
                'title' => 'required',
                'classify' => 'required',
                'priority' => 'required',
                'start_time' => 'required|date',
                'end_time' => 'required|date',
                'user_id' => 'required',
                'status' => 'required',
                'project_id' => 'required',
                'description' => 'string|nullable',
            ]);
            $data = $request->all();
            $status = $issue->fill($data)->save();
            if ($status) {
                return redirect()->route('issue.index')->with('success', 'Sửa issue thành công');
            } else {
                return back()->with('error', 'Lỗi sửa issue');
            }
        } else {
            return back()->with('error', 'Không tồn tại issue này!');
        }
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
