<div class="max-w-7xl mx-auto px-4 sm:px-6">
  <div class="flex justify-between items-center py-6 lg:justify-start lg:space-x-10">
    <div class="flex justify-start lg:w-0 lg:flex-1">
      <a href="#">
        <span class="sr-only">First Christian Church</span>
        <img class="h-8 w-auto sm:h-10" src="/images/FCCLogo.jpg" alt="">
      </a>
    </div>
    <div class="-mr-2 -my-2 lg:hidden">
      <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false" @click="open = true">
        <span class="sr-only">Open menu</span>
        <!-- Heroicon name: outline/menu -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <nav class="hidden lg:flex lg:space-x-10">

      <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
      Plan A Visit
    </a>
      <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
        Events/Announcements
      </a>

      <div class="relative" x-data="{ resources: false }">
        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
        <button type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" aria-expanded="false" @click="resources = !resources">
          <span>Resources</span>
          <!--
            Heroicon name: solid/chevron-down

            Item active: "text-gray-600", Item inactive: "text-gray-400"
          -->
          <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>

        <!--
          'More' flyout menu, show/hide based on flyout menu state.

          Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
          Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->
        <div class="absolute left-1/2 z-10 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0" x-show="resources" @click.outside="resources = false">
          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
              <!--
              <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
              </svg>
              <div class="ml-4">
                <p class="text-base font-medium text-gray-900">
                  Sermons
                </p>
                <p class="mt-1 text-sm text-gray-500">
                  Listen to past sermons.
                </p>
              </div>
              -->
            </a>
              <a href="/leadership" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                <!-- Heroicon name: outline/support -->
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <div class="ml-4">
                  <p class="text-base font-medium text-gray-900">
                    Leadership
                  </p>
                  <p class="mt-1 text-sm text-gray-500">
                    Meet our pastors and staff.
                  </p>
                </div>
              </a>

              <a href="/ministries" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                <!-- Heroicon name: outline/bookmark-alt -->
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <div class="ml-4">
                  <p class="text-base font-medium text-gray-900">
                    Ministries
                  </p>
                  <p class="mt-1 text-sm text-gray-500">
                    Find a ministry to take part in.
                  </p>
                </div>
              </a>

              <a href="/beliefs" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                <!-- Heroicon name: outline/calendar -->
                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div class="ml-4">
                  <p class="text-base font-medium text-gray-900">
                    Beliefs
                  </p>
                  <p class="mt-1 text-sm text-gray-500">
                    An overview of what our church believes and teaches.
                  </p>
                </div>
              </a>

              <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                <!-- Heroicon name: outline/shield-check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <div class="ml-4">
                  <p class="text-base font-medium text-gray-900">
                    Newsletter
                  </p>
                  <p class="mt-1 text-sm text-gray-500">
                    Read our weekly newsletter.
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="hidden lg:flex items-center justify-end lg:flex-1 lg:w-0">
      <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
        Give Online
      </a>
      <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-800 hover:bg-blue-700">
        Watch Live
      </a>
    </div>
  </div>
</div>
