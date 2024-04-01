@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="product" />
        <x-button.button-plus route="{{ route('product.create') }}" title="Create Product" />
    </div>
@endsection
@section('content')
    <div class="flex flex-row-reverse py-2">

    </div>
    <div class="bg-white dark:bg-transparent ">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden border rounded-lg dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-gray-400">
                                        Photo</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-gray-400">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($products as $product)
                                    <tr>
                                        <td
                                            class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $products->firstItem() + $loop->index }}
                                        </td>

                                        <td
                                            class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            <img src="{{ asset('uploads/products/' . $product->thumbnail) }}" class="w-auto h-6"
                                                alt="">
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $product->title }}
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">

                                            <x-table.crudactionbutton route="sub-category" :id="$product->id" />

                                        </td>

                                    </tr>
                                @empty
                                    <td colspan="3"
                                        class="px-6 py-4 text-sm font-medium text-center text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        Product is empty.
                                    </td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
