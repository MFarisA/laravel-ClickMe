<div id="hs-scale-animation-modal" class="hs-overlay hidden fixed inset-0 z-[80] overflow-y-auto bg-black/60 backdrop-blur-sm">
  <div class="flex min-h-screen items-center justify-center p-4">
      <div class="w-full max-w-lg transform rounded-xl bg-white shadow-2xl transition-all dark:bg-neutral-900">
          <div class="border-b border-neutral-200 p-6 dark:border-neutral-700">
              <div class="flex justify-between">
                  <div>
                      <h3 class="text-xl font-semibold text-neutral-900 dark:text-white">Create a space</h3>
                      <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-400">
                          A Space represents teams, departments, or groups, each with its own List, workflow, and setting.
                      </p>
                  </div>
                  <button type="button" class="inline-flex size-8 items-center justify-center rounded-lg text-neutral-500 hover:bg-neutral-100 hover:text-neutral-700 focus:outline-none dark:text-neutral-400 dark:hover:bg-neutral-800" data-hs-overlay="#hs-scale-animation-modal">
                      <span class="sr-only">Close</span>
                      <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </button>
              </div>
          </div>

          <form class="p-6" action="{{ route('space.store') }}" method="POST">
              @csrf
              <div class="space-y-6">
                  <div>
                      <label for="title" class="text-sm font-medium text-neutral-900 dark:text-white">Title</label>
                      <div class="mt-2 flex items-center space-x-2">
                          <!-- Input color picker -->
                          <input type="color" id="color" name="color" value="#ff0000" class="h-10 w-10 rounded-lg border border-neutral-300 p-0" />
                          <!-- Input title -->
                          <input type="text" id="title" name="title" required 
                              class="flex-1 block rounded-lg border border-neutral-300 px-4 py-3 text-neutral-900 shadow-sm ring-4 ring-transparent transition placeholder:text-neutral-500 focus:border-blue-500 focus:outline-none focus:ring-blue-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:placeholder:text-neutral-400"
                              placeholder="Enter space title" />
                      </div>
                  </div>
                  <div>
                      <label for="description" class="text-sm font-medium text-neutral-900 dark:text-white">Description</label>
                      <textarea id="description" name="description" rows="4" 
                          class="mt-2 block w-full rounded-lg border border-neutral-300 px-4 py-3 text-neutral-900 shadow-sm ring-4 ring-transparent transition placeholder:text-neutral-500 focus:border-blue-500 focus:outline-none focus:ring-blue-500/10 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:placeholder:text-neutral-400"
                          placeholder="Enter space description"></textarea>
                  </div>
              </div>

              <div class="mt-6 flex justify-end border-t border-neutral-200 pt-6 dark:border-neutral-700">
                  <button type="submit" 
                      class="inline-flex items-center rounded-lg bg-exo-purple px-5 py-2.5 text-center text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500/20 disabled:opacity-50">
                      Create Space
                  </button>
              </div>
          </form>
      </div>
  </div>
</div>
