<x-layout>
    <x-slot:heading>
        JOB LISTINGS
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}</strong> - {{ $job['salary'] }}
            </a>
        </li>
    @endforeach
</x-layout>
