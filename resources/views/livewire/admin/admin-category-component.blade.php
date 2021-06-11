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
                    <div class="panel-heading">
                        All Categories
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category )
                                    <tr>
                                    
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name}}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td></td>
                                        
                                    </tr>
                                    
                                @endforeach
                            </tbody>
    
                        </table>
                        {{ $categories->links('pagination::bootstrap-4') }}
    
                    </div>
    
                </div>
                
    
            </div>
    
        </div>
    
    </div>
    

</div>
