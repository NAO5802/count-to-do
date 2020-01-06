$(function(){

  console.log('js imported');

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


});