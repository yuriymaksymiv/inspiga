@extends('admin.layouts.admin')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Brief List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Головна</a>
                </li>

                <li class="active">
                    <strong>Брифи</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Брифи</h5>
                        <div class="ibox-tools">
                            <a href="/brief" class="btn btn-primary btn-xs">+ Додати Бриф</a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="m-b-lg">

                            <div class="input-group">
                                <input type="text" placeholder="Пошук ... " class=" form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn-white"> Пошук</button>
                                    </span>
                            </div>


                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover issue-tracker">
                                <tbody>
                                @forelse ($briefs as $brief)
                                <tr>
                                    <td>
                                        <span class="label label-primary">{{$brief->status}}</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            {{$brief->service}}
                                        </a>

                                        <small>
                                            {{$brief->price}}
                                        </small>
                                    </td>
                                    <td>
                                        {{$brief->company_name}}
                                    </td>
                                    <td>
                                        {{$brief->name}}
                                    </td>
                                    <td>
                                        {{$brief->phone}}
                                    </td>
                                    <td>
                                        {{$brief->email}}
                                    </td>
                                    <td>
                                        {{$brief->created_at}}
                                    </td>

                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> ред.</button>
                                    </td>
                                </tr>
                                @empty
                                    <h1><b>Брифи відсутні</b></h1>
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
