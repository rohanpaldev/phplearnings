
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tggle forms</title>
    <style>
        #one{
            display:none;
        }
        #two{
            display:none;
        }
        #three{
            display:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="" id="first_form">
                    <caption>
                        <h1 class="text-center">My form</h1>
                    </caption>
                    <section id="contact">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="type your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class=" form-control">
                        </div>
                        <div class="form-group ">
                            <label for="Option"> Select Option</label>
                            <select name=""  class="form-select selectType" id="">
                                <option value="One">One</option>
                                <option value="Two">two</option>
                                <option value="Three">three</option>
                            </select>
                            <p id="para" style="color:red;">**Please select an option</p>
                        </div>
                    </section>

                    <!--One section start-->
                    <section id="one">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="30" rows="10" name="address"  class="form-control" placeholder="Type your address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="type your contact number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="type your email">
                        </div>
                        <div class="form-group">
                            <label for="skypeId">Skype ID</label>
                            <input type="text" name="skypeId" id="skypeId" class="form-control" placeholder="type your skype ID">
                        </div>
                        <div class="form-group">
                            <label for="insta">Instagram</label>
                            <input type="text" name="insta" id="insta" class="form-control" placeholder="type your instagram Handle">
                        </div>
                    </section>
                    <!--One section end-->

                    <!--Second Section start-->
                   <section id="two">
                       <div class="row mt-2">
                           <div class="col-6">
                               <div class="form-group">
                                   <label for="date">Date</label>
                                   <input type="date" class="form-control">
                               </div>
                           </div>
                           <div class="col-6">
                               <div class="form-group">
                                   <label for="time">Time</label>
                                   <input type="time" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" name="email" id="email" placeholder="type your email ">
                       </div>
                       <div class="form-group">
                            <label for="insta">Instagram</label>
                            <input type="text" name="insta" id="insta" class="form-control" placeholder="type your instagram Handle">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="type your contact number">
                        </div>
                    </section>

                     <!--Second Section end-->
                     <!--third section start-->
                    <section id="three">
                    <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="30" rows="10" name="address"  class="form-control" placeholder="Type your address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="type your contact number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="type your email">
                        </div>
                        <div class="form-group">
                            <label for="skypeId">Skype ID</label>
                            <input type="text" name="skypeId" id="skypeId" class="form-control" placeholder="type your skype ID">
                        </div>
                        <div class="form-group">
                            <label for="insta">Instagram</label>
                            <input type="text" name="insta" id="insta" class="form-control" placeholder="type your instagram Handle">
                        </div>
                        <div class="row mt-2">
                           <div class="col-6">
                               <div class="form-group">
                                   <label for="date">Date</label>
                                   <input type="date" class="form-control">
                               </div>
                           </div>
                           <div class="col-6">
                               <div class="form-group">
                                   <label for="time">Time</label>
                                   <input type="time" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" name="email" id="email" placeholder="type your email ">
                       </div>
                       <div class="form-group">
                            <label for="insta">Instagram</label>
                            <input type="text" name="insta" id="insta" class="form-control" placeholder="type your instagram Handle">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="type your contact number">
                        </div>
                    </section>
                    <!--third section end-->
                    <div class="form-group mt-3">
                        <button class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
const contact = document.querySelector(`#contact`)
const one = document.querySelector(`#one`)
const two =  document.querySelector(`#two`)
const three = document.querySelector(`#three`)
const selectType  =  document.querySelector(`.selectType`)
const para = document.querySelector(`#para`)

selectType.addEventListener(`change`, function(){
    console.log(selectType.value)
    if(selectType.value ==="One"){
        one.style.display = "block";
        two.style.display = "none";
        three.style.display = "none";
        para.style.display="none";

    } 
    else if(selectType.value ==="Two"){
        two.style.display = "block";
        one.style.display = "none";
        three.style.display = "none";
        para.style.display="none";
    }
    else if(selectType.value === "Three"){
        three.style.display = "block";
        two.style.display = "none";
        one.style.display = "none";
        para.style.display="none";
    }
   
})
</script>
</html>
