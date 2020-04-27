<?php if (!isset($_COOKIE["accept_cookies"])) : ?>
<div class="cookie-notice-container" id="banner-cookie">
   <span id="cn-notice-text" class="cn-text-container">
        Utilizamos cookies para garantizarle la mejor experiencia en nuestro página web. <br> Al hacer clic en "Acepto", usted autoriza recibir cookies de este sitio.
   </span>
    <br>
    <span id="cn-notice-buttons" class="cn-buttons-container">
        <button  onclick="refuseCookies()" class="btn mt-2">Rechazar</button>
        <button id="accept_cookies" onclick="acceptCookies()" class="btn btn-light mt-2" >Aceptar</button>
    </span>
</div>
<?php endif; ?>



