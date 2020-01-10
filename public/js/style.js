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
    var taskDeleteBtn = $('.task-delete');
  
    taskDeleteBtn.on('click', function(e){
      e.preventDefault();

      var result = window.confirm('タスクを削除します。\nよろしいですか?');
      var deleteId = $(this).data('id');

      if(result) {
        $('#task-delete-form_'+deleteId).submit();
      } else{
        window.alert('キャンセルしました'); 
      }
    })

    // Task完了
    var taskStatusBtn = $('.finish-btn');

      taskStatusBtn.on('click', function(e){
        e.preventDefault();
        var taskId = $(this).attr('data-id')
        $('#status_'+ taskId).submit();
      });

});