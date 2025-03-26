<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:1,0',
        ]);

        $data = [
        'title' => isset($request->title) ? $request->title : "",
        'content' => isset($request->content) ? $request->content : "",
        'status' => isset($request->status) ? $request->status : 0,
        ];

        if ($request->id) {

            $service = Service::find($request->id);

            if ($service) {

                $service->update($data);

                return response()->json(['success' => true, 'message' => 'Service updated successfully!', 'type' => 'update']);
            }
        } else {

            $service = Service::create($data);

            return response()->json(['success' => true, 'message' => 'Service added successfully!', 'type' => 'insert']);
        }

        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }

    public function fetch(Request $request)
    {
        $services = Service::where('isdelete', 0)->select(['id', 'title', 'content', 'status', 'created_at']);
        return DataTables::of($services)
            ->editColumn('status', function ($row) {
                return $row->status == 1 ? 'Active' : 'Inactive';
            })
            ->addColumn('action', function ($row) {
                return '
                <button class="btn btn-primary btn-sm edit" data-id="' . $row->id . '">Edit</button>
                <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">Delete</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        if ($service) {
            return response()->json(['success' => true, 'data' => $service]);
        }
        return response()->json(['success' => false, 'message' => 'Service not found!']);
    }

    public function destroy(Request $request)
    {
        $service = Service::find($request->id);
        if ($service) {
            $service->update(['isdelete' => 1]); // Mark as deleted
            return response()->json(['success' => true, 'message' => 'Service deleted successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'Service not found!']);
    }
}
