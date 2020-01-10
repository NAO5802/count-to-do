<!-- モーダル -->
<!-- タスク追加 -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title h4" id="exampleModalCenterTitle">Add Task</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ action('TasksController@store') }}">
          @csrf
            <div class="modal-body__kind mb-4">
              <div class="kind-title">
                <label for="kind-form">種類</label>
                <span class="text-danger">*</span>
              </div>

              <select name="kind" class="form-control" id="kind-form">
                @foreach($kinds as $key => $value)
                    <option value="{{ $key }}" @if(old('kind') == $key) selected @endif >
                      {{ $value }}
                    </option>
                @endforeach
              </select>
            </div>
            <div class="modal-body__memo mb-4">
              <label for="memo-form">メモ</label>
              <textarea class="form-control" style="height: 100px;" id="memo-form" type="text" name="memo" placeholder="memo" value="{{ old('memo') }}"></textarea>
            </div>
            <div class="modal-body__btn mx-auto w-25">
                <input class="btn btn-outline-info w-100" type="submit" value="Add">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
