<?php if (!isset($_COOKIE["accept_cookies"])) : ?>
<div class="cookie-notice-container" id="banner-cookie">
   <span id="cn-notice-text" class="cn-text-container">
        Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web.<br>En cliquant sur "j'accepte", vous autorisez à recevoir des cookies de ce site.
    </span>
    <br>
    <span id="cn-notice-buttons" class="cn-buttons-container">
        <button  onclick="refuseCookies()" class="btn text-black-50 mt-2">Refuser</button>
        <button id="accept_cookies" onclick="acceptCookies()" class="btn btn-primary mt-2">Accepter</button>
    </span>
</div>
<?php endif; ?>



