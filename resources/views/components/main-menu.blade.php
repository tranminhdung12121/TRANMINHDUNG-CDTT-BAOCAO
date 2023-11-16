<section class="bg-menu2">
  <div class="container">
            <div class="row py-2">
                <div class="col-md-3 py-3 text-center ">
                    
                </div>
                <div class="col-md-7">
                    <div class="menu">
                        <nav class="navbar navbar-expand-lg bg-none">
                            <div class="container-fluid text-center"> 
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">      
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  @foreach ($list_menu as $rowmenu)
                                     <x-main-menu-item :rowmenu="$rowmenu" /> 
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                        </nav>
                    </div>
                </div>                
            </div>
          </div>
  </section> 