@extends('Admin.layouts.admin_master')

@section('content')
    <section class="container">

        @if(Session::has('message'))
            <div class="alert alert-success col-md-3 " >
                {{Session::get('message')}}.
            </div>
        @endif
        <div align="right" class="table-hover">
            <a href="{{route('HomepageSlider')}}"><h1 class="btn btn-primary table-hover">Add Homepage Slider</h1></a>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="col-md-12 table-responsive">
                <table class="table  table-bordered table-dark table-hover">
                    <thead>
                    <tr align="center" class="bg-success">
                        <th>SL</th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $SL = 0;
                    ?>
                    @foreach($reteive_homeslide as $homrslider_all)

                        <tr align="center">
                            <td>{{++$SL}}</td>
                            <td>
                                <img style="width: 150px;height: 150px;"  class="img-size-50" src="{{asset($homrslider_all->slider_image)}}"></td>
                            <td style="width: 500px;">{{$homrslider_all->slider_description}} </td>

                            <td>
                                @if($homrslider_all->publication_status ==1)
                                    <span class="btn btn-success">Actived</span>
                                @else
                                    <a onclick="return confirm('Are you sure..! you want to Active this item?')" class="btn btn-danger" href="{{route('active_homeslide', $homrslider_all->id)}}"> Un active</a>
                                @endif
                            </td>

                            <td>
                                @if($homrslider_all->publication_status ==1)
                                    <a onclick="return confirm('Are you sure..! you want to unactive this item?')" href="{{route('unactive_homeslide',$homrslider_all->id)}}" class="btn btn-danger fa fa-thumbs-down"></a>
                                @else
                                    <i class="btn btn-success fa fa-thumbs-up"></i>
                                @endif


                                                 {{--update--}}

                                <a href="#" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

                                                 {{--Delete--}}

                                <a onclick="return confirm('Are you sure..! you want to Delete this item?')" href="{{route('delete_homeslider',$homrslider_all->id)}}" class="btn btn-danger fa fa-trash"></a>
                            </td>


                        </tr>


                    @endforeach
                    </tbody>

                </table>

            </div>

        </div>




    </section>


@endsection