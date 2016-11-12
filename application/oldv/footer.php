 <script src="<?php echo base_url();?>assets/js/speech-input.js"></script>
                
                
                <script type="text/javascript">
 $.event.special.inputchange = {
    setup: function() {
        var self = this, val;
        $.data(this, 'timer', window.setInterval(function() {
            val = self.value;
            if ( $.data( self, 'cache') != val ) {
                $.data( self, 'cache', val );
                $( self ).trigger( 'inputchange' );
            }
        }, 20));
    },
    teardown: function() {
        window.clearInterval( $.data(this, 'timer') );
    },
    add: function() {
        $.data(this, 'cache', this.value);
    }
};

$('#say').on('inputchange', function() {
    
   var s=$.data(this, 'cache', this.value);
   document.getElementById("sayy").value=s;

 window.location = "voicee/?my=" + s;
});
</script>



    <script>
        
        function voice2()
        {
            var mic=document.getElementById("say").value;
            window.location = "voicee/?my="+mic;
            
            
        }
        </script>

</body>
</html>

        
