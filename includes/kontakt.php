<div class="karte">
  <div class="show-map">
    <a href="#" id="karteZeigen">Karte zeigen</a>
  </div>
  <div class="karte-overlay">

  </div>
  <div class="karte-iframe">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79970.97652341181!2d9.439070949138149!3d49.74331983190482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2a57944d74753%3A0xcb6679b81c015cf!2s97877+Wertheim+am+Main!5e0!3m2!1sen!2sde!4v1542358462244"  frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<div class="container-small container-kontakt">
  <div class="kontakt-formular">
    <div class="kontakt-claim">
      Schreiben Sie uns direkt an
      <script>
        document.write("\x3c\x61\x20\x68\x72\x65\x66\x3d\x22\x6d\x61\x69\x6c\x74\x6f\x3a\x69\x6e\x66\x6f\x40\x6d\x63\x73\x6c\x65\x65\x70\x79\x2e\x64\x65\x22\x3e\x69\x6e\x66\x6f\x40\x6d\x63\x73\x6c\x65\x65\x70\x79\x2e\x64\x65\x3c\x2f\x61\x3e");
      </script>
      oder über das Kontaktformular.
    </div>
    <form>
      <input type="text" name="name" id="kName" placeholder="Name" required>
      <input type="email" name="email" id="kEmail" placeholder="Email" required>
      <input type="text" name="subject" id="kSubject" placeholder="Betreff" value="<?php print($cValue); ?>" required>
      <textarea name="msg" id="kMsg" placeholder="Ihre Nachricht an uns" required></textarea>
      <div class="checkbox">
        <input type="checkbox" id="checkSubmit">
        <label for="checkSubmit"> Ich stimme den <a href="./Datenschutz">Datenschutzbestimmungen</a> von mcsleepy.de zu</label>
        <br>
        <br>
      </div>
      <input type="submit" id="submitForm" disabled>
    </form>
  </div>
</div>
