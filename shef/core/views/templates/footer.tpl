		<div class="footer">
			<div class="foot">
				<div class="log">
					<a href="main/developers"><img src="/assets/images/logo/www.png" alt="images" class="logotype"></a>
				</div>
			</div>
		</div>
	<script>	
		$(document).ready(function() {
    $(".like").bind("click", function(event) {
      var dish_id = $(this).attr("data-id");
      $(this).toggleClass('green');;
      $.ajax({
        url: "/dishes/likes",
        type: "POST",
        data: ("id=" + dish_id + "&clikes=" + $(this).text()),
        dataType: "text",
        success: function(result) {
          if(result) {
            $('[data-id = ' + dish_id +']').text(result);
          }
          else alert("Error");
        }
      });
    });

  });
	</script>
		
	</body>
</html>