<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->get();
        return view('report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('report.create', compact('users', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'code' => 'required|unique:reports,code',
            'title' => 'required',
            'created_date' => 'required|date',
            'file_path' => 'required|max:2048',
            'user_id' => 'required',
            'project_id' => 'required',
            'description' => 'string|nullable',
        ]);
        $file = $request->file('file_path');
        $destinationPath = 'public/file/';
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);
//        $filePath = $file->store('uploads', 'public');

        $data = $request->all();
        $data['file_path'] = $fileName;
        $status = Report::create($data);
        if ($status) {
            return redirect()->route('report.index')->with('success', 'Thêm mới báo cáo thành công!');
        } else {
            return back()->with('error', 'Lỗi thêm mới báo cáo!');
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
        $report = Report::findOrFail($id);
        if ($report) {
            $status = $report->delete();
            if ($status) {
                return redirect()->route('report.index')->with('success', 'Xóa báo cáo thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa báo cáo!');
            }
        } else {
            return back()->with('error', 'Không tồn tại báo cáo này!');
        }
    }
}
