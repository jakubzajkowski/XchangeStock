## <span style="color:yellowgreen">Hi i'm Jakub Zajkowski</span>
I'm a student od computer science in Warsaw.i love programming this is my hobby and job.
## <span style="color:aqua">About this Website</span>
This is a Currency website in this site you can check price your favourite currencies.I modeled layout of this site on forex and many notes are just copied. This App doesn't have special funcion side for logged clients but this will change.
## Build
- Laravel
- balde
- Bootstrap
- css
- js
- gsap
- chart.js
## Code Example

##### PHP code
```php
class RegisterController4 extends Controller
{
    public function show(){
        return view('register4');
    }
    public function getData(Request $req){
        $mail = new MailController();
        $mail->sendMail(session('user')['email'],session('user')['username']);
        if (session('remember')=='on'){
            Auth::login(session('user'));
            return redirect()->to('/account/'.session('user')['id']);
        }
        else{
            return redirect()->to('/');
        }
    }
}
```
##### JS code
```js
let mobile = document.querySelector('.mobile')
let desktop = document.querySelector('.desktop')
let bars = document.querySelector('.bars')
let mobileNav = document.querySelector('.mobile__nav')
let screenWidth = window.matchMedia("(max-width: 950px)")
    if (screenWidth.matches) {
        desktop.style.display="none"
        let barsState=true
        mobileNav.style.opacity=barsState ? '0':'1';
        bars.addEventListener('click',()=>{
            barsState=!barsState
            mobileNav.style.opacity=barsState ? '0':'1';
            mobileNav.style.zIndex=barsState ? '0':'2';
        }) 
    } else {
        mobile.style.display="none"
        mobileNav.style.display="none"
    }
```
##### HTML blade
```html
<script src="{{asset("js/market/calendar.js")}}" defer></script>
<section class="w-100 text-dark">
    <div class="container w-75 p-2 mx-2 text-dark mx-auto">
        <div class="row p-2 my-5">
            <div class="col-sm col-md-8 p-4 mx-2">
               <h5 class="mb-4">LATEST RESEARCH</h5>
               <h3>{{$news[0]}}</h3>
               <p style="font-weight: 600">{{$news[1]}}</p>
               <p style="font-size: 0.8rem">{{$news[3]}}</p>
               <p>{{$news[2]}}</p>
               <p style="font-size: 0.8rem">TAGS: <span class="text-success">BoJ, Forex, Trade Ideas, USD/JPY, Volatility</span></p>
               <button class="mx-2 mt-4 border p-2 rounded bg-success btn"><a href="/register" class="text-white text-decoration-none">VIEW LATEST RESEARCH</a></button>
            </div>
            <div class="col-sm p-4 mx-2 text-center" style="background-color:rgb(238, 237, 237);">
                <h4 class="text-start mb-3">Economic Calendar</h4>
              <div class="p-2 xd"></div>
            </div>
        </div>
    </div>
</section>
```

## Hope you enjoy✨🎉🎯
