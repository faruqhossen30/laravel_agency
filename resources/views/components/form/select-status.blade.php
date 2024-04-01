<div class="py-1">
    <label for="status" class="text-gray-500 dark:text-gray-500">Status</label>
    <select name="status" id="status"
        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
        <option value="">Select Status</option>
        <option value="1" @if (isset($status) && $status == '1' ) selected  @endif >Active</option>
        <option value="0" @if (isset($status) && $status == '0' ) selected  @endif >Deactive</option>
    </select>
    @error('status')
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
