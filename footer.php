<footer>
foot

</footer>
<script>
            //performs ocr
            function runOCR() {
                var f = document.getElementById('file').files[0];
                Tesseract.recognize(f)
                    .then(function (result) {
                        document.getElementById("ocr_results")
                            .innerText = result.text;
                    }).progress(function (result) {
                        document.getElementById("ocr_status")
                            .innerText = result["status"] + " (" +
                            (result["progress"] * 100) + "%)";
                    });
            }
            //listener for the button
            document.getElementById("go_button")
                .addEventListener("click", function (e) {
                    var url = document.getElementById("file").value;
                    runOCR();
                });
            //displays image selected
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image-selected').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#file").change(function () {
                readURL(this);
            });
			
			$(".nav li").on("click", function() {
      $(".nav li").removeClass("active");
      $(this).addClass("active");
    });
			    
        </script>

</body>

</html>