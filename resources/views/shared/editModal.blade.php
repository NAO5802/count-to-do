<!-- モーダル -->
<!-- タスク編集 -->
<div class="modal fade" id="editModal_{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title h4" id="exampleModalCenterTitle">Edit Task</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ action('TasksController@update', $task) }}">
        @csrf
        {{ method_field('patch') }}
            <div class="modal-body__kind mb-4">
              <div class="kind-title">
                <label for="kind-form-edit">種類</label>
                <span class="text-danger">*</span>
              </div>

              <select name="kind" class="form-control kind-form-edit">
                @foreach($kinds as $key => $value)
                <option value="{{ $key }}" @if(old('kind', $task->kind) == $key) selected @endif >
                      {{ $value }}
                    </option>
                @endforeach
              </select>
            </div>
            <div class="modal-body__memo mb-4">
              <label for="memo-form-edit">メモ</label>
              <textarea class="form-control memo-form-edit" style="height: 100px;" type="text" name="memo" placeholder="memo"> {{ old('memo', $task->memo) }}</textarea>
            </div>
            <div class="modal-body__btn mx-auto" style="width: 65%;">
              <input class="btn btn-outline-success mr-5" style="width: 120px;" type="submit" value="Update">
              <button class="task-delete btn btn-outline-danger" style="width: 120px;" type="submit" data-id="{{ $task->id}}">Delete Task</button>
            </div>
        </form>
        <!-- タスク削除 フォーム-->
          <form method="POST" action="{{ action('TasksController@destroy', $task) }}" id="task-delete-form_{{ $task->id }}" style="display: none;">
          @csrf
            {{ method_field('delete') }}
          </form>
      </div>
    </div>
  </div>
</div>


