  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item dropdown-menu"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('teachers')}}">Instructors</a>
                    <ul class="dropdown-menu">
                            <li><a href="#">Add Instructor</a></li>
                            <li><a href="#">Edit Instructor</a></li>
                            <li><a href="#">HSC ICT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">SSC ICT</a></li>
                            <li><a href="#">HSC ICT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link"href="#">Exams</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Batches<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">SSC</a></li>
                            <li><a href="#">HSC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link"href="#">Exercise</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Lecture Note</a></li>
                            <li><a href="#">Glossary of Class</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link"href="#">Admin Corner</a></li>
                </ul>  
            </div>
        </nav>