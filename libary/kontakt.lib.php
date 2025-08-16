<h1 class="text-7xl mb-10 font-bold text-black">
  Kontaktformular
</h1>

<form action="kontakt-senden.php" method="post" class="space-y-5">
      <!-- Name -->
      <div>
        <label for="name" class="block label-light">Ihr Name</label>
        <input type="text" id="name" name="name"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-red-300 focus:outline-none font-light"
               placeholder="Max Mustermann" required>
      </div>

      <!-- E-Mail -->
      <div>
        <label for="email" class="block label-light">E-Mail-Adresse</label>
        <input type="email" id="email" name="email"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-red-300 focus:outline-none font-light"
               placeholder="beispiel@domain.de" required>
      </div>

      <!-- Betreff -->
      <div>
        <label for="subject" class="block label-light">Betreff</label>
        <input type="text" id="subject" name="subject"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-red-300 focus:outline-none font-light"
               placeholder="Worum geht es?" required>
      </div>

      <!-- Nachricht -->
      <div>
        <label for="message" class="block label-light">Ihre Nachricht</label>
        <textarea id="message" name="message" rows="6"
                  class="mt-1 w-full px-4 p-10 border border-gray-300 rounded-md focus:ring-2 focus:ring-red-300 focus:outline-none font-light resize-none" required></textarea>
      </div>

      <!-- Datenschutz Checkbox -->
      <div class="flex items-start gap-2">
        <input type="checkbox" id="privacy" name="privacy" required
               class="mt-1 accent-red-500">
        <label for="privacy" class="text-sm font-light text-gray-600">
          Ich stimme der <a href="index.php?page=datenschutz" class="underline hover:text-red-500">Datenschutzerklärung</a> zu.
        </label>
      </div>

      <!-- Absenden -->
      <div>
        <button type="submit"
                class="w-full bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition-all font-bold">
          Nachricht senden
        </button>
      </div>

    </form>