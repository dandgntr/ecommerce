<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        // Sample data for users (normally, you'd get this data from the database)
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin', 'joined_at' => '2022-05-15'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'User', 'joined_at' => '2022-07-20'],
            ['name' => 'Alen Doe', 'email' => 'alen@example.com', 'role' => 'User', 'joined_at' => '2022-07-21'],
        ];

        // Pass the users data to the view
        return view('dash.akun', ['users' => $users]);
    }
}
