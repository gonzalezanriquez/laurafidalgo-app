{{-- 
<section class=" bg-gradient-to-r from-slate-900 to-slate-700 body-font relative mt-10 container mx-auto  rounded-xl">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap ">
      <div class="bg-white lg:w-2/3 md:w-1/2 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative izquierda">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.461338436308!2d-58.44505382350473!3d-34.56719155557146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c7a5ea526b%3A0x31f979cdd99b0b0e!2sStudio%20de%20Arte%20y%20Danzas%20Laura%20Fidalgo%20Sede%20Belgrano!5e0!3m2!1ses-419!2sar!4v1723953683314!5m2!1ses-419!2sar" style="filter:  contrast(1.2) opacity(0.8);"></iframe>
                  <div class=" relative flex flex-wrap py-6 rounded ">
          <div class="lg:w-1/2 bg-white px-6">
            <h2 class="title-font font-semibold  bg-white text-gray-900 tracking-widest text-xs">DONDE NOS PODES ENCONTRAR</h2>
            <p class="mt-1 text-indigo-500 leading-relaxed">Federico Lacroze 2113, C1426 - Ciudad Autónoma de Buenos Aires</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0  bg-white">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed">mailingbelgrano@gmail.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TELEFONO</h2>
            <p class="leading-relaxed">11-3766-3238 </p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2  flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 derecha">
        <h2 class=" text-lg mb-1 font-medium title-font">Contactate con Nosotros</h2>
        <p class="leading-relaxed mb-5 text-gray-400">Mandanos tu mensaje que nos pondremos en contacto con vos para brindarte la informacion que necesitas</p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-400">Nombre</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-400">Mensaje</label>
          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar</button>
        <p class="text-xs text-gray-500 mt-3">Deja todos tus datos y lo que quieras saber para poder comunicarnos</p>
      </div>
    </div>
  </section> --}}

  <section class="bg-white dark:bg-gray-900">
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
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
          <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
            Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.
          </p>
          <form action="#" class="space-y-8">
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
            </div>
            <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
            </div>
            <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  