<x-app-layout>
    <div class="container-fluid card ">
        <div class="card-body">
        @if($user->role== 'Admin')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 card-title">
            <a href="{{route('newbox')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class=" text-white-50"></i> Create Box</a>
        </div>
        @endif

        <!-- Content Row -->
        <div class="row ">
        @if($user->role== 'Admin')
            @foreach($boxes as $box)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{$box->id}}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$box->price}} ETH</div>
                            </div>
                            @if($box->sold_at->null() == false)
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"> Sold to {{$box->sold_to}}</i>
                                </div>
                            @else
                                <div class="col-auto">
                                    <button class="btn-success fa-2x "> Choose winner!</button>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif


            @if($user->role == 'User')
                @foreach($boxes as $box)
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{$box->id}}</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$box->price}} ETH</div>
                                    </div>
                                    <div class="col-auto">
                                        <button class=" btn-primary fa-2x "> Buy Box</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        @endif

        </div>

        <!-- Content Row -->


        </div>
    </div>
</x-app-layout>
