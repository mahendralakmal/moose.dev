<footer class="page-footer teal">
        <div class="row">
            <div class="col s12"><h4>Contact Us</h4></div>
            <div class="col m4">
                <form id="frm-inq">
                    <div class="input-field col s12">
                        <input placeholder="Name" id="name" type="text" class="validate">
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="email" id="email" type="email" class="validate">
                    </div>
                    <div class="input-field col s12">
                        <textarea placeholder="Message" id="msg" rows="4" class="materialize-textarea"></textarea>
                    </div>
                    <div class="col m12 s12">
                        <button class="btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col m4 footer-content">
                <div class="col m12 s12 center-content">
                    <p>Making and selling great clothes for great people!</p>
                    <p>409–1 Galle Road, Colombo 3</p>
                    <p>mooseclothingcompany.com</p>
                    <p>+94773 675 440 / 0112692704</p>
                </div>
                <div class="col m12 s12 center-content-bottom row">
                    <span class="fa-stack fa-lg col s4"><i class="fa fa-twitter fa-stack-2x left"></i></span>
                    <span class="fa-stack fa-lg col s4 center"><i class="fa fa-facebook fa-stack-2x center"></i></span>
                    <span class="fa-stack fa-lg col s4"><i class="fa fa-instagram fa-stack-2x right"></i></span>
                </div>
            </div>
            <div class="col m4 footer-content right-content">
                <div class="lst">
                    <p>409–1 Galle Road, Colombo 3, Sri Lanka<br>
                        mooseclothingcompany.com<br>
                        +94773 675 440 / 0112692704</p>
                </div>
                <div class="lst">
                    <p>409–1 Galle Road, Colombo 3, Sri Lanka<br>
                        mooseclothingcompany.com<br>
                        +94773 675 440 / 0112692704</p>
                </div>
            </div>
        </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="">Mahendra Karanduwawala</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slider('start');
        $('.slider').slider({full_width: true});
        //MODAL POPUP
        $('.modal-trigger').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            starting_top: '4%', // Starting top style attribute
            ending_top: '10%', // Ending top style attribute
        });
    });
    $('.button-collapse').sideNav({
        menuWidth: 300,
        closeOnClick: true
    });
    $('.collapsible').collapsible();
</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        $(".card-image").bind('mouseover',function(event){
            $(this).prev(".quickview").stop(true,true).fadeIn(100);
        }).parent().bind('mouseleave', function(e) {
            $(this).find(".quickview").stop(true,true).fadeOut(100);
        });
    });
</script>
<!--  Scripts-->
<script src="/js/materialize.js"></script>
<script src="/js/init.js"></script>