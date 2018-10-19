@if(count($errors))
    <div class="form-group">
         <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
                     
            </ul>
        </div>
     </div>
 @endif
 @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('message1'))
    <div class="alert alert-danger">
        {{ session()->get('message1') }}
    </div>
@endif