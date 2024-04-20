<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Document;
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
        $documents = Document::orderBy('created_at', 'desc')->get();
        return view('document.index', compact('documents'));
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
        $status = Document::create($data);
        if ($status) {
            return redirect()->route('document.index')->with('success', 'Thêm mới tài liệu thành công!');
        } else {
            return back()->with('error', 'Lỗi thêm mới tài liệu!');
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
        $item = Document::findOrFail($id);
        $users = User::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('name', 'asc')->get();
        return view('document.edit', compact(['item', 'users', 'projects']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Document::findOrFail($id);
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
                return redirect()->route('document.index')->with('success', 'Sửa tài liệu thành công!');
            } else {
                return back()->with('error', 'Lỗi sửa tài liệu!');
            }
        } else {
            return back()->with('error', 'Không tồn tại tài liệu này!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Document::findOrFail($id);
        if ($report) {
            $status = $report->delete();
            if ($status) {
                return redirect()->route('document.index')->with('success', 'Xóa tài liệu thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa tài liệu!');
            }
        } else {
            return back()->with('error', 'Không tồn tại tài liệu này!');
        }
    }
}
