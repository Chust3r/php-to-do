<section class="grid h-screen w-full place-content-center">
    <div>
        <h1 class="my-3 text-3xl font-bold">Edit Task</h1>
    </div>
    <form wire:submit="save" class="flex w-[450px] flex-col gap-4">
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Task name</span>
            </div>
            <input
                wire:model="title"
                type="text"
                placeholder="Task name"
                class="input input-bordered w-full"
            />
            <div>
                @error("title")
                    <span class="text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Task description</span>
            </div>
            <textarea
                wire:model="description"
                class="textarea textarea-bordered h-24"
                placeholder="Description"
            ></textarea>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Task priority</span>
            </div>
            <select wire:model="priority" class="select select-bordered">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
                <option value="urgent">Urgent</option>
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Task status</span>
            </div>
            <select wire:model="status" class="select select-bordered">
                <option selected value="pending">Pending</option>
                <option value="in-progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </label>
        <button class="btn" type="submit">Save changes</button>
    </form>
</section>
