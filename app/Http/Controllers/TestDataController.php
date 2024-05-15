<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
      
class TestDataController extends Controller
{
    public function index()
    {
        $TestDatavar = TestData::all();
        return response()->json([
            'status' => true,
            'message' => 'TestData retrieved successfully',
            'data' => $TestDatavar
        ], 200);
    }

    public function show($id)
    {
        $TestDatavar = TestData::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'TestData found successfully',
            'data' => $TestDatavar
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $TestDatavar = TestData::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'TestData created successfully',
            'data' => $TestDatavar
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $TestDatavar = TestData::findOrFail($id);
        $TestDatavar->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'TestData updated successfully',
            'data' => $TestDatavar
        ], 200);
    }

    public function destroy($id)
    {
        $TestDatavar = TestData::findOrFail($id);
        $TestDatavar->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'TestData deleted successfully'
        ], 204);
    }
}
