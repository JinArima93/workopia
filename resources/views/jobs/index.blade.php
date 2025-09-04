<x-layout>
    <x-slot name="title">Job Listings</x-slot>
    <h1 class="text-3xl font-bold mb-4">Job Listings</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job['title'] }}</li>
        @endforeach
    </ul>
</x-layout>