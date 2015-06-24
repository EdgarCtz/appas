
<ul class="collapse" id="menu">
    <li class="{{ Request::is('AdministrarPlan*') ? 'active' : '' }}">
        <a href="{{url('/AdministrarPlan',Session::get('id_empresa') )}}">
           <i class="icon-suitcase"></i> General   
        </a>
    </li> 

    <li class="{{ Request::is('objetivosListar*') ? 'active' : '' }}">
        <a href="{{ url('/objetivosListar')}}">
           <i class="icon-share-alt"></i> Objetivos Especificos
        </a>
    </li> 

    <li class="{{ Request::is('marcosListar*') ? 'active' : '' }}">
        <a href="{{ url('/marcosListar')}}">
           <i class=" icon-book"></i> Marcos a Utilizar
        </a>
    </li> 
    
    <li class="{{ Request::is('limitacionesListar*') ? 'active' : '' }}">
        <a  href="{{url('/limitacionesListar')}}">
           <i class="icon-th-list"></i> Limitaciones
        </a>
    </li>

    <li class="{{ Request::is('aclaracionesListar*') ? 'active' : '' }}">
        <a href="{{ url('/aclaracionesListar')}}" >
           <i class="icon-ok"></i> Aclaraciones
        </a>
    </li>

     <li class="{{ Request::is('perfilEquipo*') ? 'active' : '' }}" >
        <a href="{{url('/perfilEquipo')}}" >
           <i class="icon-user"></i> Perfil de Equipo Auditor
        </a>
    </li>
     <li class="{{ Request::is('equipoAuditor*') ? 'active' : ''}}">
       <a href="{{url('/equipoAuditor')}}">
           <i class="icon-group"></i> Equipo Auditor
        </a>
    </li>

    <li class="{{ Request::is('personasEntrevistar*') ? 'active' : ''}}">
       <a href="{{url('/personasEntrevistar')}}">
           <i class="icon-female"></i> <i class="icon-male"></i> Personas a Entrevistar
        </a>
    </li>

    <li class="{{ Request::is('pruebasCumplimiento*') ? 'active' : ''}}">
       <a href="{{url('/pruebasCumplimiento')}}">
           <i class="icon-question-sign"></i> Pruebas de Cumplimiento
        </a>
    </li>

    <li class="">
       <a href="{{url('#')}}">
           <i class="icon-suitcase"></i> Pruebas Sustantivas
        </a>
    </li>

    
</ul>

        
<<<<<<< HEAD
        <li class="{{ Request::is('marcosListar*') ? 'active' : '' }}">
            <a href="{{ url('/marcosListar')}}">
                <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Marco Normativo</a>
        </li>
        <!--<li>
            <a href="#">
            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>Marco Normativo</a></li>
    --><li class="{{ Request::is('limitacionesListar*') ? 'active' : '' }}">
            <a href="{{url('/limitacionesListar')}}">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Limitaciones</a>

        </li>
        <li class="{{ Request::is('aclaracionesListar*') ? 'active' : '' }}">
            <a href="{{ url('/aclaracionesListar')}}">
                <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Aclaraciones</a>
        </li>

        <li class="{{ Request::is('perfilEquipo*') ? 'active' : '' }}">
            <a href="{{url('/perfilEquipo')}}">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Perfil de Equipo de Auditoria</a></li>

        <li class="{{ Request::is('equipoAuditor*') ? 'active' : ''}}">
            <a href="{{url('/equipoAuditor')}}">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Equipo Auditor</a></li>

                
        <li class="{{ Request::is('personasEntrevistar*') ? 'active' : ''}}">
            <a href="{{url('/personasEntrevistar')}}">
                <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Personas a Entrevistar</a></li>



         <li class="{{ Request::is('pruebasCumplimiento*') ? 'active' : ''}}">
            <a href="{{url('/pruebasCumplimiento')}}">
                <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Pruebas de Cumplimiento</a></li>

        <li class="{{ Request::is('pruebasSustantivas*') ? 'active' : ''}}">
            <a href="{{url('/pruebasSustantivas')}}">
                <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Pruebas Sustativas</a></li>
    </ul>
</div>
=======
   
>>>>>>> 457904984e2b6d24cc489f78cc7d8aabff686e09
