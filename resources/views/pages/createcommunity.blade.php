@extends('layout.templateuser')

@section('title', 'Createcommunity')

@section('content')
    
  <form>

    <div class="createkomunitas">
      <div class="container py-5">
        <div class="row d-flex justify-content-center text-white align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-9">
              <p>Profile</p>
                <div class="card bg-dark text-white">
                    <div class="card-bodyyy ps-2 bg-opacity-25">
                        <div class="row">
                            <p class="kt">Kategori</p>
                              <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle col-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Dropdown button
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="createkomunitas2">
    <div class="container">
      <div class="row d-flex justify-content-center text-white align-items-center">
          <div class="col-12 col-md-8 col-lg-6 col-xl-9">
              <div class="card bg-dark text-white">
                  <div class="card-bodyyy ps-2">
                      <div class="row">
                          <p class="kt">Profile Picture</p>
                          <p class="des text-secondary">Image should be at least 600x600px and in JPEG,JPG and PNG format.</p>
                          <img src="img/zizan.png" alt="zizan">
                          <input type="file" id="myfile" accept="image/png, image/jpeg, image/jpg,">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="createkomunitas3 mt-5">
  <div class="container">
    <div class="row d-flex justify-content-center text-white align-items-center" >
        <div class="col-12 col-md-8 col-lg-6 col-xl-9">
            <div class="card bg-dark text-white">
                <div class="card-bodyyy ps-2 mx-auto">
                  <p class="kt">Header text</p>
                  <div class="mb-4 mx-auto">
                    <input class="form-input col-12 bg-dark text-white" type="text" id="exampleInputUsername" placeholder="Username">
                  </div>
                  <div class="mb-4 mx-auto">
                    <textarea class="form-input col-12 bg-dark text-white" placeholder="Desciption" name="" id=""></textarea>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  
<div class="text-center mt-4">
  <a href="" class="btncreate badge text-wrap text-center"><button class="btn p-1" >Save</button></a>
</div>
  </form>


  



<br><br><br><br><br>



@stop