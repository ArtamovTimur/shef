// $(document).ready(function() {
//     $(".like").bind("click", function(event) {
//       var dish_id = $(this).attr("data-id");
//       $.ajax({
//         url: "/dishes/likes",
//         type: "POST",
//         data: ("id=" + dish_id),
//         dataType: "text",
//         success: function(result) {
//           if(result) {
//             $('[data-id = ' + dish_id +']').text(result);
//           }
//           else alert("Error");
//         }
//       });
//     });
//   });
