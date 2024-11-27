

  <section class="bg-white dark:bg-gray-900 mt-20">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-lg">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Columna del mapa -->
        <div class="h-[500px] lg:h-auto">
          <iframe 
            class="w-full h-full rounded-lg shadow-lg" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.390907944635!2d-58.45079168477897!3d-34.57718888046579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5903c7d09c1%3A0x37cb6ae7b4e13695!2sFederico%20Lacroze%202113%2C%20C1426%20CABA%2C%20Argentina!5e0!3m2!1sen!2s!4v1693596370531!5m2!1sen!2s" 
            allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>
  
        <!-- Columna del formulario -->
        <div>
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contactate con Nosotros</h2>
          <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
            Mandanos tu mensaje y nos pondremos en contacto con vos para brindarte toda la informacion que necesitas.
          </p>
          <form action="{{ route('messages.store') }}" method="POST" class="space-y-8">
            @csrf
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="email@tucuenta.com" required>
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asunto</label>
                <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" placeholder="Asunto" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Mensaje</label>
                <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300" placeholder="Escribí tu consulta..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit">Enviar mensaje</button>
        </form>
        
        </div>
      </div>
    </div>
  </section>
  