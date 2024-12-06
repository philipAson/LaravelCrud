<x-layout>
    <x-slot:heading>
        JOB LISTINGS
    </x-slot:heading>

    <h2 class="font-bold text-large">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
