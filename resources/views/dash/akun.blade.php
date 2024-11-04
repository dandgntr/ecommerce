@extends('homedash')

@section('title', 'Akun')

@section('content')
<div class="font-sans overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100 whitespace-nowrap">
          <tr>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Email
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Role
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Joined At
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Actions
            </th>
          </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
          @foreach($users as $user)
          <tr>
            <td class="px-4 py-4 text-sm text-gray-800">
              {{ $user['name'] }}
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              {{ $user['email'] }}
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              {{ $user['role'] }}
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              {{ $user['joined_at'] }}
            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <button class="text-blue-600 mr-4">Edit</button>
              <button class="text-red-600">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection