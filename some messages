

{{-- success message --}}

  return back()->with('status', 'Product Inserted Successfully!');     {{-- it will be in controller --}}
  
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          
          
          
          
          
          
{{-- errors message --}}
          @if ($errors->all())                                        {{-- it will be auto generated from validation --}}
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </div>
          @endif
          
          
          
          
{{-- danger message --}}
                
     return back()->with('delete_status', 'Product Deleted Successfully!');     {{-- it will be in controller --}}
            
          @if (session('delete_status'))
            <div class="alert alert-danger">
              {{ session('delete_status') }}
            </div>
          @endif
