<!-- Our Sponsors Section (Sponsors xd)-->
<section id="sponsors">
    <div class="container">
        <div class="section-title">
            <h2 class="dark-bg">Nuestros patrocinadores</h2>
        </div>
        <div class="section-body">
            <div class="bx_slider sponsor_slider_wrap">
                <ul class="sponsor_slider">
                    @foreach($sponsors as $i => $s)
					  <li><img src="images/sponsors/{{++$i}}.png" alt="efd" /></li>
					@endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Our Sponsors Section (Sponsors xd)-->

