<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('staff.index', compact('users'));
    }

    public function editProfile()
    {
        $item = User::findOrFail(Auth::id());
        return view('edit-profile', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'status' => 2,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone
        ]);

        if ($user) {
            return redirect()->route('staff.index')->with('success', 'Thêm mới nhân viên thành công!');
        } else {
            return back()->with('error', 'Lỗi thêm mới nhân viên!');
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
        $item = User::findOrFail($id);
        return view('staff.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staff = User::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|unique:users,email,' . $id,

        ]);
        $data = $request->all();
        $status = $staff->fill($data)->save();


        if ($status) {
            return redirect()->route('staff.index')->with('success', 'Sửa nhân viên thành công!');
        } else {
            return back()->with('error', 'Lỗi sửa nhân viên!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = User::findOrFail($id);
        if ($staff) {
            $status = $staff->delete();
            if ($status) {
                return redirect()->route('staff.index')->with('success', 'Xóa nhân viên thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa nhân viên!');
            }
        } else {
            return back()->with('error', 'Không tồn tại nhân viên này!');
        }
    }
}
