@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Service Faq" pageoneRoute="{{ route('service.index') }}" pagetwo="Create" />
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
                    <form action="{{ route('service.faq.store', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div>
                                <h3 class="p-2 font-bold">Create FAQ for Your Service</h3>
                                <x-form.input label="Question" name="question" />
                                <x-form.textarea label="Answer" name="answer" />

                                <div>
                                    <button type="button" id="addButton"
                                        class="py-1 my-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        placeholder="Starter">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2V2Z" />
                                            <path
                                                d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z" />
                                        </svg>

                                        Add New
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 table-fixed">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                            Question</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                            Answer</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="simple-list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                                    @foreach ($faqs as $faq)
                                                        <tr>
                                                            <input type="hidden" name="question[]" value="{{$faq->question}}">
                                                            <input type="hidden" name="answer[]" value="{{$faq->question}}">

                                                            <td
                                                                class="px-2 py-1 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                                {{$faq->question}}</td>
                                                            <td
                                                                class="px-2 py-1 whitespace-normal text-sm text-gray-800 dark:text-gray-200 flex justify-between items-center">
                                                                {{$faq->answer}}
                                                                <span
                                                                    class="bg-red-500 p-1 rounded-full text-white cursor-pointer close-icon">x</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('plugin/Sortable.min.js') }}"></script>
    <script src="{{ asset('js/sortablejs.js') }}"></script>

    <script>
        $(document).ready(function() {
            let num = 0;
            $(document).on('click', '#addButton', function() {
                num++;
                let question = $('input[name="question"]').val();
                let answer = $('textarea[name="answer"]').val();

                $('#simple-list').append(`
                <tr>
                    <input type="hidden" name="question[]" value="${question}">
                    <input type="hidden" name="answer[]" value="${answer}">
                    <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">${question}</td>
                    <td class="px-2 py-1 whitespace-normal text-sm text-gray-800 dark:text-gray-200 flex justify-between items-center">
                        ${answer}
                        <span class="bg-red-500 p-1 rounded-full text-white cursor-pointer close-icon">x</span>
                    </td>
                </tr>
            `);
                $('input[name="question"]').val('');
                $('textarea[name="answer"]').val('');
            });

            $(document).on('click', '.close-icon', function() {
                $(this).parent().parent().remove();
            });
        });
    </script>
@endpush







