 @include('layout/header')
 @include('layout/menu')

<div id="centroA">
     <div class="logo_makkan"></div>
         <div class="cotizador">
             COTIZADOR
         </div>
         <div class="simbologia">
             Da click en el mapa y
             <div class="opciones" style="display: flex;">
                 <div class="opcion1">
                     <div id="bolaD"></div><span>D</span>
                 </div>
                 <div class="opcion1">
                     <div id="bolaA"></div><span>A</span>
                 </div>
                 <div class="opcion1">
                     <div id="bolaVendido"></div><span>VENDIDO</span>
                 </div>
             </div>
         </div>
</div>

     <div id="centroB">

     </div>
     @include('layout/footer')