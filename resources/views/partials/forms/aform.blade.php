@extends('layouts.master_form.master_form')
@section('title','OOO')
@section('content')
    <section class="content-header">
        <h1>
            Advanced Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Select2</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Minimal</label>
                            <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select><span style="width: 100%;" dir="ltr" class="select2 select2-container select2-container--default"><span class="selection"><span aria-labelledby="select2-wuue-container" tabindex="0" class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false"><span title="Alabama" id="select2-wuue-container" class="select2-selection__rendered">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Disabled</label>
                            <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select><span style="width: 100%;" dir="ltr" class="select2 select2-container select2-container--default select2-container--disabled"><span class="selection"><span aria-labelledby="select2-e9wu-container" tabindex="-1" class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false"><span title="Alabama" id="select2-e9wu-container" class="select2-selection__rendered">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Multiple</label>
                            <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select><span style="width: 100%;" dir="ltr" class="select2 select2-container select2-container--default"><span class="selection"><span tabindex="-1" class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input style="width: 518px;" placeholder="Select a State" class="select2-search__field" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" type="search"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Disabled Result</label>
                            <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select><span style="width: 100%;" dir="ltr" class="select2 select2-container select2-container--default"><span class="selection"><span aria-labelledby="select2-w1gs-container" tabindex="0" class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false"><span title="Alabama" id="select2-w1gs-container" class="select2-selection__rendered">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                the plugin.
            </div>
        </div>
        <!-- /.box -->

        <div class="row">
            <div class="col-md-6">

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Input masks</h3>
                    </div>
                    <div class="box-body">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <label>Date masks:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date mm/dd/yyyy -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask="" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>US phone mask:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>Intl US phone mask:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- IP mask -->
                        <div class="form-group">
                            <label>IP mask:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <input class="form-control" data-inputmask="'alias': 'ip'" data-mask="" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Color &amp; Time Picker</h3>
                    </div>
                    <div class="box-body">
                        <!-- Color Picker -->
                        <div class="form-group">
                            <label>Color picker:</label>
                            <input class="form-control my-colorpicker1 colorpicker-element" type="text">
                        </div>
                        <!-- /.form group -->

                        <!-- Color Picker -->
                        <div class="form-group">
                            <label>Color picker with addon:</label>

                            <div class="input-group my-colorpicker2 colorpicker-element">
                                <input class="form-control" type="text">

                                <div class="input-group-addon">
                                    <i></i>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- time Picker -->
                        <div class="bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">02</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">15</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">PM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                            <div class="form-group">
                                <label>Time picker:</label>

                                <div class="input-group">
                                    <input class="form-control timepicker" type="text">

                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Date picker</h3>
                    </div>
                    <div class="box-body">
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control pull-right" id="datepicker" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date range -->
                        <div class="form-group">
                            <label>Date range:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control pull-right" id="reservation" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date and time range -->
                        <div class="form-group">
                            <label>Date and time range:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input class="form-control pull-right" id="reservationtime" type="text">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date and time range -->
                        <div class="form-group">
                            <label>Date range button:</label>

                            <div class="input-group">
                                <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- iCheck -->
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
                    </div>
                    <div class="box-body">
                        <!-- Minimal style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_minimal-blue checked"><input style="position: absolute; opacity: 0;" class="minimal" checked="" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_minimal-blue"><input style="position: absolute; opacity: 0;" class="minimal" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="true" aria-checked="false" style="position: relative;" class="icheckbox_minimal-blue disabled"><input style="position: absolute; opacity: 0;" class="minimal" disabled="" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                Minimal skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_minimal-blue checked"><input style="position: absolute; opacity: 0;" name="r1" class="minimal" checked="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_minimal-blue"><input style="position: absolute; opacity: 0;" name="r1" class="minimal" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="true" aria-checked="false" style="position: relative;" class="iradio_minimal-blue disabled"><input style="position: absolute; opacity: 0;" name="r1" class="minimal" disabled="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                Minimal skin radio
                            </label>
                        </div>

                        <!-- Minimal red style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_minimal-red checked"><input style="position: absolute; opacity: 0;" class="minimal-red" checked="" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_minimal-red"><input style="position: absolute; opacity: 0;" class="minimal-red" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="true" aria-checked="false" style="position: relative;" class="icheckbox_minimal-red disabled"><input style="position: absolute; opacity: 0;" class="minimal-red" disabled="" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                Minimal red skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_minimal-red checked"><input style="position: absolute; opacity: 0;" name="r2" class="minimal-red" checked="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_minimal-red"><input style="position: absolute; opacity: 0;" name="r2" class="minimal-red" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="true" aria-checked="false" style="position: relative;" class="iradio_minimal-red disabled"><input style="position: absolute; opacity: 0;" name="r2" class="minimal-red" disabled="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                Minimal red skin radio
                            </label>
                        </div>

                        <!-- Minimal red style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_flat-green checked"><input style="position: absolute; opacity: 0;" class="flat-red" checked="" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_flat-green"><input style="position: absolute; opacity: 0;" class="flat-red" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="true" aria-checked="false" style="position: relative;" class="icheckbox_flat-green disabled"><input style="position: absolute; opacity: 0;" class="flat-red" disabled="" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                Flat green skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_flat-green checked"><input style="position: absolute; opacity: 0;" name="r3" class="flat-red" checked="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_flat-green"><input style="position: absolute; opacity: 0;" name="r3" class="flat-red" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            </label>
                            <label>
                                <div aria-disabled="true" aria-checked="false" style="position: relative;" class="iradio_flat-green disabled"><input style="position: absolute; opacity: 0;" name="r3" class="flat-red" disabled="" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                Flat green skin radio
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->
        </div>
        <!-- /.row -->

    </section>
@endsection
@section('scripts')
@endsection