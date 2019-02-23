<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-graduation-cap"></i>Leaning</a>
                        <ul class="sub-menu children dropdown-menu">                            
                       
                            <li><i class=""></i><a href="{{ route('admin.course') }}">Courses</a></li>
                            <li><i class=""></i><a href="{{ route('admin.lessons') }}">Lessons</a></li>
                            <!--
                            <li><i class=""></i><a href="{{ route('admin.quizzes') }}">Quizzes</a></li>
                            <li><i class=""></i><a href="#">Question</a></li>
                            -->
                        </ul>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-user"></i>Users</a>
                            <ul class="sub-menu children dropdown-menu">                            
                           
                                <li><i class=""></i><a href="{{ route('admin.alluser') }}">All Users</a></li>
                                <li><i class=""></i><a href="{{ route('admin.addnew') }}">Add New</a></li>
                         
    
                            </ul>
                        </li>
                       

                
                    <li>
                        <a href="#"> <i class="menu-icon ti-email"></i>Email </a>
                    </li>
                  
 
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>