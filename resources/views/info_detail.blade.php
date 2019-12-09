@extends('layouts.app')

    @section('content')
        
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pagetitle">
                <i class="icon ion-ios-home-outline"></i>
                <div>
                <h4>Form Data Detail</h4>
                <p class="mg-b-0">Form Data Detail</p>
            </div>            
        </div><!-- d-flex -->
        <input type="hidden" name="" id="detail_id" value="{{ $info->id }}">
        <div class="br-pagebody">
            <div class="card card-body">
                <h3 class="" style="color: #4e4e4e;">User Info</h3>
                <div class="row mg-t-20">
                    <div class="col-md-5">
                        <div class="info_detail">
                            <h4>User Name</h4>
                            <p>{{ $info->name }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>First Name</h4>
                            <p>{{ $info->first_name }}</p>
                        </div>                                      
                    </div>
                    <div class="col-md-5">
                        <div class="info_detail">
                            <h4>Email</h4>
                            <p>{{ $info->email }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Phone</h4>
                            <p>{{ $info->phone_number }}</p>
                        </div>  
                    </div>
                    <div class="col-md-2">
                        <select name="" id="sell" class="form-control">
                            @if ($info->sell == 1)
                                <option value="0">Not Sent</option>
                                <option value="1" selected>Sent</option>
                            @else
                                <option value="0">Not Sent</option>
                                <option value="1">Sent</option>
                            @endif
                        </select>
                        <br>
                        <button class="btn btn-primary" id="info_edit">&nbsp;&nbsp;Edit&nbsp;&nbsp;</button>
                        <br>

                    </div>
                </div>

                <h3 class="" style="color: #4e4e4e;">Data Detail</h3>
                <div class="row mg-t-20">
                    <div class="col-md-12">
                        <div class="info_detail">
                            <h4>Site Url</h4>
                            <p>{{ $info->site_url }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Dans quel département se situe votre logement ?</h4>
                            <p>{{ $info->location }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Vous êtes</h4>
                            <p>{{ $info->who }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Quel type de surface souhaitez-vous isoler ?</h4>
                            <p>{{ $info->surface_type }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Quelle est votre énergie de chauffage principale ?</h4>
                            <p>{{ $info->energy }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Quelle superficie souhaitez-vous isoler ?</h4>
                            <p>{{ $info->area }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Combien de personnes y a t-il dans votre foyer ?</h4>
                            <p>{{ $info->number_people }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Quels est le revenu fiscal de référence du foyer ?</h4>
                            <p>{{ $info->tax }}</p>
                        </div>
                        <div class="info_detail">
                            <h4>Eligble or Not Eligble ?</h4>
                            {{$info->eligble}}
                        </div>
                        <div class="info_detail">
                            <h4>Comment</h4>
                            @if ($info->comment == NULL)
                                <textarea name="comment" class="form-control is-valid" id="comment" cols="30" rows="5"></textarea>
                            @else
                                <textarea name="comment" class="form-control is-valid" id="comment" cols="30" rows="5">{{$info->comment}}</textarea>
                            @endif
                            <br>
                            <button class="btn btn-primary" id="comment_save">&nbsp;&nbsp;Save&nbsp;&nbsp;</button>
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

        <!-- The Profile Modal -->
    <div class="modal fade effect-fall" id="info_modal">
        <div class="modal-dialog" style="margin-top:100px;">
            <div class="modal-content">    
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">User Info Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>    
            <!-- Modal body -->
            <div class="modal-body">
                {{-- <div class="alert alert-success display_none" id="alert0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                    <span><strong>Well done!</strong> User info was changed successfully.</span>
                    </div><!-- d-flex -->
                </div><!-- alert --> --}}
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                    </div>
                    <input type="text" id="info_name" class="form-control" placeholder="Username" value="{{ $info->name }}">
                </div><!-- input-group -->
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                    </div>
                    <input type="text" id="info_firstname" class="form-control" placeholder="Username" value="{{ $info->first_name }}">
                </div><!-- input-group -->
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon ion-iphone tx-16 lh-0 op-6"></i></span>
                    </div>
                    <input type="text" id="info_phone" class="form-control" placeholder="Username" value="{{ $info->phone_number }}">
                </div><!-- input-group -->
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon ion-email tx-16 lh-0 op-6"></i></span>
                    </div>
                <input type="text" id="info_email" class="form-control" placeholder="Email" value={{ $info->email }}>
                </div><!-- input-group -->
            </div>
        
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="info_save">Save</button>
                <button type="button" id="info_close" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        
            </div>
        </div>
    </div>
        
    @endsection

    @section('script')
    
    <script>
        $(document).ready(function(){
            let detail_id = $('#detail_id').val();
            $('#comment_save').click(function(){
                let comment = $('#comment').val()                
                if(comment == ''){
                    alert('Please enter any comment');
                    return;
                }
                $.ajax({
                    url: '/save_comment',
                    type: 'get',
                    data: {id: detail_id, comment: comment},
                    success: function(data){
                        if(data.data == 'success'){
                            toast_call('Success', data.message, 2000, 'info')
                        }
                    }
                })
            })

            $('#sell').change(function(){
                let sell = $(this).val()
                $.ajax({
                    url: '/save_sell',
                    type: 'get',
                    data: {sell: sell, id: detail_id},
                    success: function(data){
                        if(data.data == 'success'){
                            toast_call('Success', data.message, 2000, 'info')
                        }
                    }
                })
            })

            $('#info_edit').click(function(){
                $('#info_modal').modal({backdrop:'static'});
            })

            $('#info_save').click(function(){
                let name = $('#info_name').val();
                let first_name = $('#info_firstname').val();
                let phone = $('#info_phone').val();
                let email = $('#info_email').val();
                $.ajax({
                    url: '/save_user_info',
                    type: 'get',
                    data: {id: detail_id, name:name, first_name:first_name, phone:phone, email: email},
                    success: function(data){
                        if(data.data == 'success'){
                            toast_call('Success', data.message, 2000, 'info')
                        }
                    }
                })
            })
            $('#info_close').click(function(){
                location.reload();
            })
        })
    </script>
    @endsection


    
