<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06/08/2018
 * Time: 3:06 AM
 */
?>
<!-- modal medium -->
<div class="modal fade" id="quick-sms" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Quick SMS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="page" value="model">
                    <div class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Time</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="time" value="<?php echo date("Y-m-d H:i:s")?>" placeholder="Text" class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="email-input" class=" form-control-label">Mobile Number</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="text-input" name="mobile" value="<?php echo $mobile;?>" placeholder="23354200001 not +23350000" class="form-control">
                                <small class="help-block form-text">Please enter your email</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Message</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="message"  id="textarea-input"  rows="9" placeholder="Content..." class="form-control"><?php echo $msg?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Select</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" value="send-message" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal medium -->
