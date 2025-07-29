<!-- resources/views/projects/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Projects
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <a href="{{ route('projects.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white rounded">
                + New Project
            </a>

            @if ($projects->count())
            <ul class="list-disc pl-6">
                @foreach ($projects as $project)
                <li class="mb-2">
                    <a href="{{ route('projects.show', $project) }}" class="text-blue-600 underline">
                        {{ $project->title }}
                    </a>
                </li>
                @endforeach
            </ul>
            @else
            <p>No projects found.</p>
            @endif
        </div>
    </div>
</x-app-layout>