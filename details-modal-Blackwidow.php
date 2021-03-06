
<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-center">Razer Blackwidow</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div> 
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="img/blackwidow.jpg" alt="blackwidow" class="details img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Details:</h4>
                        <p>The Razer Blackwidow is one of the most famous gaming keyboards!</p>
                        <hr>
                        <p>Price: $199.99</p>
                        <p>Brand: Razer</p>
                        <form action="add_cart.php" method="post">
                            <div class="form-group">
                                <div class="col-xs-3">
                                    <label for="quantity" id="quantity-label">Quantity: </label>
                                    <input type="text" class="form-control" id="quantity" name="quantity">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="chroma">Chroma: </label>
                                    <select name="chroma" id="chroma" class="form-control">
                                        <option value=""></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-warning" type="submit"><i class="fa fa-shopping-cart" id="cart"></i>Add to cart</button>
        </div>
        </div>
    </div>
</div>

<script src="index.js"></script>