<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->get();
        return view('document.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('document.create', compact('users', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
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
        $data = $request->all();
        $data['file_path'] = $fileName;
        $data['code'] = 'BC-' . time();
        $status = Report::create($data);
        if ($status) {
            return redirect()->route('document.index')->with('success', 'Thêm mới báo cáo thành công!');
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
        $item = Report::findOrFail($id);
        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('docment.edit', compact(['item', 'users', 'projects']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::findOrFail($id);
        if ($report) {
            $this->validate($request, [
                'title' => 'required',
                'created_date' => 'required|date',
                'file_path' => 'max:2048',
                'user_id' => 'required',
                'project_id' => 'required',
                'description' => 'string|nullable',
            ]);
            $data = $request->all();
            $file = $request->file('file_path');
            if ($file) {
                $destinationPath = 'public/file/';
                $fileName = $file->getClientOriginalName();
                $file->move($destinationPath, $fileName);
                $data['file_path'] = $fileName;
            }
            $status = $report->fill($data)->save();
            if ($status) {
                return redirect()->route('document.index')->with('success', 'Sửa báo cáo thành công!');
            } else {
                return back()->with('error', 'Lỗi sửa báo cáo!');
            }
        } else {
            return back()->with('error', 'Không tồn tại báo cáo này!');
        }
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
                return redirect()->route('document.index')->with('success', 'Xóa báo cáo thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa báo cáo!');
            }
        } else {
            return back()->with('error', 'Không tồn tại báo cáo này!');
        }
    }
}
