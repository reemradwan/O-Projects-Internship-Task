<x-app-layout>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Table #06</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="h5 mb-4 text-center">Table Accordion</h3>
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>total</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                        <tr class="alert" role="alert">
                            <td>
                                <label class="checkbox-wrap checkbox-primary">
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <div class="img" style="background-image: url(images/product-1.png);"></div>
                            </td>
                            <td>
                                <div class="email">
                                    <span>{{$item->description}}</span>
                                </div>
                            </td>
                            <td>{{$item->price}} ETH</td>
                            <td>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
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
</section>



</body>
</x-app-layout>
