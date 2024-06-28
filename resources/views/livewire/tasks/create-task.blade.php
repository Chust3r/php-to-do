<section class="grid h-screen w-full place-content-center">
    <div>
        <h1 class="my-3 text-3xl font-bold">Create Task</h1>
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
                    <span class="my-2 text-xs text-error">{{ $message }}</span>
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
            <div>
                @error("description")
                    <span class="my-2 text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Task priority</span>
            </div>
            <select wire:model="priority" class="select select-bordered">
                <option selected value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
                <option value="urgent">Urgent</option>
            </select>
            <div>
                @error("priority")
                    <span class="my-2 text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>
        <button class="btn" type="submit">Create new task</button>
    </form>
</section>
