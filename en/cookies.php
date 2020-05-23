<?php if (!isset($_COOKIE["accept_cookies"])) : ?>
<div class="cookie-notice-container" id="banner-cookie">
   <span id="cn-notice-text" class="cn-text-container">
        We use cookies to guarantee you the best experience on our website. <br> By clicking on "Accept", you authorize to receive cookies from this site.
   </span>
    <br>
    <span id="cn-notice-buttons" class="cn-buttons-container">
        <button  onclick="refuseCookies()" class="btn btn-light mt-2">Refuse</button>
        <button id="accept_cookies" onclick="acceptCookies()"  class="btn btn-primary mt-2">Accept</button>
    </span>
</div>
<?php endif; ?>



