function checkResult() {  
        let mark = 0;
        let total = 10;
        let fail =  total - mark;
        let score = 0;
        let message = '';
          $('#questions div.row').each(function(k, v){
              let id = $(v).find('h5').attr('idcauhoi');
              let question = questions.find(x=>x.id == id);
              let answer = question['answer'];
              
              let choice = $(v).find('fieldset input[type="radio"]:checked').attr('class');
              if(choice == answer){  
                fail--;
                score += 1;
                mark ++ ;
              }else{
                  console.log('Câu có id: '+id+' sai');
              }
              $('#question_'+id+' > fieldset > div > label.'+answer).css("background-color", "orange") ;
          });        
         // $('#fail').text('Số câu sai của bạn là : '  + fail + '/'  + total);
          //$('#mark').text('Bạn đã trả lời đúng được :  ' + mark + '/' + total);
          //$('#score').text('Số điểm bạn đạt được : '  + score);
    }
    