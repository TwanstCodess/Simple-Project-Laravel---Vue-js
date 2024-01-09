<x-splade-form>
    <x-splade-input name="search" />

    <x-splade-teleport to="#footer">
        You are searching for: <span v-text="form.search" />
    </x-splade-teleport>
</x-splade-form>

<div id="footer" class="p-4 bg-green-500 text-white" />
