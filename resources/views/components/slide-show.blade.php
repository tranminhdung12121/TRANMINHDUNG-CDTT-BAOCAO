<div class="container py-4">
      
  <div class="row py-3">
    <div class="col-md-6">
      <div class="text-center">        
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner"> 
                      @foreach ($list_slider as $slider)
                          @if ($loop->index==0)
                          <div class="carousel-item active">
                            <img src="{{ asset('images/slider/'.$slider->image) }}" class="d-block w-100 rounded-4" alt="{{ $slider->image }}">
                          </div> 
                          @else
                          <div class="carousel-item">
                            <img src="{{ asset('images/slider/'.$slider->image) }}" class="d-block w-100 rounded-4" alt="{{ $slider->image }}">
                          </div> 
                          @endif
                      @endforeach         
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>        
      </div>
    </div> 
    <div class="col-md-6">
      <div class="text-center">        
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner"> 
                      @foreach ($list_slider as $slider)
                          @if ($loop->index==0)
                          <div class="carousel-item active">
                            <img src="{{ asset('images/slider/'.$slider->image) }}" class="d-block w-100 rounded-4" alt="{{ $slider->image }}">
                          </div> 
                          @else
                          <div class="carousel-item">
                            <img src="{{ asset('images/slider/'.$slider->image) }}" class="d-block w-100 rounded-4" alt="{{ $slider->image }}">
                          </div> 
                          @endif
                      @endforeach         
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>        
      </div>
    </div>
    
    </div>
  </div>
</div>