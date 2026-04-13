<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.list');
    }

    public function show($id)
    {
        $data = [
            'id' => $id,
            'customer_name' => 'John Doe',
            'total' => 99.99,
            'status' => 'Processing',
        ];
        return view('admin.orders.detail', $data);
    }

    public function edit($id)
    {
        return view('admin.orders.edit', ['id' => $id]);
    }

    public function update($id)
    {
        return "Update Admin Order ID: " . $id . " from Controller";
    }

    public function delete($id)
    {
        return "Delete Admin Order ID: " . $id . " from Controller";
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store()
    {
        return "Store New Admin Order from Controller";
    }
}
