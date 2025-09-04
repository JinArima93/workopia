<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1 class="text-3xl font-bold mb-4">Create a New Job</h1>
    <form >
        @csrf
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" required>
        <button type="submit">Create Job</button>
    </form>
</x-layout>
