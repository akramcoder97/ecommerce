@extends('master')


@section('content')
<div class= "custom-product">
    <div class="col-sm-10">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Amount</th>
                <td>{{$total}} Da</td>
            </tr>
            <tr>
                <th scope="row">Tax</th>
                <td>0 Da</td>
            </tr>
            <tr>
                <th scope="row">Delivery</th>
                <td colspan="2">10 Da</td>
            </tr>
            <tr>
                <th scope="row">Total amount</th>
                <td colspan="2">{{$total+10}} Da</td>
            </tr>
        </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST" >
            @csrf
                <div class="mb-3">
                    <label for="">address</label>
                    <input name="address" placeholder ="entrer votre address ici" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">method de payment :</label><br>
                    <input type="radio" value="cash" name="payment"><span>payment en ligne</span><br>
                    <input type="radio" value="cash" name="payment"><span>payment cash</span><br>
                    <input type="radio" value="cash" name="payment"><span>payment EMI</span><br>
                </div>
                <button type="submit" class="btn btn-primary">commander maintenat</button><br><br>
            </form>
        </div>
    </div>
    </div>
 @endsection