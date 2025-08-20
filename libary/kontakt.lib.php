<h1 class="text-7xl font-bold mb-40">
    Kontakt
</h1>

<form action="kontakt-senden.php" method="post" class="space-y-5">
      <label for="name">Ihr Name</label>
      <input type="text" id="name" name="name" placeholder="Max Mustermann" required>
      
      <label for="email">E-Mail-Adresse</label>
      <input type="email" id="email" name="email" placeholder="beispiel@domain.de" required>
      
      <label for="subject">Betreff</label>
      <input type="text" id="subject" name="subject" placeholder="Worum geht es?" required>
      
      <label for="category">Kategorie</label>
      <select id="category" name="category" required>
        <option value="">Bitte wählen</option>
        <option value="allgemein">Allgemeine Anfrage</option>
        <option value="feedback">Feedback zur Seite</option>
        <option value="support">Technischer Support</option>
        <option value="inhalt">Inhaltliche Frage</option>
        <option value="andere">Sonstiges</option>
      </select>

      <label for="message">Ihre Nachricht</label>
      <textarea id="message" name="message" rows="6" required></textarea>

      <button type="submit">Nachricht senden</button>
      <button type="reset">Formular zurücksetzen</button>
</form>