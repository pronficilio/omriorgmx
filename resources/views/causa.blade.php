@foreach($causas as $i=>$c)
<li>
    <div class="cause-wrap">
        <img src="images/cause/{{ ($i+1) }}.png" alt="Cause Image"/>
        <div class="cause-title">
            {{$c->titulo}}
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $now = (($c->acumulado)*(100)/($c->meta)) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{$now}}%">{{$now}}%</div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">{{$c->cant_donaciones}} Donaciones</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Meta ${{$c->meta}}</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="{{$c->link1}}" class="light-text" data-toggle="modal" data-target=".cause_2">View Details</a> | <span class="donate-link"><a href="{{$c->link2}}" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
@endforeach
