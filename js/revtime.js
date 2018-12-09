<script type="text/JavaScript">
            function setTimeForSubmit() {
                window.setTimeout("submitForm()", 1500000);//Expire after 30 min
            }
            function submitForm() {
                document.forma.submit();
            }
            var mins = 25; // write mins to javascript  
            var secs = 1; // write secs to javascript  
            function timer()
            {
                // tic tac  
                if (--secs === -1)
                {
                    secs = 59;
                    --mins;
                }

                // leading zero? formatting  
                if (secs < 10)
                    secs = "0" + secs;
                if (mins < 10)
                    mins = "0" + parseInt(mins, 10);

                // display  
                document.forma.mins.value = mins;
                document.forma.secs.value = secs;

                // continue?  
                if (secs === 0 && mins === 0) // time over  
                {
                    document.forma.ok.disabled = true;
                    document.formb.results.style.display = "block";
                }
                else // call timer() recursively every 1000 ms == 1 sec  
                {
                    window.setTimeout("timer()", 1000);
                }
            }
            window.history.forward();
            function noBack() {
                window.history.forward();
            }
        </script>