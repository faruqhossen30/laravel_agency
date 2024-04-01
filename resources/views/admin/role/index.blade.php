@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Role" />
        <x-button.button-plus route="{{ route('role.create') }}" title="Create Role" />
    </div>
@endsection
@section('content')
    <div class="flex flex-row-reverse py-2">
    </div>
    <div class="bg-white dark:bg-transparent ">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Permission</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($roles as $role)
                                    <tr>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $roles->firstItem() + $loop->index }}</td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $role->name }}
                                        </td>
                                        <td class="px-4 space-y-2 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            @foreach ($role->permissions as $perm)
                                                <x-badge title="{{ $perm->name }}" />
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 text-end text-sm font-medium  whitespace-nowrap">

                                            <x-table.crudactionbutton route="role" :id="$role->id" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-gray-800 dark:text-gray-200 text-center py-4">No data
                                            found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
