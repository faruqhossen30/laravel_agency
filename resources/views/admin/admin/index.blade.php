@extends('admin.layouts.app')
@section('breadcrumb')
<div class="flex justify-between">
    <x-breadcrumb pageone="Admin" />
    <x-button.button-plus route="{{ route('admin.create') }}" title="Create Admin" />
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

                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Role</th>

                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                @forelse ($admins as $admin)
                                    <tr>

                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $admins->firstItem() + $loop->index }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $admin->name }}
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $admin->email }}
                                        </td>

                                        <td
                                        class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                        @foreach ($admin->roles as $role)
                                        <x-badge title="{{$role->name}}" />
                                    @endforeach
                                    </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm">

                                            <x-table.crudactionbutton route="admin" :id="$admin->id" />
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-gray-800 dark:text-gray-200 text-center py-4">No admin found</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $admins->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
