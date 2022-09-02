<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @if($step == 1)
          <form method="post">
              <input type="text" name="fname">
              <input type="text" name="lname">
              <input type="button" value="Next">
              <input type="button" value="Exit">
        </form>
        @endif

        @if($step == 2)
        <form method="post">
              <input type="text" name="email">
              <input type="button" value="Next">
              <input type="button" value="Back">
        </form>
        @endif
        @if($step == 3)
        <form method="post">
              <input type="text" name="mobile">
              <input type="button" value="Submit">
              <input type="button" value="Back">
        </form>
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


