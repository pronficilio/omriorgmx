<!-- Start Ayúdanos Modal  -->
<div class="modal fade donate_0" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">DONA vía Paypal</h4>
            </div>
            <div class="modal-body">
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
                                <input id="d10" type="radio" name="xamount" value="50.00">
                                <label for="d10">$50</label>
                            </div>
                            <div class="bolden">
                                <input id="d25" type="radio" name="xamount" value="100.00">
                                <label for="d25">$100</label>
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
                            <input id="monthly" type="checkbox" name="monthly" value="Children's Education">
                            <label for="monthly"><span><span></span></span> Me gustaría hacer esto de forma <b>mensual</b></label>
                        </div>
                    </div>
                    <div class="formlabel"><strong>Dona para:</strong></div>
                    <div class="fieldcollection">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <input id="cause1" type="radio" name="item_name" value="Children's Education">
                                <label for="cause1"><span><span></span></span> Children's Education</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <input id="cause2" type="radio" name="item_name" value="Refugee assistance">
                                <label for="cause2"><span><span></span></span> Refugee assistance</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <input id="cause3" type="radio" name="item_name" value="Medical care">
                                <label for="cause3"><span><span></span></span> Medical care</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <input id="cause4" type="radio" name="item_name" value="Food for children">
                                <label for="cause4"><span><span></span></span> Food for children</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <input id="cause5" type="radio" name="item_name" value="War in Syria">
                                <label for="cause5"><span><span></span></span> War in Syria</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <input id="cause6" type="radio" name="item_name" value="Any Cause" checked="checked">
                                <label for="cause6"><span><span></span></span> Any Cause</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
                </form>
                <!-- End Donate Form -->
            </div>
        </div>
    </div>
</div>
<!-- End Donate Modal -->