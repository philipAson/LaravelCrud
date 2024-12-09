<x-layout>
    <x-slot:heading>
        JOB LISTINGS
    </x-slot:heading>

    <h2 class="font-bold text-large">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>

</x-layout>
