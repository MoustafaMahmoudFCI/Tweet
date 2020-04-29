<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                {{-- left side --}}
                <div class="lg:w-32">
                    @include('inc._sidebar-links')
                </div>

                {{-- main --}}
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                    {{ $slot }}
                </div>

                <!-- Right side-->
                <div class="lg:w-1/5">
                    @include('inc._friends-list')
                </div>
            </div>
        </main>
    </section>
</x-master>
