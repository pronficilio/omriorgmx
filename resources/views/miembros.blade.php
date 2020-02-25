@foreach($miembros as $i=>$m)
<li>
    <div class="image">
        <img src="images/team/{{ ($i+1) }}.png" alt="Team Member"/>
    </div>
    <div class="name">
        {{ $m->nombre }}
    </div>
    <div class="title">
        {{ $m->puesto }}
    </div>
    <div class="social-icons">
        <div class="col-xs-10 centered">
            @if(!empty($m->link_facebook))
                <a href="{{ $m->link_facebook }}" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
            @endif
            @if(!empty($m->link_twitter))
                <a href="{{ $m->link_twitter }}" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
            @endif
            @if(!empty($m->link_linkedin))
                <a href="{{ $m->link_linkedin }}" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
            @endif
            @if(!empty($m->correo))
                <a href="mailto:{{ $m->correo }}" target="_blank"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
            @endif
        </div>
    </div>
</li>
@endforeach
