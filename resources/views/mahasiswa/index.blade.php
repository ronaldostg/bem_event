<form action="/booking" method="POST">
@csrf
<input type="text" placeholder="jumlah tiket yang dibeli">
    {{-- <input type="hidden" name="user_id" value="1" > --}}
    {{-- <input type="hidden" name="user_id" value="{{$Auth::user($id)}}" > --}}
    {{-- <input type="hidden" name="acara_id" value="1">
    <input type="hidden" name="jumlah" value="5"> --}}
    {{-- <input type="hidden" name="acara_id" value="{{$acara->id)}}"> --}}

    {{-- anggap kayak kunatitas di produk online shop --}}
    <input type="hidden" name="jumlah_beli" value="5">
    {{-- <input type="hidden" name=""> --}}
    <button>Booking</button>
</form>