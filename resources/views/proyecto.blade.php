@foreach($proyectos as $i=>$p)
  <li>
      <div class="project_img" style="background-image: url(images/project/{{ ($i+1) }}.png)"></div>
      <h5>{{$p->titulo}}</h5>
      <h6>{{$p->fecha}}</h6>
      <p>{{$p->texto}}</p>
      <a href="{{$p->link1}}" data-toggle="modal" data-target="#volunteerformModal" class="btn btn-primary">Volunteer for this project</a><a href="{{$p->link2}}" class="btn btn-secondary">Learn More</a>
  </li>
@endforeach
