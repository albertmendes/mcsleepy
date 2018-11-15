<div class="container-small container-kontakt">
  <div class="kontakt-formular">
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
