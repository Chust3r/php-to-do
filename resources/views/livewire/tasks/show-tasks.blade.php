<div class="h-screen w-full overflow-hidden px-5 py-8">
    <div class="flex justify-between">
        <h1 class="text-3xl font-bold">
            Tasks
            <span>({{ $tasks->count() }})</span>
        </h1>
        <button class="btn btn-ghost" wire:click="create">New Task</button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="min-w-28">Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th class="min-w-24 text-center">Status</th>
                <th class="w-36 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr wire:key="{{ $task->id }}">
                    <td>
                        <h2 class="line-clamp-2">{{ $task->title }}</h2>
                    </td>
                    <td>
                        <p class="line-clamp-2">{{ $task->description }}</p>
                    </td>
                    <td class="capitalize">{{ $task->priority }}</td>
                    <td>
                        <div class="flex justify-center">
                            @switch($task->status)
                                @case("pending")
                                    <span class="badge badge-neutral text-xs">
                                        Pending
                                    </span>

                                    @break
                                @case("in-progress")
                                    <span class="badge badge-warning text-xs">
                                        In Progress
                                    </span>

                                    @break
                                @case("completed")
                                    <span class="badge badge-success text-xs">
                                        Completed
                                    </span>

                                    @break
                                @default
                                    <span class="badge badge-error text-xs">
                                        Error
                                    </span>
                            @endswitch
                        </div>
                    </td>
                    <td class="flex justify-center gap-2">
                        <button
                            type="button"
                            class="btn btn-ghost btn-sm"
                            wire:click="edit({{ $task->id }})"
                        >
                            Edit
                        </button>
                        <span
                            type="button"
                            class="btn btn-ghost btn-sm"
                            wire:click="delete({{ $task->id }})"
                        >
                            Delete
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tfoot></tfoot>
    </table>
</div>
