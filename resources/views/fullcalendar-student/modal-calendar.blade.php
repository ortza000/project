<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formEvent">
                <div class="form-group row">
                  <label for="title" class="col-sm-4 col-form-label">หัวข้อกิจกรรม</label>
                  <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" readonly id="title">
                    <input type="hidden" name="id" >
                  </div>
                </div>
                  <div class="form-group row">
                    <label for="start" class="col-sm-4 col-form-label">วันที่เริ่ม</label>
                    <div class="col-sm-8">
                      <input type="text" name="start" class="form-control  data-time" id="start">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="end" class="col-sm-4 col-form-label">วันที่สิ้นสุด</label>
                    <div class="col-sm-8">
                      <input type="text" name="end" class="form-control data-time" id="end">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color" class="col-sm-4 col-form-label">เลือกสี</label>
                    <div class="col-sm-8">
                      <input type="color" name="color" class="form-control" readonly id="color">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="description" id="description" cols="40" readonly rows="4"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
