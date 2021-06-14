<div>
    <style>
        .nav svg{
            height: 20px;
        }
        .nav .hidden{
            display: block !important;

        }
    </style>
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 30px 0px;">
                        <div class="row" >
                            <div class="col-md-6">
                                All Sliders

                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="{{ route('admin.addhomeslider') }}" class="btn btn-success pull-right">Add New Slider</a>

                            </div>

                        </div>
                       
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}

                            </div>
                            
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Slider title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider )
                                    <tr>
                                    
                                        <td>{{ $slider->id }}</td>
                                        <td>{{ $slider->title}}</td>
                                        <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" alt="" width="120"/> </td>
                                        <td>{{ $slider->status== 1 ? "Active":"Inactive"}}</td>
                                        <td>{{ $slider->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.edithomeslider',['homeslider_id'=>$slider->id]) }}"> <i  class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" style="margin-left: 10px;" wire:click.prevent="deleteSlider({{ $slider->id }})"> <i  class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        
                                    </tr>
                                    
                                @endforeach
                            </tbody>
    
                        </table>
    
                    </div>
    
                </div>
                
    
            </div>
    
        </div>
    
    </div>
    

</div>
