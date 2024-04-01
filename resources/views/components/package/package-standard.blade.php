<div class="w-1/3">
    <div class="py-2 px-4 md:py-2 md:px-5 dark:bg-slate-900 bg-slate-200 w-full text-center">
        Standard
    </div>
    <div>
        <input type="text" name="standard_price" value="{{$package->standard_price ?? old('standard_price')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Price">
        @error('standard_price')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input type="text" name="standard_deliver_time"  value="{{$package->standard_deliver_time ?? old('standard_deliver_time')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Deliver Time">
        @error('standard_deliver_time')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea name="standard_short_description"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="3" placeholder="Shot description">{{$package->standard_short_description ?? old('standard_short_description')}}</textarea>
        @error('standard_short_description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea name="standard_full_description" id="editor2"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="7" placeholder="Full description">{{$package->standard_full_description ?? old('standard_full_description')}}</textarea>
        @error('standard_full_description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

        <input type="text" name="standard_url" value="{{$package->standard_url ?? old('standard_url')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Form Link">
        @error('standard_url')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
