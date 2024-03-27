<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:projects,code',
            'name' => 'required',
            'execution_time' => 'required|date',
            'description' => 'string|nullable',
            'status' => 'nullable|in:active,pending,done',
        ]);
        $data = $request->all();
        $status = Project::create($data);
        if ($status) {
            return redirect()->route('project.index')->with('success', 'Thêm mới dự án thành công!');
        } else {
            return back()->with('error', 'Lỗi thêm mới dự án!');
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
        $project = Project::findOrFail($id);

        if ($project->numberOfIssues->count() || $project->numberOfReport->count()) {
            return back()->with('error', 'Đang có issue hoặc báo cáo tham gia dự án này!');
        }
        if ($project) {
            $status = $project->delete();
            if ($status) {
                return redirect()->route('project.index')->with('success', 'Xóa dự án thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa dự án!');
            }
        } else {
            return back()->with('error', 'Không tồn tại dự án này!');
        }
    }
}
