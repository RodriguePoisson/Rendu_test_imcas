<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')
    <body>
      
          <div class="container">
            @include('breadcrumb')
            <div id="div-form" class="row h-100 justify-content-center">
              <div class ="col-6"> 
               
                <form action = "" method ="POST">
                  <div class="form-floating mb-3 mt-3">
                    <input  id="name"class="@error('name') is-invalid @enderror form-control" type = "text" name="name" value="{{ old('name') }}"></input>
                    <label for="name" >Name</label>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating mb-3">
                    <input id ="price"class="@error('price') is-invalid @enderror form-control" type = "text"  name="price" value="{{ old('price') }}"></input>
                    <label for="price">Price</label>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating mb-3">
                    <input id="type" class="@error('type') is-invalid @enderror form-control"  type = "text"  name="type" value="{{ old('type') }}"></input>
                    <label for="type">Type</label>
                    @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <textarea id="description" class="@error('description') is-invalid @enderror form-control" type="text" name="description"  placeHolder="Description" rows="5" cols="33" >{{ old('description') }}</textarea>
                    
                    @error('description')
                    <div class="alert alert-danger form-control">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <button type = "submit" class="btn btn-primary" > ADD</button> 
                  </div>
                  
                  @csrf
                  
                </form>
              </div>
            </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
