<main class="main">
    <h3>Contactez-nous</h3>
    <div class="form-container">
        <form id="contact-form">
            <label for="firstname">Prénom <span class="required">*</span>:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="name">Nom <span class="required">*</span>:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email <span class="required">*</span>:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message <span class="required">*</span>:</label>
            <textarea id="message" name="message" maxlength="100" required></textarea>
            <div id="char-count">100 caractères maximum</div>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</main>