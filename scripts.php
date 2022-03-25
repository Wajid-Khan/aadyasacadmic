<!-- Js File_________________________________ -->

<!-- j Query -->
<script type="text/javascript" src="vendor/jquery-2.1.4.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

<!-- Vendor js _________ -->
<!-- revolution -->
<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>

<!-- Google map js -->
<script src="https://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
<script src="vendor/gmap.js"></script>
<!-- Bootstrap Select JS -->
<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>
<!-- Time picker -->
<script type="text/javascript" src="vendor/time-picker/jquery.timepicker.min.js"></script>
<!-- WOW js -->
<script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script>
<!-- owl.carousel -->
<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- js count to -->
<script type="text/javascript" src="vendor/jquery.appear.js"></script>
<script type="text/javascript" src="vendor/jquery.countTo.js"></script>

<!-- Theme js -->
<script type="text/javascript" src="js/theme.js"></script>
<script>
    $(document).ready(function(){
        $('#submit1').click(function(){
            var user_email = $('#email_address').val();
            if(user_email != '' )
            {
                var email_resp1 = validateEmail(user_email);
                if(email_resp1 == false)
                {
                    alert('Please enter the valid email address');
                    return false;
                }
                
                $.ajax({
                    url : 'subscribe_email.php',
                    type : 'POST',
                    data : {email:user_email},
                    success : function(data){
                        alert(data);
                        $('#email_address').val('');
                    }
                });
                
            }
            else
            {
                alert('Please enter your email...');
                return false;
            }
            
        });
    });
    function validateEmail(email){ 
        var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
        return re.test(email); 
    }
</script>