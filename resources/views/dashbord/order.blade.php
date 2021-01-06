@extends('dashbord.layout.sidebar')

@section('content')




<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <nav class="nav nav-tabs nav-stacked col-10 my-2">
            <a class="nav-link @if($tab == 'NonConfirme') active @endif" href=" {{ route('order.index') }} ">Non Confirmé</a>
            <a class="nav-link @if($tab == 'Confirme') active @endif" href= {{ route('order.confirme') }} >Confirmé</a>
            <a class="nav-link @if($tab == 'livre') active @endif" href=" {{ route('order.livre') }} ">livré</a>



        </nav>
        {{-- <a href="/Rendezvous/archive">
            <button type="submit" class="btn btn-info mt-3 col">archive</button>
        </a> --}}
        </div>


        {{-- @if (session('emailclientdelete'))
        <div class="alert alert-success" role="alert">
            {{ session('emailclientdelete') }}
        </div>
        @endif --}}

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            <p class="card-title col-10">List Des Order {{ $tab }} </p>
                            <button type="button" class="btn btn-outline-primary btn-rounded  col">
                                {{ $order->count() }} order
                              </button>
                        </div>



                  <div class="table-responsive">
                      <table id="" class="table">
                          <thead>
                              <tr>
                                  <th>Order a ...</th>
                                  <th>name</th>
                                  <th>numéro de telephone</th>
                                  <th>address</th>
                                  <th>City</th>

                                  <th>Quantity</th>

                                  <th>change status</th>
                                  <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order as $rendez)






                            <tr>
                            <td>{{ $rendez->created_at->diffForHumans()  }}</td>
                                <td>{{ $rendez->name }}</td>
                                <td>{{ $rendez->number }}</td>
                                <td>
                                    {{ $rendez->address }}

                                 </td>

                                 <td>
                                    {{ $rendez->city }}

                                 </td>

                                 <td>
                                      {{ $rendez->Quantity }}
                                     </td>



                                       <td>
                                        <form class="forms-sample" method="POST"
                                        action="{{ route('order.update', ['order' => $rendez->id]) }}" >
                                             @csrf
                                             @method('PUT')
                                        <input type="hidden" name="name" class="form-control" id="exampleInputUsername1" value="{{ $rendez->name }}">
                                        <input type="hidden" name="number" class="form-control" id="exampleInputUsername1" value="{{ $rendez->number }}">
                                        <input type="hidden" name="address" class="form-control" id="exampleInputUsername1" value="{{ $rendez->address }}">
                                        <input type="hidden" name="city" class="form-control" id="exampleInputUsername1" value="{{ $rendez->city }}">
                                        <select name="status" class="form-control">
                                            <option value="">   </option>
                                            <option  value="Confirme">Confirmé</option>
                                            <option  value="NonConfirme">non Confirmé</option>

                                            <option value="livre">Livré</option>


                                        </select>
                                        <button type="submit" class="btn btn-success btn-sm mt-2 mx-5">changement</button>
                                    </form>
                                       </td>

                                       <td>

                                           <form method="POST" class="fm-inline"
                                    action="{{ route('order.destroy', ['order' => $rendez->id]) }}">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="supprimé!" class="btn btn-danger"/>

                                </form>
                                       </td>




                            </tr>


                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</div>



@endsection('content')
