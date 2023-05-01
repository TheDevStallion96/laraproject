<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-full mx-auto sm:px-6 lg:px-10">
            <a href="{{ route('projects.create') }}" class="button-link mb-6">Create</a>
            <table class="default-table bg-white shadow-md rounded">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>
                                <span class="">{{ $project->name }}</span> -
                                <span class="">{{ $project->description }}</span>
                            </td>
                            <td>
                                <a href="{{ route('projects.show', $project->id) }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
