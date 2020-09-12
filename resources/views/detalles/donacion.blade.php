<!-- Start Ayúdanos Modal  -->
<div class="modal fade donate_0" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" data-dismiss="modal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">DONA vía Paypal</h4>
            </div>
            <div class="modal-body">
                <h2>Todas las contribuciones son bienvenidas</h2>
                <picture>
                    <source srcset="{{ asset('images/saludos.webp') }}" type="image/webp">
                    <source srcset="{{ asset('images/saludos.jpg') }}" type="image/jpeg"> 
                    <img src="{{ asset('images/saludos.jpg') }}" alt="Saludo de agradecimiento"/>
                </picture><br>
                <!-- Start Donate Form -->
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="DonateForm">
                    <input type="hidden" name="payment_type" value="one_time">
                    <input type="hidden" name="cmd" value="_donations">
                    <input type="hidden" name="a3" value="30">
                    <input type="hidden" name="p3" value="1">
                    <input type="hidden" name="t3" value="M">
                    <input type="hidden" name="src" value="1">
                    <input type="hidden" name="currency_code" value="MXN">
                    <!-- <input type="hidden" name="item_name" value="hat"> -->
                    <input type="hidden" name="amount" value="" data-validation="required">
                    <input type="hidden" name="business" value="info@omri.org.mx">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="bolden">
                                <input id="d10" type="radio" name="xamount" value="100.00">
                                <label for="d10">$100</label>
                            </div>
                            <div class="bolden">
                                <input id="d50" type="radio" name="xamount" value="200.00">
                                <label for="d50">$200</label>
                            </div>
                            <div class="bolden">
                                <input id="d100" type="radio" name="xamount" value="500.00">
                                <label for="d100">$500</label>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <input type="text" name="yamount" placeholder="Otro monto $" data-validation="number" data-validation-allowing="float" data-validation-optional="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input id="monthly" type="checkbox" name="monthly" value="">
                            <label for="monthly"><span><span></span></span> Me gustaría hacer esto de forma <b>mensual</b></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Hacer donación</button>
                </form>
                <!-- End Donate Form -->
            </div>
        </div>
    </div>
</div>
<!-- End Donate Modal -->