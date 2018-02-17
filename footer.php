    <style>
		.error {
			color:white;
			font-weight:bold;
		}
	</style>

    <div class="footer" style="background-image:url(background_images/1.jpg);">

      <h1 class="text-center" style="text-shadow:2px 2px 2px #000000;color:#fff;font-weight:bold;margin-bottom:30px;">CONTACT US</h1>
      <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <p>Contact us and we'll get back to you within 24 hours.</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Mirpur Cantonment, Dhaka</p>
              <p><span class="glyphicon glyphicon-phone"></span> +880 1730-683164</p>
              <p><span class="glyphicon glyphicon-envelope"></span> lccmist@gmail.com</p>
            </div>
            <form id="contactFormId" class="col-sm-7 slideanim" onSubmit="return false">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="q_name" placeholder="Name" type="text" required>
                  <p class="error" id="nameErr"></p>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="q_email" placeholder="Email" type="email" required>
                  <p class="error" id="emailErr"></p>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="question" placeholder="Question" rows="5" required></textarea>
              <p class="error" id="q_err"></p><br>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <button name="submit" value="submit" class="btn btn-default btn-lg" type="button" onClick="sendMail()">Send</button>
                </div>
              </div>
            </form>
          </div>
      </div>

    </div>

    <script>

		function sendMail() {

			var fd = new FormData(document.querySelector("#contactFormId"));

			$.ajax({

				url: "mailProcess.php",
				type: "POST",
				data:fd,
				contentType: false,
				processData: false,
				success: function(output) {

					if(output.indexOf("success") != -1) {

						document.getElementById("contactFormId").reset();

						document.getElementById("nameErr").innerHTML = "";
						document.getElementById("emailErr").innerHTML = "";
						document.getElementById("q_err").innerHTML = "";

						alert("Email has been sent successfully!");
					} else {

						var seFoo = JSON.parse(output);

						document.getElementById("nameErr").innerHTML = seFoo[0];
						document.getElementById("emailErr").innerHTML = seFoo[1];
						document.getElementById("q_err").innerHTML = seFoo[2];
					}

				}

			});

		}

	</script>
