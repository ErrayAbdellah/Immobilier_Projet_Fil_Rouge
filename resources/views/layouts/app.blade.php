<div class="p-4 pt-10 min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
