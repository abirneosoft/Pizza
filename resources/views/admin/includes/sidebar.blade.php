
<img src="{{asset('/uploads/'.$sid[0]->image)}}" width=340 height=200/>
<div class="list-group mt-3">
<a href="/adminpanel/dashboard/category" class="list-group-item list-group-item-action">
    Category
  </a>
  <a href="/adminpanel/dashboard/product" class="list-group-item list-group-item-action">
    Product
  </a>
  <a href="{{url('/adminpanel/edit',$sid[0]->id)}}" class="list-group-item list-group-item-action">Edit</a>
  <a href="#" class="list-group-item list-group-item-action">Category</a>
 
  <a href="#" class="list-group-item list-group-item-action disabled">Order</a>
</div>