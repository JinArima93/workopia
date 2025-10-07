<x-layout>
    <h1 class="text-3xl font-bold mb-4">Available Jobs</h1>
    <ul>
       @forelse($jobs as $job)
           <li class="mb-4 p-4 border rounded">
               <h2 class="text-xl font-semibold">{{ $job->title }}</h2>
               <p>{{ Str::limit($job->description, 100) }}</p>
               <a href="{{ route('jobs.show', $job) }}" class="text-blue-500 hover:underline">View Details</a>
           </li>
       @empty
           <li class="mb-4 p-4 border rounded">
               <p>No job listings available.</p>
           </li>
       @endforelse
    </ul>
</x-layout>