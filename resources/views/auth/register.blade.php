@extends('layouts.app')

@section('content')
    @php
        $area = \App\Modules\Areas\Area::where('route_name', 'pages.welcome.index')->first()
    @endphp
    <!-- Head Section -->
    <section class="page-section bg-dark-alfa-{{$area->banner_opacity}} parallax-3" data-background="{{$area->banner_image}}">
        <div class=" container ">
            
            <div class="row text-center">
                
                <div>
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Register</h1>
                
                </div>
            
            </div>
        </div>
    
    </section>
    <!-- End Head Section -->
    
    
    <!-- Section -->
    <section class="page-section">
        <div class="container relative">
            
            <!-- Nav Tabs -->
            <div class="align-center mb-40 mb-xxs-30">
                <ul class="nav nav-tabs tpl-minimal-tabs">
                    
                    <li >
                        <a href="{{route('login')}}" >Login</a>
                    </li>
                    
                    <li class="active">
                        <a >Registration</a>
                    </li>
                
                </ul>
            </div>
            <!-- End Nav Tabs -->
            
            <!-- Tab panes -->
            <div class="tab-content tpl-minimal-tabs-cont section-text">
                
                
                    
                    <!-- Registry Form -->
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            
                            <form action="{{route('register')}}" class="form contact-form" id="contact_form" method="post">
                                @csrf
                                <div class="clearfix">
                                    
                                    <!-- Email -->
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="input-md round form-control" placeholder="Email" pattern=".{3,100}" required>
                                    </div>
                                    
                                    <!-- Username -->
                                    <div class="form-group">
                                        <input type="text" name="name" id="username" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required>
                                    </div>
                                    
                                    <!-- Password -->
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}" required>
                                    </div>
                                    
                                    <!-- Re-enter Password -->
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="re-password" class="input-md round form-control" placeholder="Re-enter Password" pattern=".{5,100}" required>
                                    </div>
                                
                                </div>
                                
                                <!-- Send Button -->
                                <div class="pt-10">
                                    <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Register</button>
                                </div>
                            
                            </form>
                        
                        </div>
                    </div>
                    <!-- End Registry Form -->
                
            
            </div>
        
        </div>
    </section>
    <!-- End Section -->

@endsection
