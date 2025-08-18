<h1 class="text-7xl mb-10 font-bold text-black">
  Kontaktformular
</h1>

<form action="kontakt-senden.php" method="post" class="space-y-5">
      <!-- Name -->
      <div>
        <label for="name">Ihr Name</label>
        <input type="text" id="name" name="name" placeholder="Max Mustermann" required>
      </div>

      <!-- E-Mail -->
      <div>
        <label for="email">E-Mail-Adresse</label>
        <input type="email" id="email" name="email" placeholder="beispiel@domain.de" required>
      </div>

      <!-- Betreff -->
      <div>
        <label for="subject">Betreff</label>
        <input type="text" id="subject" name="subject" placeholder="Worum geht es?" required>
      </div>

      <!-- Kategorie -->
      <div>
        <label for="category">Kategorie</label>
        <select id="category" name="category" required>
          <option value="">Bitte wählen</option>
          <option value="allgemein">Allgemeine Anfrage</option>
          <option value="feedback">Feedback zur Seite</option>
          <option value="support">Technischer Support</option>
          <option value="inhalt">Inhaltliche Frage</option>
          <option value="andere">Sonstiges</option>
        </select>
      </div>

      <!-- Nachricht -->
      <div>
        <label for="message">Ihre Nachricht</label>
        <textarea id="message" name="message" rows="6" required></textarea>
      </div>

      <!-- Datenschutz Checkbox 
      <div class="flex items-start gap-2">
        <input type="checkbox" id="privacy" name="privacy" required
               class="mt-1 accent-red-500">
        <label for="privacy" class="text-sm font-light text-gray-600">
          Ich stimme der <a href="index.php?page=datenschutz" class="underline hover:text-red-500">Datenschutzerklärung</a> zu.
        </label>
      </div>
      -->

      <!-- Absenden -->
      <div>
        <button type="submit">Nachricht senden</button>
      </div>
      <div>
        <button type="reset">Formular zurücksetzen</button>
      </div>
</form>