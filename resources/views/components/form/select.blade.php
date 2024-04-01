<div class="py-1">
    <label for="{{$name}}" class="text-gray-500 dark:text-gray-500">{{$label}}</label>
    <select name="{{$name}}" id="{{$name}}"
        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
        <option value="">Select</option>
        @foreach ($data as $item)
            <option value="{{ $item->id }}" @if( isset($id) && $item->id == $id) selected @endif >{{ $item->name }}</option>
        @endforeach
    </select>
    @error('{{$name}}')
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
