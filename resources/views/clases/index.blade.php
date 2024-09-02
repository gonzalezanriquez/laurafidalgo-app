<x-dashboard-layout>
    <section class="container  mx-auto px-4 ">
        <div class="flex-1 px-2 sm:px-0">
            <div class="flex justify-between items-center">
              <h3 class="text-3xl font-extralight text-white/50">Clases</h3>
              <div class="inline-flex items-center space-x-2">
                <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                </a>
                <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
              <div class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
                <a class="bg-gray-900/70 text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                </a>
                <a class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center" href="#">Crear Clases</a>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1547592180-85f173990554?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="cuisine" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">Cuisine</h4>
                <p class="text-white/50">55 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">22 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1171&q=80" alt="art" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">Art</h4>
                <p class="text-white/50">132 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">4 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1560419015-7c427e8ae5ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="gaming" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">Gaming</h4>
                <p class="text-white/50">207 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">0 Online <span class="ml-2 w-2 h-2 block bg-red-400 rounded-full group-hover:animate-pulse"></span></p>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1159&q=80" alt="cinema" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">cinema</h4>
                <p class="text-white/50">105 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">12 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1484704849700-f032a568e944?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="song" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">Song</h4>
                <p class="text-white/50">67 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">3 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="code" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">Code</h4>
                <p class="text-white/50">83 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">43 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
              </div>
              <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1533147670608-2a2f9775d3a4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="dancing" />
                <h4 class="text-white text-2xl font-bold capitalize text-center">Dancing</h4>
                <p class="text-white/50">108 members</p>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">86 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
              </div>
            </div>
        </div>


      </section>
    
</x-dashboard-layout>