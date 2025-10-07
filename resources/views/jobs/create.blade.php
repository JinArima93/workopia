<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1 class="text-3xl font-bold mb-4">Create a New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
        <!-- Error Message for Title -->
        @error('title')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
        <!-- Error Message for Description -->
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
        <button type="submit">Submit</button>
    </form>
</x-layout>
