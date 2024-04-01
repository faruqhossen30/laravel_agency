@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="User" />
        <x-button.button-plus route="{{ route('user.create') }}" title="Create User" />
    </div>
@endsection
@section('content')
    <div class="flex flex-row-reverse py-2">
        {{-- <x-button.button-icon-link route="{{ route('admin.create') }}" title="Create Admin" /> --}}


    </div>
    <div class="bg-white dark:bg-transparent">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Email</th>

                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Role</th> --}}

                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                @forelse ($users as $user)
                                    <tr>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $users->firstItem() + $loop->index }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->email }}
                                        </td>

                                        {{-- <td
                                        class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                        @foreach ($user->roles as $role)
                                        <x-badge title="{{$role->name}}" />
                                    @endforeach
                                    </td> --}}

                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm">

                                            <x-table.crudactionbutton route="user" :id="$user->id" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-gray-800 dark:text-gray-200 text-center py-4">No
                                            user found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
