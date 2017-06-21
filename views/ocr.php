<div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Select an image</div>
                <div class="panel-body">
                    <input type="file" id="file" name="file" />

                    <div class="img-div"><img id="image-selected" src="#" alt="your image will be displayed here " /></div>

                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Run OCR</div>
                <div class="panel-body">
                    <input type="button" class="btn btn-default" id="go_button" value="Run " />

                    <div id="ocr_results" >  </div>
                    <div id="ocr_status"> </div>
                </div>
            </div>
        </div>