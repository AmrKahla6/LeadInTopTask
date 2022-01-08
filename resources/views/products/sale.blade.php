<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Number of sale</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('sale-product')}}" method="post" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <select name="product_id" id="" class="form-control">
                            <option value="" selected disable>Choose Product</option>
                            @foreach($prodcts as $pro)
                                <option value="{{$pro->id}}">{{$pro->productName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="numOfProduct" placeholder="Number to sale">
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit" id="AddUnits"> Save </button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                </form>
        </div>
    </div>
</div>