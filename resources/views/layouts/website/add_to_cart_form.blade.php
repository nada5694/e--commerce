<form action="{{ url('addCart' , $product->id) }}" method="post" style="margin-top: 2%; margin-bottom: 3%;">
    @csrf
    <div class="input-group">
        <!-- declaration for first field -->
        <input class="form_control input-sm" type="number" value="1" min="" name="quantity" placeholder="Quantity">

        <!-- reducong the gap between them to zero -->
        <span class="input-group-btn" style="width: 5px;"></span>

        <!-- declaration for second field -->
        <input class="btn btn-primary form-control input-xs" type="submit" value="Add to cart" name="">
    </div>
</form>

