<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Slider

                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right" >All Sliders</a>

                            </div>

                        </div>

                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}

                            </div>
                            
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="addSlider" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4">Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slider title" class="form-control input-md" wire:model="title">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-4"> Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" style="margin-top: 10px;" alt=""/>
                                        
                                    @endif
                                </div>
                              
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" id=""  wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                            
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label class="col-md-4"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
