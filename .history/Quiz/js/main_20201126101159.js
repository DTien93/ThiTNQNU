<script type="text/javascript">
    $('#btnStart').click(function(){
            GetQuestion();
    });
    function GetQuestion() {
            $.ajax({
              url : 'PHP/questions.php',
              type: 'get',
              success:function(data) {
                // console.log(data);
                  $('#questions').html(data);
              }
            });
    }
</script>