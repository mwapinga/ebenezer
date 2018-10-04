@extends('layouts.admin')



@section('content')

                                      @if (\Session::has('success'))
                                       <div class="alert alert-success">
                                      <p>{{ \Session::get('success') }}</p>
                                      </div><br />
                                       @endif
     <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Home Page Slider <span class="label label-danger">Not more than 5 Currently slide will be Displayed To the Website </span></h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Slider image</th>
													<th>Img URL</th>
                                                    <th>tag 1</th>
													<th>tag 2</th>
													<th>Tag 3</th>
													<th>Status</th>
													<th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@if($slider)

                                            	@foreach($slider as $index => $slide)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td><span class="list-img"><img src="{{ asset('images/'.$slide->photo->photo_tag) }}" alt=""></span></td>
                            <td>{{ $slide->photo->photo_tag }} </td>
                            <td>{{ $slide->tags1?$slide->tags1:'No tags..!!' }}</td>
							<td>{{ $slide->tags2?$slide->tags2:'No tags..!!' }}</td>
							<td>{{ $slide->tags3?$slide->tags3:'No tags..!!' }}</td>
                            <td>
                                @if($slide->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Not Active</span>
                                @endif
                            </td>
							<td><a href="{{ URL::to('slide/' . $slide->id . '/edit')}}"class="ad-st-view">Edit</a></td>
                        </tr>
                                                @endforeach
                                                @endif
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





@stop