<footer class="page-footer teal">
    <div class="row  container">
        <div class="col s12"><h4>Contact Us</h4></div>
        <form class="col s12" id="frm-inq">
            <div class="col s12 m6">
                <div class="input-field col s12">
                    <input placeholder="First Name" id="first_name" type="text" class="validate">
                </div>
                <div class="input-field col s12">
                    <input placeholder="Last Name" id="last_name" type="text" class="validate">
                </div>
                <div class="input-field col s12">
                    <input placeholder="email" id="email" type="email" class="validate">
                </div>
            </div>
            <div class="col s12 m6">
                <div class="input-field col s12">
                    <textarea placeholder="Message" id="msg" rows="4" class="materialize-textarea"></textarea>
                </div>
                <div class="col m12 s12">
                    <button class="waves-effect waves-light btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Mahendra Karanduwawala</a>
            <div class="right">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle-o fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x"></i>
            </span>
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle-o fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x"></i>
            </span>
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle-o fa-stack-2x"></i>
              <i class="fa fa-instagram fa-stack-1x "></i>
            </span>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slider('start');
        $('.slider').slider({full_width: true});
    });

</script>
<script>
    $('.button-collapse').sideNav({
        menuWidth: 300,
        closeOnClick: true
    });
    $('.collapsible').collapsible();
</script>

<!--  Scripts-->
<script src="/js/materialize.js"></script>
<script src="/js/init.js"></script>