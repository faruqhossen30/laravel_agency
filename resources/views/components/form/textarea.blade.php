<div class="space-y-1 py-2">

    <label for="{{$name}}" class="text-gray-500 dark:text-gray-500 text-sm font-medium mb-2 "> {{$label}}</label>
    <textarea id="{{$name}}" name="{{$name}}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="3" placeholder="Your text here">{{$value ?? old($name)}}</textarea>

    @error($name)
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>

