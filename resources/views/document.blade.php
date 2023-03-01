@extends('layouts.app')
@section('content')

@if(session('success'))
<div class="alert alert-success w-50" role="alert">
    {{session('success')}}
</div>
@endif
@isset($silDoc)
        Siz<b> {{$silDoc->basliq}} </b>silmeye eminsinizmi?<br>
        <a href="{{route('delete',$silDoc->id)}}"><button>He</button></a>
        <a href="{{route('document')}}"><button>Yox</button></a>
@endisset
<div class="col-lg-24">
    <div class="card">
        <div class="card-header">
            <h5 class="card-header-text">

            </h5>
            <div class="f-right">
                <a href="" data-toggle="modal" data-target="#input-type-Modal"><i
                        class="icofont icofont-code-alt"></i></a>
            </div>
        </div>
        <div class="modal fade modal-flex" id="input-type-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                        <h5 class="modal-title">Code Explanation For Input Types </h5>
                    </div>
                    <!-- end of modal-header -->
                    <div class="modal-body">
                        <div>
                            <div id="highlighter_184569" class="syntaxhighlighter  html">
                                <div class="toolbar"><span><a href="#"
                                            class="toolbar_item command_help help">?</a></span></div>

                            </div>
                        </div>
                    </div>
                    <!-- end of modal-body -->
                </div>
                <!-- end of modal-content -->
            </div>
            <!-- end of modal-dialog -->
        </div>
        <!-- end of modal -->


        <!--  @empty($editDoc)-->
        <div class="card-block">

            <form method="post" action="{{route('gonder')}}" enctype="multipart/form-data">
                @csrf
                @if($staff_id)
                    <input type="hidden" name="staff_id" value="{{$staff_id->id}}">
                @endif
                <div class="form-group">
                    <label for="name" class="form-control-label">Başlıq</label>
                    <input type="text" class="form-control" name="basliq" placeholder="Başlıq daxil edin">

                </div>

                <label class="form-control-label">Skan </label><br>
                <input type="file" name="skan">

                <div class="form-group">
                    <label for="exampleTextarea" class="form-control-label">Qeyd</label>
                    <textarea class="form-control" id="exampleTextarea" rows="4" name="qeyd"
                        placeholder="Qeyd edin"></textarea>
                </div>
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Daxil edin</button>
            </form>
        </div>
        <!-- @endempty-->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Document</h6>
                </div>
                <div class="table-responsive">

                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col" class="text-center"><input class="form-check-input" type="checkbox">
                                </th>
                                <th scope="col" class="text-center"><b>No </b></th>
                                <th scope="col" class="text-center"><b>Başlıq </b></th>
                                <th scope="col" class="text-center"><b>Skan </b></th>
                                <th scope="col" class="text-center"><b>Qeyd </b></th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataDoc as $i=>$info)
                            <tr>
                                <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                                <td class="text-center">{{$i+=1}}</td>
                                <td class="text-center"> {{$info->basliq}}</td>
                                <td class="text-center">
                                    <img style="width:75px;height:65px" src="{{url($info->skan)}}">
                                </td>
                                <input type="hidden" name="id" id="id">
 
                                <td class="text-center"> {{$info->qeyd}}</td>
                                <td class="text-center">
                                <a href="{{route('sil',$info->id)}}">
                                    <button type="submit" class="btn btn-danger waves-effect waves-light m-r-30">
                                        Sil
                                    </button>
                                    </a>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">
                                        edit
                                    </button>
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

@endsection
