@extends( "layouts.master" )
@section( "title", "Student Details Developed by Lais" )
@section( "content" )
    
    <div class="container">
        <h1>Student Details Here</h1>
    </div> {{-- /.container --}}
    
    <div class="container">
        @if( session( 'successMsg' ) )
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Well done!</strong> {{ session( 'successMsg' ) }}
            </div>
        @endif()
    </div> {{-- /.container --}}

    <div class="container">
        <table class="table table-bordered table-responsive table-hover datatable">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-Mail</th>
                    <th>Phone</th>
                    <th class="text-center">Edit | Delete</th>
                </tr>
            </thead>
            <tbody>
                
                @php $serial = 1; @endphp
                @foreach( $students as $student )
                    <tr>
                        <td>{{ $serial }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td class="text-center">
                            <a href="{{ route( 'edit', $student->id ) }}" onmouseover="" class="btn btn-primary btn-sm" title="Edit Here" style="font-size: 24px"><i class="fa fa-pencil-square-o"></i></a>
                            
                            <form method="POST" action="{{ route( 'delete', $student->id ) }}" id="delete-form-{{ $student->id }}" style="display:none;">
                                @csrf
                                {{ method_field( 'delete' ) }}
                            </form>

                            <a href="{{ route( 'delete', $student->id ) }}" onclick="if( confirm( 'Are You Sure To Delete..?' ) ){
                                event.preventDefault();
                                document.getElementById( 'delete-form-{{ $student->id }}' ).submit();
                            }else{ 
                                event.preventDefault();
                            }" class="btn btn-danger btn-sm" title="Delete Here" style="font-size: 24px"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @php $serial++; @endphp
                @endforeach
                
            </tbody>
        </table>
    </div> {{-- /.container --}}
@endsection

@push('minjs')
    <!-- BEGIN: load jquery -->
    <script src="{{ route('home') }}/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="{{ route('home') }}/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ route('home') }}/js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script src="{{ route('home') }}/js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();

        });
    </script>
@endpush