<!-- resources/views/posts/index.blade.php -->

<x-app-layout>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
        <div class="bg-cover bg-center text-center overflow-hidden"
            style="min-height: 500px; background-image: url('{{ asset('images/estudio.jpg') }}');" title="Woman holding a mug">


            
        </div>
        <div class="max-w-3xl mx-auto">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="bg-white relative top-0 -mt-32 p-5 sm:p-10">
                    <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">TITULO</h1>

    
                    <p class="text-base leading-8 my-5">
                        CONTENIDO.
                    </p>
    
                    <h3 class="text-2xl font-bold my-5">SUSTITULO</h3>
    
                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
    
                </div>
    
            </div>
        </div>
    </div>

</x-app-layout>
