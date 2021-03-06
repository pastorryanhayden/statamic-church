<!--
  Mobile menu, show/hide based on mobile menu state.

  Entering: "duration-200 ease-out"
    From: "opacity-0 scale-95"
    To: "opacity-100 scale-100"
  Leaving: "duration-100 ease-in"
    From: "opacity-100 scale-100"
    To: "opacity-0 scale-95"
-->
<div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right lg:hidden" x-show="open">
  <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
    <div class="pt-5 pb-6 px-5">
      <div class="flex items-center justify-between">
        <div>
          <img class="h-8 w-auto" src="/images/FCCLogo.jpg" alt="Workflow">
        </div>
        <div class="-mr-2">
          <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" @click="open = false">
            <span class="sr-only">Close menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
      <div class="mt-6">
        <nav class="grid gap-y-8">
          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
            <!-- Heroicon name: outline/chart-bar -->
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>

            <span class="ml-3 text-base font-medium text-gray-900">
              Plan A Visit
            </span>
          </a>

          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
            <!-- Heroicon name: outline/cursor-click -->
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="ml-3 text-base font-medium text-gray-900">
              Events and Announcements
            </span>
          </a>

<!--
          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">

            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
            </svg>
            <span class="ml-3 text-base font-medium text-gray-900">
              Sermons
            </span>
          </a>
          -->
        </nav>
      </div>
    </div>
    <div class="py-6 px-5 space-y-6">
      <div class="grid grid-cols-2 gap-y-4 gap-x-8">
        <a href="/leadership" class="text-base font-medium text-gray-900 hover:text-gray-700">
          Leadership
        </a>

        <a href="/beliefs" class="text-base font-medium text-gray-900 hover:text-gray-700">
          Beliefs
        </a>

        <a href="/ministries" class="text-base font-medium text-gray-900 hover:text-gray-700">
          Ministries
        </a>

        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
          Newsletter
        </a>

      </div>
      <div>
        <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-700 hover:bg-blue-600">
          Give Online
        </a>
        <p class="mt-6 text-center text-base font-medium text-gray-500">
          <a href="#" class="text-blue-700 hover:text-blue-600">
            Watch Live
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
