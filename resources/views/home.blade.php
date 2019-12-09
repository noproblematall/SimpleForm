@extends('layouts.app')
@section('css')
    <style>
        
    </style>
@endsection
    @section('content')
        
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pagetitle">
                <i class="icon ion-ios-home-outline"></i>
                <div>
                <h4>Form Data</h4>
                <p class="mg-b-0">Form Data.</p>
            </div>            
        </div><!-- d-flex -->
        <div class="float-right">
            <button class="btn btn-primary btn-sm mr-4" id="export_csv">Export CSV</button>
        </div>
        <div class="clearfix"></div>

        <div class="br-pagebody">                
            <div class="row row-sm mg-t-20 card card-body">
                <div class="col-md-12">
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table table-striped table-bordered" style="margin-bottom: 0;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>SITE_URL</th>
                                    <th>ELIGBLE</th>
                                    <th>USER NAME</th>
                                    <th>USER EMAIL</th>
                                    <th>USER PHONE</th>
                                    <th>CREATED TIME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0
                                @endphp
                                @forelse ($data as $item)
                                    @php
                                        $i += 1;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->site_url }}</td>
                                        <td>{{ $item->eligble }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ route('info_detail', ['id' => $item->id]) }}" class="text-primary" title="Edit">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a href="{{ route('delete_info', ['id' => $item->id]) }}" onclick="return confirm('Are you sure?');" class="text-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">No DATA</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="clearfix mt-2">
                        <div class="float-left" style="margin: 0;">
                            <p>Total <strong style="color: red">{{ $data->total() }}</strong> entries</p>
                        </div>
                        <div class="float-right" style="margin: 0;">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
            <div class="mg-b-2">Form Data. All Rights Reserved.</div>
            </div>
        </footer>
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
        
    @endsection

    @section('script')
    <script src="{{ asset('sheetjs/dist/xlsx.full.min.js') }}"></script>
    <script>
        $('#export_csv').click(function(){
            $.ajax({
                url: '/get_all',
                type: 'get',
                success: function(data){
                    // var info = JSON.parse(data)
                    console.log(data);
                    var wb = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb, XLSX.utils.json_to_sheet(data), 'User Info')
                    XLSX.writeFile(wb, 'Info.xlsx')
                }
            })
        })
    </script>
    @endsection


    
