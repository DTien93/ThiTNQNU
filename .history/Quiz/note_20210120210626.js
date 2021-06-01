
   function checkResult1() {  
      $('#questions div.row').each(function(k, v){
          let id = $(v).find('h5').attr('id');
          let question = questions.find(x=>x.id == id);
          let answer = question['answer'];
     $('#question_'+ answer).css("background-color", "orange") ;
      });
}

 function checkNote() {
    $.ajax({
    url:'PHP/questions.php',
    type:'get',
    success:function(data){
      questions = jQuery.parseJSON( data);
      let index = 1;
      let d = '';
      $.each(questions,function(k,v){
        d+=   '<div class="row" style = "margin-left:10px;" id="question_'+v['id']+'"> ';
        d+=   '<h5 style="font-weight:bold;" id="'+v['id']+'"> <span class="text-danger">Câu '+index+': </span>'+v['question']+'</h5>';
        d +=   '<fieldset>';
        d+=   '<div class="radio col-md-12 ">';
        d+=    '<label class = "A"><span class="text-danger">A: </span>'+v['option_a']+'</label>';
        d+=   '</div>';
        d+=  ' <div class="radio col-md-12">';
        d+=     '<label class = "B"><span class="text-danger">B: </span>'+v['option_b']+'</label>';
        d+=   '</div>';
        d+=   '<div class="radio  col-md-12">';
        d+=     '<label class = "C"><span class="text-danger">C: </span>'+v['option_c']+'</label>';
        d+=   '</div>';
        d+=   '<div class="radio col-md-12">';
        d+=     '<label class = "D"><span class="text-danger">D: </span>'+v['option_d']+'</label>';
        d+=   '</div>';
        d+=     '<label class = "E"><class="E" name = "'+v['id']+'"><span class="">Giải thích : [ </span>'+v['ghichu'] +  ' ] '+ '</label>';
        d+=   '</div>';
        d+=  '</fieldset>';
       
        d+=  '</fieldset>';
        d+= '</div>';
        index++;
      });
      $('#questions').html(d);
    }
  });
    }