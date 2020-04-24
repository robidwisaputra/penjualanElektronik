@extends('templates/main')

@section('content')
@if (session('status'))
  <div class="flash-data" data-flashdata="{{ session('status') }}"></div>
@endif
<form method="post" action="">
  <input type="hidden" id="id_product">
  <input type="hidden" class="id_member" name="id_member">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h5>Customer</h5>
      </div>
      <div class="card-block">
        <div class="form-group row">
          <div class="col-sm-12">
            <div class="input-group input-group-button">
              <input type="text" name="name_member" class="form-control form-control-sm name_member" readonly="" value="">
              <span class="input-group-addon btn btn-primary" id="basic-addon10" data-toggle="modal" data-target="#member-Modal">
                  <span class="">Choose</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
          <h3 class=" d-inline">Total : Rp. </h3>
          <h3 class="form-control-static d-inline" id="total">0</h3><br><br>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cost</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="cost"  autocomplete="off">
            </div>
          </div>
          <h5 class=" d-inline">Change : Rp. </h5>
          <h5 class="form-control-static d-inline" id="change">0</h5>
              <button type="submit" class="btn btn-primary m-b-0 float-right" id="submit">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-header">
        <h5>Product</h5>
      </div>
      <div class="card-block">
          @csrf
          <div class="form-group row">
           
            <div class="col-sm-12">
              <div class="input-group input-group-button">
                <input type="text" readonly="" id="name" class="form-control">
                <span class="input-group-addon btn btn-primary" id="basic-addon10" data-toggle="modal" data-target="#product-Modal">
                    <span class="">Choose</span>
                </span>
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-10">
              <div class="form-control-static" id="model">-
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <div class="form-control-static" id="price">-
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Qty</label>
            <div class="col-sm-10 input-group input-group-button">
              <input type="text" name="quantity" id="quantity"  autocomplete="off" class="form-control form-control-sm @error('quantity') is-invalid @enderror" autocomplete="off" value="1">
              <span class="input-group-addon btn btn-primary" id="add">
                  <span class="">Add</span>
              </span>
            </div>  
          </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <div class="dt-responsive table-responsive">
          <table id="basket" class="table table-striped table-bordered nowrap">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="data-basket">
          </table>
        </div>
      </div>  
    </div>
  </div>  
</div>
</form>  


<div class="modal fade" id="member-Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Member</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="dt-responsive table-responsive">
          <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($members as $member)
              <tr>
                <td class="d-none">{{ $member->id_member}}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->email }}</td>
                <td>
                  <button type="button" class="btn btn-warning choose-member">Choose</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PRODUCT -->
<div class="modal fade" id="product-Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="dt-responsive table-responsive">
          <table id="base-style" class="table table-striped table-bordered nowrap">
            <thead>
              <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Guarantee</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td class="d-none">{{$product->id_product}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->model }}</td>
                <td>{{ $product->guarantee }}</td>
                <td>{{ $product->price }}</td>
                <td>
                  <button type="button" class="btn btn-warning choose-product">Choose</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
@push('script')
<script>
if ($('#basket tbody').is(':empty')) {
  $('#basket>tbody').append("<tr><td colspan='7'>Data Kosong</td></tr>");
}

  $('.choose-product').click(function(){
    var name = $(this).closest('tr').find('td:eq(1)').text();
    var model = $(this).closest('tr').find('td:eq(2)').text();
    var price = $(this).closest('tr').find('td:eq(4)').text();

    var id_product = $(this).closest('tr').find('td:eq(0)').text();
    $('#name').val(name);
    $('#model').text(model);
    $('#id_product').val(id_product);
    $('#price').text(price);
    $('#product-Modal').modal('hide');
});

  $('.choose-member').click(function(){
      var id_member = $(this).closest('tr').find('td:eq(0)').text();
      var name_member = $(this).closest('tr').find('td:eq(1)').text();

    $('.name_member').val(name_member);
    $('.id_member').val(id_member);
    $('#member-Modal').modal('hide');
  });


var no;
var total;
var count = 0;
$('#add').click(function(){
  if ($('#basket>tbody>tr>td').text() == "Data Kosong"){
    $('#basket>tbody>tr').remove();
    no = 1;
  }else{
    let last = $('#basket tr:last').find('td:eq(0)').text();
    no = parseInt(last) + 1;
  }

  let name = $('#name').val();
  let id_product = $('#id_product').val();
  let guarantee = $('#guarantee').text();
  let price = $('#price').text();
  let quantity = $('#quantity').val();

  price = parseInt(price);
  quantity = parseInt(quantity);

  let subtotal = quantity * price;
  count++;
  let record = "<tr><td>" +name+ "<input type='hidden' name='items["+ count +"][id_product]' value='"+ id_product +"'/></td>";
  record += "<td>" +price+ "<input type='hidden' name='items["+ count +"][price]' value='"+ price +"'/></td>";
  record += "<td>" +quantity+ "<input type='hidden' name='items["+ count +"][quantity]' value='"+ quantity +"'/></td>";
  record += "<td>" +subtotal+ "<input type='hidden' name='items["+ count +"][subtotal]' value='"+ subtotal +"'/></td>";
  record += "<td> <div class='icon-btn'><button type'button' class='remove-record btn btn-sm btn-danger'><i class='fa fa-trash-o'></i></button></div></td></tr>";

    // total
    subtotal = parseInt(subtotal);
    ($('#total').text() == '0') ? total = subtotal : total += subtotal


    $('#total').text(total);

  $('#basket').append(record);
});


// hapus
$('#basket').on('click','tr button.remove-record', function(e){
  $(this).closest('tr').remove();

   if ($('#basket tbody').is(':empty')) {
    $('#basket>tbody').append("<tr><td colspan='7'>Data Kosong</td></tr>");
  }

  // kurangi total
  let subtotal = $(this).closest('tr').find('td:eq(3)').text();
  subtotal = parseInt(subtotal);
  total -= subtotal;
  $('#total').text(total);
});

// submit
$('#basket').on('submit', function(e){
  e.preventDefault();
  let cost = $('#cost').val();
  if(cost <= total){
    alert('uang kurang!');
  }else{
    let uri = "{{ route('selling.input') }}";
    let data = $('#basket').serializeArray();
    $.post(uri, data, function(i){
    });  
  }
});

// kembalian
var change;
var total = $('#total').text();
total = parseInt(total);
$('#cost').on('keypress', function(){
  
  let cost = $('#cost').val();

  change = cost - total;

  $('#change').text(change);  
});

// cek apakah uang kurang

</script>
@endpush