<x-app-layout>
    <div class="container-fluid card ">
        <div class="card-body">

        <!-- Content Row -->
        <div class="row ">
                @foreach($boxes as $box)
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{$box->Id}}</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$box->box_price}} ETH</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


        </div>
    </div>
    </div>
</x-app-layout>
