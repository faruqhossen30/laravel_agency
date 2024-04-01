<div class="w-1/3">
    <div class="py-2 px-4 md:py-2 md:px-5 dark:bg-slate-900 bg-slate-200 w-full text-center">
        Advance
    </div>
    <div>
        <input type="text" name="advance_price" value="{{$package->advance_price ?? old('advance_price')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Price">
        @error('advance_price')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input type="text" name="advance_deliver_time"  value="{{$package->advance_deliver_time ?? old('advance_deliver_time')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Deliver Time">
        @error('advance_deliver_time')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea name="advance_short_description"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="3" placeholder="Shot description">{{$package->advance_short_description ?? old('advance_short_description')}}</textarea>
        @error('advance_short_description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea name="advance_full_description" id="editor3"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="7" placeholder="Full description">{{$package->advance_full_description ?? old('advance_full_description')}}</textarea>
        @error('advance_full_description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input type="text" name="advance_url" value="{{$package->advance_url ?? old('advance_url')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Form Link">
        @error('advance_url')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
