<?php
require 'includes/functions.php';
templateInclude('header');
?>

    <main class="container section">
      <h1>Contact Us</h1>

      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpeg" type="image/jpg" />
        <img
          loading="lazy"
          src="build/img/destacada3.jpg"
          alt="Contact us image"
        />
      </picture>

      <h2>Complete this form</h2>

      <form class="form">
        <fieldset>
          <legend>Personal Information</legend>

          <label for="name-contact">Name: </label>
          <input type="text" placeholder="Your name..." id="name-contact" />

          <label for="email-contact">E-mail: </label>
          <input type="email" placeholder="Your email..." id="email-contact" />

          <label for="phone-contact">Phone: </label>
          <input
            type="tel"
            placeholder="Your phone number..."
            id="phone-contact"
          />

          <label for="message-contact">Message: </label>
          <textarea class="textareac" id="message-contact"></textarea>
        </fieldset>

        <fieldset>
          <legend>Property Information Details</legend>

          <label for="options-contact">Sale or Purchase: </label>
          <select id="options-contact">
            <option value="" disabled selected>--Select--</option>
            <option value="Sale">Sale</option>
            <option value="Purchase">Purchase</option>
          </select>

          <label for="proposal-contact">buy/sell proposal</label>
          <input
            type="number"
            placeholder="Your proposal..."
            id="proposal-contact"
          />
        </fieldset>
        <fieldset>
          <legend>Contact</legend>
          <p>Preferred contact method</p>
          <div class="form-rad">
            <label for="p-contact">Phone:</label>
            <input name="contact" type="radio" value="phone" id="p-contact" />

            <label for="e-contact">E-mail:</label>
            <input name="contact" type="radio" value="email" id="e-contact" />
          </div>
          <p>
            If phone contact is preferred, select your preferred date and time
          </p>
          <label for="date-contact">Date: </label>
          <input type="date" id="date-contact" />

          <label for="time-contact">Time: </label>
          <input type="time" id="time-contact" min="09:00" max="18:00" />
        </fieldset>
        <input type="submit" value="Send" class="green-button" />
      </form>
    </main>

    <?php
templateInclude('footer');
?>