<div class="flex">
    <input type="checkbox" name="permission_ids[]" @if(isset($array)) @checked(in_array($id, $array)) @endif
        value="{{ $id }}"
        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
        id="hs-checked-{{ $title }}">
    <label for="hs-checked-{{ $title }}"
        class="text-sm text-gray-800 ms-3 dark:text-gray-200">{{ $title }}</label>
</div>
