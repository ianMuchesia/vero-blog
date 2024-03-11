<section class="contact">
   <div class="contact-card">
   <h2>Contact</h2>
    <p>Send us a message:</p>
    <form action="." method="post"
    class="contact-form">
        <input type="hidden" name="action" value="contact">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button>Send</button>
    </form>
   </div>
</section>