$(function(){
  'use strict';

  // ユーザー削除ボタン
  var userDeleteBtn = $('#user-delete');
  var userDeleteForm = $('#user-delete-form');

  userDeleteBtn.on('click', function(e){
    e.preventDefault();

    var result = window.confirm('アカウントを削除します。\nよろしいですか?');

    if(result) {
      userDeleteForm.submit();
    } else{
      window.alert('キャンセルしました'); 
    }
  })

    // Task削除ボタン
    var taskDeleteBtn = $('#task-delete');
    var taskDeleteForm = $('#task-delete-form');
  
    taskDeleteBtn.on('click', function(e){
      e.preventDefault();

      var result = window.confirm('タスクを削除します。\nよろしいですか?');

      if(result) {
        taskDeleteForm.submit();
      } else{
        window.alert('キャンセルしました'); 
      }
  
    })

  


});