<!-- Navigation Toggle -->
<div class="lg:hidden py-16 text-center">
    <button type="button"
        class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-start bg-gray-800 border border-gray-800 text-white text-sm font-medium rounded-lg shadow-sm align-middle hover:bg-gray-950 focus:outline-none focus:bg-gray-900 dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200"
        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-header" aria-label="Toggle navigation"
        data-hs-overlay="#hs-sidebar-header">
        Open
    </button>
</div>
<!-- End Navigation Toggle -->

<!-- Sidebar -->
<div id="hs-sidebar-header"
    class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-64
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  h-full
  hidden
  fixed top-0 start-0 bottom-0 z-[60]
  bg-white border-e border-gray-200 dark:bg-neutral-800 dark:border-neutral-700"
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full ">
        <!-- Header -->
        <header class="p-4 flex justify-between items-center">
            <div class="flex items-center gap-x-3">
                <img src="{{ asset('image/logos/Group.svg') }}" alt="Logo ClickME" class="w-8 h-8">
                <a class="font-bold text-2xl text-black dark:text-white" href="#" aria-label="Brand">
                    Click <span class="text-blue-400">ME</span>
                </a>
            </div>

            <div class="lg:hidden -me-2">
                <!-- Close Button -->
                <button type="button"
                    class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                    data-hs-overlay="#hs-sidebar-header">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                        strokeLinejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
                <!-- End Close Button -->
            </div>
        </header>

        <!-- End Header -->

        <!-- Header -->
        <div class="mt-auto p-2 border-y border-gray-200 dark:border-neutral-700">
            <!-- Account Dropdown -->
            <div class="hs-dropdown [--strategy:absolute] [--auto-close:inside] relative w-full inline-flex">
                <button id="hs-sidebar-header-example-with-dropdown" type="button"
                    class="w-full inline-flex shrink-0 items-center gap-x-2 p-2 text-start text-sm text-gray-800 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <img class="shrink-0 size-5 rounded-full"
                        src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('image/default-user-preview.png') }}"
                        alt="Avatar">
                    {{-- Mia Hudson --}}
                    {{ Auth::user()->name }}
                    <svg class="shrink-0 size-3.5 ms-auto" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                        strokeLinecap="round" strokeLinejoin="round">
                        <path d="m7 15 5 5 5-5" />
                        <path d="m7 9 5-5 5 5" />
                    </svg>
                </button>

                <!-- Account Dropdown -->
                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-neutral-900 dark:border-neutral-700"
                    role="menu" aria-orientation="vertical"
                    aria-labelledby="hs-sidebar-header-example-with-dropdown">
                    <div class="p-1">
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="{{ url('/accountSetting') }}">
                            My account
                        </a>
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="{{ url('/accountSetting') }}">
                            Settings
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button
                                class="flex w-full items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-300 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-red-500 dark:focus:bg-neutral-800"
                                type="submit">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End Account Dropdown -->
            </div>
            <!-- End Account Dropdown -->
        </div>
        <!-- End Header -->

        <!-- Body -->
        <nav
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <div class="hs-accordion-group pb-0 px-2 pt-2 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1">
                    <li>
                        <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300"
                            href="{{ url('/home') }}">
                            <x-ri-dashboard-fill class="size-4"/>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300"
                            href="{{ url('/calendar') }}">
                            <x-bi-calendar-fill class="size-4"/>
                            Calendar
                            {{-- <span class="ms-auto py-0.5 px-1.5 inline-flex items-center gap-x-1.5 text-xs bg-gray-200 text-gray-800 rounded-full dark:bg-neutral-600 dark:text-neutral-200">New</span> --}}
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300"
                            href="{{ url('/kanban') }}">
                            <x-bi-kanban-fill class="size-4"/>
                            Kanban
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300"
                            href="#">
                            {{-- <x-bi-kanban-fill class="size-4"/> --}}
                            <img src="{{ asset('/icon/docs.svg') }}" class="size-4" alt="">
                            Docs
                        </a>
                    </li>
                    
                    <li class="border-y border-gray-200 dark:border-neutral-700 h-full group">
                        <a type="button"
                            class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300"
                            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal"
                            data-hs-overlay="#hs-scale-animation-modal">
                            <x-eva-plus class="size-4" />
                            Create new list
                        </a>
                    </li>
                    {{-- <hr class="border-gray-200 dark:border-neutral-700"> --}}
                </ul>
            </div>

            <div class="sidebar p-4 bg-white dark:bg-neutral-800">
                <h2 class="text-lg font-bold mb-4 text-gray-800 dark:text-white">Spaces List</h2>
              
                @if ($spaces && $spaces->count())
                  <!-- Gunakan div untuk container, bukan ul -->
                  <div class="space-y-2">
                    @foreach ($spaces as $space)
                      <!-- Container relatif untuk mengatur posisi tombol dropdown -->
                      <div class="relative">
                        <!-- Tombol utama untuk navigasi ke space -->
                        <button 
                          type="button"
                          onclick="window.location='{{ route('space.show', $space->id) }}'"
                          class="w-full text-left flex items-center py-2 px-2.5 pr-10 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300">
                          <span class="block text-gray-900 dark:text-white">{{ $space->title }}</span>
                        </button>
              
                        <!-- Tombol dropdown untuk menampilkan menu setting -->
                        <button 
                          id="dropdownMenuIconButton-{{ $space->id }}" 
                          data-dropdown-toggle="dropdownDots-{{ $space->id }}"
                          title="Setting"
                          type="button"
                          class="absolute right-2 top-1/2 transform -translate-y-1/2 p-2 text-sm text-gray-900  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50  dark:hover:bg-neutral-600 dark:focus:ring-gray-600">
                          <svg class="size-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                          </svg>
                        </button>
              
                        <!-- Dropdown menu -->
                        <div id="dropdownDots-{{ $space->id }}"
                             class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600 absolute right-2 mt-2">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                              aria-labelledby="dropdownMenuIconButton-{{ $space->id }}">
                            <li>
                              <a href="#"
                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Edit
                              </a>
                            </li>
                            <li>
                              <a href="#"
                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    @endforeach
                  </div>
                @else
                  <p class="text-gray-600 dark:text-gray-300">No spaces available.</p>
                @endif
              </div>
              
            
            

            
            </div>
            
        </nav>
        <!-- End Body -->
    </div>
</div>
<!-- End Sidebar -->
