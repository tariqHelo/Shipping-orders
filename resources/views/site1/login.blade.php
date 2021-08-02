<div class="login"> 
    <img src="{{ asset('assets/delegate/img/bg.png')}}" alt="" class="back">
         <div class="row">
            <div class="col-xs-12">
                <img src="{{ asset('assets/delegate/img/logo.png')}}" alt="" class="logo">
                <form method="POST" action="{{route('login')}}">
                 @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="اكتب رقم هاتفك">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="****">
                    </div>
                    <button type="submit" class="btn btn-block LoginButton"> دخول </button>
                </form>
            </div>
        </div>
</div>