<x-guest-layout>
    <div class="bg-gray-100 min-h-screen p-4 mt-10">
    <section class="py-10 ">

        <div class="py-2 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h2 class="text-5xl text-center text-black font-semibold font-custom mb-10 text-center ">Sobre mí</h2>

            <p class="text-black mb-5 text-center sm:text-left">Laura Fidalgo es una destacada <strong>bailarina, coreógrafa y actriz argentina</strong>, reconocida en el mundo del espectáculo por su pasión, destreza y versatilidad en el arte de la danza. Con una <strong>trayectoria de más de 30 años</strong>. Ha trabajado con grandes maestros y ha dejado su marca en escenarios y programas a nivel nacional e internacional. Ha fundado y dirigido escuelas de arte y danza en distintos puntos del país. Productora, directora y coreógrafa de sus espectáculos, transmitiendo su pasión y su amor por el arte.</p>   
             <p class="text-black mb-5 text-center sm:text-left">Su estilo abarca desde la danza clásica y el tango hasta el jazz y los ritmos latinos, fusionando técnica con una expresión artística inigualable. Laura también ha trabajado como coreógrafa para diversas producciones teatrales y eventos, aportando su visión creativa y su pasión por el movimiento. Como docente, comparte su conocimiento y experiencia, inspirando a nuevas generaciones a descubrir la magia de la danza y a desarrollar sus talentos en un ambiente de excelencia y dedicación. Su compromiso con la formación de jóvenes bailarines y su influencia en la comunidad de la danza hacen de Laura Fidalgo una figura clave en el panorama artístico argentino.</p>
           
            {{-- FOTOS --}}
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-4 mb-10">
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/1.jpg')}}"
                    alt="gallery-photo" />
                </div>
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/11.jpg')}}"
                    alt="gallery-photo" />
                </div>
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/5.jpg')}}"
                    alt="gallery-photo" />
                </div>
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/2.jpg')}}"
                    alt="gallery-photo" />
                </div>
            {{-- horizontales --}}
                <div>
                    <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                      src="{{asset('images/sobremi/13.jpg')}}"
                      alt="gallery-photo" />
                  </div>
                  <div>
                      <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                        src="{{asset('images/sobremi/14.jpg')}}"
                        alt="gallery-photo" />
                    </div>
                    <div>
                      <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                        src="{{asset('images/sobremi/9.jpg')}}"
                        alt="gallery-photo" />
                    </div>
                    <div>
                      <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                        src="{{asset('images/sobremi/12.jpg')}}"
                        alt="gallery-photo" />
                    </div>
            {{-- verticales --}}
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/4.jpg')}}"
                    alt="gallery-photo" />
                </div>
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/8.jpg')}}"
                    alt="gallery-photo" />
                </div>
                <div>
                  <img class="object-cover object-center w-full h-full max-w-full rounded-lg"
                    src="{{asset('images/sobremi/7.jpg')}}" alt="gallery-photo" />
                </div>
                <div>
                  <img class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                    src="{{asset('images/sobremi/3.jpg')}}" alt="gallery-photo" />
                </div>

              </div>

              {{-- TIMELINE --}}
              <section class="py-16 bg-gray-400 rounded-xl">
                <div class="container mx-auto px-6 max-w-6xl text-gray-500">
                    <h2 class=" font-bold text-center text-5xl mb-10">Trabajos</h2>
                    <div class="grid gap-6 lg:grid-cols-3">
                        @foreach($events as $event)         
                       
                                      <div class="flex flex-col justify-center items-center overflow-hidden p-8 rounded-xl bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-900 h-full izquierda">
                            <div class="text-center">
                                <span class="block text-5xl font-semibold text-transparent bg-clip-text bg-gradient-to-br from-blue-300 to-pink-600 dark:from-blue-400 dark:to-pink-400">{{ $event['year'] }}</span>
                                <p class="mt-6 text-lg dark:text-gray-300 text-gray-700">{{ $event['event'] }}</p>
                            </div>
                        </div>
                        @endforeach 
                       
                    </div>
            </section>
            
        </div>
    </section>

</div>

</x-guest-layout>


