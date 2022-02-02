@if(session('error'))
    <div class="alert alert-danger">Gözlənilməyən xəta baş verdi!</div>
@endif
@if(session('success'))
    <div class="alert alert-success">Mesajınız göndərildi!Tezliklə əməkdaşlarımız sizinlə əlaqə saxlayacaqdır!</div>
@endif
