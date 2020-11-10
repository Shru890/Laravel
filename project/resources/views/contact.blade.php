<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact-US</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="http://fonts.googleapis.com/icon?family=georgia sans-serif+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <style type="text/css">
body {
    height: 100%;
    background-color: #dbc4b6;
}
.form-container {
    width: 600px;
    margin-left: auto;
    margin-right: auto;
    /*margin-top:90px;
    margin-bottom: 30px;*/
    padding: 30px;
    background-color: #fff;
    position: relative;
        box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    position: absolute;
    top: 50%;
    left: 50%;

    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.form-container .row {
    margin-bottom: 0px;
}


/* label color */
   .input-field label {
     color: #9c9c9c;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #9c9c9c;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #9c9c9c;
     box-shadow: 0 1px 0 0 #9c9c9c;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #9c9c9c;
     box-shadow: 0 1px 0 0 #9c9c9c;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #9c9c9c;
     box-shadow: 0 1px 0 0 #9c9c9c;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #9c9c9c;
   }
   input:not([type]):focus:not([readonly]), 
   input[type=text]:focus:not([readonly]), 
   input[type=password]:focus:not([readonly]), 
   input[type=email]:focus:not([readonly]), 
   input[type=url]:focus:not([readonly]), 
   input[type=time]:focus:not([readonly]), 
   input[type=date]:focus:not([readonly]), 
   input[type=datetime]:focus:not([readonly]), 
   input[type=datetime-local]:focus:not([readonly]), 
   input[type=tel]:focus:not([readonly]), 
   input[type=number]:focus:not([readonly]), 
   input[type=search]:focus:not([readonly]), 
   textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #009ddc;
    box-shadow: 0 1px 0 0 #009ddc;
}
input:not([type]):focus:not([readonly])+label, 
input[type=text]:focus:not([readonly])+label, 
input[type=password]:focus:not([readonly])+label, 
input[type=email]:focus:not([readonly])+label, 
input[type=url]:focus:not([readonly])+label, 
input[type=time]:focus:not([readonly])+label, 
input[type=date]:focus:not([readonly])+label, 
input[type=datetime]:focus:not([readonly])+label, 
input[type=datetime-local]:focus:not([readonly])+label, 
input[type=tel]:focus:not([readonly])+label, 
input[type=number]:focus:not([readonly])+label, 
input[type=search]:focus:not([readonly])+label, 
textarea.materialize-textarea:focus:not([readonly])+label {
    color: #009ddc;
}
.form-container .btn {
    background-color: #009ddc;

}
.submitbtn {
    line-height: 48px;
    display: block;
    height: 48px;
    width: 100%;
}
.form-container h3 {
    font-size: 42px;
    letter-spacing: 0.1em;
    margin: 0;
    padding: 0;
    color: #ffffff;
    font-weight: 700;
    text-transform: uppercase;
    position: absolute;
    top: -46px;
}
@media  all and (max-width: 640px) {
    .form-container {
        position: static;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        width: 100%;
        margin-top: 70px;
        margin-bottom: 20px;
    }
    .form-container h3 {
        font-size: 24px;
        top: -26px;
    }
}

        </style>
    </head>
    <body>
        <div class="container">
            <div class="container">
                <div class="form-container z-depth-4">
                    <i><h3 style="font-family: georgia sans-serif; color:#73340e">Contact Us</h3></i>
                    <i><h6 style="font-family:georgia sans-serif;font-style: bold; color:#009ddc">Your feedback is highly appreciated and will help us to improve our ability to serve you and other users of our web sites.<br>Stay Safe,Stay Tuned,Stay updated!!!!</h6></i><br> 
                    <div class="row">
                        @if(Session::get('message_sent'))
                           <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                               
                           </div>

                        @endif
                        <form method="POST" action="{{route('contact.send')}}" class="col s12" id="reused_form">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" name="name" required class="validate">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email" required class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="message" name="message" class="materialize-textarea" class="validate" ></textarea>
                                    <label for="message">Comments</label>
                                </div>
                            </div>
                            <div>
                                <button class="waves-effect waves-light btn submitbtn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        </div>
    </body>
</html>