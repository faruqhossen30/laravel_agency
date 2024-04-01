<div class="w-1/3">
    <div class="py-2 px-4 md:py-2 md:px-5 dark:bg-slate-900 bg-slate-200 w-full text-center">
        Starter
    </div>
    <div>
        <input type="text" name="starter_price" value="{{$package->starter_price ?? old('starter_price')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Price">
        @error('starter_price')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input type="text" name="starter_deliver_time"  value="{{$package->starter_deliver_time ?? old('starter_deliver_time')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Deliver Time">
        @error('starter_deliver_time')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea name="starter_short_description"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="3" placeholder="Shot description">{{$package->starter_short_description ?? old('starter_short_description')}}</textarea>
        @error('starter_short_description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea name="starter_full_description" id="editor"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="7" placeholder="Full description">{{$package->starter_full_description ?? old('starter_full_description')}}</textarea>
        @error('starter_full_description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input type="text" name="starter_url" value="{{$package->starter_url ?? old('starter_url')}}"
            class="py-3 px-2 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Form Link">
        @error('starter_url')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
