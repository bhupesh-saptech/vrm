<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <!-- left column -->
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Purchase Order Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php include('assets/incld/messages.php'); ?>
                        <form method="POST"  >
                            <?php $order = json_decode(json_encode($order)); ?>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <label for="">Purchase Order No</label>
                                        <input type="text" name="ebeln"   class="form-control bg-primary" value="<?php echo $order->header->ebeln; ?>"  readonly >
                                    </td>
                                    <td>
                                        <label for="">Purchase Order Dt</label>
                                        <input type="text" name="aedat"  class="form-control " value="<?php echo $order->header->aedat; ?>"   readonly >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Supplier</label>
                                        <input type="text" name="lifnr"  class="form-control " value="<?php echo $order->header->lifnr; ?>"   readonly >
                                    </td>
                                    <td>
                                        <label for="">Supplier Name</label>
                                        <input type="text" name="name1"  class="form-control " value="<?php echo $order->header->name1; ?>"   readonly >
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        
                                        <button type="" name="lifnr"  class="form-control " value="<?php echo $order->header->lifnr; ?>"   readonly >
                                    </td>
                                    <td>
                                        
                                        <button type="text" name="name1"  class="form-control " value="<?php echo $order->header->name1; ?>"   readonly >
                                    </td>
                                </tr>
                            </table>                 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

