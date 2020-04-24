<table>
  <thead>
    <tr>
    	<th>Date</th>
      <th>Employee</th>
      <th>Supplier</th>
      <th>Product</th>
      <th>Quantity</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($buying as $row)
    <tr>
      <td>{{ $row->date }}</td>
      <td>{{ $row->employee->name}}</td>
      <td>{{ $row->supplier->name }}</td>
      <td>{{ $row->product->name }}</td>
      <td>{{ $row->quantity }}</td>
      <td>{{ $row->total }}</td>
    </tr>
	@endforeach
  </tbody>
</table>